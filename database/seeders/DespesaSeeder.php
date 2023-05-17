<?php

namespace Database\Seeders;

use App\Models\Despesa;
use Illuminate\Database\Seeder;

class DespesaSeeder extends Seeder
{
    public function run(): void
    {
        Despesa::factory()->count(10)->create();
    }
}
