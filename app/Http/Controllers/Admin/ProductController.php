<?php

namespace App\Http\Controllers\Admin;

use App\Constracts\ProductRepositoryInterface;
use App\Http\Requests\StoreProductRequest;

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
     * Render view management product.
     *
     * @return void
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Render view create product form.
     *
     * @return void
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store data product form.
     *
     * @return void
     */
    public function store(StoreProductRequest $request)
    {
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
        } catch (\Exception $e) {
            return redirect()->back()->with('fails', 'Create product fails! Try again.');
        }

        return redirect()->back()->with('success', 'Create product successfuly! Good job.');
    }
}
