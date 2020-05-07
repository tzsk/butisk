<?php

use App\Employee;
use Illuminate\Database\Seeder;

class NovaUserSeeder extends Seeder
{
    public function run()
    {
        $email = 'admin@butisk.com';
        $admin = Employee::query()->firstOrNew(compact('email'));

        $admin->forceFill([
            'name' => 'Admin',
            'password' => '$2y$10$mtb8bMBk129T5qGg9FLpYOkPrQXk273aSQQ7VnGVxG4w/mju3D4t2', // secret
            'email_verified_at' => now(),
        ])->save();
    }
}
