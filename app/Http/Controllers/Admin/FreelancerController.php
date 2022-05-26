<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // active
    public function freelancer_active()
    {
        return view('admin.freelancer.active');
    }

    // deactive
    public function freelancer_deactive()
    {
        return view('admin.freelancer.deactive');
    }

    //total
    public function freelancer_total()
    {
        return view('admin.freelancer.total');
    }
}
