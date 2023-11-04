<?php
/**
 * GenesisChildTheme
 *
 * @package GenesisChildTheme
 * @author  Robert Wrześniacki
 * @link    https://raw-code.it
 */

namespace GenesisChildTheme;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
};

/**
 * Creates Team Members custom post type. Handle all operation for this cpt.
 */
class Team_Member {
	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init_hooks();
	}

	/**
	 * Init Hooks.
	 */
	public function init_hooks() {
		add_action( 'init', array( $this, 'cpt_team_member_init' ) );
	}

	/**
	 * Registered Team Member custom post type.
	 */
	public function cpt_team_member_init() {
		$labels = [
			'name'                  => _x( 'Meet the team', 'Post type general name', 'genesis-child-theme' ),
			'singular_name'         => _x( 'Team Member', 'Post type singular name', 'genesis-child-theme' ),
			'menu_name'             => _x( 'Team Members', 'Admin Menu text', 'genesis-child-theme' ),
			'name_admin_bar'        => _x( 'Team Member', 'Add New on Toolbar', 'genesis-child-theme' ),
			'add_new'               => __( 'Add New', 'genesis-child-theme' ),
			'add_new_item'          => __( 'Add New Team Member', 'genesis-child-theme' ),
			'new_item'              => __( 'New Team Member', 'genesis-child-theme' ),
			'edit_item'             => __( 'Edit Team Member', 'genesis-child-theme' ),
			'view_item'             => __( 'View Team Member', 'genesis-child-theme' ),
			'all_items'             => __( 'All Team Members', 'genesis-child-theme' ),
			'search_items'          => __( 'Search Team Members', 'genesis-child-theme' ),
			'parent_item_colon'     => __( 'Parent Team Members:', 'genesis-child-theme' ),
			'not_found'             => __( 'No Team Members found.', 'genesis-child-theme' ),
			'not_found_in_trash'    => __( 'No Team Members found in Trash.', 'genesis-child-theme' ),
			'featured_image'        => _x( 'Team Member Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'genesis-child-theme' ),
			'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'genesis-child-theme' ),
			'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'genesis-child-theme' ),
			'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'genesis-child-theme' ),
			'archives'              => _x( 'Team Member archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'genesis-child-theme' ),
			'insert_into_item'      => _x( 'Insert into Team Member', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'genesis-child-theme' ),
			'uploaded_to_this_item' => _x( 'Uploaded to this Team Member', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'genesis-child-theme' ),
			'filter_items_list'     => _x( 'Filter Team Members list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'genesis-child-theme' ),
			'items_list_navigation' => _x( 'Team Members list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'genesis-child-theme' ),
			'items_list'            => _x( 'Team Members list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'genesis-child-theme' ),
		];

		$args = [
			'labels'             => $labels,
			'public'             => false,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => __( 'our-team', 'genesis-child-theme' ) ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'author', 'editor' ),
		];

		register_post_type( 'team-member', $args );
	}
	
}

new Team_Member();
