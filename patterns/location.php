<?php
/**
 * Title: Location
 * Slug: slow-pour-lite/location
 * Categories: slow-pour-lite
 * Description: Address, phone, email and how to get there.
 * Keywords: location, address, contact, directions, map
 * Viewport Width: 1400
 *
 * @package slow-pour-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"bg-card","className":"sp-section"} -->
<section class="wp-block-group has-bg-card-background-color has-background alignfull sp-section" id="location">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Location', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Find us on NW 23rd.', 'slow-pour-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-contact"} -->
<div class="wp-block-group sp-contact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Address', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( '428 NW 23rd Avenue<br>Portland, OR 97210', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-faint","fontSize":"small"} -->
<p class="has-small-font-size sp-faint"><?php echo esc_html__( 'Nob Hill / Northwest District', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-contact"} -->
<div class="wp-block-group sp-contact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Phone', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( '<a href="tel:+15035550183">(503) 555-0183</a>', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-contact"} -->
<div class="wp-block-group sp-contact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Email', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( '<a href="mailto:hello@mansacoffee.example">hello@mansacoffee.example</a>', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-card"} -->
<div class="wp-block-group sp-card">
<!-- wp:heading {"level":3,"className":"sp-food__name"} -->
<h3 class="wp-block-heading sp-food__name"><?php echo esc_html__( 'Getting Here', 'slow-pour-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:list {"className":"sp-ways"} -->
<ul class="wp-block-list sp-ways">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'A bus stop on NW 23rd Ave is directly in front. About 25 min from downtown.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'A bike-share station on NW 23rd &amp; Lovejoy, 1 block north. Bike rack out front.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Street parking on NW 23rd (2-hour limit). Garage at NW Couch &amp; 21st, $3/hr.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-faint","fontSize":"small"} -->
<p class="has-small-font-size sp-faint"><?php echo esc_html__( 'No reservations needed — walk-in only. Seating for 28 inside, 8 on the sidewalk patio (weather permitting).', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo slow_pour_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
