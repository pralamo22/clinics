<?php

// namespace App\Models;

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Clinic;
use App\Http\Controllers\Controller;
// use Illuminate\View\View;M

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clinics = Clinic::get()->toQuery()->Paginate(10);
        // $clinics = Clinic::get()->toQuery()->paginate(10);
        return view("clinics.clinics", ['clinics' => $clinics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clinics.create');
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

        $clinic = new Clinic;
        $clinic->name = $request->input('name');
        $clinic->email = $request->input('email');
        $clinic->telf = $request->input('telef');
        $clinic->save();
        session()->flash('status', 'Clinica añadida !!!');
        // return $request;
        // return redirect()->route('clinics. clinics');
        return to_route('clinics');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clinic $id)
    {
        // return Clinic::findOrFail($id);
        // return 'show function';
        return view('clinics.show', ['clinic' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clinic $clinic)
    {
        return view('clinics.edit', ['clinic' => $clinic]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $clinic)
    {
        $clinic = Clinic::find($clinic);
        $clinic->name = $request->input('name');
        $clinic->email = $request->input('email');
        $clinic->telf = $request->input('telef');
        $clinic->save();
        session()->flash('status', 'Clinica actualizada !!!');
        // return $request;
        // return redirect()->route('clinics. clinics');
        return to_route('clinics.show', $clinic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clinic $clinic)
    {
        $clinic->delete();
        return to_route('clinics')->with('status', 'Clínica eliminada');
    }
}
