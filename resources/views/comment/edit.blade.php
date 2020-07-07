<style>
    .icon{
        width:15px;
        height:15px;
    }
</style>
<?php
$value = random_int(1111111111,9999999999);
?>
<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$value}}">
 <img src="{{asset('icons/edit.png')}}" alt="" class="icon">
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong{{$value}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$value}}" aria-hidden="true">
      <div class="modal-dialog " role="document">
          <div class="modal-content modal-lg">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle{{$value}}"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body w-100">
                  <div class="jumbotron w-100">
                      <div class="w-100">
                           <form action="/update-comment" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id}}" name="id">
                            <textarea name="comment" id="" cols="30" rows="5"  class="form-control" required>{{ $item->comment}}</textarea>

                            <div class="row pt-2">
                                <div class="mx-auto"><button type="submit" class="btn btn-primary btn-sm">Update</button></div>
                            </div></form>

                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>

