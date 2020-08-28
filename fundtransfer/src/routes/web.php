  
<?php

// Finances
// Charges Controller
$route = env('PACKAGE_ROUTE', '').'/fund_transfer/';
$controller = 'Increment\Finance\Http\FundTransfer\ChargesController@';
Route::post($route.'create', $controller."addEntry");
Route::post($route.'retrieve_by_id', $controller."retrieveByID");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'retrieve_all', $controller."retrieveAll");
Route::post($route.'summary', $controller."summary");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::post($route.'retrieve_merchant', $controller."retrieveForMerchant");
Route::get($route.'test', $controller."test");

