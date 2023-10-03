@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class=" row">
        <div class="col-md-3 d-none bg-body-secondary d-md-block " >
            <div class="list-group mt-1 " style="height:100vh; width:100%">
               <a href="/admin/" class="list-group-item list-group-item-action outline-secondary active list-group-item-dark">Dashboard</a>

              
                <a href="/admin/papers" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark">Papers</a>
                <a href="/admin/add/paper" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark">Add Papers</a>
                <a href="/admin/request" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark">Raper Requests</a>
            </div>
        </div>
         <div class="col-md-9 bg-white " style="height: 100vh">
          <h1> home</h1>
        </div>
    </div>

</div>
@endsection