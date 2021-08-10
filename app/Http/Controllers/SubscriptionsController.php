<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        // Toggle subscriptions
        return auth()->user()->subscriptions()->toggle($course);
    }
}
