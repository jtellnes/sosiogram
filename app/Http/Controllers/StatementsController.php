<?php

namespace Sosiogram\Http\Controllers;

use Illuminate\Http\Request;

use Sosiogram\Http\Requests;
use Sosiogram\Http\Controllers\Controller;
use Sosiogram\Statement;

class StatementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Statement $statement
     * @return Response
     */
    public function create(Statement $statement)
    {
        return view("statements.create", compact($statement));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Statement $statement
     * @param Request $request
     * @return Response
     */
    public function store(Statement $statement, Request $request)
    {
        $statement->fill($request->all())->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
