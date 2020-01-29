<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        /**
         * STORE
        *{
        *    "departmento":"DEPRO",
        *    "codigo":"4040",
        *    "descricao":"minha descrição"
        *}
        */

        
        $especificacao =[
            'O campo codigo do departamento e departamento não pode ser duplicado'
        ];

        $info = [
            'finalidade'=>'Serviço para cadastro de departamentos',
            $especificacao
        ];

        
        return response($info,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Responsedes
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department();

        $departamento = $request->input('departmento');
        $codigo = $request->input('codigo');
        $descricao = $request->input('descricao');

        $department->departamento = $departamento;
        $department->codigo = $codigo;
        $department->descricao = $descricao;

        $department->save();

        return response(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::find($id);

        return response($department,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $departamento = $request->input('departmento');
        $codigo = $request->input('codigo');
        $descricao = $request->input('descricao');

        $department = Department::find($id);

        $department->departamento = $departamento;
        $department->codigo = $codigo;
        $department->descricao = $descricao;

        $department->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();
        return response(204);
    }
}
