<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'sample1',
            'photo_path' => 'まだなし',
            'coment' => 'very goooooooooooooooooooooooooooooooooooooooooooooooooooooooooooood',
        ];
        DB::table('photos')->insert($param);
    }
}
