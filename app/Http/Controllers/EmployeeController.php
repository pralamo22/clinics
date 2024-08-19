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
        // $employees = employee::get()->toQuery()->paginate(10);
        return view("employees.employees", ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['required', 'min:4'],

        ]);

        $employee = new employee;
        $employee->name = $request->input('name');
        $employee->surname = $request->input('surname');
        $employee->dni = $request->input('dni');

        $employee->email = $request->input('email');
        $employee->telf = $request->input('telef');
        $employee->clinica = $request->input('clinica');
        $employee->save();
        session()->flash('status', 'Empleado actualizado !!!');
        // return $request;
        // return redirect()->route('employees. employees');
        return to_route('employees');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $id)
    {
        return view('employees.show', ['employee' => $id]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {

        return view('employees.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $employee)
    {
        $employee = employee::find($employee);
        $employee->name = $request->input('name');
        $employee->surname = $request->input('surname');
        $employee->dni = $request->input('dni');
        $employee->email = $request->input('email');
        $employee->telf = $request->input('telef');
        $employee->clinica = $request->input('clinica');

        $employee->save();
        session()->flash('status', 'employee actualizado !!!');
        // return $request;
        // return redirect()->route('employees. employees');
        return to_route('employees.show', $employee);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return to_route('employees')->with('status', 'Clínica eliminada');
    }
}
