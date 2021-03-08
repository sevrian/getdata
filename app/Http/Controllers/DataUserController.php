<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmailModel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;
use App\Http\Traits\ExtendsTrait;
use Exception;

class DataUserController extends Controller
{
    use ExtendsTrait;
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
    // public function messages()
    // {
    //     return [
    //         'no_tlp.required' => 'A message is required',
    //     ];
    // }
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required|max:255',
                'email' => 'required|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i',
                'mobile_number' => 'required|min:9|max:15'
            ]
        );
        // $customMessages = [
        //     'mobile_number.required' => 'The :attribute field can not be blank.'
        // ];

        // $this->validate($request, $customMessages);

        try {
            $this->cekCalendar();
            if (!$this->cekEmail($request->input('email'))) {
                $data_insert = [
                    'nama' => $request->input('nama'),
                    'email' => $request->input('email'),
                    'no_tlp' => $request->input('mobile_number'),
                ];
                $insert = EmailModel::create($data_insert);
            }
            return redirect::to('https://www.grandmercure.com/our-hotels/');
        } catch (Exception $e) {
            $respon = [
                'status' => 400,
                'info' => $e->getMessage(),
            ];
            return response()->json($respon, $respon['status']);
        }
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
