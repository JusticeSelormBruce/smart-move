
<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm " data-toggle="modal"
        data-target="#exampleModalLongdel{{$item->id}}">
    <span class=" text-capitalize">Edit</span>
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModalLongdel{{$item->id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitledel{{$item->id}}"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <form action="/admin/update-university-contact-details"  method="post" class="mx-2 py-2">
                @csrf
                     <div class="card-body">
                         <input type="hidden" value="{{$item->id}}" name="id">
                         <div class="form-group input-group-sm">
                             <label for="phone">Phone Number:</label>
                             <input type="text" class="form-control" name="phone" required value="{{$item->phone}}">
                         </div>
                     </div>
                <div class="card-footer">
                  <div class="row">
                      <div class="mx-auto">
                        <button class=" btn btn-primary btn-sm"> <span class="mx-2">Update</span></button>
                      </div>
                  </div>
                </div>
            </form>


        </div>
    </div>
</div>

