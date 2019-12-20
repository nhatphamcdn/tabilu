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
        // $image = Cloudder::secureShow('products/tmp/phpMF18H7');

        // dd($image);
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
            'hashtag',
            'status',
            'images',
        ]);

        // try {
            $this->product->create($data);
        // } catch(\Exception $e) {
        //     return redirect()->back()->with('fails', $e);
        // }

        return redirect()->back()->with('success', 'Create product successfuly! Good job.');
    } 
}
