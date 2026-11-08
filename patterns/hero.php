<?php
/**
 * Title: Hero
 * Slug: slow-pour-lite/hero
 * Categories: slow-pour-lite
 * Description: The opening section: headline, introduction, buttons and key facts.
 * Keywords: hero, header, banner, intro
 * Viewport Width: 1400
 *
 * @package slow-pour-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:cover {"url":"__SRC_hero__","id":"__ID_hero__","alt":"A wooden bar counter in front of open shelves, with pot plants, pendant lamps and a chalkboard sign","dimRatio":60,"overlayColor":"bg-dark","isUserOverlayColor":true,"minHeight":600,"minHeightUnit":"px","sizeSlug":"full","align":"full","className":"sp-hero","layout":{"type":"constrained","contentSize":"72rem"}} -->
<div id="hero" class="wp-block-cover alignfull sp-hero" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-bg-dark-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-__ID_hero__ size-full" alt="<?php echo esc_attr__( 'A wooden bar counter in front of open shelves, with pot plants, pendant lamps and a chalkboard sign', 'slow-pour-lite' ); ?>" src="__SRC_hero__" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-hero__inner"} -->
<div class="wp-block-group sp-hero__inner">
<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"accent-light"} -->
<p class="has-accent-light-color has-text-color is-style-eyebrow"><?php echo esc_html__( 'Specialty Coffee · Portland, OR', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"fontSize":"huge","textColor":"text-light"} -->
<h1 class="wp-block-heading has-text-light-color has-text-color has-huge-font-size"><?php echo esc_html__( 'We open at 7.', 'slow-pour-lite' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","className":"sp-lede-left","textColor":"text-light"} -->
<p class="has-text-light-color has-text-color has-large-font-size sp-lede-left"><?php echo esc_html__( 'Single-origin pour-overs, direct from Yirgacheffe and Huila. A copper espresso machine named Goldie. A space where time slows down.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#location"><?php echo esc_html__( 'Find us', 'slow-pour-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline sp-on-dark"} -->
<div class="wp-block-button is-style-outline sp-on-dark"><a class="wp-block-button__link wp-element-button" href="#subscribe"><?php echo esc_html__( 'Subscribe to our beans', 'slow-pour-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
<?php
echo slow_pour_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
