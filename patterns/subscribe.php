<?php
/**
 * Title: Bean subscription
 * Slug: slow-pour-lite/subscribe
 * Categories: slow-pour-lite
 * Description: Subscription plans as cards on a dark band: price, what each includes and a sign-up button.
 * Keywords: subscription, plans, pricing, delivery, call to action
 * Viewport Width: 1400
 *
 * @package slow-pour-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"bg-dark","textColor":"text-light","className":"sp-section sp-dark"} -->
<section class="wp-block-group has-text-light-color has-text-color has-bg-dark-background-color has-background alignfull sp-section sp-dark" id="subscribe">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","textColor":"accent-light"} -->
<p class="has-text-align-center has-accent-light-color has-text-color is-style-eyebrow"><?php echo esc_html__( 'Bean Subscription', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center","textColor":"text-light"} -->
<h2 class="wp-block-heading has-text-align-center has-text-light-color has-text-color"><?php echo esc_html__( 'Mansa, delivered to your door.', 'slow-pour-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"sp-lede","textColor":"border-muted"} -->
<p class="has-text-align-center has-border-muted-color has-text-color sp-lede"><?php echo esc_html__( 'Monthly bag. Freshly roasted. The same coffee we serve at the bar, shipped to you the day after we roast it.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"16rem"},"className":"sp-plans"} -->
<div class="wp-block-group sp-plans">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-plan sp-plan\u002d\u002dpopular"} -->
<div class="wp-block-group sp-plan sp-plan--popular">
<!-- wp:paragraph {"className":"sp-badge"} -->
<p class="sp-badge"><?php echo esc_html__( 'Most popular', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"sp-plan__name"} -->
<h3 class="wp-block-heading sp-plan__name"><?php echo esc_html__( 'Single Origin', 'slow-pour-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-plan__cost"} -->
<p class="sp-plan__cost"><?php echo wp_kses_post( __( '<span class="sp-plan__price">$22</span> /month', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-plan__desc","fontSize":"small"} -->
<p class="has-small-font-size sp-plan__desc"><?php echo esc_html__( 'A 250g bag of whatever single-origin lot we\'re most excited about this month. Includes our tasting notes, the farmer\'s story, and a brew guide.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"sp-checks"} -->
<ul class="wp-block-list sp-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Rotating single-origin lot each month', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '250g bag, freshly roasted within 7 days', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Printed tasting card with farm info', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Brew guide matched to the lot', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Cancel anytime', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":""} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@mansacoffee.example?subject=Bean%20Subscription%20-%20Single%20Origin"><?php echo esc_html__( 'Subscribe — $22/mo', 'slow-pour-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-plan"} -->
<div class="wp-block-group sp-plan">
<!-- wp:heading {"level":3,"className":"sp-plan__name"} -->
<h3 class="wp-block-heading sp-plan__name"><?php echo esc_html__( 'House Blend', 'slow-pour-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-plan__cost"} -->
<p class="sp-plan__cost"><?php echo wp_kses_post( __( '<span class="sp-plan__price">$17</span> /month', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-plan__desc","fontSize":"small"} -->
<p class="has-small-font-size sp-plan__desc"><?php echo esc_html__( 'Our Huila-forward espresso blend, dialed in for versatility — filter, espresso, or French press. Consistent, rich, forgiving.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"sp-checks"} -->
<ul class="wp-block-list sp-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Our house espresso blend, every month', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( '250g bag, freshly roasted within 7 days', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'No surprises — same profile each month', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Great for espresso and milk drinks', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Cancel anytime', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline sp-on-dark"} -->
<div class="wp-block-button is-style-outline sp-on-dark"><a class="wp-block-button__link wp-element-button" href="mailto:hello@mansacoffee.example?subject=Bean%20Subscription%20-%20House%20Blend"><?php echo esc_html__( 'Subscribe — $17/mo', 'slow-pour-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","fontSize":"small","textColor":"border-muted"} -->
<p class="has-text-align-center has-border-muted-color has-text-color has-small-font-size"><?php echo wp_kses_post( __( 'Questions? Email <a href="mailto:hello@mansacoffee.example">hello@mansacoffee.example</a>. We roast Tuesday and Friday mornings.', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo slow_pour_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
