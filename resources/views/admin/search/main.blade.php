<style>
    .h{
        height: 100vh!important;
    }
    .img-product{
        height:20vh!important;
        width: 13vw!important;
    }
    @media(max-width: 730px){
        .img-product{
                width:100%!important;
                height:30vh!important
        }

    }
</style>
@extends('layouts.app')
@section('content')

<div class="container h">

      <div class="alert alert-successprimary" role="alert">
        <h2>Search Results</h2>

      </div>
      <div class="jumbotron ">
          @if ($result[0] == null)
          <h3>No search Result Found</h3>
          @else
          <div class="row">
            @foreach ($result as $item)

                <div class="card black ">
                    <div class="card-body ">
                        <span class="card-title"> {{ $item->name}}</span>

                     <div class="row ">


                        <span class="small mx-2">    ({{$item->description}} )<span class="ml-2">


                     </div>
                     <div class="row pt-3">

                             <a href="{{route('company.page',['id'=>$item->id])}}" class="small text-primary mx-2">Visit  Main Page</a>
                     </div>
                    </div>

                </div>

            @endforeach
          </div>

          @endif

      </div>

</div>
@endsection
