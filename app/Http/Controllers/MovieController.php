<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view ('movies.index', compact('movies'));
       
    }

    public function show($id){
        $movie = Movie::findOrFail($id);
        return view ('movies.show', compact('movie'));
    }

    public function add(){

        return view ('movies.add', compact('movie')) ;
    }

    public function create(){
        return view('movies.create');
    }

    public function store(Movie $movie)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required',
        //     'genre' => 'required',
        //     'year' => 'numeric|min:1900|max:'.date('Y'),
        //     'director' => 'max:255',
        //     'storyline' => 'max:1000'


        // ]);


        $this->validate(request(),[
                'title' => 'required',
                'genre' => 'required',
                'year' => 'numeric|min:1900|max:'.date('Y'),
                'director' => 'max:255',
                'storyline' => 'max:1000'     
            ]);

            Movie::create([
                'title' => request('title'),
                'genre' => request('genre'),
                'year' => request('year'),
                'director' => request('director'),
                'storyline' => request('storyline')
            ]);


            return redirect ('/movies');


    }

}
