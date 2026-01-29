<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name'=> $this->faker->word(),
            'description'=> $this->faker->sentence(),
            'price'=> $this->faker->randomFloat(2, 1, 1000),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id?? 1,
            'stock'=> $this->faker->numberBetween(0, 100),
            'image'=> $this->faker->imageUrl(),
        ];
        // $table->string('name');
        //     $table->text('description')->nullable();
        //     $table->decimal('price', 8, 2);
        //     $table->foreignId('category_id')->constrained('categories','id')->cascadeOnDelete();
        //     $table->integer('stock')->default(0);
        //     $table->string('image')->nullable();
    }
}
