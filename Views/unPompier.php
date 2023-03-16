<?php
$titre ="Un Pompier";
ob_start();
?>
<article>
      <header>
        <?= $unPompier['NomPompier'] ?>
        <?= $unPompier['PrenomPompier'] ?>
        <?= $unPompier['TelPompier'] ?>
        <?= $unPompier['SexePompier'] ?>

      </header>
</article>
<?php
$content = ob_get_clean();
require "templates/gabarit.php";