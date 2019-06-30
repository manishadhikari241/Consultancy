<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data['name'] = 'Atit Lama';
        $data['email'] = 'shine@gmail.com';
//        $data['phone'] = '12345678';
        $data['password'] = bcrypt('admin002');
        $data['status'] = 1;
        \App\Model\Admin::create($data);    }
}
