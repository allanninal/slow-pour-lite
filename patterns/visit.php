<?php
/**
 * Title: Visit
 * Slug: slow-pour-lite/visit
 * Categories: slow-pour-lite
 * Description: Address, contact details, directions and opening hours.
 * Keywords: visit, hours, address, location, contact
 * Viewport Width: 1400
 *
 * @package slow-pour-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"sp-section"} -->
<section class="wp-block-group alignfull sp-section" id="hours">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Hours', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Come as you are, any day but Monday.', 'slow-pour-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-lede-left sp-muted"} -->
<p class="sp-lede-left sp-muted"><?php echo esc_html__( 'We close Mondays to rest and restock. Every other day, we\'re here when you need us — whether that\'s your 7am ritual or a slow Saturday afternoon.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-hours"} -->
<div class="wp-block-group sp-hours">
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"6rem"},"className":"sp-hours__row"} -->
<div class="wp-block-group sp-hours__row">
<!-- wp:paragraph {"className":"sp-hours__day"} -->
<p class="sp-hours__day"><?php echo esc_html__( 'Monday', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-hours__time sp-faint"} -->
<p class="sp-hours__time sp-faint"><?php echo esc_html__( 'Closed', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"6rem"},"className":"sp-hours__row"} -->
<div class="wp-block-group sp-hours__row">
<!-- wp:paragraph {"className":"sp-hours__day"} -->
<p class="sp-hours__day"><?php echo esc_html__( 'Tuesday', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-hours__time"} -->
<p class="sp-hours__time"><?php echo esc_html__( '7:00 – 17:00', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"6rem"},"className":"sp-hours__row"} -->
<div class="wp-block-group sp-hours__row">
<!-- wp:paragraph {"className":"sp-hours__day"} -->
<p class="sp-hours__day"><?php echo esc_html__( 'Wednesday', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-hours__time"} -->
<p class="sp-hours__time"><?php echo esc_html__( '7:00 – 17:00', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"6rem"},"className":"sp-hours__row"} -->
<div class="wp-block-group sp-hours__row">
<!-- wp:paragraph {"className":"sp-hours__day"} -->
<p class="sp-hours__day"><?php echo esc_html__( 'Thursday', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-hours__time"} -->
<p class="sp-hours__time"><?php echo esc_html__( '7:00 – 17:00', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"6rem"},"className":"sp-hours__row"} -->
<div class="wp-block-group sp-hours__row">
<!-- wp:paragraph {"className":"sp-hours__day"} -->
<p class="sp-hours__day"><?php echo esc_html__( 'Friday', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-hours__time"} -->
<p class="sp-hours__time"><?php echo esc_html__( '7:00 – 17:00', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-faint sp-hours__note","fontSize":"small"} -->
<p class="has-small-font-size sp-faint sp-hours__note"><?php echo esc_html__( 'Late filter until 18:00', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"6rem"},"className":"sp-hours__row"} -->
<div class="wp-block-group sp-hours__row">
<!-- wp:paragraph {"className":"sp-hours__day"} -->
<p class="sp-hours__day"><?php echo esc_html__( 'Saturday', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-hours__time"} -->
<p class="sp-hours__time"><?php echo esc_html__( '8:00 – 16:00', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"6rem"},"className":"sp-hours__row"} -->
<div class="wp-block-group sp-hours__row">
<!-- wp:paragraph {"className":"sp-hours__day"} -->
<p class="sp-hours__day"><?php echo esc_html__( 'Sunday', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-hours__time"} -->
<p class="sp-hours__time"><?php echo esc_html__( '8:00 – 16:00', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-faint sp-hours__note","fontSize":"small"} -->
<p class="has-small-font-size sp-faint sp-hours__note"><?php echo esc_html__( 'Slower pace, linger welcome', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"placeholder":"Open now status (filled in from the hours above)","className":"is-style-open-status"} -->
<p class="is-style-open-status"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-faint","fontSize":"small"} -->
<p class="has-small-font-size sp-faint"><?php echo esc_html__( 'Holiday hours posted on our Instagram Instagram. Kitchen closes 30 minutes before shop.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
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
