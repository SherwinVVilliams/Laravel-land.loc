<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use Form;
use Validator;

class PagesController extends Controller
{
    
    public function execute(){
    	if(view()->exists('admin.pages')){

    		$pages = Page::all();

    		$data = [
    			'title' => 'Pages',
    			'pages' => $pages,
    		];
    		//dd($pages);
    		return view('admin.pages', $data);
    	}
    	abort(404);
    }

    public function add(Request $request){
    	if($request->isMethod('post')){
    		$input = $request->except('_token');

    		$validator = Validator::make($input,
    			[
    				'name' => 'required|max:255',
    				'alias' => 'required|unique:pages|max:255',
    				'text' => 'required',
    			]);

    		if($validator->fails()){
    			return redirect()->route('pagesAdd')->withErrors($validator)->withInput();
    		}
    		if($request->hasFile('images')){
    			$file = $request->file('images');

    			$input['images'] = $file->getClientOriginalName();
    			//echo $input['images']; 
    		//	die();
    			$path = $request->images->move(public_path().'\img', $input['images']);
    			
			}

			$page = new Page;

			$page->fill($input);

			if($page->save()){
				return redirect()->route('pages')->with('status', 'странница добавленна');
			}

    	}

    	if(view()->exists('admin.pages_add')){
    		$data = [
    			'title' => 'Pages Add'
    		];
    		return view('admin.pages_add', $data);
    	}
    }

    public function edit(Request $request,$id){
    	
    	$old = Page::find($id);

    	if($request->isMethod('post')){
    		$input = $request->except('_token');

    		$validator = Validator::make($input,
    			[
    				'name' => 'required|max:255',
    				'alias' => 'required|unique:pages,alias,'.$input['id'].'|max:255',
    				'text' => 'required',
    			]);

    		if($validator->fails()){
    			return redirect()->route('pagesEdit', ['id' => $id])->withErrors($validator);
    		}

    		if($request->hasFile('images')){
    			$file = $request->file('images');

    			$input['images'] = $file->getClientOriginalName();

    			$path = $request->images->move(public_path().'\img', $input['images']);
    		}
    		else{
    			$input['images'] = $input['old_image'];
    		}
    		unset($input['old_image']);
    		$old->fill($input);

    		if($old->update()){
    			return redirect()->route('pages')->with('status', 'Данные обновленны');
    		}
    	}
    	
    	if(!$old)
    	{
    		return abort(404);
    	}

    	if(view()->exists('admin.pages_edit'))
    	{
    		$data = [
    			'title' => 'Page Edit - '.$old->name,
    			'data' => $old,
    		];
    		//dd($data);
    		return view('admin.pages_edit', $data);
    	}
    }

    public function delete($id){

    	if($id <= 0){
    		abort(404);
    	}
    	$page = Page::find($id);
    	if($page == null){
    		abort(404);
    	}
    	if(file_exists(public_path()."/img/".$page->images)){
    		unlink(public_path()."/img/".$page->images);
    	}
    	$page->delete();

    	return redirect()->route('pages');
    }
}
