<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Set the logo to an image of your choice.
    |
    */

    'logo' => '/vendor/firefly/images/logo.png',

    /*
    |--------------------------------------------------------------------------
    | User Model
    |--------------------------------------------------------------------------
    |
    | Set your eloquent model for your users.
    |
    */

    'user' => App\Models\User::class,

    /*
    |--------------------------------------------------------------------------
    | User Name
    |--------------------------------------------------------------------------
    |
    | Set your eloquent property for your user name.
    |
    */

    'name' => 'name',

    /*
    |--------------------------------------------------------------------------
    | Group Privatization
    |--------------------------------------------------------------------------
    |
    | Set the group privatization to "true" if you would like to allow the
    | creation of private groups.
    |
    */

    'private_groups' => false,

    /*
    |--------------------------------------------------------------------------
    | Pagination Limits
    |--------------------------------------------------------------------------
    |
    | Set the maximum number of resources that will be shown per page.
    |
    */

    'pagination' => [
        'view'        => 'firefly::pagination.default',
        'groups'      => 12,
        'discussions' => 20,
        'posts'       => 15,
    ],

    /*
    |--------------------------------------------------------------------------
    | Prefixes
    |--------------------------------------------------------------------------
    |
    | Set the route prefixes for each type of resource.
    |
    */

    'prefix' => [
        'group' => 'g',
        'discussion' => 'd',
        'post' => 'p',
    ],

    /*
    |--------------------------------------------------------------------------
    | API and Web
    |--------------------------------------------------------------------------
    |
    | Include whichever middleware and namespace(s) you want here.
    |
    */

    'api' => [
        'enabled'    => false,
        'prefix'     => 'api/forum',
        'namespace'  => '\Firefly\Http\Controllers\Api',
        'middleware' => ['api', 'auth:api'],
    ],

    'web' => [
        'name'       => 'firefly.',
        'enabled'    => true,
        'prefix'     => 'forum',
        'namespace'  => '\Firefly\Http\Controllers',
        'middleware' => 'web',
    ],

    'features' => [
        'watchers' => true,
        'wysiwyg' => [
            'enabled' => true,
            'theme' => 'snow', // More about themes at https://quilljs.com/docs/themes/
            'toolbar_options' => [ // Docs at https://quilljs.com/docs/modules/toolbar/
                ['bold', 'italic', 'underline', 'strike'],
                [['list' => 'ordered'], ['list'=> 'bullet']],
                ['clean'],
            ],
        ],
        'correct_posts' => true,
        'search' => true,
        'reactions' => [
            'enabled' => true,
            'convert' => true,
        ],
    ],

];
