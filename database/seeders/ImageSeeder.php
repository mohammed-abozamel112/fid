<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::create([
            'name_ar'=>'الرئيسية',
            'name_en'=>'main',
            'path_url'=>'',
            'image' => asset('storage/'.'main.png'),
            'alt_text_ar'=>'saadad',
            'alt_text_en'=>'sadasdasdasd',
            'caption_ar'=>'sadsadasss',
            'caption_en'=>'vcxvcxvnvnmjfd',
            'type'=>'gallery',
        ]);
    }
}
