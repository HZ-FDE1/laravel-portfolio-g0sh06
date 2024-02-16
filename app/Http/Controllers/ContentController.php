<?php

namespace App\Http\Controllers;


use App\Models\lain;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function __invoke($id)
    {
        // TODO: Implement __invoke() method.
        return view($id);
    }


}
