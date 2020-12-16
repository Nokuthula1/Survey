<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //count number of people who took survey
        $surveys = Survey::count();
        //calc average age
        $age = Survey::avg('age');
        //calc max age
        $oldest = Survey::max('age');
        //calc min age
        $youngest = Survey::min('age');
        //calc average of people who like eating out,movies,tv and radio
        $eat = Survey::avg('eat');
        $movies = Survey::avg('movies');
        $tv = Survey::avg('tv');
        $radio = Survey::avg('radio');

        //calculate percentage of people who like pizza,pasta and pap
        $pizzaC = Survey::where('food','pizza')
        ->count();
        $pizza = ($pizzaC / $surveys)*100;

        $pastaC = Survey::where('food','pasta')
        ->count();
        $pasta = ($pastaC / $surveys)*100;

        $papC = Survey::where('food','pap and wors')
        ->count();
        $pap = ($papC / $surveys)*100;

        //compact results to be displayed on results view
        return view('results')->with([
            'surveys' => $surveys,
            'age' => $age,
            'oldest' => $oldest,
            'youngest' => $youngest,
            'pizza' => $pizza,
            'pasta' => $pasta,
            'pap' => $pap,
            'eat' => $eat,
            'movies' => $movies,
            'tv' => $tv,
            'radio' => $radio
            ]); 
    }

    public function home()
    {
        //home page display
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //survey form display
        return view('survey');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $survey = new Survey;
        $survey ->name = $request->input('name');
        $survey ->surname=$request->input('surname');
        $survey ->phone=$request->input('phone');
        $survey ->age=$request->input('age');
        $survey ->food=$request->input('food');
        $survey ->eat=$request->input('eat');
        $survey ->movies=$request->input('movies');
        $survey ->tv=$request->input('tv');
        $survey ->radio=$request->input('radio');
        
        $survey->save();

        
        return redirect()->action('SurveyController@home')
        ->with('success','Thank You For Taking Our Survey');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
