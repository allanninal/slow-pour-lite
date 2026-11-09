<?php
/**
 * Title: Our beans
 * Slug: slow-pour-lite/beans
 * Categories: slow-pour-lite
 * Description: Where your coffee comes from: one card per origin with its farm, farmer, process and tasting notes.
 * Keywords: beans, origins, sourcing, farms, direct trade
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
<section class="wp-block-group alignfull sp-section" id="beans">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Direct Trade', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Our beans, their story', 'slow-pour-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-lede-left sp-muted"} -->
<p class="sp-lede-left sp-muted"><?php echo esc_html__( 'We don\'t buy commodities. We buy relationships. Every bag we sell traces back to a specific farmer, a specific harvest, a specific hillside. We visit both farms every year — and we pay a meaningful premium above the going market price because quality coffee begins with quality partnerships.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"},"className":"sp-cards"} -->
<div class="wp-block-group sp-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-card sp-origin"} -->
<div class="wp-block-group sp-card sp-origin">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"sp-origin__country"} -->
<p class="sp-origin__country"><?php echo esc_html__( 'Ethiopia', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"sp-origin__region"} -->
<h3 class="wp-block-heading sp-origin__region"><?php echo esc_html__( 'Yirgacheffe', 'slow-pour-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'Dara Hills Cooperative', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-pill"} -->
<p class="sp-pill"><?php echo esc_html__( 'Light Roast', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"8rem"},"className":"sp-profile"} -->
<div class="wp-block-group sp-profile">
<!-- wp:paragraph {"className":"sp-scale sp-scale\u002d\u002d1"} -->
<p class="sp-scale sp-scale--1"><?php echo wp_kses_post( __( '<span class="sp-label">Roast</span> Light', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-meter sp-meter\u002d\u002d4"} -->
<p class="sp-meter sp-meter--4"><?php echo wp_kses_post( __( '<span class="sp-label">Brightness</span> 4 of 5', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"8rem"},"className":"sp-facts"} -->
<div class="wp-block-group sp-facts">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Farmer', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Meseret Tafari', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Process', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Natural', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Altitude', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '1,900–2,200 m', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Variety', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Heirloom', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact sp-fact\u002d\u002dwide"} -->
<div class="wp-block-group sp-fact sp-fact--wide">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Tasting Notes', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-origin__notes"} -->
<p class="sp-origin__notes"><?php echo esc_html__( 'Stone fruit · Jasmine · Bergamot', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'The Dara Hills Cooperative sits at 1,900–2,200 m in the Gedeo highlands. Meseret has been farming these heirloom varietals for over two decades. Natural-process drying on raised beds gives our filter roast its distinctive blueberry-jam sweetness and violet aromatics.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-card sp-origin"} -->
<div class="wp-block-group sp-card sp-origin">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"sp-origin__country"} -->
<p class="sp-origin__country"><?php echo esc_html__( 'Colombia', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"sp-origin__region"} -->
<h3 class="wp-block-heading sp-origin__region"><?php echo esc_html__( 'Huila', 'slow-pour-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'Finca El Alba Verde', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-pill"} -->
<p class="sp-pill"><?php echo esc_html__( 'Medium Roast', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"8rem"},"className":"sp-profile"} -->
<div class="wp-block-group sp-profile">
<!-- wp:paragraph {"className":"sp-scale sp-scale\u002d\u002d3"} -->
<p class="sp-scale sp-scale--3"><?php echo wp_kses_post( __( '<span class="sp-label">Roast</span> Medium', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-meter sp-meter\u002d\u002d3"} -->
<p class="sp-meter sp-meter--3"><?php echo wp_kses_post( __( '<span class="sp-label">Brightness</span> 3 of 5', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"8rem"},"className":"sp-facts"} -->
<div class="wp-block-group sp-facts">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Farmer', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Mateo Rincón', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Process', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Washed', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Altitude', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '1,750 m', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Variety', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Caturra, Castillo', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact sp-fact\u002d\u002dwide"} -->
<div class="wp-block-group sp-fact sp-fact--wide">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Tasting Notes', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-origin__notes"} -->
<p class="sp-origin__notes"><?php echo esc_html__( 'Dark chocolate · Blood orange · Walnut', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'Mateo Rincón and his family tend Caturra and Castillo varietals at 1,750 m above the Magdalena River valley. Fully washed and dried on mechanical driers, this lot forms the backbone of our espresso blend — clean, structured, with a long finish.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"13rem"},"className":"sp-promises"} -->
<div class="wp-block-group sp-promises">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-promise"} -->
<div class="wp-block-group sp-promise">
<!-- wp:paragraph {"className":"sp-promise__title"} -->
<p class="sp-promise__title"><?php echo esc_html__( 'Direct-trade sourced', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'We pay a premium above market price to both farms', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-promise"} -->
<div class="wp-block-group sp-promise">
<!-- wp:paragraph {"className":"sp-promise__title"} -->
<p class="sp-promise__title"><?php echo esc_html__( 'Roasted weekly, in-house', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'Roasted Tuesday and Friday mornings. Never more than 7 days from roast to bag.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-promise"} -->
<div class="wp-block-group sp-promise">
<!-- wp:paragraph {"className":"sp-promise__title"} -->
<p class="sp-promise__title"><?php echo esc_html__( 'Annual farm visits', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'Amara and Kwesi visit both farms every harvest', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo slow_pour_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
