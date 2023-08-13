@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row bg-primary shadow" style="height: 500px;
      background-image: url('/images/lap.jpg') 
       background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment:fixed">
            <div class="d-flex justify-content-center align-items-center " >
              <div class="text-white text-center">
                <h1 class="mb-3">Welcome to Blantyre Secondary School</h1>
                <h5 class="mb-4">ONLINE PAST PAPERS REPOSITORY</h5>
                <a class="btn btn-outline-light btn-lg m-2" href="#contact"
                  role="button" rel="nofollow" >Contact Us</a>
                <!-- <a class="btn btn-outline-light btn-lg m-2" href="https://mdbootstrap.com/docs/standard/"
                  target="_blank" role="button">Download MDB UI KIT</a> -->
              </div>
            </div>
           

    </div>
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="row bg-white" >

        <div class="section-title d-flex justify-content-center text-primary py-2 ">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
     

   
</div>
@endsection
