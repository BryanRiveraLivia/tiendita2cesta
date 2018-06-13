<?php  if(session()->get('ok')){?>
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="alert alert-success">
        <strong>Exito</strong> <br> <?= session()->get('ok');?>
      </div>
    </div>
  <?php }?>
  <?php  if(session()->get('error')){?>
    <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="alert alert-danger">
        <strong>Upss...</strong> <br> <?= session()->get('error');?>
      </div>
    </div>
  <?php }?>