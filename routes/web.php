<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('auth.login');
});

Route::get('pdf/{name}', function ($name) {
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('pages.operation.pdf.'.$name);
    return $pdf->stream();
})->name('pdf');

Route::get('pdf1', function () {
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('pages.operation.pdf.factura6');
    return $pdf->stream();
})->name('pdf1');

Route::get('factura', function () {
	return view('pages.operation.pdf.factura6');
});
Route::get('factura1', function () {
 	return view('pages.operation.pdf.factura1');
});

Route::get("pdf_order/{id?}/{name?}", "PdfController@invoice")->name("pdf_order");
Route::get("pdf_sorder/{id?}/{name?}", "PdfController@invoice2")->name("pdf_sorder");
Route::get("pdf_invoice/{id?}", "PdfController@invoice3")->name("pdf_invoice");
Route::get("pdf_packing/{id?}", "PdfController@invoice4")->name("pdf_packing");
Route::get("pdf_shipping/{id?}", "PdfController@invoice5")->name("pdf_shipping");
Route::get("pdf_instructions/{id?}", "PdfController@invoice6")->name("pdf_instructions");

Route::get('login', function () {
	return view('auth.login');
}); 

Route::get("lang/{locale}", function ($locale) {
	Session::put("locale", $locale);
	return redirect()->back();
})->name("lang");

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	// password reset
	Route::get('reset', 'UserController@formPasswordReset')->name('passwordReset');
	Route::put('passwordUpdate', 'UserController@passwordUpdate')->name('passwordUpdate');
	// users, roles, presmissions
	Route::resource('user', 'UserController');
	Route::resource('rol', 'RolController');
	Route::resource('permission', 'PermissionController');
	// home
	Route::get('/home', 'HomeController@index')->name('home');
	// modules

	

	/* Currency route */
	Route::resource('currency', 'CurrencyController');
	Route::resource('document', 'DocumentController');
	Route::resource('payments', 'PaymentsController');
	




	Route::get('categories.list', 'CategoriesController@listCategory')->name('categories.list');
	Route::get('getAllCategories', 'CategoriesController@getAllCategories')->name('getAllCategories');


	Route::get('/categories', 'CategoriesController@listCategory');
	Route::post('/categories/add', 'CategoriesController@add');
	Route::post('/categories/edit/{id}', 'CategoriesController@edit');
	Route::get('/categories/remove/{id}', 'CategoriesController@remove');
	Route::get('/categories/view/{id}', 'CategoriesController@view');

	Route::get('/products', 'ProductsController@listProduct');
	Route::post('/products/add', 'ProductsController@add');
	Route::get('/product/edit/{id}', 'ProductsController@editProduct')->where('id', '[0-9]+')->name('product.show');
	Route::post('/products/edit/{id}', 'ProductsController@edit');
	Route::post('/products/save', 'ProductsController@save');
	Route::get('/products/remove/{id}', 'ProductsController@remove')->name('product.delete');
	Route::get('/products/view/{id}', 'ProductsController@view');
	Route::get('/product/view/{id}', 'ProductsController@view');
	Route::post('/products/update/{id}', 'ProductsController@update')->name('product.update');

	
});


Route::get('shipTotals',function(){
    return datatables()
    ->collection(App\OperationShipTotal::all()->where('operation_id',10))
    ->addColumn('btn','pages.operation.shipTotal.partials.actions')
    ->rawColumns(['btn'])
    ->toJson();
});
