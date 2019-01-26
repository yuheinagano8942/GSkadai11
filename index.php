<?php


$animals = ["犬", "ねこ", "鳥", "魚"];


?>
<ul>
  <?php foreach ($animals as $value) : ?>
  <li><?php echo "$value "; ?></li>
  <?php endforeach; ?>
</ul>