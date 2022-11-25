<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Validator;

class CountriesController extends Controller
{
    public function index(){
        return view('countries.countries-list');
    }

    public function addCountry(Request $request){
         $validator = Validator::make($request->all(),[
             'country_name'=>'required|unique:countries',
         ]);

         if(!$validator->passes()){
              return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
         }else{
             $country = new Country();
             $country->country_name = $request->country_name;
             $query = $country->save();

             if(!$query){
                 return response()->json(['code'=>0,'msg'=>'Something went wrong']);
             }else{
                 return response()->json(['code'=>1,'msg'=>'New Country has been successfully saved']);
             }
         }
    }

    public function getCountriesList(){
          $countries = Country::all();
          return datatables($countries)->make(true);
    }
}
