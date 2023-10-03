@extends('layouts.admin')
@include('admin.modals.moduleEditModal')
@section('content')
<div class="container-fluid">
    <div class=" row">
        <div class="col-md-3 d-none bg-body-secondary d-md-block " >
            <div class="list-group mt-1 " style="height:100vh; width:100%">
               <a href="/admin/" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark">Dashboard</a>

              
                <a href="/admin/papers" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark">Papers</a>
                <a href="/admin/add/paper" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark">Add Papers</a>
                <a href="/admin/request" class="list-group-item list-group-item-action outline-secondary active list-group-item-dark">Paper Requests</a>
            </div>
        </div>
         <div class="col-md-9 bg-white " style="height: 100vh">
            <div class="row mt-2">
  
@for ($x=0; $x<=5;$x++)
<div class="col-sm-4 mt-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Symon Kalola</h5>
          <div class="d-flex card-text">
                 <b>Module Name:</b>
                 <span>Programing</span>
           </div>
            <div class="d-flex card-text">
                 <b>Class:</b>
                 <span>Bis</span>
           </div>
            <div class="d-flex card-text">
                 <b>Semester:</b>
                 <span>1</span>
           </div>
            <div class="d-flex card-text">
                 <b>Year:</b>
                 <span>5</span>
           </div>
           <div class="d-flex card-text">
                 <b>Requested on:</b>
                 <span class="text-muted">1 jan 2023</span>
           </div>
         
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
              Respond
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li><button type="button" class="btn btn-primary dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                       Add Paper
                </button>
              </li>
              <li><button type="button" class="btn btn-primary dropdown-item" >
                                       Paper Not available
                </button>
              </li>
              
            </ul>
        </div>
       
         
          
        </a>
      </div>
    </div>
  </div>

  
@endfor
  
  
</div>
                                                                      
        </div>
    </div>
</div>
@endsection