<?php
/**
 * Title: Menu
 * Slug: slow-pour-lite/menu-full
 * Categories: slow-pour-lite
 * Description: The whole menu by category, with descriptions and prices.
 * Keywords: menu, prices, products, categories
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
<section class="wp-block-group has-bg-card-background-color has-background alignfull sp-section" id="menu">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'What We Serve', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'The menu is short. Intentionally.', 'slow-pour-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-lede-left sp-muted"} -->
<p class="sp-lede-left sp-muted"><?php echo esc_html__( 'We do a few things exceptionally well. Every drink on this list has been obsessed over, adjusted, and obsessed over again.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%">
<!-- wp:heading {"level":3,"className":"sp-menu-cat"} -->
<h3 class="wp-block-heading sp-menu-cat"><?php echo esc_html__( 'Drinks', 'slow-pour-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-items"} -->
<div class="wp-block-group sp-items">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-item"} -->
<div class="wp-block-group sp-item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"className":"sp-item__head"} -->
<div class="wp-block-group sp-item__head">
<!-- wp:heading {"level":4,"className":"sp-item__name"} -->
<h4 class="wp-block-heading sp-item__name"><?php echo esc_html__( 'Mansa Filter', 'slow-pour-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-pill sp-pill\u002d\u002dsoft"} -->
<p class="sp-pill sp-pill--soft"><?php echo esc_html__( 'Pour-over', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-item__price"} -->
<p class="sp-item__price"><?php echo esc_html__( '$5', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'Rotating single-origin pour-over, brewed to order. Ask your barista what\'s on today.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-item"} -->
<div class="wp-block-group sp-item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"className":"sp-item__head"} -->
<div class="wp-block-group sp-item__head">
<!-- wp:heading {"level":4,"className":"sp-item__name"} -->
<h4 class="wp-block-heading sp-item__name"><?php echo esc_html__( 'Single Origin Espresso', 'slow-pour-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-pill sp-pill\u002d\u002dsoft"} -->
<p class="sp-pill sp-pill--soft"><?php echo esc_html__( 'Espresso', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-item__price"} -->
<p class="sp-item__price"><?php echo esc_html__( '$4', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'A double shot of whatever we\'re proud of this week. Ask for the tasting notes — we\'ll tell you everything.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-item"} -->
<div class="wp-block-group sp-item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"className":"sp-item__head"} -->
<div class="wp-block-group sp-item__head">
<!-- wp:heading {"level":4,"className":"sp-item__name"} -->
<h4 class="wp-block-heading sp-item__name"><?php echo esc_html__( 'Oat Flat White', 'slow-pour-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-pill sp-pill\u002d\u002dsoft"} -->
<p class="sp-pill sp-pill--soft"><?php echo esc_html__( 'Milk drink', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-item__price"} -->
<p class="sp-item__price"><?php echo esc_html__( '$6', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'Our Huila espresso pulled long, poured into perfectly steamed oat milk. Silky, nutty, not overpowering.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-item"} -->
<div class="wp-block-group sp-item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"className":"sp-item__head"} -->
<div class="wp-block-group sp-item__head">
<!-- wp:heading {"level":4,"className":"sp-item__name"} -->
<h4 class="wp-block-heading sp-item__name"><?php echo esc_html__( 'Honey Lavender Latte', 'slow-pour-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-pill sp-pill\u002d\u002dsoft"} -->
<p class="sp-pill sp-pill--soft"><?php echo esc_html__( 'Signature', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-item__price"} -->
<p class="sp-item__price"><?php echo esc_html__( '$6.50', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'House-made lavender honey syrup, double espresso, whole milk. Floral without being sweet.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-item"} -->
<div class="wp-block-group sp-item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"className":"sp-item__head"} -->
<div class="wp-block-group sp-item__head">
<!-- wp:heading {"level":4,"className":"sp-item__name"} -->
<h4 class="wp-block-heading sp-item__name"><?php echo esc_html__( 'Cascara Fizz', 'slow-pour-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-pill sp-pill\u002d\u002dsoft"} -->
<p class="sp-pill sp-pill--soft"><?php echo esc_html__( 'Cold', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-item__price"} -->
<p class="sp-item__price"><?php echo esc_html__( '$5.50', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'Cold-brewed cascara (coffee-cherry tea), a splash of orange bitters, topped with sparkling water.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-item"} -->
<div class="wp-block-group sp-item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"className":"sp-item__head"} -->
<div class="wp-block-group sp-item__head">
<!-- wp:heading {"level":4,"className":"sp-item__name"} -->
<h4 class="wp-block-heading sp-item__name"><?php echo esc_html__( 'Cold Brew Tonic', 'slow-pour-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-pill sp-pill\u002d\u002dsoft"} -->
<p class="sp-pill sp-pill--soft"><?php echo esc_html__( 'Cold', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-item__price"} -->
<p class="sp-item__price"><?php echo esc_html__( '$6', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'Our 20-hour cold brew cut with tonic water and a lime wheel. Bitter, bright, refreshing.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-faint","fontSize":"small"} -->
<p class="has-small-font-size sp-faint"><?php echo esc_html__( 'All espresso drinks available decaf on request. Dairy alternatives: oat, almond, soy (+$0.75).', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%">
<!-- wp:heading {"level":3,"className":"sp-menu-cat"} -->
<h3 class="wp-block-heading sp-menu-cat"><?php echo esc_html__( 'Pastries &amp; Bites', 'slow-pour-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-card"} -->
<div class="wp-block-group sp-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sp-food"} -->
<div class="wp-block-group sp-food">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"sp-food__name"} -->
<p class="sp-food__name"><?php echo esc_html__( 'Cardamom Croissant', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-faint","fontSize":"small"} -->
<p class="has-small-font-size sp-faint"><?php echo esc_html__( 'Baked daily by Larkspur Bakery', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-item__price"} -->
<p class="sp-item__price"><?php echo esc_html__( '$4', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sp-food"} -->
<div class="wp-block-group sp-food">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"sp-food__name"} -->
<p class="sp-food__name"><?php echo esc_html__( 'Avocado Toast', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-faint","fontSize":"small"} -->
<p class="has-small-font-size sp-faint"><?php echo esc_html__( 'Sourdough · smoked salt · lemon · chilli flakes', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-item__price"} -->
<p class="sp-item__price"><?php echo esc_html__( '$9', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sp-food"} -->
<div class="wp-block-group sp-food">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"sp-food__name"} -->
<p class="sp-food__name"><?php echo esc_html__( 'Banana Walnut Loaf', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-faint","fontSize":"small"} -->
<p class="has-small-font-size sp-faint"><?php echo esc_html__( 'Slice · house recipe', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-item__price"} -->
<p class="sp-item__price"><?php echo esc_html__( '$4.50', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sp-food"} -->
<div class="wp-block-group sp-food">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"sp-food__name"} -->
<p class="sp-food__name"><?php echo esc_html__( 'Seasonal Fruit Bowl', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-faint","fontSize":"small"} -->
<p class="has-small-font-size sp-faint"><?php echo esc_html__( 'Ask what\'s fresh today', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-item__price"} -->
<p class="sp-item__price"><?php echo esc_html__( '$7', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sp-food"} -->
<div class="wp-block-group sp-food">
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"sp-food__name"} -->
<p class="sp-food__name"><?php echo esc_html__( 'Almond Frangipane Tart', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-faint","fontSize":"small"} -->
<p class="has-small-font-size sp-faint"><?php echo esc_html__( 'Delivered Tue &amp; Fri from Larkspur Bakery', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-item__price"} -->
<p class="sp-item__price"><?php echo esc_html__( '$5', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sp-faint sp-food__note","fontSize":"small"} -->
<p class="has-small-font-size sp-faint sp-food__note"><?php echo esc_html__( 'Food menu changes weekly. We try to support local bakers and farmers wherever we can.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-card sp-wholesale"} -->
<div class="wp-block-group sp-card sp-wholesale">
<!-- wp:paragraph {"className":"sp-food__name"} -->
<p class="sp-food__name"><?php echo esc_html__( 'Wholesale inquiry', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo esc_html__( 'We supply beans to restaurants, hotels, and offices across the Pacific Northwest.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"small","className":"sp-strong-link"} -->
<p class="has-small-font-size sp-strong-link"><?php echo wp_kses_post( __( '<a href="mailto:wholesale@mansacoffee.example">Get in touch</a>', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:paragraph {"className":"sp-faint sp-allergens","fontSize":"small"} -->
<p class="has-small-font-size sp-faint sp-allergens"><?php echo esc_html__( 'Our kitchen handles wheat, milk, eggs, tree nuts (almond and walnut), oats and soy, so we cannot promise any drink or bite is free of them, however it is made. Please ask about allergens before you order.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo slow_pour_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
