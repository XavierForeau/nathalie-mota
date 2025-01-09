<div id="contact">
  <a class="no-contact" href="#" title="fermer la modale"></a>
    <div id="modal-contact" class="modal">
        <div class="modal-content">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-header.png" alt="contact header">
        <?php
        // On insère le formulaire de contact
        echo do_shortcode('[contact-form-7 id="8b15adb" title="Formulaire de contact"]');
        ?>
        </div>
    </div>
</div>