@extends('layouts')



@section('content')
@foreach($reviews as $review)
<div class="card">
    <p>{{ $review->title }}</p>
    <p>{{ $review->author }}</p>
    <p>{{ $review->status }}</p>
    <p>{{ $review->score }}</p>
    <p>{{ $review->summary }}</p>
    <a href="{{ route('reviews.edit', ['review' => $review->id]) }}">編集する</a>
    <form method="post" action="{{ route('reviews.destroy', $review->id) }}">
        @csrf
        @method('delete')
        <input type="submit" value="削除する" onclick='return confirm("削除しますか？")';>
    </form>
</div>
@endforeach
@endsection
