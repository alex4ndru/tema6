<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use DB;

class SongController extends Controller
{
    public function index(){
        return view('pages.index')->with('songs', $this->getSongs());
    }

    public function show($slurp){
        $song = DB::table('songsDirectory')->where('id', $slurp)->get()[0]; //slurp e din route
        return view('pages.details')->with(['songTitle' => $song->title, 'songLyrics' => $song->lyrics]);
    }

    private function getSongs(){
        return DB::table('songsDirectory')->get();        
    }
    
    public function about(){
        return view('pages.about');        
    }
}
