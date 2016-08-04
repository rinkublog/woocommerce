<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Legacy Abstract Product
 *
 * Legacy and deprecated functions are here to keep the WC_Abstract_Product
 * clean.
 * This class will be removed in future versions.
 *
 * @version  2.7.0
 * @package  WooCommerce/Abstracts
 * @category Abstract Class
 * @author   WooThemes
 */
abstract class WC_Abstract_Legacy_Product extends WC_Data {

	/**
	 * Get the product's post data.
	 *
	 * @deprecated 2.7.0
	 * @return WP_Post
	 */
	public function get_post_data() {
		return $this->post;
	}

	/**
	 * Get the title of the post.
	 *
	 * @deprecated 2.7.0
	 * @return string
	 */
	public function get_title() {
		return apply_filters( 'woocommerce_product_title', $this->post ? $this->post->post_title : '', $this );
	}

	/**
	 * Get the parent of the post.
	 *
	 * @deprecated 2.7.0
	 * @return int
	 */
	public function get_parent() {
		return apply_filters( 'woocommerce_product_parent', absint( $this->post->post_parent ), $this );
	}

}
