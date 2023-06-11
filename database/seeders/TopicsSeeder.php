<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\TopicLang;


class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Topic::factory()
        ->has(TopicLang::factory()->count(2)->sequence(
            ['lang_id' => 1],
            ['lang_id' => 2]
        ))
        ->count(100)->create([
            'created_by' => rand(1,10)
        ]);


    }
}
