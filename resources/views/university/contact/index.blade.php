@extends('layouts.admin')
@section('render')
<div class="py-5">
    <div class="alert-primary alert">
        <div class="row">
            <div class="ml-auto">
            @include('university.contact.create')
            </div>
        </div>
    </div>
    @include('common.alert')
 <div class="container">

    <div class="jumbotron">
        @if ($uni_contact_details ==  null)
            <div class="row">
                <div class="mx-auto">
                    <h5>No Contact Details Added Yet</h5>
                </div>
            </div>
        @else
              <div class="mx-2">
            <table id="table_id">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($uni_contact_details as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->phone}}</td>
                        <td>
                             <div class="row">

                                   @include('university.contact.edit')  <span class="mx-5">@include('university.contact.delete')</span>
                            </div>
                     </td>
                    </tr>
                    @endforeach
                </tbody>
                    </table>
         </div>
        @endif
      
    </div>
 </div>
</div>
@endsection
