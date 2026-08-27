<?php
defined('ABSPATH') || exit;
?>
<!-- wp:group {"tagName":"section","className":"spnkt-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group spnkt-hero">
  <!-- wp:paragraph {"className":"spnkt-section-label"} -->
  <p class="spnkt-section-label"><?php esc_html_e('Premium WordPress Agentur · Winterthur · Schweiz', 'spnkt'); ?></p>
  <!-- /wp:paragraph -->

  <!-- wp:heading {"level":1,"className":"spnkt-hero__title"} -->
  <h1 class="wp-block-heading spnkt-hero__title"><?php esc_html_e('Web & Design ', 'spnkt'); ?><span class="spnkt-shimmer"><?php esc_html_e('nach Mass.', 'spnkt'); ?></span></h1>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"className":"spnkt-hero__subtitle"} -->
  <p class="spnkt-hero__subtitle"><?php esc_html_e('Über 10 Jahre Erfahrung in Konzeption, Gestaltung und Realisierung von Webseiten mit WordPress — individuelle Qualitätsarbeit von Jérôme Meier aus Winterthur.', 'spnkt'); ?></p>
  <!-- /wp:paragraph -->

  <!-- wp:buttons -->
  <div class="wp-block-buttons">
    <!-- wp:button {"className":"spnkt-btn-accent"} -->
    <div class="wp-block-button spnkt-btn-accent"><a class="wp-block-button__link" href="<?php echo esc_url(spnkt_translated_id(get_page_by_path('kontakt')->ID ?? '#')); ?>"><?php esc_html_e('Projekt besprechen →', 'spnkt'); ?></a></div>
    <!-- /wp:button -->
    <!-- wp:button {"className":"is-style-outline spnkt-btn-ghost"} -->
    <div class="wp-block-button is-style-outline spnkt-btn-ghost"><a class="wp-block-button__link" href="/projekte"><?php esc_html_e('Projekte ansehen', 'spnkt'); ?></a></div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->

  <!-- wp:group {"className":"spnkt-stats","layout":{"type":"grid","columnCount":4}} -->
  <div class="wp-block-group spnkt-stats">
    <?php
    $stats = [
        ['10+', __('Jahre Erfahrung', 'spnkt')],
        ['200+', __('Projekte realisiert', 'spnkt')],
        ['100%', __('Qualitätsarbeit nach Mass', 'spnkt')],
        ['1', __('Ansprechpartner: Jérôme Meier', 'spnkt')],
    ];
    foreach ($stats as [$num, $label]) : ?>
      <div class="spnkt-glass-card spnkt-stat">
        <div class="spnkt-stat__num"><?php echo esc_html($num); ?></div>
        <div class="spnkt-stat__label"><?php echo esc_html($label); ?></div>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->
