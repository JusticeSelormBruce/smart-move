<style>
    .thumbnail{
        width: 50px!important;
        height:40px!important;
    }
</style>
<div class="row">

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="row">
            <div class="mx-auto"><h3>Trending Logistics Services</h3></div>
        </div>
        <div class=" shadow-sm">
            @foreach ($companies as $item)
            <div class="jumbotron py-0">
                <div class="card">
                    <div class="card-header">
                        <div class="alert alert-success py-1">
                            <div class="row">
                                <div class="mr-auto">
                                    <div class="mr-auto mx-2"><b>Title:</b> <span class="card-text mx-2">({{$item->name}})</span></div>

                                </div>
                                @if ($item->image ==null)
                                <div class="ml-auto mx-2 text-primary"> <img src="" class="thumbnail"  alt="Company Logo"></div>
                                @else
                                <div class="ml-auto mx-2 text-primary"> <img src="{{Storage::url($item->image->path)}}" class="thumbnail " ></div>
                                @endif

                            </div>
                            <div class="row">
                                <div class="mx-auto">
                                    <a href="{{route('company.page',['id'=>$item->id])}}"><span class="text-primary">Visit Page</span></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="row">
            <div class="mx-auto"><h3>Recent Posts</h3></div>
        </div>
        <div class=" shadow-lg">
            @foreach($post as $list)
            <div class="jumbotron py-0">
                <div class="card">
                    <div class="card-header">
                        <div class="alert alert-success py-1">
                            <div class="row">
                                <div class="mr-auto">
                                    <div class="mr-auto mx-2"><b>Title:</b> <span class="card-text mx-2"><u>({{$list->title}})</u></span></div>
                                </div>
                                <div class="ml-auto mx-2 text-primary"> <img src="{{asset('icons/post.png')}}" class="thumbnail " ></div>


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
        </div>
    </div>
</div>
