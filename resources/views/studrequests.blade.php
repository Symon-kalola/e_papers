@extends('layouts.app')
@include('admin.modals.document_view')
@include('admin.modals.delete')
@section('content')
<div class="container-fluid ">
    
    <table class="table table-sm  mx-2">
  <thead>
    <tr>
      <th scope="col">Module</th>
      <th scope="col">Class</th>
      <th scope="col">Year</th>
      <th scope="col">Semester</th>
        <th scope="col">Submited On </th>
    
      <th scope="col">Status </th>
    

       <th scope="col">Action</th>
    
      
    </tr>
  </thead>
  <tbody>
    @foreach ($requests as $request )
        

    <tr>
      <td>{{ $request->module }}</th>
      <td>{{$request->class}}</td>
      <td>{{$request->year}}</td>
      <td>{{$request->semester}}</td>
      <td>{{  $request->created_at->diffForHumans()}}</td>
     
       @if (!$request->status)
       <td><i class="text-warning">Pending...</i></td>

       <td><button type="button" class="btn btn-danger btn-sm ms-2 " data-bs-toggle="modal"
                                data-bs-target="#delete" onclick="setDelete(this)" data-id={{  "/request/delete/$request->id"  }}>
                                    <span class="fa fa-trash"></span>
          </button>
       </td>

           
       @elseif ($request->status==='available')
       <td><i class="text-success">document available</i></td>
       
    
        <td> 
        <div class="d-flex">
            <button type="button" class="btn btn-warning btn-sm ms-2 " data-bs-toggle="modal"
            data-bs-target="#view" onclick="setView(this)" data-id={{  "/storage/$request->document"  }}>
                <span class="fa fa-eye text-white"></span>
            </button>
         <a href="{{ url('/request/download', $request->id) }}" class="btn btn-sm btn-success ms-2"> <span class="fa fa-download"></span></a>
          <button type="button" class="btn btn-danger btn-sm ms-2 " data-bs-toggle="modal"
                                data-bs-target="#delete" onclick="setDelete(this)" data-id={{  "/request/delete/$request->id"  }}>
                                    <span class="fa fa-trash"></span>
          </button>
        </div>
     </td>
       @else
       <td><i class="text-danger">document not available</i></td>
        <td> <button type="button" class="btn btn-danger btn-sm ms-2 " data-bs-toggle="modal"
                                data-bs-target="#delete" onclick="setDelete(this)" data-id={{  "/request/delete/$request->id"  }}>
                                    <span class="fa fa-trash"></span>
                                </button>
        </td>

           
       @endif
        
    
    
    </tr>

    @endforeach
   
   
  </tbody>
</table>
</div>
<script>
    function setView(btn){
      $('#idin').val($(btn).attr('data-id'));
      $('#myframe').attr("src",$(btn).attr('data-id'))


  }

  function setDelete(btn){
      $('#id').val($(btn).attr('data-id'));

  }


    
    


</script>
@endsection
