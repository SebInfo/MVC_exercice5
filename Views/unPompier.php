<?php
$titre ="Un Pompier";
ob_start();
?>
<article>
      <header>
        <td><?= $unPompier->getNomPompier() ?></td>
        <td><?= $unPompier->getPrenomPompier() ?></td>
        <td><?= $unPompier->getTelPompier()?></td> 
        <td><?= $unPompier->getSexePompier() ?></td> 
      </header>
</article>
<?php
$content = ob_get_clean();
require "layouts/gabarit.php";