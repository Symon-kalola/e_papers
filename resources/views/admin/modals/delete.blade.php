
<!-- Modal -->
<div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="deleteLabel">Confirm Delete</h5>
        <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <h5 class="text-danger mx-4">Are you sure you want to delete the document?</h5>
      <input id="id" type="text" class="d-none">
      <div class="modal-footer">
        <a  onClick="delete_resource()" type="button" class="btn btn-danger" data-bs-dismiss="modal">confirm</a>
      
      </div>
    </div>
  </div>
</div>
<script>
    function delete_resource(){
         location.href=$('#id').val();
    }
</script>


{{-- modal ends here --}}