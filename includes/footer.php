<?php
function write_copyright() {
    $year = date('Y');
    echo '&copy; ' . $year . ' Aaron Snowberger';
}
?>
<footer>
    <?php write_logo(); ?>
    <?php write_copyright(); ?>
</footer>
</body>
</html>
