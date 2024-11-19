<footer>
  <section class="footerGauche">
    <div class="credit">
      <h2>Credit</h2>
      <p>Annabelle Lacombe Cardenas</p>
      <p>Alek Crépeau</p>
      <p>Max-J Rosalbert</p>
      <p>Christopher Simeus</p>
      <p>Marguerite Demontigny</p>
    </div>
    <div class="maisonneuve">
      <h2>Maisonneuve</h2>
      <p>3800, rue Sherbrook est</p>
      <p>Montréal, Qc, H1X 2A2</p>
      <p>Maisonneuve@gmail.com</p>
    </div>
    <div class="liens">
      <h2>Liens</h2>
      <?php wp_nav_menu(array(
        'theme_location' => 'footerMenuLocation',
      )); ?>
    </div>
  </section>
  <section class="footerDroite">
    <div class="reseaux">
      <h2>Suivez-nous</h2>
        <div class="inconsReseaux">
        <?php get_template_part("componants-php/social"); ?>
        </div>
    </div>
  </section>

  <section class="footerBas">Maisonneuve</section>
</footer>

<?php wp_footer(); ?>

</body>


</html>