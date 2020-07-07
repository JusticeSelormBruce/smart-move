@extends('layouts.admin')
@section('render')
<div class="py-5">
    <div class="alert-primary alert">
        <div class="row">
            <div class="mr-auto">
              @if ($logo != null)
              @include('university.logo.show')
              @else
              @include('university.logo.form')
              @endif
                </div>
            <div class="ml-auto">
            @include('university.create')
            </div>
        </div>
    </div>
    @include('common.alert')
 <div class="mx-2">
    <table id="table_id">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>url</th>
                <th>view</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uni_details as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td><a href="{{$item->url}}">{{$item->url}}</a></td>
                <td>@include('university.show')</td>
                <td>


                                 @include('university.edit')  <span class="mx-2">@include('university.delete')</span>

                           </td>
            </tr>
            @endforeach
        </tbody>
            </table>
 </div>
</div>
@endsection
