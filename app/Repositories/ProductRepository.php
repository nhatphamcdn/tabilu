<?php

namespace App\Repositories;
use App\Constracts\ProductRepositoryInterface;
use App\Models\Product;
use App\Models\ProductImage;
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
            // Store data product to Database.
            try {
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
            } catch(\Exception $e) {
                throw new \Exception('Save product fails!');
            }
        
            // Check data images are available
            if (isset($data['images']) && $images = $data['images']) {
                //Storage images to folder.
                try {
                    foreach ($images as $key => $image) {
                        $destinationPath = 'product-images/';
                        $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
                        $image->move($destinationPath, $imageName);
                        
                        // Store image to database
                        try {
                            $product_image = new ProductImage;
                            $product_image->path = $imageName;
                            $product->images()->save($product_image);
                        } catch(\Exception $e) {
                            throw new \Exception('Save images fails!');
                        }
                    }
                } catch(\Exception $e) {
                    throw new \Exception('Upload images fails!');
                }
            }

            // Check data tags are available
            if(isset($data['tags']) && $hashtags = $data['tags']) {
                // Sync hashtag to database
                try {
                    $product->tags()->sync($hashtags);
                } catch(\Exception $e) {
                    throw new \Exception('Sync hashtags fails! Try again.');
                }
            }
        });
    }
}
