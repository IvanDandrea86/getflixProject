<!-- 
  POP UP MODAL TO CONFIRM SUCCES OPERATION 
-->
<?php
$det=getDetail($films[$i]->id);
?>
<div class="modal fade" id="popUpOverview<?php echo($films[$i]->id);?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h5 class="modal-title text-danger text-center " id="popUpSuccesLabel">Overview</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-light">
          <p  class="card-text text-light"><?php if(($det->overview)==""){echo ("Overview not available.");
            }else{  echo($det->overview);}
            ?></p> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>