<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence(),
        'content'=> $faker->realtext(200),
        'featured_image'=> $faker->imageurl(750,300,'cats',true)
    ];
});
