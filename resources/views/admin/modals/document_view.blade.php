
<!-- Modal -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" ></script>







{{-- modal ends here --}}

<!-- Modal -->
<div class="modal modal-lg fade" id="view" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">View Paper</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div style="height: 500px;">
          <iframe height="100%" width="100%" id="myframe" src="" ></iframe>

      </div>
      
     

    
     
    </div>
  </div>
</div><script>
    function editDoc(){
        window.alert("Document uploaded successfully")  
    }
</script>

{{-- modal ends here --}}