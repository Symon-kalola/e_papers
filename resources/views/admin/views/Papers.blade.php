@extends('layouts.admin')
@include('admin.modals.moduleEditModal')
@include('admin.modals.delete')
@section('content')
<div class="container-fluid">
    <div class=" row">
        <div class="col-md-3 d-none bg-body-secondary d-md-block " >
            <div class="list-group mt-1 " style="height:100vh; width:100%">
               <a href="/admin/" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark">Dashboard</a>
                <a href="/admin/papers" class="list-group-item list-group-item-action outline-secondary active list-group-item-dark">Papers</a>
                <a href="/admin/add/paper" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark">Add Papers</a>
                <a href="/admin/request" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark">Raper Requests</a>
            </div>
        </div>
         <div class="col-md-9 bg-white " style="height: 100vh">
          <div class="row">
            @foreach ($papers as $paper)
                
           
            <div class="col-md-4">
                <div class="card mt-2 ">
                    <div class="d-flex ">
                         <img src="/images/pdf.jpg" class="card-img-top" alt="..." style="height: 80px; width:auto">
                        
                         <div class="card-body shadow">
                        <div class="d-flex">
                            <h4 class="card-title">{{ $paper->module }}</h4>
                        </div>
                        <div class="d-flex">
                            <b>Class:</b>
                            <span>{{ $paper->class }}</span>
                        </div>
                           <div class="d-flex">
                            <b>Year:</b>
                            <span>{{ $paper->year }}</span>
                        </div>
                           
                           <div class="d-flex">
                            <b>Semester:</b>
                            <span>{{ $paper->semester }}</span>
                        </div>
                        <div class="d-flex">
                           <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            edit
                          </button>
                           <button type="button" class="btn btn-danger btn-sm ms-2" data-bs-toggle="modal" data-bs-target="#delete">
                            delete
                          </button>
                          <a href="{{ url('/download', $paper->id) }}" class="btn btn-sm btn-success ms-1">down</a>
                            
                            
                        </div>
                    </div>
                    </div>
                   
                    
                </div>
            </div>
            @endforeach
          </div>
        </div>
    </div>

</div>

{{-- modal goes here --}}
<!-- Button trigger modal -->


<!-- Modal -->
<!-- Button trigger modal -->


@endsection