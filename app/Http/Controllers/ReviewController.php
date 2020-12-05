<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Http\Requests\ReviewForm;

class ReviewController extends Controller
{

    public function index()
    {
        $reviews = Review::all()->sortByDesc('created_at');
        return view('reviews.index', ['reviews' => $reviews]);
    }


    public function create()
    {

        return view('reviews.create');
    }

    public function store(ReviewForm $request, Review $review)
    {
        $review->fill($request->all());
        $review->save();
        return redirect('/');
    }

    public function show($id)
    {

    }


    public function edit(Review $review)
    {
        return view('reviews.edit', ['review' => $review]);
    }


    public function update(ReviewForm $request, Review $review)
    {
        $review->fill($request->all());
        $review->save();
        return redirect('/');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect('/');
    }
}
