<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'             => 'Agung Sopian',
            'gender'           => 'Laki-laki',
            'birthplace'       => 'Sumedang',
            'birthdate'        => '2000-01-01',
            'complete_address' => 'Sumedang',
            'religion'         => 'Islam',
            'phone'            => '081234567890',
            'email'            => 'agung@gmail.com',
            'password'         => bcrypt('secret'),
            'role'             => 'doctor'
        ]);

        User::create([
            'name'             => 'Melina Wida Winingsih',
            'gender'           => 'Perempuan',
            'birthplace'       => 'Sumedang',
            'birthdate'        => '2000-01-01',
            'complete_address' => 'Sumedang',
            'religion'         => 'Islam',
            'phone'            => '081234567891',
            'email'            => 'melina@gmail.com',
            'password'         => bcrypt('secret'),
            'role'             => 'nurse'
        ]);

        User::create([
            'name'             => 'Ramdani Surya Manggala',
            'gender'           => 'Laki-laki',
            'birthplace'       => 'Sumedang',
            'birthdate'        => '1999-02-04',
            'complete_address' => 'Sumedang',
            'religion'         => 'Islam',
            'phone'            => '081322185318',
            'email'            => 'ramdanisurya721@gmail.com',
            'password'         => bcrypt('secret'),
            'role'             => 'admin'
        ]);

        User::create([
            'name'             => 'Sugih Sopian',
            'gender'           => 'Laki-laki',
            'birthplace'       => 'Sumedang',
            'birthdate'        => '2000-01-01',
            'complete_address' => 'Sumedang',
            'religion'         => 'Islam',
            'phone'            => '081234567892',
            'email'            => 'sugih@gmail.com',
            'password'         => bcrypt('secret'),
            'role'             => 'staff'
        ]);
    }
}
