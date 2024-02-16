<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public static function index()
    {
        $param  = request('id');
//        if(is_numeric($param)){
//            return $param;
//        }else{
//            return 'false';
//        }
        if($param === 'posOne' || $param === 'posTwo') {
            self::show($param);
        }else {
            return "Try again";
            $exception = new HttpClientException('Such indexed page does not exist');
            report($exception);
        }
    }

    public static function show($id)
    {
        return view($id);
    }
}
