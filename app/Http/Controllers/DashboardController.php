<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Daftar dashboard',
        ];
        // $breadcrumb = 'Daftar Dashboard';
        return view ('dashboard',['breadcrumb' => $breadcrumb]);
    }
}
