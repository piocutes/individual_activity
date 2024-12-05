<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = Section::factory(1)->create();

        $sections->each(function ($sections) {
            Player::factory()->create([
                'section_id' => $sections->id, 
            ]);

        });
        
    }
}