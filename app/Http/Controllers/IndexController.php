<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\People;
use App\Portfolio;
use App\Service;
use DB;
use Mail;

class IndexController extends Controller
{
		// добавляємо параметр request так як у нас внизу сторінки знах форма для відправки данних.
		public function execute(Request $request){ 

			if($request->isMethod('post'))
			{
				$messages = $this->ValidationMessages();

				$this->validate($request, 
				[
					'name' => 'required|max:255',
					'email' => 'required|max:255|email',
					'text' => 'required',
				], $messages);

				
				
				//dump($request);//перевіряємо чи прийшов обьєкт якщо ні значить не пройшли валідацію
			/*	$mail = env('MAIL_EMAIL');
				echo $mail."sssss";
				$data = $request->all();
				//mail
				//die();
				$result = Mail::send('site.email', ['name'=>$data['name'], 'text' => $data['text']], function($message) use ($data){

					$mail = 'TheNetishin@gmail.com';
					//$message->from($data['email'], 'Vadim');
					//$message->to($mail, 'Vadim')->subject('test');

					 });
				//перший аргумент шаблон отправляємого пісьма, другий аргумент для передачі в шаблон параметрів, 3 параметр це колбек функція в якій ми можемо оприділити додаткові настройки
				if($result){
					return redirect()->route('home')->with('status', 'Email is send');// в разі якщо метод send спраює без помилок в сессію запишеться ключ status з повідомленням Email is send
				}*/

			}

			$pages = Page::where('name', '=', 'home')->where('name','=', 'about us', 'or')->get();
			$menu = Page::get(['name', 'alias']);
			$portfolios = Portfolio::all();
			$services = Service::all();
			$peoples = People::all();

			$filters = DB::table('portfolios')->distinct()->pluck('filter');//вибираємо з поля тільки унікальну інформацію
			//dd($filters);

			return view('site.index' , 
			[
				'pages' => $pages,
				'menu' => $menu,
				'portfolios' => $portfolios,
				'services' => $services,
				'peoples' => $peoples,
				'filters' => $filters,
			]);
		}

		public function ValidationMessages(){
			return [
				'required' => 'Поле :attribute обязательно к заполнению',
				'email' => "Поле :attribute должно соответствовать email адресу",
			];
		}
}
