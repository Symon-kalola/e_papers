@extends('layouts.app')
@include('admin.modals.document_view')
@section('content')
<div class="container-fluid ">
    <div class="row mt-2">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div>
              <form class="form-inline d-flex" method="get" action="/search">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" id="search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
            </form>
            </div>
        </div>
         <div class="col-md-3"></div>

    </div>
    <table class="table table-sm  mx-2">
  <thead>
    <tr>
      <th scope="col">Module</th>
      <th scope="col">Class</th>
      <th scope="col">Year</th>
      <th scope="col">Semester</th>
      <th scope="col">File </th>
       <th scope="col">Action</th>
    
      
    </tr>
  </thead>
  <tbody>
    @foreach ($papers as $paper )
        

    <tr>
      <td>{{ $paper->module }}</th>
      <td>{{$paper->class}}</td>
      <td>{{$paper->year}}</td>
      <td>{{$paper->semester}}</td>
      <td><img src="/images/pdf.jpg" class="card-img-top" alt="..." style="height: 30px; width:auto"></td>
    
     <td> 
        <div class="d-flex">
            <button type="button" class="btn btn-danger btn-sm ms-2 " data-bs-toggle="modal"
            data-bs-target="#view" onclick="setView(this)" data-id={{  "/storage/$paper->document"  }}>
                <span class="fa fa-eye"></span>
            </button>
         <a href="{{ url('/download', $paper->id) }}" class="btn btn-sm btn-success ms-2"> <span class="fa fa-download"></span></a>
        </div>
     </td>
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

    
    


</script>
@endsection