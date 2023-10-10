
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Paper</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
     <form method="POST" enctype="multipart/form-data" action="{{ route('edit') }}" class="mt-2 px-4">
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
                        <input type="text" id="id" name="id" class="d-none">
                       
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
                                    {{ __('Update') }}
                                </button>

                            </div>
                        </div>

</form>
       
    
     
    </div>
  </div>
</div><script>
    function editDoc(){
        window.alert("Document uploaded successfully")  
    }
</script>

{{-- modal ends here --}}