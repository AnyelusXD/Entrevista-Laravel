<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request)
        {
            $query = trim($request->get('search'));

            $employees = Employee::where('name', 'LIKE', '%' .$query. '%')
            ->orderBy('id', 'asc')
            ->paginate(5);
            return view('employee.index', ['employees'=>$employees, 'search'=>$query] );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emp = new Employee();

        $emp->user = $request->input('user');
        $emp->name = $request->input('name');
        $emp->lastname = $request->input('lastname');
        $emp->typeId = $request->input('typeId');
        $emp->numId = $request->input('numId');
        $emp->birthdate = $request->input('birthdate');
        $emp->password = $request->input('password');
        $emp->save();
        return redirect('/employee')->with('flash', 'Elemento guardado con exito');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $emp = Employee::findOrFail($id);

        //campos
        $emp->user = $request->input('user');
        $emp->name = $request->input('name');
        $emp->lastname = $request->input('lastname');
        $emp->typeId = $request->input('typeId');
        $emp->numId = $request->input('numId');
        $emp->birthdate = $request->input('birthdate');
        $emp->password = $request->input('password');

        $emp->update();
        return redirect('/employee')->with('flash', 'Elemento actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = Employee::find($id);
        $emp->delete();
        return redirect('/employee')->with('flash', 'Elemento eliminado con exito');
    }
}
