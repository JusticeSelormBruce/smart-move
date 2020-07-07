<style>
    .icon{
        width:15px;
        height:15px;
    }
</style>
<?php
$value = random_int(1000000000, 1111111111);
?>
<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$value}}">
 <img src="{{asset('icons/delete.png')}}" alt="" class="icon">
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong{{$value}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$value}}" aria-hidden="true">
      <div class="modal-dialog modal-sm " role="document">
          <div class="modal-content ">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle{{$value}}"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body w-100">
                  <div class="jumbotron w-100">
                      <div class="w-100">
                        <div class="row">
                            <div class="mx-auto"> <a href="{{route('comment.delete',['id'=>$item->id])}}"><span class="h4 text-danger">Yes</span> </a></div>
                        </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>

