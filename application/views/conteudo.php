
    <div class="page-header">
      <h1>Sticky footer with fixed navbar</h1>
    </div>
      <?php foreach ($posts as $value) {
     ?>
          <h1> <?php echo $value->msg;?></h1>
          <p><?php  echo $value->datahora; ?></p>
      <?php }?>
  </div>
