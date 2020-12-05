@extends('layouts')



@section('content')
@foreach($reviews as $review)
<div class="card">
    <p>{{ $review->title }}</p>
    <p>{{ $review->author }}</p>
    <p>{{ $review->status }}</p>
    <p>{{ $review->score }}</p>
    <p>{{ $review->summary }}</p>
    <a href="{{ route('reviews.edit', ['review' => $review]) }}">編集する</a>
    <form method="delete" action="{{ route('reviews.destroy', $review->id) }}">
        @csrf
        <button type="submit" class="btn btn-danger">削除する</button>
    </form>
</div>
@endforeach
@endsection
