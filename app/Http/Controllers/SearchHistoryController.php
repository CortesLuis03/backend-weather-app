<?php

namespace App\Http\Controllers;

use App\Models\SearchHistory;
use App\Http\Controllers\Controller;
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
        //
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
            'name' => ['required', 'max:255'],
            'lat' => ['required', 'numeric'],
            'lon' => ['required', 'numeric'],
            'address' => ['required', 'max:255'],
            'description' => ['required']
        ]);

        $history = new SearchHistory([
            'name' => $request->input('name'),
            'lat' => $request->input('lat'),
            'lon' => $request->input('address'),
            'address' => $request->input('address'),
            'description' => $request->input('description')
        ]);

        try {
            $history->save();
        } catch (\Exception $e) {
            return response([
                'errorCode' => $e->errorInfo[1],
                'errorMsg' => $e->errorInfo[2]
            ], 500);
        }


        return response('Insertion successful.', 200);
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

    public function getHistory()
    {
        $history = SearchHistory::get();
        return response()->json($history);
    }
}
