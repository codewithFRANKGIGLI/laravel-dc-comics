<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsArray = config('comics');

        foreach($comicsArray as $comicItem) {
            $newComic = new Comic();
            $newComic->title = $comicItem['title'];
            $newComic->description = $comicItem['description'];
            $newComic->image = $comicItem['image'];
            $newComic->series = $comicItem['series'];
            $newComic->price = $comicItem['price'];
            $newComic->type = $comicItem['type'];
            $newComic->save();
        }
    }
}
