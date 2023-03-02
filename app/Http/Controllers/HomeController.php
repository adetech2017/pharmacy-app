<?php

namespace App\Http\Controllers;

use App\Models\DrugCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        $product = Product::inRandomOrder()->limit(8)->get();

        $latest = Product::latest('id')->limit(8)->get();

        return view('index', ['product' => $product, 'latest' => $latest]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function shop()
    {
        $product = Product::orderBy('id','desc')->paginate(9);
        return view('shop', ['product' => $product]);
    }

    public function product_details($slug)
    {
        $single_product = Product::where('slug', $slug)->firstOrFail();
        $random = Product::inRandomOrder()->get();
        return view('product-details', ['product' => $single_product, 'random' => $random]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $res = Product::select("product_name")
                ->where("product_name","LIKE","%{$request->term}%")
                ->get();

        return response()->json($res);
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('product_name');

        // Search in the title and body columns from the posts table
        $products = Product::query()
            ->where('product_name', 'LIKE', "%{$search}%")
            ->paginate(9);

        // Return the search view with the resluts compacted
        return view('search', compact('products'));
    }



    public function cart()
    {
        $category = DrugCategory::get();
        return view('cart');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "product_name" => $product->product_name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('message', 'Product added to cart successfully!');
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('message', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function removeCart(Request $request)
    {
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
