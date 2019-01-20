<nav>
    <ul id="menu" class="topmenu">
        <li class="topfirst"><?php echo anchor(current_url(),img('stock.png').' Gestion du stock','style="height:18px;line-height:18px;"') ?>                    
            <ul>
            <li><a href="#">Saisir une entrée en stock</a></li>
            <li><a href="#">Saisir une sortie de stock</a></li>
            <li><a href="#">Statistiques</a></li>
            </ul>
        </li>				
        <li class="topmenu"><?php echo anchor(current_url(),img('prod.png').' Produits','style="height:18px;line-height:18px;"') ?>
            <ul>
            <li><a href="#">Nouveau produit disponible</a></li>
            <li><a href="#">Modifier un produit</a></li>
            <li><a href="#">Retirer un produit de la vente</a></li>
            </ul>
        </li>
        <li class="topmenu"><?php echo anchor(current_url(),img('categ.png').' Catégories','style="height:18px;line-height:18px;"') ?>
            <ul>
            <li><a href="#">Ajouter</a></li>
            <li><a href="#">Modifier</a></li>
            <li><a href="#">Supprimer</a></li>
            </ul>
        </li>
        <li class="toplast">
            <?php echo anchor('login/disconnect',img('switch.png').' Déconnecter','style="height:18px;line-height:18px;"') ?>                    
        </li>
    </ul>			
</nav>
