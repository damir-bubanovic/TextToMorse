<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\MorseRequest;


class MorseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MorseRequest $request)
    {
        $text = $request->{'text'};
        $text = str_split($text);


        $morse = [];

        foreach ($text as $value) {

            switch ( $value ){
                case "0":
                    array_push($morse, "----- ");
                    break;
                case "1":
                    array_push($morse, ".---- ");
                    break;    
                case "2":
                    array_push($morse, "..--- ");
                    break;
                case "3":
                    array_push($morse, "...-- ");
                    break; 
                case "4":
                    array_push($morse, "....- ");
                    break;
                case "5":
                    array_push($morse, "..... ");
                    break; 
                case "6":
                    array_push($morse, "-.... ");
                    break;
                case "7":
                    array_push($morse, "--... ");
                    break; 
                case "8":
                    array_push($morse, "---.. ");
                    break;
                case "9":
                    array_push($morse, "----. ");
                    break; 
                case 'a':
                    array_push($morse, ".- ");
                    break;
                case 'b':
                    array_push($morse, "-… ");
                    break;
                case 'c':
                    array_push($morse, "-.-. ");
                    break;
                case 'd':
                    array_push($morse, "-.. ");
                    break;
                case 'e':
                    array_push($morse, ". ");
                    break;
                case 'f':
                    array_push($morse, "..-. ");
                    break;
                case 'g':
                    array_push($morse, "--. ");
                    break;
                case 'h':
                    array_push($morse, "…. ");
                    break;
                case 'i':
                    array_push($morse, ".. ");
                    break;
                case 'j':
                    array_push($morse, ".--- ");
                    break;
                case 'k':
                    array_push($morse, "-.- ");
                    break;
                case 'l':
                    array_push($morse, ".-.. ");
                    break;
                case 'm':
                    array_push($morse, "-- ");
                    break;
                case 'n':
                    array_push($morse, "-. ");
                    break;
                case 'o':
                    array_push($morse, "--- ");
                    break;
                case 'p':
                    array_push($morse, ".--. ");
                    break;
                case 'q':
                    array_push($morse, "--.- ");
                    break;  
                case 'r':
                    array_push($morse, ".-. ");
                    break;  
                case 's':
                    array_push($morse, "... ");
                    break;
                case 't':
                    array_push($morse, "- ");
                    break;  
                case 'u':
                    array_push($morse, "..- ");
                    break;  
                case 'v':
                    array_push($morse, "...- ");
                    break;
                case 'w':
                    array_push($morse, ".-- ");
                    break;
                case 'x':
                    array_push($morse, "-..- ");
                    break;
                case 'y':
                    array_push($morse, "-.-- ");
                    break;
                case 'z':
                    array_push($morse, "--.. ");
                    break;
                case ' ':
                    array_push($morse, "    ");
                    break;
            }
        }

        return [$text, $morse];

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
