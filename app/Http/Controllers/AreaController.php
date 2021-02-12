<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Axlon\PostalCodeValidation\Rules\PostalCode;

class AreaController extends Controller
{
    use HasFactory;
    
    public function index(Request $request)
    {
        $this->validatePostalCode();


        $customerPostalCode = strtolower($request->input('customerPostalCode'));
    
        $customerRegion = substr($customerPostalCode,0,2);
      
      

        $results = Restaurant::whereHas('areas', function($q) use ($customerRegion) {
            $q->where('area','=', $customerRegion);
            })->get();
        
        return view('searchresults',['customerPostalCode' => $customerPostalCode, 'results' => $results]);
            

            

    }
    protected function validatePostalCode()
        {
            return request()->validate([
                'customerPostalCode' => 'required',
                'customerPostalCode' => [PostalCode::for('NL')]
                       
                ]);
        }
}

