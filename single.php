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

if ( 'team-member' === get_post_type() ) {
	new Post_Team_Member();
}
else {
	new Post_Single();
}

genesis();
