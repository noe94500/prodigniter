<footer>

    <div class="environment">
        <p>"Parfois vous souhaitez renoncer à la guitare, vous allez détester la guitare. Mais si vous rester avec elle, vous allez être récompensé." J.H.</p>
    </div>

    <div class="copyrights">
        <p>&copy; <?php echo date('Y') ?> ProdIgniter Music</p>
    </div>

</footer>

<!-- SCRIPTS -->

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->

</body>
</html>
