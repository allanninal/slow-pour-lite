<?php
/**
 * Title: Our story
 * Slug: slow-pour-lite/story
 * Categories: slow-pour-lite
 * Description: The story behind the business, with a few key numbers.
 * Keywords: about, story, history, numbers
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
<section class="wp-block-group has-bg-card-background-color has-background alignfull sp-section" id="story">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Our Story', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Born from a road trip to Yirgacheffe.', 'slow-pour-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sp-muted"} -->
<p class="sp-muted"><?php echo esc_html__( 'Amara and Kwesi Osei grew up in a Ghanaian-American household in southeast Portland where the coffee was always from a supermarket can and always too strong. When Amara took a fellowship to Addis Ababa in 2016, she wandered into a coffee ceremony in a family home in Yirgacheffe and drank something she describes as &quot;the opposite of what I thought coffee was.&quot;', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-muted"} -->
<p class="sp-muted"><?php echo esc_html__( 'She called Kwesi that night. Two years later, they had visited both Ethiopia and Colombia, built relationships with Meseret Tafari at the Dara Hills Cooperative and Mateo Rincón at Finca El Alba Verde, and signed a lease on a 900 sq ft space on NW 23rd.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-muted"} -->
<p class="sp-muted"><?php echo esc_html__( 'They named the shop Mansa — &quot;king&quot; or &quot;chief&quot; in Manding — not out of grandeur, but out of conviction: good coffee deserves to be treated like royalty, from seed to cup.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-muted"} -->
<p class="sp-muted"><?php echo esc_html__( 'Goldie, the copper lever espresso machine behind the bar, was their first major purchase. She\'s been running six days a week (every day but Monday) since opening day in March 2019.', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"42%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-quote"} -->
<div class="wp-block-group sp-quote">
<!-- wp:paragraph {"className":"sp-quote__text"} -->
<p class="sp-quote__text"><?php echo esc_html__( '&quot;We want you to know exactly where your coffee comes from and whose hands picked it. That transparency doesn\'t cost extra — it\'s just honesty.&quot;', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sp-quote__by"} -->
<p class="sp-quote__by"><?php echo esc_html__( '— Amara Osei, Co-founder', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"6rem"},"className":"sp-stats"} -->
<div class="wp-block-group sp-stats">
<!-- wp:group {"layout":{"type":"default"},"className":"sp-stat"} -->
<div class="wp-block-group sp-stat">
<!-- wp:paragraph {"align":"center","className":"sp-stat__value"} -->
<p class="has-text-align-center sp-stat__value"><?php echo esc_html__( '2019', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"sp-label"} -->
<p class="has-text-align-center sp-label"><?php echo esc_html__( 'Founded', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-stat"} -->
<div class="wp-block-group sp-stat">
<!-- wp:paragraph {"align":"center","className":"sp-stat__value"} -->
<p class="has-text-align-center sp-stat__value"><?php echo esc_html__( '2', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"sp-label"} -->
<p class="has-text-align-center sp-label"><?php echo esc_html__( 'Farm partners', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"sp-stat"} -->
<div class="wp-block-group sp-stat">
<!-- wp:paragraph {"align":"center","className":"sp-stat__value"} -->
<p class="has-text-align-center sp-stat__value"><?php echo esc_html__( '6', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"sp-label"} -->
<p class="has-text-align-center sp-label"><?php echo esc_html__( 'Days a week', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo slow_pour_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
