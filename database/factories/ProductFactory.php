<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name=$this->faker->unique()->words($nb=5,$asText=true);
        $slug=Str::slug($product_name);
        return [
            'name' => $product_name,
            'slug' => $slug,
            'description' => $this->faker->text(500),
            'short_description' => $this->faker->text(200),
            'SKU' => 'DIGI' . $this->faker->unique()->numberBetween(100,500),
            'regular_price' => $this->faker->numberBetween(10,50),
            // 'sale_price' => ,
            'stock_status' =>'instock',
            // 'featured' => ,
            'quantity' => $this->faker->numberBetween(100,200),
            'image' => 'digital_' . $this->faker->unique()->numberBetween(1,21) . '.jpg',
            'category_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
