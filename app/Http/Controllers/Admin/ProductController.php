<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;

class ProductController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Render view management product
     * 
     * @return void
     */
    public function index() {
        return view('products.index');
    } 

    /**
     * Render view create product form
     * 
     * @return void
     */
    public function create() {
        return view('products.create');
    }

    /**
     * Store data product form
     * 
     * @return void
     */
    public function store(StoreProductRequest $request) {
        dd($request->all());
    } 
}
