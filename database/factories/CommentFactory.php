<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\String_;
use Psy\Util\Str;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->email,
            'comment'=>$this->faker->sentence(20),
            'commentable_id'=>$this->faker->numberBetween(1,10),
            'commentable_type'=>get_class(Article::find(1)),
            'is_approved'=>1,


            //
        ];
    }
}
