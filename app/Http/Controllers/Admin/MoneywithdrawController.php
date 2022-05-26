<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoneywithdrawController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //supervisor withdraw
    public function supervisor_withdraw()
    {
        return view('admin.moneywithdraw.supervisorwithdraw');
    }

    //supervisor withdraw paid
    public function supervisor_withdraw_paid()
    {
        return view('admin.moneywithdraw.supervisorwithdrawpaid');
    }

    //supervisor withdraw reject
    public function supervisor_withdraw_reject()
    {
        return view('admin.moneywithdraw.supervisorwithdrawreject');
    }
}
