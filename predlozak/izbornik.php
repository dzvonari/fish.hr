
<ul class="menu">
  <li class="active"><a href="<?php echo $putanjaAplikacije; ?>index.php"><?php echo $naslovAplikacije; ?></a></li>
  <?php if(isset($_SESSION['autoriziran'])): ?>
  <li class="active"><a href="<?php echo $putanjaAplikacije; ?>privatno/proizvodi">Proizvodi</a></li>
  <li class="active"><a href="<?php echo $putanjaAplikacije; ?>privatno/era.php">Era</a></li>
  <li class="active"><a href="<?php echo $putanjaAplikacije; ?>odjava.php">Odjava</a></li>
  <?php endif;?>
</ul>