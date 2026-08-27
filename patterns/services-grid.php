<?php
defined('ABSPATH') || exit;
?>
<!-- wp:group {"tagName":"section","className":"spnkt-section"} -->
<section class="wp-block-group spnkt-section">
  <!-- wp:paragraph {"className":"spnkt-section-label"} --><p class="spnkt-section-label"><?php esc_html_e('Was wir machen', 'spnkt'); ?></p><!-- /wp:paragraph -->
  <!-- wp:heading {"level":2} --><h2 class="wp-block-heading"><?php esc_html_e('Alles aus einer Hand — für Ihren Erfolg.', 'spnkt'); ?></h2><!-- /wp:heading -->

  <!-- wp:group {"className":"spnkt-services-grid","layout":{"type":"grid","minimumColumnWidth":"280px"}} -->
  <div class="wp-block-group spnkt-services-grid">
    <?php
    $services = [
        ['WordPress Websites', __('Premium WordPress Websites nach Mass — individuell, professionell und auf Ihre Bedürfnisse zugeschnitten.', 'spnkt')],
        ['Webentwicklung', __('Moderne Webentwicklung aus Winterthur. Technisch präzise und visuell überzeugend.', 'spnkt')],
        ['Web Design', __('Individuelles Design, das Ihre Marke stärkt und Ihre Kommunikation professionell nach aussen trägt.', 'spnkt')],
        ['WordPress Service', __('Wartung, Reparatur und Pflege Ihrer WordPress Website — zuverlässig und schnell aus Winterthur.', 'spnkt')],
    ];
    foreach ($services as [$title, $desc]) : ?>
      <div class="spnkt-glass-card spnkt-card spnkt-service-card">
        <h3 class="spnkt-card__title"><?php echo esc_html($title); ?></h3>
        <p class="spnkt-card__desc"><?php echo esc_html($desc); ?></p>
        <a class="spnkt-card__link" href="/leistungen"><?php esc_html_e('Mehr erfahren →', 'spnkt'); ?></a>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->
