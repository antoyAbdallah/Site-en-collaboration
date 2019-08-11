<?php 

namespace App\Http\Controllers;

use Image;

class PagesController  extends Controller {

	public function getIndex()
	{
		return view('welcome'); 
	}
	public function getHome()
	{
		return view('home');
	}

	public function getContact()
	{
		return view('contact'); 
	}
	public function getNews()
	{
		return view('/news'); 
	}
	public function getProfile()
	{
		return view('profile');
	}
	
	public function getEconomie()
	{
		return view('economie'); 
	}
	public function getHistoire()
	{
		return view('histoire'); 
	}
	public function getEducation()
	{
		return view('education'); 
	}
	public function getWork()
	{
		return view('work'); 
	}
	public function getAbout()
	{
		return view('about'); 
	}
	public function getIindex()
	{
		return view('iindex'); 
	}
	public function getTable()
	{
		return view('a_table'); 
	}

	public function getLanding()
	{
		return view('landing'); 
	}

	public function getShimaore()
	{
		
		return view('shimaore'); 
	}

	public function getEnglish()
	{
		return view('english'); 
	}

	public function getFrancais()
	{
		return view('francais'); 
	}

	public function getVoule()
	{
		return view('voule'); 
	}

	public function getRandonnee()
	{
		return view('randonnee'); 
	}

	public function getPlage()
	{
		return view('plage'); 
	}

	public function getCulture()
	{
		return view('culture'); 
	}

	public function getLagon()
	{
		return view('lagon'); 
	}

	public function getTravailler()
	{
		return view('travailler'); 
	}

	public function getNetflix()
	{
		return view('netflix'); 
		$posts = Post::all();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        //$posts = Post::orderBy('title','desc')->get();

        $posts = Post::select('id', 'title')->get();
        $posts = Post::orderBy('category','asc')->paginate(10);
        return view('index', compact('posts'));
	}



}































































 ?>