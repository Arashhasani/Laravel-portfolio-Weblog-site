<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>1,
            'description' => $this->faker->paragraph(4),
            'title' => $this->faker->sentence(10),
            'date' => now(),
            'image' => "/img/post-1-img.jpg",
            'is_published'=>1,
            'views'=>$this->faker->numberBetween(10,40),
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
