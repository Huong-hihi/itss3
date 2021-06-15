<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => "名探偵コナン",
            'content' => "名探偵コナン",
            'description' => "名探偵コナン",
            'date_create' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => "ドラえもん",
            'content' => "ドラえもん",
            'description' => "ドラえもん",
            'date_create' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => "Naruto",
            'content' => '・出版社: 集英社    ・発売年: 1999年9月21日－2014年11月10日   ・言語: 日本語      ・年齢: １６歳      ・章番号: 220',
            'description' => "Uzumaki Naruto",
            'date_create' => date('Y-m-d H:i:s'),
        ]);
    }
}
