<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::created([
            'title'=> 'Categoria de Exemplo',
            'color'=> '#ffff00',
            'user_id'=>1
        ]);
    }
}
