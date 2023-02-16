<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SearchHistory;
use Illuminate\Http\Request;

class SearchHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = SearchHistory::with('city', 'city.country')->get();
        return response()->json($history);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $validatedData = $request->validate([
            'city_id' => ['required', 'numeric'],
            'timestamp' => ['required', 'numeric']
        ]);

        $history = new SearchHistory([
            'city_id' => $request->input('city_id'),
            'timestamp_history' => $request->input('timestamp')
        ]);

        try {
            $history->save();
        } catch (\Exception $e) {
            return response([
                'errorCode' => $e->errorInfo[1],
                'errorMsg' => $e->errorInfo[2]
            ], 500);
        }


        return response(['msg'=> 'Insertion successful.'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SearchHistory  $searchHistory
     * @return \Illuminate\Http\Response
     */
    public function show(SearchHistory $searchHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SearchHistory  $searchHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(SearchHistory $searchHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SearchHistory  $searchHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SearchHistory $searchHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SearchHistory  $searchHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SearchHistory $searchHistory)
    {
        //
    }
}
