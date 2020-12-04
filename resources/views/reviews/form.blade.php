@csrf
<div class="form-group">
    <label for="title">書籍名</label>
    <input type="text" id="title" name="title" value="{{ $review->title ?? old('title') }}">
</div>

<div class="form-group">
    <label for="author">著者名</label>
    <input type="text" id="author" name="author" value="{{ $review->author ?? old('author') }}">
</div>

<div class="form-group">
    <input class="form-check-input" type="radio" id="status1" name="status" value="読了">
    <label class="form-check-label" for="status1">読了</label>

    <input class="form-check-input" type="radio" id="status2" name="status" value="読んでる">
    <label class="form-check-label" for="status2">読了</label>

    <input class="form-check-input" type="radio" id="status3" name="status" value="未了">
    <label class="form-check-label" for="status3">未了</label>
</div>

<div class="form-group">
    <label for="score">評価</label>
    <input type="tel" id="score" name="score" value="{{ $review->score ?? old('score') }}">
</div>

<div class="form-group">
    <label for="summary">要約</label>
    <textarea name="summary" id="summary" cols="30" rows="10">{{ $review->summary ?? old('summary') }}</textarea>
</div>
