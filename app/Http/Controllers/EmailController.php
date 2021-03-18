<?php

namespace App\Http\Controllers;

use App\EmailModel;
use Illuminate\Http\Request;
use App\Exports\EmailExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->from_date)) {
                $data = DB::table('email')
                    ->whereBetween('created_at', array($request->from_date, $request->to_date))
                    ->latest();
            } else {
                $data = DB::table('email')
                    ->get();
            }
            return datatables()->of($data)->make(true);
        }
        return view('admin.index');
    }

    public function exportEmail()
    {
        return Excel::download(new EmailExport, 'ExportEmail.xlsx');
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
