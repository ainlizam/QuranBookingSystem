<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('frontend.home'); next page
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|regex:/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/',
            'session_day' => 'required|in:monday,tuesday,wednesday,thursday,friday',
            'session_time' => 'required|in:9am,5pm,8pm',
            'class_type' => 'required|in:iqra,quran',
            'session_type' => 'required|in:online,in-person',
            'study_level' => 'required|in:beginner,intermediate,advanced',
            'additional_info' => 'nullable|string',
        ]);

        // Create a new booking instance and save to the database
        $booking = new Booking();
        $booking->full_name = $request->input('full_name');
        $booking->phone = $request->input('phone');
        $booking->session_day = $request->input('session_day');
        $booking->session_time = $request->input('session_time');
        $booking->class_type = $request->input('class_type');
        $booking->session_type = $request->input('session_type');
        $booking->study_level = $request->input('study_level');
        $booking->additional_info = $request->input('additional_info', '');
        $booking->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Booking successfully created!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
