  <div class="modal-dialog modal-dialog-scrollable" role="document" style=top:0;bottom:0;left:0;right:0;>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Detail T.A. <?= $page ?></h5>
        <a href="index.php"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div></a>
      <div class="modal-body">

      <?=  include "tabel.php"; ?>
      <?= $page ?>
      </div>
      <div class="modal-footer">
        <a href="index.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      </div>
    </div>
  </div>
