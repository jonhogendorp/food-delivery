<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Axlon\PostalCodeValidation\Rules\PostalCode;
use Carbon\Carbon;

class AreaController extends Controller
{



    public function search(Request $request)
    {
        $this->validatePostalCode();


        $customerPostalCode = strtolower($request->input('customerPostalCode'));

        $customerRegion = substr($customerPostalCode,0,2);

        $results = Restaurant::with('times:id,start,stop')->whereHas('areas', function($q) use ($customerRegion) {
            $q->where('area','=', $customerRegion);
        })->get();

        foreach($results as $result){
            if($result->times->start < carbon::now()->toTimeString()){
                $result->times->start = 'Open untill '.$result->times->stop."";
            }
            else{
                $result->times->start = 'Closed untill '.$result->times->start."";
            }

        }

        $results = $results->sortByDesc('times.start');


    return view('searchresults',['customerPostalCode' => $customerPostalCode, 'results' => $results]);




        // $results = Restaurant::whereHas('areas', function($q) use ($customerRegion) {
        //     $q->where('area','=', $customerRegion);
        //     })->get();

        // return view('searchresults',['customerPostalCode' => $customerPostalCode, 'results' => $results]);




    }
    protected function validatePostalCode()
        {
             request()->validate([
                'customerPostalCode' => 'required',
                'customerPostalCode' => [PostalCode::for('NL')]

                ]);
        }
}

