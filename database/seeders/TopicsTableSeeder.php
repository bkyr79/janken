<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Topic;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('topics')->insert(
            // [
        // [
        //     'japanese_word' => '大森屋ののり',
        //     'english_word' => 'oomoriyanonori',
        // ],
        // [
        //     'japanese_word' => '赤巻き髪青巻き紙機巻き髪',
        //     'english_word' => 'akamakigamiaomakigamikimakigami',
        // ],
        // [
        //     'japanese_word' => '我が一生に一片の悔いなし',
        //     'english_word' => 'wagaissyouniippennnokuinashi',
        // ],
        // ]
    // );
            Topic::factory()->count(100)->create();
    }
}
