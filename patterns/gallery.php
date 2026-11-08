<?php
/**
 * Title: Gallery
 * Slug: slow-pour-lite/gallery
 * Categories: slow-pour-lite
 * Description: A grid of captioned photos.
 * Keywords: gallery, photos, images
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
<section class="wp-block-group alignfull sp-section" id="gallery">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'The Space', 'slow-pour-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Come see for yourself.', 'slow-pour-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"14rem"},"className":"sp-gallery"} -->
<div class="wp-block-group sp-gallery">
<!-- wp:image {"id":"__ID_bar__","sizeSlug":"large","linkDestination":"none","className":"sp-photo"} -->
<figure class="wp-block-image size-large sp-photo"><img src="__SRC_bar__" alt="<?php echo esc_attr__( 'Close-up of the brass group head and wooden handle of a copper lever espresso machine', 'slow-pour-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_bar__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'The bar. Goldie, our copper lever machine, at work', 'slow-pour-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_pour__","sizeSlug":"large","linkDestination":"none","className":"sp-photo"} -->
<figure class="wp-block-image size-large sp-photo"><img src="__SRC_pour__" alt="<?php echo esc_attr__( 'A barista pouring from a paper filter of ground coffee into a glass carafe with a wooden collar', 'slow-pour-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_pour__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Pour-over station. A paper filter and a glass carafe, slow bar, Saturday morning', 'slow-pour-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_latte__","sizeSlug":"large","linkDestination":"none","className":"sp-photo"} -->
<figure class="wp-block-image size-large sp-photo"><img src="__SRC_latte__" alt="<?php echo esc_attr__( 'A flat white seen from above on a white table, with a leaf pattern in the milk foam', 'slow-pour-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_latte__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Latte art. Tulip pour on the Oat Flat White', 'slow-pour-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_space__","sizeSlug":"large","linkDestination":"none","className":"sp-photo"} -->
<figure class="wp-block-image size-large sp-photo"><img src="__SRC_space__" alt="<?php echo esc_attr__( 'A round wooden table by a tall window, with a French press, two cups and a potted plant', 'slow-pour-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_space__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'The space. Natural light, wooden tables and plants', 'slow-pour-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","className":"sp-muted"} -->
<p class="has-text-align-center sp-muted"><?php echo wp_kses_post( __( 'More on Instagram: <a href="https://instagram.com">Follow us on Instagram</a>', 'slow-pour-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo slow_pour_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
