<?= $this->extend('layout/sablona'); ?>

<?php
foreach($spolkoveZeme as $row){
    ?>

<div class="card col-lg-4">
  <div class="card-body"><?= anchor('zeme/'.$row->id,$row->jmeno)  ?></div>
</div>
<?php
}