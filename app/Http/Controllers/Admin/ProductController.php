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
    public function index(Request $request) {
        if(!$show = $request->show) {
            $products = $this->product->paginate(5);
        } else {
            $products = $this->product->trashedGet();
        }

        return view('products.index')->with([
            'products' => $products,
            'show' => $show,
        ]);
    } 

    /**
     * Restore a product
     * 
     * @param $id
     * 
     * @return void
     */
    public function restore($id) {
        $this->product->restoreId($id);

        return redirect()->route('admin.products')->with('success', 'Restore a product successfuly! Good job.');
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
            $product = $this->product->create($data);
        } catch(\Exception $e) {
            return redirect()->back()->with('fails', 'Create product fails! Try again.');
        }

        return redirect()->route('admin.products.edit', $product->id)->with('success', 'Created product successfuly! Good job.');
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

        try {
            $this->product->update($data, $id);
        } catch(\Exception $e) {
            return redirect()->back()->with('fails', 'Update product fails! Try again.');
        }

        return redirect()->back()->with('success', 'Updated product successfuly! Good job.');
    }

    /**
     * Delete product by id
     * 
     * @param $id
     * 
     * @return void
     */
    public function destroy($id) {
        try {
            $this->product->delete($id);
        } catch(\Exception $e) {
            return redirect()->back()->with('fails', 'Delete product fails! Try again.');
        }

        return redirect()->back()->with('success', 'Delete product successfuly! Good job.');
    }

    /**
     * Force Delete product by id
     * 
     * @param $id
     * 
     * @return void
     */
    public function delete($id) {
        try {
            $this->product->forceDelete($id);
        } catch(\Exception $e) {
            return redirect()->back()->with('fails', 'Delete product fails! Try again.');
        }

        return redirect()->back()->with('success', 'Hard Delete a product successfuly! Good job.');
    }
}
