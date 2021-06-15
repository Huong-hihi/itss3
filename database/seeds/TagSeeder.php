<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'tag_title' => 'Action',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Adult',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Adventure',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Comedy',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Cooking'
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Drama',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Ecchi',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Harem',
        ]);
        DB::table('tags')->insert([
            'tag_title' => 'Mystery',
        ]);
    }
}
