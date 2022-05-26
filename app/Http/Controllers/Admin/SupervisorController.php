<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // active
    public function Supervisor_active()
    {
        return view("admin.supervisor.active");
    }

    //deactive
    public function Supervisor_deactive()
    {
        return view("admin.supervisor.deactive");
    }

    //total
    public function Supervisor_total()
    {
        return view("admin.supervisor.total");
    }
}
