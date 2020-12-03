@extends('layouts')



@section('content')
    @foreach($reviews as $review)
    <p>{{ $review->title }}</p>
    <p>{{ $review->author }}</p>
    <p>{{ $review->status }}</p>
    <p>{{ $review->score }}</p>
    <p>{{ $review->summary }}</p>
    @endforeach
@endsection
