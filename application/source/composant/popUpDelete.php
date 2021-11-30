<!-- 
  POP UP MODAL TO CONFIRM DELETE 
-->
<div class="modal  fade" id="popUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-danger text-center " id="exampleModalLabel"> 
            <i class="bi bi-exclamation-triangle-fill "></i>
        Alert</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-light">
      Are you sure you want to delete this account?
      </div>
      <div class="modal-footer">
        <form action="" method="get">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="delete" class="btn btn-danger">OK</button>
        </form>
      </div>
    </div>
  </div>
</div>