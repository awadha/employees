<?php
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //
    Route::prefix("dashboard")->name("dashboard.")->group(function () {
        Route::get("login", "Auth\AdminLoginController@showLoginForm")->name("login");
        Route::post("login", "Auth\AdminLoginController@login")->name("login.submit");
        Route::get("/index", "DashboardController@index")->name("index");

        //employee
        Route::get("/employees", "EmployeeController@index")->name("employees.index");
        Route::get("/employees/{employee}", "EmployeeController@show")->name("employee.show");
        Route::get("/get-salary", "EmployeeController@getSalary")->name("employee.getSalary");
        Route::get("/get-overtime", "EmployeeController@getOvertime")->name("employee.getOvertime");
        Route::get("/statistics", "EmployeeController@statistics")->name("employee.statistics");

    });
});

