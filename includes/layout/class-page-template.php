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
 * Base option for all page templates.
 */
class Page_Template {
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
		// .
	}
}
