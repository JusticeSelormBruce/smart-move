
    <div class="form-group">
        <div class="input-group-sm">
            <label for="name">Name</label>
            <input type="text" class="form-control" required name="name" value="{{old("name")}}">
            <div>
           {{$errors->first('name')}}
            </div>
        </div>
        <div class="input-group-sm">
            <label for="url">url</label>
            <input type="text" class="form-control" required name="url" value="{{old("url")}}">
            <div>
           {{$errors->first('url')}}
            </div>
        </div>
        <div class="input-group-sm">
            <label for="description">Description</label>
         <textarea name="description" id="" cols="30" rows="5" class="form-control">

         </textarea>
            <div>
           {{$errors->first('description')}}
            </div>
        </div>
         <select name="user_id" class="form-control input-group-sm" required>
             <option value="">----------------------------------------  Select  University Admin  ----------------------------------------</option>
             @foreach ($all_users as $item)
            <option value="{{$item->id}}">{{$item->name}} <span class="mx-2">({{$item->email}})</span></option>
             @endforeach
         </select>
    </div>



