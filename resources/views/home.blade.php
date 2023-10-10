@extends('layouts.app')
@include('admin.modals.document_view')


@section('content')
<div class="container-fluid">
    <div class="row bg-primary shadow" style="height: 500px;
      background-image: url('/images/slide1.jpg') 
       background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment:fixed">
            <div class="d-flex justify-content-center align-items-center " >
              <div class="text-white text-center">
                <h1 class="mb-3" ><b>WELCOME TO MUBAS</b> </h1>
                <h5 class="mb-4">ONLINE PAST PAPERS REPOSITORY</h5>
                <a class="btn btn-outline-light btn-lg m-2" href="#contact"
                  role="button" rel="nofollow" >Contact Us</a>
                <!-- <a class="btn btn-outline-light btn-lg m-2" href="https://mdbootstrap.com/docs/standard/"
                  target="_blank" role="button">Download MDB UI KIT</a> -->
              </div>
            </div>
           

    </div>
    {{-- paper cards section --}}
      <section id="about" class="about">
      <div class="row bg-white" >

        <div class="section-title d-flex justify-content-center text-primary py-2 ">
          <h2 >New Papers

          </h2>
        </div>

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
                        
                           
                          <a href="{{ url('/download', $paper->id) }}" class="btn btn-sm btn-success ms-2"> <span class="fa fa-download"></span></a>
                               
                               
                            
                            
                        </div>
                    </div>
                    </div>
                   
                    
                </div>
            </div>
            @endforeach
          </div>
          {{-- ROW FOR CARDS END HERE --}}

      </div>
    </section><!-- End of paper cards section -->
     

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="row bg-white" >

        <div class="section-title d-flex justify-content-center text-primary py-2 ">
          <h2 style="text-decoration:underline">About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
             The MUBAS question paper management system is a portal for the university and students 
             and lecturerswith all the pastquestion papers which they need. through this repository system you can 
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Search Past papers from differend faculties</li>
              <li><i class="ri-check-double-line"></i> Capability of viewing the document online</li>
              <li><i class="ri-check-double-line"></i> Download documents yor your local machine</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
             You can also make a request to the librally if you need a paper which is not uploaded into the system
             to make a request, tgo to the righthand side of the footer and submit details of the paper you want to requefa-stack
            </p>
            <a href="#contact" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
     

   
</div>
<script>
  function setView(btn){
      $('#idin').val($(btn).attr('data-id'));
      $('#myframe').attr("src",$(btn).attr('data-id'))

  }

</script>
@endsection
