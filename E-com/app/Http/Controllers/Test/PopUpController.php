<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PopUpController extends Controller
{
    public function index()
    {
        return view('Admin.test.addpopup');
    }
    public function create(Request $request)
    {
        return 'hello';
    }
}
