<?php

namespace Database\Seeders;

use App\Models\MasterStudent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        MasterStudent::create([
            'name' => 'sarah aura rozak',
            'nis' => '108328425',
            'rombel' => 'PPLG XI-5',
            'rayon' => 'cicurug 2',
            'instructor_id' => 1
        ]);
        MasterStudent::create([
            'name' => 'Nurma Fisa Alfiana',
            'nis' => '502385032',
            'rombel' => 'PPLG XI-2',
            'rayon' => 'Cisarua 2',
            'instructor_id' => 2
        ]);

        MasterStudent::create([
            'name' => 'Nadya Mulya',
            'nis' => '09328032',
            'rombel' => 'MPLB XI-1',
            'rayon' => 'Tajur 1',
            'instructor_id' => 3,
        ]);
        MasterStudent::create([
            'name' => 'Farha Al afiah',
            'nis' => '93235207',
            'rombel' => 'PMN X-1',
            'rayon' => 'Cibedug 1',
            'instructor_id' => 1,
        ]);
    }
}
