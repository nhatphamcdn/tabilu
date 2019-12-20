<?php

namespace App\Repositories;
use App\Constracts\ProductRepositoryInterface;
use App\Models\Product;
use Str;
use DB;

class ProductRepository extends Repository implements ProductRepositoryInterface
{
    /**
     * Construct ProductRpository Injection Model Product
     * 
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * @Override ${`create`} method in Repository
     * 
     * @param array $data
     * @param $id
     * 
     * @return Product
     */
    public function create(array $data)
    {
        return DB::transaction(function () use($data) {
            $product = $this->model->create([
                'name' => $data['name'],
                'slug' => Str::slug($data['name']),
                'content' => $data['content'],
                'price' => $data['price'],
                'sale_price' => $data['sale_price'],
                'share_price' => $data['share_price'],
                'status' => $data['status'],
                'post_by' => auth()->user()->id,
            ]);
        
            if (isset($data['images']) && $images = $data['images']) {
                try {
                    foreach ($images as $key => $image) {
                        $destinationPath = 'product-images/';
                        $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
                        $image->move($destinationPath, $imageName);
                        $insert[] = [
                            'path' => $imageName,
                            'product_id' => $product->id,
                        ];
                    }
                } catch(\Exception $e) {
                    throw new \Exception('Upload images fails!');
                }

                $this->model->images()->insert($insert);
            }
        });
    }
}
