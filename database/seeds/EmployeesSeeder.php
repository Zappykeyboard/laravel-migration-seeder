<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 50) -> create();
    }
}
