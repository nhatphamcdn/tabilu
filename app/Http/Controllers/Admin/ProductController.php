<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Constracts\ProductRepositoryInterface;

class ProductController extends BaseController
{
    /**
     * @var $model
     */
    private $product;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductRepositoryInterface $product)
    {
        parent::__construct();

        $this->product = $product;
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
        $this->product->create($request->all());
    } 
}
