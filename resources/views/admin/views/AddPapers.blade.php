@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class=" row">
        <div class="col-md-3 d-none bg-secondary d-md-block " >
             <div class="list-group mt-1  " style="height:100vh; width:100%">
               <a href="/admin/" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark" ><h6  style="margin-left: -10px;"><b>Dashboard</b></h6></a>
                <a href="/admin/papers" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark  fa fa-clipboard-check">  Papers</a>
                <a href="/admin/add/paper" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark fa fa-file-upload active text-white"> Add Papers</a>
                <a href="/admin/request" class="list-group-item list-group-item-action outline-secondary  list-group-item-dark fa fa-envelope-square "> Paper Requests</a>
            </div>
        </div>
         <div class="col-md-9 bg-white " style="height: 100vh">
          <form method="POST" enctype="multipart/form-data" action="{{ route('storePaper') }}" class="mt-2 px-4">
                        @csrf

                        <div class="row mb-3">
                            <label for="module" class="col-md-2 col-form-label  ">{{ __('module') }}</label>

                            <div class="col-md-10">
                                <input id='module' type="text" class="form-control @error('module') is-invalid @enderror" name='module' value="{{ old('module') }}" autocomplete="module" autofocus>

                                @error('module')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="document" class="col-md-2 col-form-label  ">{{ __('document') }}</label>

                            <div class="col-md-10">
                                <input id='document' type="file" class="form-control @error('document') is-invalid @enderror" name='document' value="{{ old('document') }}" autocomplete='document' autofocus>

                                @error('document')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                          <div class="row mb-3">
                            <label for="class" class="col-md-2 col-form-label  ">{{ __('class') }}</label>

                            <div class="col-md-10">
                              
                                <select id="class" type="class" class="form-control form-select" @error('class') is-invalid @enderror name="class" value="{{ old('class') }}" autocomplete="class" autofocus>
                                 <option selected value="Information systems">BIS</option>
                                    <option value="Information Technology">BIT</option>
                                    <option value="Jounarism">BAJ</option>
                                    <option value="Engenearing">Engenearing</option>
                                </select>    

                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for='semester' class="col-md-2 col-form-label  ">{{ __('Semester') }}</label>

                            <div class="col-md-10">
                              
                                <select id='semester' type='semester' class="form-control form-select" @error('semester') is-invalid @enderror name='semester' value="{{ old('semester') }}" autocomplete='semester' autofocus>
                                 <option selected value="1">1</option>
                                    <option value="2">2</option>
                                </select>    

                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for='year' class="col-md-2 col-form-label  ">{{ __('Year') }}</label>

                            <div class="col-md-10">
                              
                                <select id='year' type='year' class="form-control form-select" @error('year') is-invalid @enderror name='year' value="{{ old('year') }}" autocomplete='year' autofocus>
                                 <option selected value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>    

                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-0">
                            <div class="col-md-10 offset-md-4">
                                <button onclick="sub()" type="submit" class="btn btn-primary ">  <span class="fa fa-upload"></span>
                                    {{ __('Upload') }}
                                </button>

                            </div>
                        </div>

</form>

          
        </div>
        {{-- end of seconf column --}}
    </div>

</div>
<script>
 function sub(){
    window.alert("Document uploaded successfully")

  }

</script>

@endsection
