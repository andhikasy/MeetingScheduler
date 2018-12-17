<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call('UserTableSeeder');
    }
}

class UserTableSeeder extends Seeder{

  public function run(){

    DB::table('users')->insert(array(
      'password' => Hash::make('admin'),
      'email' => 'admin@admin.com',
    ));
  }
}
