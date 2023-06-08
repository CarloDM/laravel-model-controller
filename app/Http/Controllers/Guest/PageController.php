<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
  public function index(){
    // $movies = Movie::all();

    $movies = Movie::orderBy('vote', 'DESC')->get();
    // dd($movies);

    $movieProva = Movie::find(2); // restituzione diretta oggetto

    $movieProva2 = Movie::where('id', 2)->get(); // pusha mette in un array
    $movieProva3 = Movie::where('id','!=', 2)->get(); // pusha mette in un array
    $movieProva4 = Movie::where('id','!=', 2)->orderBy('title', 'desc')->get(); // pusha mette in un array in ordine
    $movieProva5 = Movie::where('id', 2)->first(); // cosi restituisce l oggento , meglio per slug
    // $movieProva5 = Movie::where('slug', 'Il-Padrino')->first(); // cosi restituisce l oggento , meglio per slug

    return view('home',compact('movies','movieProva'));
  }

  public function movie(){
    // $movieInviato= Movie::find(2);
    // dd($id);
    return view('movie');
  }
  public function search($id){
    $movieInviato= Movie::find($id);
    // dd($movieInviato);
    return view('movie',compact('movieInviato'));
  }

}
