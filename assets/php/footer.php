<?php
    $req = "SELECT * FROM footer";
    $traitementFooter = $connect ->prepare($req);
    $traitementFooter -> execute();
    $rowFooter = $traitementFooter->fetch();
?>

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col m6 s12">
                <h5 class="white-text">Information :</h5>
                <p class="grey-text text-lighten-4"><?php echo $rowFooter['champ1']?></p>
            </div>
            
            <div class="col m2 offset-m4 s12">
                <h5 class="white-text">Lien :</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="<?php echo $rowFooter['link1']?>" target="blank_"><?php echo $rowFooter['nomLink1']?></a></li>
                    <li><a class="grey-text text-lighten-3" href="<?php echo $rowFooter['link2']?>" target="blank_"><?php echo $rowFooter['nomLink2']?></a></li>
                    <li><a class="grey-text text-lighten-3" href="<?php echo $rowFooter['link3']?>" target="blank_"><?php echo $rowFooter['nomLink3']?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2018-<?php echo date("Y");?> Fatyconcept.com
            <a class="grey-text text-lighten-4 right" href="https://www.asheart.fr" target="blank_">Réalisation AsheArt</a>
        </div>
    </div>
</footer>