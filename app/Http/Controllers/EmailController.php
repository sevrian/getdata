<?php

namespace App\Http\Controllers;

use App\EmailModel;
use Illuminate\Http\Request;


class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=EmailModel::all();
        return view('admin.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmailModel  $emailModel
     * @return \Illuminate\Http\Response
     */
    public function show(EmailModel $emailModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmailModel  $emailModel
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailModel $emailModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmailModel  $emailModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmailModel $emailModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmailModel  $emailModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailModel $emailModel)
    {
        //
    }
}
