<!--  http://www.w3bai.com/fr/howto/howto_css_modals.html#gsc.tab=0  -->
<div id="modal-contact" class="modal">
    <div class="modal-content">
        <span class="close">x</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-header.png" alt="contact header">
        <?php
        // formulaire de contact
        echo do_shortcode('[contact-form-7 id="50e16f7" title="Formulaire de contact 1"]');
        ?>
    </div>
</div>