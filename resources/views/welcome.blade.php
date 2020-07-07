@extends('layouts.app')
@section('content')
@include('common.alert')
<div class="h-75 bg-dark">
    @include('carousel')
</div>
<div class="pt-1 mx-1">
    @include('recent')
</div>

@endsection
