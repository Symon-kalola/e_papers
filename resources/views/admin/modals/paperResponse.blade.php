
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Response Paper</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
     <form method="POST" enctype="multipart/form-data" action="{{ route('updateRequest') }}" class="mt-2 px-4">
                        @csrf

                        <div class="row mb-3 d-none">
                            <label for="id" class="col-md-2 col-form-label  ">{{ __('id') }}</label>

                            <div class="col-md-10">
                                <input id='id' type="text" class="form-control @error('id') is-invalid @enderror" name='id' value="{{ old('id') }}" autocomplete="id" autofocus>

                                @error('id')
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
                       
                      
                        

                        <div class="row mb-0">
                            <div class="col-md-10 offset-md-4">
                                <button onclick="sub()" type="submit" class="btn btn-primary ">  <span class="fa fa-upload"></span>
                                    {{ __('save') }}
                                </button>

                            </div>
                        </div>

</form>
       
    
     
    </div>
  </div>
</div><script>
    function addDoc(){
        window.alert("Document uploaded successfully")  
    }
</script>

{{-- modal ends here --}}