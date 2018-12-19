<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
      
      Role::create([
          'id' => 1,
          'name'=>'Root',
          'Description'=>'Full Access to the system'
      ]);
      
      Role::create([
        'id' => 2,
        'name'=>'Administrator',
        'Description'=>'Full Access to the system'
    ]);
    
    Role::create([
        'id' => 3,
        'name'=>'Cook',
        'Description'=>'Access in creating order'
    ]);
    
    Role::create([
        'id' => 4,
        'name'=>'Deliver',
        'Description'=>'Access in receiving order'
    ]);
    
    Role::create([
        'id' => 5,
        'name'=>'Customer',
        'Description'=>'Make Order'
    ]);
    }
}
