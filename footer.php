        <footer class="site-footer contenedor">
            <div class="contenido-contacto">
                <div class="mapa">
                    <?php dynamic_sidebar('footer_right'); ?>
                </div>
                <div class="contacto">
                    <h5>Contacto</h5>
                    <?php dynamic_sidebar('footer_left'); ?>
                </div>
            </div>

            <div class="contenido-footer">
                <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y'); ?>  </p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/Gasol_Marca_Blanca.png" alt="Logo Gasol">
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>