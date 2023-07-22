<?php include_once('app/nav/nav.control.php') ?>
<?php include_once('app/app.module.php') ?>
<?php require_once('.tools/adapters/db.adapter.php') ?>


<div <?= theme_class("app-container")?> >

  <?php injectedModule('background')?>
  
  <div id="background-container">
    <img id="app-test-background" src=".files/test/test-banner.jpg">
  </div>

  <?php injectedModule('aplication')?>
  
</div>

