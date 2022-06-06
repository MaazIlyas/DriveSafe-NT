<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
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
        $storeData = $request->validate([
            'rating' => 'required|string',
            'review' => 'required|string|max:512',
            'instructor_id' => 'required|numeric'
        ]);
        $userID = auth()->user()->id;
        if (!empty($userID)) {

            $review_exists = Review::where(['user_id', $userID, 'instructor_id' => $storeData['instructor_id']])->first();
            if(empty($review_exists)) {
                $review = new Review;
                $review->user_ID = $userID;
                $review->rating = $storeData['rating'];
                $review->review = $storeData['review'];
                $review->instructor_id = $storeData['instructor_id'];
                $review->save();
            } else {
                $review_exists->update(['rating' => $storeData['rating'], 'review' => $storeData['review']]);
            }
            
            return redirect()->back()->with('completed', 'Review has been saved!');
        }
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
