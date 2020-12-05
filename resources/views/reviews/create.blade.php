@include('errors')
<form action="{{ route('reviews.store') }}" method="POST">
@include('reviews.form')
<button type="submit" class="btn blue-gradient btn-block">投稿する</button>
</form>
