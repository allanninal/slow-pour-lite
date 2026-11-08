<?php
/**
 * Title: Opening hours
 * Slug: slow-pour-lite/hours
 * Categories: slow-pour-lite
 * Description: Opening hours for each day of the week, with notes.
 * Keywords: hours, opening times, week
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
<!-- wp:paragraph {"className":"sp-faint","fontSize":"small"} -->
<p class="has-small-font-size sp-faint"><?php echo esc_html__( 'Holiday hours posted on our Instagram Instagram. Kitchen closes 30 minutes before shop.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo slow_pour_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
