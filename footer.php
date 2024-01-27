        <footer class="site-footer">
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
                <?php get_template_part('template-parts/footer-page'); ?>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>