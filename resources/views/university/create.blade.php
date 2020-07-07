<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm " data-toggle="modal"
        data-target="#exampleModalLongdel">
    <span class=" text-capitalize  h5">Add  University</span>
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModalLongdel" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitledel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark card-text" id="exampleModalLongTitledel">
                </h5>

            </div>
            <div class="modal-body" style="font-size: small!important;">
                <div class="card">
                    <form action="/admin/save-university-details"  method="post" class="mx-2 py-2">
                        @csrf
                        @include('university.form')
                        <div class="card-footer">
                          <div class="row">
                              <div class="mx-auto">
                                <button class=" btn btn-primary btn-sm"> <span class="mx-2">Save</span></button>
                              </div>
                          </div>
                        </div>
                    </form>
                </div>

            </div>


        </div>
    </div>
</div>

