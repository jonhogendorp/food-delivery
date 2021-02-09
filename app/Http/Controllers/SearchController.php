<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerPostalCodeComplete = request('postalCode'); //Complete PostalCode for view
        
        $customerPostalCodeSnip = substr(request('postalCode'), 0, -4); // get first 2 digits from postalcode for DB query
       

        $postalCodesRestaurants = Search::all('postal_code'); //Grabs all postalcodes from DB in Eloquent Collection
        $subset = $postalCodesRestaurants->map(function ($single) { 
            return collect($single->toArray())// creates collection instead of eloquent collection (??) 
                ->only(['postal_code'])        // grab out of collection
                ->all(); 
                
            });

            $response = $subset->all();  // creates (multidimensional) array with postal codes
            $postalCodes = array_column($response, 'postal_code');// creates (associative) array with postal codes
            
            $postalCodesSnip = array( ); // creates an array to save restaurants
            
            foreach ($postalCodes as $key => $value){
               $postalCodesSnip[] = substr($value,0 ,-2); // removes digits and letter from postalcode for all db hits
            }
            
            $results = array( ); // create array to save restaurants if they match region of customer

            foreach ($postalCodesSnip as $key => $value){
                if ($value === $customerPostalCodeSnip)     // compares postalcodes to region with customer and saves if a match
                $results[] = $value;
            }

            
            return View('searchresults', [
                'results' => $results,
                'customerPostalCodeComplete' => $customerPostalCodeComplete
    
                
                ]);
            
            
    }
   

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search()
    {
       
       
    }



    public function create()
    {
        //
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
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function show(Search $search)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit(Search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(Search $search)
    {
        //
    }
}
