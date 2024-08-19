<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::get()->toQuery()->Paginate(10);
        // $clinics = Clinic::get()->toQuery()->paginate(10);
        return view("employees.employees", ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "employee create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "employee store";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "employee show";
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "employee edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
