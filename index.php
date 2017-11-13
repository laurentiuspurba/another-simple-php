<?php

  echo '<br/>';
  echo '<strong><h1>Another page!!!</h1></strong>';
  echo '<br/>';

  $dir = './images/*.jpeg';
  $images = glob($dir);

  foreach($images as $image) {
    echo "<img src='" . $image . "' />";
    sleep(8);
  }
