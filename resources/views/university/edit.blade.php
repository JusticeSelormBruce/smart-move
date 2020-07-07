
    
<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm " data-toggle="modal"
        data-target="#exampleModalLongdel{{$item->id}}">
    <span class=" text-capitalize">Edit</span>
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModalLongdel{{$item->id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitledel{{$item->id}}"
     aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
       <div class="jumbotron">
        <div class="modal-content">
            <form action="{{route('admin.update.university.details',['id'=>$item->id])}}"  method="post" class="mx-2 py-2">
                @csrf
                    
    <div class="form-group">
        <div class="input-group-sm">
            <label for="name">Name</label>
            <input type="text" class="form-control" required name="name" value="{{$item->name}}">
            <div>
           {{$errors->first('name')}}
            </div>
        </div>
        <div class="input-group-sm">
            <label for="url">url</label>
            <input type="text" class="form-control" required name="url" value="{{$item->url}}">
            <div>
           {{$errors->first('url')}}
            </div>
        </div>
        <div class="input-group-sm py-2">
            <label for="description">Description</label>
         <textarea name="description" id="" cols="30" rows="10" class="form-control">
            {{$item->description}}
         </textarea>
            <div>
           {{$errors->first('description')}}
            </div>
        </div>
         <select name="user_id" class="form-control py-1" required>
             <option value="">----------------------------------------  Select  University Admin  ----------------------------------------</option>
             @foreach ($all_users as $items)
            <option value="{{$items->id}}" @if($item->user_id == $items->id) selected @else '' @endif>{{$items->name}} <span class="mx-2">({{$items->email}})</span></option>
             @endforeach
         </select>
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
</div>
