@extends('layouts.admin')

@include('admin.modals.paperResponse')
@section('content')
<div class="container-fluid">
    <div class=" row">
        <div class="col-md-3 d-none bg-secondary d-md-block " >
             <div class="list-group mt-1  " style="height:100vh; width:100%">
               <a href="/admin/" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark" ><h6  style="margin-left: -10px;"><b>Dashboard</b></h6></a>
                <a href="/admin/papers" class="list-group-item list-group-item-action outline-secondary list-group-item-dark   fa fa-clipboard-check">  Papers</a>
                <a href="/admin/add/paper" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark fa fa-file-upload"> Add Papers</a>
                <a href="/admin/request" class="list-group-item list-group-item-action outline-secondary active text-white list-group-item-dark fa fa-envelope-square "> Paper Requests</a>
            </div>
        </div>
         <div class="col-md-9 bg-white " style="height: 100vh">
            <div class="row mt-2">
  
@foreach ($requests as $request)
  @if (!$request->document && !$request->status) 
<div class="col-sm-4 mt-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $request->user->name }}</h5>
          <div class="d-flex card-text">
                 <b>Module Name: </b>
                 <span>{{ $request->module }}</span>
           </div>
            <div class="d-flex card-text">
                 <b>Class: </b>
                 <span>{{ $request->class }}</span>
           </div>
            <div class="d-flex card-text">
                 <b>Semester: </b>
                 <span>{{ $request->semester }}</span>
           </div>
            <div class="d-flex card-text">
                 <b>Year:</b>
                 <span>{{ $request->year }}</span>
           </div>
           <div class="d-flex card-text">
                 <b>Requested on: </b>
                 <span class="text-muted">{{ $request->created_at }}</span>
           </div>
         
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
              Respond
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li><button onclick="setEdit(this)" data-id="{{ $request->id }}" type="submit" class="btn btn-primary dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                       Add Paper
                </button>
              </li>
              <li><a href="{{ route('statusUpdate', $request->id) }}" type="button" class="btn btn-primary dropdown-item" >
                                       Paper Not available
              </a>
              </li>
              
            </ul>
        </div>
       
         
          
        </a>
      </div>
    </div>
  </div>
    
  @endif


  
@endforeach 
  
  
</div>
                                                                      
        </div>
    </div>
</div>
<script>
  function setEdit(btn){
      $('#id').val($(btn).attr('data-id'));

  }
  </script>
@endsection