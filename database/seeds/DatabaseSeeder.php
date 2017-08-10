<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(\App\User::class, 10)->create();
        factory(\App\Admin::class, 2)->create();
        factory(\App\Category::class, 10)->create();
        factory(\App\Author::class, 10)->create();
        factory(\App\Publisher::class, 10)->create();
        factory(\App\Book::class, 100)->create();
        $books = \App\Book::all('id');
        $categories = \App\Category::all('id');
        foreach ($books as $book) {
            foreach ($categories->random(3) as $category) {
                \DB::table('book_category')->insert([
                    'book_id' => $book->id,
                    'category_id' => $category->id
                ]);
            }
        }

        factory(\App\Issue::class, 1000)->create();
        factory(\App\Review::class, 500)->create();
    }
}
