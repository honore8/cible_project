<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'sponsor']);
        Role::create(['name' => 'prestatairre']);
        Role::create(['name' => 'extra']);
        Role::create(['name' => 'investisseur']);
        Role::create(['name' => 'organisateur']);
        Role::create(['name' => 'agence']);
    }
}
