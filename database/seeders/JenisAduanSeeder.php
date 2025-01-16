<?php

namespace Database\Seeders;

use App\Models\JenisAduan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisAduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisAduan::create(['code' => 'PF', 'title' => 'Pesanan Fiktif']);
        // JenisAduan::create(['code' => 'PNK', 'title' => 'Penerima tidak dikenal']);
        // JenisAduan::create(['code' => 'PT', 'title' => 'Pesananan Tipuan']);
        // JenisAduan::create(['code' => 'PF', 'title' => 'Pembatalan Fiktif']);
    }
}
