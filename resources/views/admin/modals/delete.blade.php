
<!-- Modal -->
<div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="deleteLabel">Confirm Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <h5 class="text-danger mx-4">Are you sure you want to delete the document?</h5>
      <div class="modal-footer">
        <a  href="{{ url('/admin/delete', $paper->id) }}" type="button" class="btn btn-danger" data-bs-dismiss="modal">confirm</a>
      
      </div>
    </div>
  </div>
</div>

{{-- modal ends here --}}