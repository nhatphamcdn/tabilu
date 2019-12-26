<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\EditProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Constracts\ProductRepositoryInterface;

class ProductController extends BaseController
{
    /**
     * The product repository implementation.
     *
     * @var ProductRepositoryInterface
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

        // Dependencies automatically resolved by service container...
        $this->product = $product;
    }

    /**
     * Render view management product
     * 
     * @return void
     */
    public function index() {
        $products = $this->product->all();

        return view('products.index')->with([
            'products' => $products
        ]);
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
        $data = $request->only([
            'name',
            'price',
            'sale_price',
            'share_price',
            'content',
            'tags',
            'status',
            'images',
        ]);

        try {
            $this->product->create($data);
        } catch(\Exception $e) {
            return redirect()->back()->with('fails', 'Create product fails! Try again.');
        }

        return redirect()->back()->with('success', 'Created product successfuly! Good job.');
    }

    /**
     * Render view edit product form
     * 
     * @return void
     */
    public function edit($id) {
        $product = $this->product->find($id);
        
        return view('products.edit')->with([
            'product' => $product
        ]);
    }

    /**
     * Update product by id
     * 
     * @param EditProductRequest $request
     * @param $id
     * 
     * @return void
     */
    public function update($id, EditProductRequest $request) {
        $data = $request->only([
            'name',
            'price',
            'sale_price',
            'share_price',
            'content',
            'tags',
            'status',
            'images',
            'edit_images',
        ]);

        // try {
        //     $this->product->create($data);
        // } catch(\Exception $e) {
        //     return redirect()->back()->with('fails', 'Create product fails! Try again.');
        // }

        $this->product->update($data, $id);
        return redirect()->back()->with('success', 'Updated product successfuly! Good job.');
    }

}
