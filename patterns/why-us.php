<?php defined('ABSPATH') || exit; ?>
<!-- wp:group {"tagName":"section","className":"spnkt-section spnkt-why","layout":{"type":"constrained"}} -->
<section class="wp-block-group spnkt-section spnkt-why">
  <!-- wp:columns -->
  <div class="wp-block-columns spnkt-why__grid">
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:paragraph {"className":"spnkt-section-label"} --><p class="spnkt-section-label"><?php esc_html_e('Warum schwarzpunkt', 'spnkt'); ?></p><!-- /wp:paragraph -->
      <!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e('Mitdenken — nicht nur ausführen.', 'spnkt'); ?></h2><!-- /wp:heading -->
      <!-- wp:paragraph --><p><?php esc_html_e('Bei schwarzpunkt meier erhalten Sie einen persönlichen Ansprechpartner, der Ihre Ziele versteht und mitdenkt.', 'spnkt'); ?></p><!-- /wp:paragraph -->
      <!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"spnkt-btn-ghost"} --><div class="wp-block-button spnkt-btn-ghost"><a class="wp-block-button__link" href="/agentur"><?php esc_html_e('Über die Agentur →', 'spnkt'); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->
    <!-- wp:column -->
    <div class="wp-block-column spnkt-why__list">
      <?php foreach ([
          __('Persönliche Betreuung durch Jérôme Meier', 'spnkt'),
          __('Über 10 Jahre WordPress-Expertise', 'spnkt'),
          __('Individuelle Qualitätsarbeit nach Mass', 'spnkt'),
          __('Professionelle Kommunikation nach aussen', 'spnkt'),
      ] as $point) : ?>
        <!-- wp:paragraph {"className":"spnkt-glass-card spnkt-why__item"} -->
        <p class="spnkt-glass-card spnkt-why__item">✓ <?php echo esc_html($point); ?></p>
        <!-- /wp:paragraph -->
      <?php endforeach; ?>
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</section>
<!-- /wp:group -->
