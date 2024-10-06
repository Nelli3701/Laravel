<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $names = [
        'John',
        'Jane'
    ];
    protected $surnames = [
        'Doe',
        'Smith'
    ];
    protected $emails = [
        'john.doe@example.com',
        'jane.smith@example.com'
    ];

    public function __invoke()
    {
        $employee = new Employee();
        $employee->name = $this->names[rand(0, count($this->names) - 1)];
        $employee->surname = $this->surnames[rand(0, count($this->surnames) - 1)];
        $employee->email = $this->emails[rand(0, count($this->emails) - 1)];
        $employee->save();
    }
}
