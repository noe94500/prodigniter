<div class="menu">
    <ul>
        <li class="logo">
            <a href=""><?php echo img('public/img/logo.png', true, 'alt="logo" class="logo"')?></a>
        </li>
        <li class="menu-toggle">
            <button onclick="toggleMenu();">&#9776;</button>
        </li>
        <li class="menu-item hidden"><?php echo anchor('stock/afficher', '<i class="fa-solid fa-cubes"></i> Stock actuel') ?></li>
        <li class="menu-item hidden"><?php echo anchor('/', '<i class="fa-solid fa-guitar"></i> Produits') ?></li>
        <li class="menu-item hidden"><?php echo anchor('stock/val', '<i class="fa-solid fa-cubes"></i> Valeur totale du stock') ?></li>
        <li class="menu-item hidden"><?php echo anchor('categ/afficher', '<i class="fa-solid fa-table-list"></i> Ajouter une Catégorie') ?></li>
        <li class="menu-item hidden"><?php echo anchor('prod/ajouter', '<i class="fa-solid fa-table-list"></i> Ajouter un produit') ?></li>
        <li class="menu-item hidden"><?php echo anchor('/admin/logout', '<i class="fa-solid fa-power-off"></i> Déconnexion') ?></li>
    </ul>
</div>

