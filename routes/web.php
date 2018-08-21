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
//закоментували middleware бо не виводяться помилки так як всі маршрути по дефолту обробляються групою посрєдніків web а привязуючи його ще раз ми просто очищуємо сессію підключення якого знаходиться в app\Providers\RouteServiceProvider метод mapWebRoutes()
Route::group([/*'middleware' => 'web'*/], function(){
	Route::match(['get','post'], '/' , ['uses' => 'IndexController@execute', 'as' => 'home']);// - створюємо маршрути для опрацювання get i post запросів тому що на данній сторінці представленна форма.
	Route::get('/page/{alias}', ['uses'=>'PageController@execute', 'as' => 'page']);

	Route::auth();
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){

	//domain/admin...
	Route::get('/', function(){

		if(view()->exists('admin.index')){
			$data = ['title' => 'Панель Адміна'];

			return view('admin.index', $data);
		}

	});//главна сторінка панелі адміна

	//domain/admin/pages
	Route::group(['prefix' => 'pages'], function(){
		Route::get('/', ['uses' => 'PagesController@execute', 'as' => 'pages']);//список добавленних сторінок в табличку pages
		Route::match(['get', 'post'], '/add', ['uses' => 'PagesController@add' , 'as' => 'pagesAdd']);//маршрут форми обработки данних
		Route::match(['get', 'post'] ,'/edit/{id}', ['uses' => 'PagesController@edit', 'as' => 'pagesEdit']);// для редагування і видалення сторінок
		Route::get('/delete/{id}', ['uses' => 'PagesController@delete', 'as' => 'pagesDelete']);
	});// маршут для маніпуляції елементами майбутнього проекту

	Route::group(['prefix' => 'portfolios'], function(){

		Route::get('/', ['uses' => 'PortfoliosController@execute', 'as' => 'portfolios']);

		Route::match(['get', 'post'], '/add', ['uses' => 'PortfoliosController@add' , 'as' => 'portfoliosAdd']);

		Route::match(['get', 'post'] ,'/edit/{id}', ['uses' => 'PortfoliosController@edit', 'as' => 'portfoliosEdit']);
	});

	Route::group(['prefix' => 'services'], function(){

		Route::get('/', ['uses' => 'ServicesController@execute', 'as' => 'services']);

		Route::match(['get', 'post'], '/add', ['uses' => 'ServicesController@add' , 'as' => 'servicesAdd']);

		Route::match(['get', 'post', 'delete'] ,'/edit/{id}', ['uses' => 'ServicesController@edit', 'as' => 'servicesEdit']);

	});


});// - маршрут для закритого відділу



/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
