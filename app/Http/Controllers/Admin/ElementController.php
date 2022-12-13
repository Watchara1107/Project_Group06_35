<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ElementController extends Controller
{
    public function index(){
        return view('admin.element.index');
        }
    public function createform(){
            return view('admin.element.create');
        }
}
