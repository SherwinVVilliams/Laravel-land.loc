<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class PageController extends Controller
{
    
    public function execute($name){
    	
    	if(!$name){
    		abort(404);
    	}
    	if($name == 'about')
    		$name = 'about us';
    	if(view()->exists('site.page')){

    		$page = Page::where('name', '=', $name)->first();
    		$data = [
    			'page' => $page
    		];

    		return view('site.page', $data);
    	}
    	abort(404);

    }
}
