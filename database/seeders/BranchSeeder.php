<?php

namespace Database\Seeders;
use App\Models\Branch;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Branch::create([
            'admin_id' => '1',
            'email' => 'branch1@gmail.com',
            'password' => Hash::make('password'),
            'branch_name' => 'branch_1',
            'branch_address' => 'Pattoki'
        ]);
    }
}
