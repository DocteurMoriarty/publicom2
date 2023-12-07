<?= $this->extend('layout_hf') ?>
<?= $this->section('content') ?>
<main>
  <?php if ($msgPrec !== null) { ?>
    <div id="carousel-bouton-gauche">
      <a href="<?= route_to('visu') . '?id=' . $msgPrec['IDMESSAGE'] ?>"><input type="image" type="submit" value="" src="/images/caret-left-square-fill.svg" width="40%"></a>
    </div>
  <?php } ?>
  <div class="card">
    <p><?= $msgActu["TEXTEMESSAGE"] ?></p>
  </div>

  <?php if ($msgSuiv !== null) { ?>
    <div id="carousel-bouton-droite">
      <a href="<?= route_to('visu') . '?id=' . $msgSuiv['IDMESSAGE'] ?>"><input type="image" value="" src="/images/caret-right-square-fill.svg" width="40%"></a>

    </div>
  <?php } ?>


</main>


<?= $this->endSection() ?>