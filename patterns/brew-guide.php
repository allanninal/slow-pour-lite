<?php
/**
 * Title: Brew guide
 * Slug: slow-pour-lite/brew-guide
 * Categories: slow-pour-lite
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
<section class="wp-block-group alignfull sp-section" id="brew">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Brew Guide', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Brew it like we do.', 'slow-pour-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-lede-left sp-muted"} -->
<p class="sp-lede-left sp-muted"><?php echo esc_html__( 'Four recipes to start from. Weigh the coffee and the water: it is the one habit that makes every cup better. If a cup tastes sour, grind finer; if it tastes bitter, grind coarser.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"10rem"},"className":"sp-brew-index"} -->
<div class="wp-block-group sp-brew-index">
<!-- wp:paragraph {"className":"sp-brew-jump"} -->
<p class="sp-brew-jump"><?php echo wp_kses_post( __( '<a href="#v60"><strong>V60 pour-over</strong><br><span class="sp-faint">15 g · 1:16.7 · 2:30–3:00</span></a>', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-brew-jump"} -->
<p class="sp-brew-jump"><?php echo wp_kses_post( __( '<a href="#aeropress"><strong>AeroPress</strong><br><span class="sp-faint">15 g · 1:14.7 · 2:00</span></a>', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-brew-jump"} -->
<p class="sp-brew-jump"><?php echo wp_kses_post( __( '<a href="#french-press"><strong>French press</strong><br><span class="sp-faint">30 g · 1:16.7 · 4:00</span></a>', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-brew-jump"} -->
<p class="sp-brew-jump"><?php echo wp_kses_post( __( '<a href="#espresso"><strong>Espresso</strong><br><span class="sp-faint">18 g · 1:2 · 25–30 seconds</span></a>', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"},"className":"sp-recipes"} -->
<div class="wp-block-group sp-recipes">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-card sp-recipe"} -->
<div class="wp-block-group sp-card sp-recipe" id="v60">
<!-- wp:heading {"level":3,"className":"sp-origin__region"} -->
<h3 class="wp-block-heading sp-origin__region"><?php echo esc_html__( 'V60 pour-over', 'slow-pour-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-muted"} -->
<p class="sp-muted"><?php echo esc_html__( 'Clean and bright: the cup that shows a light roast best.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"7rem"},"className":"sp-facts"} -->
<div class="wp-block-group sp-facts">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Coffee', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '15 g', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Water', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '250 g', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Ratio', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '1:16.7', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Water temp', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '93°C / 199°F', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Grind', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Medium-fine, like table salt', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Time', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '2:30–3:00', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:list {"ordered":true,"className":"sp-steps"} -->
<ol class="wp-block-list sp-steps">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Rinse the paper filter with hot water and pour that water away.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Add the coffee, shake it level, and start a timer.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Pour 30 g of water to wet all the grounds, then wait 30–45 seconds (the bloom).', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Pour in slow circles to 150 g by 1:00, then to 250 g by 1:45.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Let it drain. It should finish between 2:30 and 3:00.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
</ol>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo wp_kses_post( __( 'Try it with <a href="__PAGE_our-beans__">Yirgacheffe, Ethiopia</a> (light roast: stone fruit, jasmine, bergamot).', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-card sp-recipe"} -->
<div class="wp-block-group sp-card sp-recipe" id="aeropress">
<!-- wp:heading {"level":3,"className":"sp-origin__region"} -->
<h3 class="wp-block-heading sp-origin__region"><?php echo esc_html__( 'AeroPress', 'slow-pour-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-muted"} -->
<p class="sp-muted"><?php echo esc_html__( 'Quick and forgiving, at home or on the road.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"7rem"},"className":"sp-facts"} -->
<div class="wp-block-group sp-facts">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Coffee', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '15 g', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Water', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '220 g', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Ratio', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '1:14.7', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Water temp', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '85°C / 185°F', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Grind', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Medium-fine', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Time', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '2:00', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:list {"ordered":true,"className":"sp-steps"} -->
<ol class="wp-block-list sp-steps">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Put a rinsed paper filter in the cap and stand the AeroPress on a sturdy mug.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Add the coffee, then all 220 g of water. Stir for 10 seconds.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Put the plunger in a little way to stop the drip, and wait until 1:30.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Press down slowly for about 30 seconds, stopping at the hiss.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
</ol>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo wp_kses_post( __( 'Try it with <a href="__PAGE_our-beans__">Yirgacheffe, Ethiopia</a> (light roast: stone fruit, jasmine, bergamot).', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-card sp-recipe"} -->
<div class="wp-block-group sp-card sp-recipe" id="french-press">
<!-- wp:heading {"level":3,"className":"sp-origin__region"} -->
<h3 class="wp-block-heading sp-origin__region"><?php echo esc_html__( 'French press', 'slow-pour-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-muted"} -->
<p class="sp-muted"><?php echo esc_html__( 'Heavy and round. A medium roast shines here.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"7rem"},"className":"sp-facts"} -->
<div class="wp-block-group sp-facts">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Coffee', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '30 g', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Water', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '500 g', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Ratio', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '1:16.7', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Water temp', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '94°C / 201°F', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Grind', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Coarse, like sea salt', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Time', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '4:00', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:list {"ordered":true,"className":"sp-steps"} -->
<ol class="wp-block-list sp-steps">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Add the coffee, then all 500 g of water, and start a timer.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Stir once so every ground is wet. Put the lid on, plunger up.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'At 4:00, stir the crust on top and spoon off the foam.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Press the plunger down gently and pour it all out, so it stops brewing.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
</ol>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo wp_kses_post( __( 'Try it with <a href="__PAGE_our-beans__">Huila, Colombia</a> (medium roast: dark chocolate, blood orange, walnut).', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-card sp-recipe"} -->
<div class="wp-block-group sp-card sp-recipe" id="espresso">
<!-- wp:heading {"level":3,"className":"sp-origin__region"} -->
<h3 class="wp-block-heading sp-origin__region"><?php echo esc_html__( 'Espresso', 'slow-pour-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-muted"} -->
<p class="sp-muted"><?php echo esc_html__( 'Our Huila lot is the backbone of the house espresso.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"7rem"},"className":"sp-facts"} -->
<div class="wp-block-group sp-facts">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Coffee', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '18 g', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'In the cup', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '36 g', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Ratio', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '1:2', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Water temp', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '93°C / 199°F', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Grind', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Fine', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-fact"} -->
<div class="wp-block-group sp-fact">
<!-- wp:paragraph {"className":"sp-label"} -->
<p class="sp-label"><?php echo esc_html__( 'Time', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '25–30 seconds', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:list {"ordered":true,"className":"sp-steps"} -->
<ol class="wp-block-list sp-steps">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Dose 18 g into a dry basket, level it and tamp it flat.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Start the shot and stop it at 36 g in the cup.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Aim for 25–30 seconds. Too fast: grind finer. Too slow: grind coarser.', 'slow-pour-lite' ); ?></li>
<!-- /wp:list-item -->
</ol>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"sp-muted","fontSize":"small"} -->
<p class="has-small-font-size sp-muted"><?php echo wp_kses_post( __( 'Try it with <a href="__PAGE_our-beans__">Huila, Colombia</a> (medium roast: dark chocolate, blood orange, walnut).', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo slow_pour_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
