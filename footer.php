<footer id="footer" class="footer">
    <div id="top-footer">
        <?php
        wp_nav_menu(['theme_location' => 'footer',]);
        ?>
    </div>
</footer>

<!-- Lance la popup contact -->
<?php
// https://developer.wordpress.org/reference/functions/get_template_part/
get_template_part('template-parts/modale-contact');
?>

<?php wp_footer(); ?>

</body>

</html>