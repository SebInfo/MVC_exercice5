<?php
$titre ="Liste des Pompiers";
ob_start();
?>
        <?php        
            foreach ($pompiers as $pompier){
        ?>
                <a href=<?php echo "index.php?action=pompier&id=". $pompier['Matricule']; ?> >
                    <?= $pompier['NomPompier'] ?>
                </a>
             <?= $pompier['PrenomPompier']."<br />" ?> 
        <?php
        }
    ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
require "templates/gabarit.php";