<footer id="footer">
    <div id="top-footer">
        <?php
        wp_nav_menu(['theme_location' => 'footer',]);
        ?>
    </div>
</footer>

<!-- Lance la popup contact -->
<?php
get_template_part('templates-part/modale-contact');
?>

<?php wp_footer(); ?>

</body>

</html>