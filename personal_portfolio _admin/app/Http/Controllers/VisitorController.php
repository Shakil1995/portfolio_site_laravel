<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;

class VisitorController extends Controller
{
    function VisitorIndex(){

//      $VisitorData = json_decode(VisitorModel::all(),true) ;
//    return view('Visitor',['VisitorData'=> $VisitorData]);

            $visitorData=  json_decode(VisitorModel::orderby('id','desc')->take(500)->get() )  ;
        return view('Visitor',['visitorData'=>$visitorData] );
    }
}
