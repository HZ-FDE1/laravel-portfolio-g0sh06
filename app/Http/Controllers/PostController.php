<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public static function index(Request $request)
    {
    $param  = request('id');

    if ($request->is('blog/*')) {
        if ($param === 'posOne' || $param === 'posTwo') {
            return self::show($param);
        } else {
            $exception = new HttpClientException('Such indexed page does not exist');
            report($exception);
            return "Try again"; // This line will now be reached
        }
    }
    }

    public static function show($id)
    {
        return view($id);
    }
}
