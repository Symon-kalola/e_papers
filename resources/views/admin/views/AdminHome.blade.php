@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class=" row">
        <div class="col-md-3 d-none bg-secondary d-md-block " >
            <div class="list-group mt-1  " style="height:100vh; width:100%">
               <a href="/admin/" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark active text-white" ><h6  style="margin-left: -10px;"><b>Dashboard</b></h6></a>
                <a href="/admin/papers" class="list-group-item list-group-item-action outline-secondary list-group-item-dark   fa fa-clipboard-check">  Papers</a>
                <a href="/admin/add/paper" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark fa fa-file-upload"> Add Papers</a>
                <a href="/admin/request" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark fa fa-envelope-square "> Paper Requests</a>
            </div>
        </div>
         <div class="col-md-9 bg-white " style="height: 100vh">
          
            <div class="container-fluid  shadow-lg border-bottom pt-2 h-100 pt-4">
                 <div class="row g-3 ">
                    <div class="col-md-4">
                    <div class="card py-4 shadow-lg bg-success">
                        <div class="text-center text-light h1  fa fa-file" style="font-size: 60px"></div>
                        <div class="text-center text-light h4">Total Papers</div>
                        <div class="text-center text-light h4">8</div>
                    </div>
                    </div>

                    <div class="col-md-4 ">
                    <div class="card shadow-lg py-4 bg-warning">
                        <div class="text-center text-light h1  fa fa-file-import" style="font-size: 60px"></div>
                        <div class="text-center text-light h4">Total Requests</div>
                        <div class="text-center text-light h4">5</div>
                    </div>
                    </div>

                    <div class="col-md-4 ">
                    <div class="card shadow-lg py-4 bg-primary">
                        <div class="text-center text-ligt h1 text-white fa fa-user" style="font-size: 60px"></div>
                        <div class="text-center text-light h4">Total Users</div>
                        <div class="text-center text-light h4">20</div>
                    </div>
                 </div>

                  <div class="row g-3 ">
                    <div class="col-md-4">
                    <div class="card py-4 shadow-lg bg-danger">
                        <div class="text-center text-light h1  fa fa-envelope" style="font-size: 60px"></div>
                        <div class="text-center text-light h4">Un Responded Requests</div>
                        <div class="text-center text-light h4">8</div>
                    </div>
                    </div>

                    <div class="col-md-4 ">
                    <div class="card shadow-lg py-4 bg-info">
                        <div class="text-center text-light h1  fa fa-file-export" style="font-size: 60px"></div>
                        <div class="text-center text-light h4">Responded Requests</div>
                        <div class="text-center text-light h4">5</div>
                    </div>
                    </div>

                    <div class="col-md-4 ">
                    <div class="card shadow-lg py-4 bg-secondary">
                        <div class="text-center text-ligt h1 text-white fa fa-folder-minus" style="font-size: 60px"></div>
                        <div class="text-center text-light h4">Not available Responses</div>
                        <div class="text-center text-light h4">20</div>
                    </div>
                 </div>
           </div>

           {{-- the second --}}
           

           {{-- end of the second --}}

                
             </div>
        </div>
    </div>

</div>
@endsection