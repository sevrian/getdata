<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmailModel;
use Illuminate\Support\Facades\Redirect;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
    public function cekEmail($email)
    {
        $cek_email = EmailModel::where('email', $email)->get();
        if ($cek_email->count() != 0) {
            return true;
        } else {
            return false;
        }
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i',
            'no_tlp' => 'required|max:15|min:9',
        ]);

        if (!$this->cekEmail($request->input('email'))) {
            $insert = EmailModel::create($request->all());
        }
        $email=$request->input('email');
        return redirect::to('https://www.grandmercure.com/our-hotels/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
