@include('errors')
<form action="{{ route('reviews.update', ['review' => $review->id]) }}" method="POST">
@method('PATCH')
@include('reviews.form')
<button type="submit" class="btn blue-gradient btn-block">更新する</button>
</form>
