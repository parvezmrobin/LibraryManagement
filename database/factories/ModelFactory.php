<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'image' => $faker->imageUrl(300, 400, 'people'),
        'password' => $password ?: $password = bcrypt('secret'),
        'address' => $faker->address,
        'contact_no' => $faker->phoneNumber,
        'is_approved' => rand(0, 1),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Admin::class, function (Faker\Generator $faker) {
    $users = \App\User::all('id');
    return [
        'id' => $users->random()->id,
    ];
});

$factory->define(App\Author::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'image' => $faker->imageUrl(300, 400, 'people'),
        'email' => $faker->unique()->email,
        'bio' => $faker->text,
        'nationality' => $faker->country,
    ];
});


$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'category' => $faker->word,
    ];
});


$factory->define(App\Publisher::class, function (Faker\Generator $faker) {
    return [
        'publisher' => $faker->company,
        'country' => $faker->country,
    ];
});


$factory->define(App\Book::class, function (Faker\Generator $faker) {
    $authors = \App\Author::all('name');
    $publishers = \App\Publisher::all('id');
    return [
        'author' => $authors->random()->name,
        'publisher_id' => $publishers->random()->id,
        'name' => $faker->sentence,
        'summary' => $faker->text,
        'image' => $faker->imageUrl(800, 600, 'abstract'),
        'language' => $faker->languageCode
    ];
});


$factory->define(App\Review::class, function (Faker\Generator $faker) {
    $books = \App\Book::all('id');
    $users = \App\User::all('id');
    return [
        'book_id' => $books->random()->id,
        'user_id' => $users->random()->id,
        'rating' => rand(1, 5),
        'review' => $faker->text,
    ];
});


$factory->define(App\Issue::class, function (Faker\Generator $faker) {
    $books = \App\Book::all('id');
    $users = \App\User::all('id');

    return [
        'book_id' => $books->random()->id,
        'user_id' => $users->random()->id,
        'return_date' => $faker->date('Y-m-d', 'next month'),
        'is_approved' => rand(0, 1),
        'is_returned' => rand(0, 1),
    ];
});

