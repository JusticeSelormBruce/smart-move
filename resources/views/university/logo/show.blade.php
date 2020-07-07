<style>
    .img-preview{
        width: auto!important;
        height:auto!important
    }
</style>
<!-- Button trigger modal -->
<button type="button" class="btn btn-dark  btn-sm " data-toggle="modal"
        data-target="#exampleModalLongdelm">
    <span class=" text-capitalize">View Logo</span>
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModalLongdelm" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitledelm"
     aria-hidden="true">
    <div class="modal-dialog " role="document">

      <img src="{{Storage::url($logo->path)}}" alt="">

    </div>
</div>

