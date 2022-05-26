<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [
    App\Http\Controllers\Auth\LoginController::class,
    'adminLogin',
])->name('admin.login');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'admin'])
    ->name('admin.home')
    ->middleware('is_admin');

Route::group(
    ['namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'is_admin'],
    function () {
        //supervisor Route
        Route::group(['prefix' => 'supervisor'], function () {
            Route::get(
                "/active",
                "SupervisorController@Supervisor_active"
            )->name("supervisor.active");
            Route::get(
                "/deactive",
                "SupervisorController@Supervisor_deactive"
            )->name("supervisor.deActive");
            Route::get("/total", "SupervisorController@Supervisor_total")->name(
                "supervisor.total"
            );
        });

        //freelancer Route
        Route::group(['prefix' => 'freelancer'], function () {
            Route::get(
                "/active",
                "FreelancerController@freelancer_active"
            )->name("freelancer.active");
            Route::get(
                "/deactive",
                "FreelancerController@freelancer_deactive"
            )->name("freelancer.deactive");
            Route::get("/total", "FreelancerController@freelancer_total")->name(
                "freelancer.total"
            );
        });

        //money withdraw Route
        Route::group(['prefix' => 'moneywithdraw'], function () {
            Route::get(
                "/supervisor",
                "MoneywithdrawController@supervisor_withdraw"
            )->name("supervisor.moneywithdraw");
            Route::get(
                "/supervisor/reject",
                "MoneywithdrawController@supervisor_withdraw_paid"
            )->name("supervisor.moneywithdraw.paid");
            Route::get(
                "/supervisor/paid",
                "MoneywithdrawController@supervisor_withdraw_Reject"
            )->name("supervisor.moneywithdraw.reject");
        });
    }
);
