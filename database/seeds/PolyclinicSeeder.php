<?php

use Illuminate\Database\Seeder;
use App\Models\Polyclinic;

class PolyclinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Polyclinic::insert([
            [
                'polyclinic_name' => 'Umum',
                'location'        => 'Lantai 1'
            ],
            [
                'polyclinic_name' => 'Gigi',
                'location'        => 'Lantai 1'
            ],
            [
                'polyclinic_name' => 'Penyakit Dalam',
                'location'        => 'Lantai 1'
            ],
            [
                'polyclinic_name' => 'Anak',
                'location'        => 'Lantai 1'
            ],
            [
                'polyclinic_name' => 'Kebidanan & Kandungan',
                'location'        => 'Lantai 1'
            ],
            [
                'polyclinic_name' => 'Penyakit Syaraf',
                'location'        => 'Lantai 1'
            ],
            [
                'polyclinic_name' => 'Kulit dan Kelamin',
                'location'        => 'Lantai 1'
            ],
            [
                'polyclinic_name' => 'Mata',
                'location'        => 'Lantai 1'
            ],
            [
                'polyclinic_name' => 'Radiologi',
                'location'        => 'Lantai 1'
            ],
        ]);
    }
}
