
<style>
    .thumbnail{
        width: 50px!important;
        height:40px!important;
    }
</style>
@extends('layouts.app')
@section('content')

<div class="container pt-5">
@include('common.alert')
<div class="card small">

        <div class="card-body">
            <div class="jumbotron">
            <div class="row">
                <div class="ml-auto">
                    @if ($company_details->image ==null)
                    <div class="ml-auto mx-2 text-primary"> <img src="" class="thumbnail"  alt="Company Logo"></div>
                    @else
                    <div class="ml-auto mx-2 text-primary"> <img src="{{Storage::url($company_details->image->path)}}" class="thumbnail " ></div>
                    @endif
                </div>
            </div>
            <h5 class="card-title">{{$company_details->name}}</h5>
           <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="row">
                    <div class="mx-auto"><b>Company Description / Info</b></div>
                </div>
                <div class="pt-2">
                    <p>{{$company_details->description}}</p>
                </div>
                <hr>
                <div class="row">
                    <div class="mx-auto"><h5>Comment Section</h5></div>
                </div>
                <div>
                    @include('comment.index')
                </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12">
                   <div class="row">
                       <div class="mx-auto"><b>Recent Post By  {{$company_details->name}}</b></div>
                   </div>

                   @if ($company_details->user->posts == null)
                    <h1>Sorry, no post yet , check back later</h1>
                   @else
                   @foreach ($company_details->user->posts as $list)
                   <div class="jumbotron py-0">
                    <div class="card">
                        <div class="card-header">
                            <div class="alert alert-success py-1">
                                <div class="row">
                                    <div class="mr-auto">
                                        <div class="mr-auto mx-2"><b>Title:</b> <span class="card-text mx-2 small"><u>({{$list->title}})</u></span></div>
                                    </div>



                                </div>
                                <div class="row">
                                    <div class="mx-auto">
                                        <div class="ml-auto mx-2 text-primary">@include('admin.announcement.show')</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                   @endforeach
                   @endif

               </div>
           </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="mx-auto"><h5>Contact Details</h5></div>
                    </div>
                    <div class="jumbotron py-2">
                        @if ($company_details->contacts == null)
                        <h5>Sorry, No contact Details Provided</h5>
                        @else
                        @foreach ($company_details->contacts as $item)

                            <div class="alert alert-success py-0" role="alert">
                                <div class="row">
                               <div class="mx-auto">
                                   <a href="tel: {{ $item->phone}}" class="text-primary"><b>{{ $item->phone}}</b></a>
                               </div>
                            </div>
                        </div>
                        @endforeach
                        @endif

                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="mx-auto"><h5>Other Details</h5></div>
                    </div>
                       <div class="jumbotron py-2">
                           <div class="row">
                               <div class="mx-auto">
                                   <label for="">Website</label>
                                   <a href="{{$company_details->url}}" class="text-primary">{{$company_details->url}}</a>
                               </div>
                           </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

@endsection
