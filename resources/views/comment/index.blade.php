@if (Auth::check())


<form action="/comments" method="POST">
    @csrf
    <input type="hidden" name="university_id" value="{{$company_details->id}}">
    <label for=""> New Comment </label>
<textarea name="comment" id="" cols="30" rows="3" class="form-control" required></textarea>
<div class="row pt-3">
    <div class="mx-auto">
        <button  type="submit" class="btn btn-primary btn-sm"> post</button>
    </div>
</div>

</form>
@endif
<br>
<label for="">Past Comments</label>
<br>
@foreach ($comment as $item)

    <ul>
      <b class="text-success"> {{ $item->user->name}}</b>
       @if ($item->user->id == Auth::id())
      <span>@include('comment.edit')</span><span>@include('comment.delete')</span>
      @endif
      <br>
      <i> {{ $item->comment}}</i>
    </ul>


@endforeach


