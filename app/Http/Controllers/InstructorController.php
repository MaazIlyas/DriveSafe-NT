<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Schema::hasTable('Instructors'))
        {
            $instructors = Instructor::paginate(4);
            return view('list-instructors', ['instructors' => $instructors, 'search_string' => '']);
        }
        
        return view('list-instructors', [ 'search_string' => '']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search_string = data_get($request, 'searched', '');
        $instructors = Instructor::where(function($query) use($search_string){
            $query->where(DB::raw("CONCAT(first_name, last_name)"), 'like', '%' . str_replace(" ", "", $search_string) . '%');
        })->paginate(4);
        
        return view('index', ['instructors' => $instructors, 'search_string' => $search_string]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'exp_in_years' => 'nullable|numeric',
            'license_no' => 'nullable|string|max:255',
            'contact_num' => 'nullable|string|max:255',
            'car_type' => 'nullable|string|max:64',
            'language' => 'nullable|string|max:128',
            'bio' => 'nullable|string|max:512'
        ]);
        $instructor = Instructor::create($storeData);
        return redirect(route('instructors.index'))->with('success', 'Instructor has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $instructor = Instructor::with('ReviewData')->find($id);
        //dd($instructor);

        $avg_rating = 0;
        $reviews = [];
        if(!empty($instructor)) {
            $reviews = data_get($instructor, 'ReviewData', []);
            //dump($reviews);
            if (!empty($reviews)) {
                foreach($reviews as $review) {
                    //$user_data = data_get($review, 'UserData',[]);
                    //dd($user_data);
                    $current_rating = (int)data_get($review, 'rating', 0);
                    if ($current_rating > 0) {
                        $avg_rating = ($avg_rating + $current_rating);
                    }
                }
                if (count($reviews) > 0) {
                    $avg_rating = round(($avg_rating/count($reviews)));
                }
                
            }
        }
        
        return view('view-instructor', compact('instructor', 'avg_rating', 'reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructor = Instructor::findOrFail($id);
        return view('edit', compact('instructor'));
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
        $updateData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'exp_in_years' => 'nullable|numeric',
            'license_no' => 'nullable|string|max:255',
            'contact_num' => 'nullable|string|max:255',
            'car_type' => 'nullable|string|max:64',
            'language' => 'nullable|string|max:128',
            'bio' => 'nullable|string|max:512'
        ]);
        
        Instructor::whereId($id)->update($updateData);
        return redirect(route('instructors.index'))->with('success', 'Instructor has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        print_r($request->instructor_delete_id);
        $instructor = Instructor::findOrFail($request->instructor_delete_id);

        if($instructor)
        {
            $instructor->ReviewData()->delete();
            $instructor->delete();
            return redirect(route('instructors.index'))->with('success', 'Instructor has been deleted');
        }
        else{
            return redirect(route('instructors.index'))->with('message', 'Instructor has not been deleted');
        }
    }
}
