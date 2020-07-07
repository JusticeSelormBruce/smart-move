@extends('layouts.admin')
@section('render')

    <div class="container-fluid pt-3 w-100">
        <div class="alert alert-info py-1">
            <div class="row">
                <div class="mr-auto mx-5">
                    <a class="text-light" readonly="">Create New Post:</a>
                </div>
                <div class="ml-auto mx-5"><a href="{{route('announcement')}}" class="text-light">Post List</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="mx-auto w-100">
                    <div class="card py-5 shadow-sm">
                        <form action="{{route('announcement.store')}}" method="post" enctype="multipart/form-data"
                              id="create">
                            @csrf
                            @include('admin.announcement.form')
                            <div class="row py-2">
                                <div class="mx-auto">
                                    <button class="btn btn-primary btn-sm" type="submit"><span class="mx-5">

                                                Publish Post
                                        </span>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
