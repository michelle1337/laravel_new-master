<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB; 
class Mihail extends Controller 
{ 
public function base(); 
{ 
	return view('base'); 
} 
public function add(Request $request) 
{ 
		$id = $request->id;
	    $title = $request->title;
	    $description = $request->description;
    	DB::insert('insert into films_skr (id,title,description) values(?,?,?)', [$id,$title,$description]);
    	return view('welcome');
} 
public function snake() {
	return view('snake');
}