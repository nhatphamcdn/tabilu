<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Constracts\ProductRepositoryInterface;

define('COUNT_IN_PAGE', 4);

class ProductController extends Controller
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
        // Dependencies automatically resolved by service container...
        $this->product = $product;
    }


    /**
     * Render view management product
     * 
     * @return void
     */
    public function index(Request $request) {
        $products = $this->product->paginate(COUNT_IN_PAGE);

        return new ProductCollection($products);
    }
}
