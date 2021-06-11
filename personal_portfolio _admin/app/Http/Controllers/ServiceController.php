<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;

class ServiceController extends Controller
{
                function ServicesIndex(){

                   return view('Services' );
                        }


            function getServiceDataAll(){
                        $request =json_encode(ServicesModel::all()) ;
                        return $request;
            }
            function ServiceDelete( Request $req){
                $id=$req ->input('id');
              $result=  ServicesModel::where('id','==',$id)->delete;



              if($result==true){
                  return 1;
              }else{
                  return 0;
              }
                return "text";
    }


}
