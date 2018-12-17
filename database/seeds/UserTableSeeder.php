<?php

class UserTableSeeder extends Seeder
{

  public function run(){
    DB::table('users')-&gt;delete();
    &nbsp;&nbsp; User::create(array(
      'password' => Hash::make('admin'),
      'email' => 'admin@admin.com',
    ));
  }
}
