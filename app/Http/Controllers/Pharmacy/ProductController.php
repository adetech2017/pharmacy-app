<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use App\Imports\ProductsImport;
use App\Models\DrugCategory;
use App\Models\Product;
use App\Models\ProductImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function product()
    {
        $pharmacy_id = Auth::guard('pharmacy')->user()->id;

        $product = Product::where('pharmacy_id', $pharmacy_id)->get();

        return view('pharmacy.products.products', ['product' => $product]);
    }


    public function new_product()
    {
        $category = DrugCategory::get();

        return view('pharmacy.products.add-product',['category' => $category]);
    }

    public function add_product(Request $request)
    {

        $request->validate( [
            'pharmacy_id' => 'required|integer',
            'product_name' => 'required|string|between:2,100',
            'quantity' => 'required',
            'batch_number' => 'required',
            'category_id' => 'required|integer',
            'price' => 'required',
            'mrp' => 'required',
            'expiry_date' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // $product = new Product();
        // $product->pharmacy_id = $request->input('pharmacy_id');
        // $product->product_name = $request->input('product_name');
        // $product->quantity = $request->input('quantity');
        // $product->batch_number = $request->input('batch_number');
        // $product->category_id = $request->input('category_id');
        // $product->price = $request->input('price');
        // $product->mrp = $request->input('mrp');
        // $product->expiry_date = $request->input('expiry_date');
        // $product->description = $request->input('description');
        // $product->image = $request->file('image')->store('public/images');
        $input = $request->all();
        $input['slug'] = Str::slug($request->product_name, '-');

        if($image = $request->file('image'))
        {
            $destinationPath = 'products/';
            $productImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $input['image'] = "$productImage";
        }

        $product = Product::create($input);

        if ($product) {
            //return redirect()->intended('/blog');
            return back()->with('message', 'Product added successfully');
        }
        return back()->with('error', 'Error adding product');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //Product::where('slug', $product)->firstOrFail();
        //$product = Product::where('slug', $slug)->firstOrFail();
        $category = DrugCategory::all();

        return view('pharmacy.products.edit-product',compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //dd($request->all());
        $request->validate([
            'product_name' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $product->update($input);

        return redirect()->route('all.medicines')
                        ->with('message','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success','Product deleted successfully');
    }


    public function import_product(Request $request)
    {
        Excel::import(new ProductsImport, request()->file('file'));
        return redirect()->back()->with('success','Data Imported Successfully');
    }

    public function productsImport()
    {
        $status = DB::table('product_status');
        $pharmacy_id = Auth::guard('pharmacy')->user()->id;

        $product = ProductImport::where('pharmacy_id', $pharmacy_id)->get();

        $product = DB::table('product_imports')
            ->where('pharmacy_id', $pharmacy_id)
            ->join('product_status', 'product_imports.status_id', '=', 'product_status.id')
            ->get();


        return view('pharmacy.products.product-import', ['product' => $product]);
    }

    public function editImport($slug)
    {
        $status = DB::table('product_status')->get();
        $category = DrugCategory::all();

        $product = ProductImport::select('product_imports.*', 'product_status.status')
        ->where('product_imports.slug', $slug)
        ->join('product_status', 'product_imports.status_id', '=', 'product_status.id')
        ->first();

        //dd($category);

        return view('pharmacy.products.edit-importProduct',
            ['status' =>$status, 'product' =>$product, 'category' =>$category]);
    }


    public function updateImportProduct(Request $request)
    {
        $request->validate( [
            'pharmacy_id' => 'required|integer',
            'product_name' => 'required|string|between:2,100',
            'quantity' => 'required',
            'batch_number' => 'required',
            'category_id' => 'required|integer',
            'price' => 'required',
            'mrp' => 'required',
            'expiry_date' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['slug'] = Str::slug($request->product_name, '-');



        if($image = $request->file('image'))
        {
            $destinationPath = 'products/';
            $productImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $input['image'] = "$productImage";
        }

        if($request->status_id == '1')
        {
            $product = Product::create($input);

            if($product)
            {
                ProductImport::find($request->id)->delete();

                return redirect()->route('all.medicines')
                            ->with('message','Product updated successfully');
            }
        }

        return back()->with('error', 'Error adding product');
    }

    /**
     * demo product import file download
     */
    public function import_sample()
    {
        $filePath = public_path("sample/hep-b-test-demo.csv");

        $headers = ['Content-Type: application/csv'];

        $fileName = 'product_sample_data.csv';


        return response()->download($filePath, $fileName, $headers);
    }
}
