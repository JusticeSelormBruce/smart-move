<style>
    a{
        text-decoration: none!important
    }
</style>
<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm " data-toggle="modal"
        data-target="#exampleModalLongdeld{{$item->id}}">
    <span class=" text-capitalize text-danger">Delete</span>
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModalLongdeld{{$item->id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitledeld{{$item->id}}"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
 <div class="jumbotron">
    <div class="row">
        <div class="col-6"> <a href="{{route('university.contact.delete',['id'=>$item->id])}}"><span class="h4 text-danger">Yes</span> </a></div>
        <div class="col-6"> <a href="/admin/university-contact-index"><span class="h4 text-dark">No</span></a></div>
    </div>
 </div>


        </div>
    </div>
</div>

