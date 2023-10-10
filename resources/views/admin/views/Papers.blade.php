@extends('layouts.admin')
@include('admin.modals.moduleEditModal')
@include('admin.modals.document_view')
@include('admin.modals.delete')
@section('content')
<div class="container-fluid">
    <div class=" row">
        <div class="col-md-3 d-none bg-secondary d-md-block " >
            <div class="list-group mt-1  " style="height:100vh; width:100%">
               <a href="/admin/" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark" ><h6  style="margin-left: -10px;"><b>Dashboard</b></h6></a>
                <a href="/admin/papers" class="list-group-item list-group-item-action outline-secondary active list-group-item-dark  text-white fa fa-clipboard-check">  Papers</a>
                <a href="/admin/add/paper" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark fa fa-file-upload"> Add Papers</a>
                <a href="/admin/request" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark fa fa-envelope-square "> Paper Requests</a>
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
                             <button type="button" class="btn btn-danger btn-sm ms-2 " data-bs-toggle="modal"
                                data-bs-target="#view" onclick="setView(this)" data-id={{  "/storage/$paper->document"  }}>
                                    <span class="fa fa-eye"></span>
                                </button>
                           <button onclick="setEdit(this)" type="button" class="btn btn-primary btn-sm ms-2" 
                           
                            data-id={{ $paper->id }}
                            data-semester={{ $paper->semester }}

                           
                           data-semester={{ $paper->semester }}
                           data-year={{ $paper->year}}
                           data-module={{ $paper->module}}
                           data-class={{ $paper->class}}
                           

                           data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                             <span class="fa fa-pen"></span>
                    
                          </button>
                           
                          <a href="{{ url('/download', $paper->id) }}" class="btn btn-sm btn-success ms-2"> <span class="fa fa-download"></span></a>
                                <button type="button" class="btn btn-danger btn-sm ms-2 " data-bs-toggle="modal"
                                data-bs-target="#delete" onclick="setDelete(this)" data-id={{  "/admin/delete/$paper->id"  }}>
                                    <span class="fa fa-trash"></span>
                                </button>
                               
                            
                            
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
<script>

function setDelete(btn){
      $('#id').val($(btn).attr('data-id'));

  }
function setView(btn){
      $('#idin').val($(btn).attr('data-id'));
      $('#myframe').attr("src",$(btn).attr('data-id'))
  }
function setEdit(btn){
      $('#id').val($(btn).attr('data-id'));
  
      $('#module').val($(btn).attr('data-module'));
   
      $('#class').val($(btn).attr('data-class'));
      $('#semester').val($(btn).attr('data-semester'));
       $('#year').val($(btn).attr('data-year'));
}
</script>


{{-- modal goes here --}}
<!-- Button trigger modal -->


<!-- Modal -->
<!-- Button trigger modal -->


@endsection