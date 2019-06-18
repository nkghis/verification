<?php

use Illuminate\Database\Seeder;

class StickerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stickers')->insert([
            ['numero' => 'abcde11111', 'lien' =>'http://51.75.252.170:8000/stickers/abcde11111'],
            ['numero' => 'abcde22222', 'lien' =>'http://51.75.252.170:8000/stickers/abcde22222'],
            ['numero' => 'abcde33333', 'lien' =>'http://51.75.252.170:8000/stickers/abcde33333'],
            ['numero' => 'abcde44444', 'lien' =>'http://51.75.252.170:8000/stickers/abcde44444'],
            ['numero' => 'abcde55555', 'lien' =>'http://51.75.252.170:8000/stickers/abcde55555'],
            ['numero' => 'abcde66666', 'lien' =>'http://51.75.252.170:8000/stickers/abcde66666'],
            ['numero' => 'abcde77777', 'lien' =>'http://51.75.252.170:8000/stickers/abcde77777'],
            ['numero' => 'abcde88888', 'lien' =>'http://51.75.252.170:8000/stickers/abcde88888'],
            ['numero' => 'abcde12345', 'lien' =>'http://51.75.252.170:8000/stickers/abcde12345'],
            ['numero' => 'abcde99999', 'lien' =>'http://51.75.252.170:8000/stickers/abcde99999'],

        ]);
    }
}
