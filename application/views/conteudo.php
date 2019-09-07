
    <div class="page-header">
      <h1>Duvidem agr, bando de fresco</h1>
    </div>
      <?php foreach ($posts as $value) {
     ?>
          <h1> <?php echo $value->msg;?></h1>
          <a href="<?=base_url();?>tuiter/excluir/<?= $value->id;?>">Excluir</a> <br>
          <a href="<?=base_url();?>tuiter/editar/<?= $value->id;?>">Editar</a>
          <p><?php  echo $value->datahora; ?></p>
      <?php }?>

     
  </div>
