<?php
/**
 * GenesisChildTheme
 *
 * @package GenesisChildTheme
 * @author  Robert Wrześniacki
 * @link    https://raw-code.it
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';
// Child theme main settings.

require_once CHILD_DIR . '/includes/class-theme.php';

// Layout classes.
require_once CHILD_DIR . '/includes/layout/class-header.php';
require_once CHILD_DIR . '/includes/layout/class-footer.php';
require_once CHILD_DIR . '/includes/layout/class-page-template.php';
require_once CHILD_DIR . '/includes/layout/class-page-archive.php';
require_once CHILD_DIR . '/includes/layout/class-post-single.php';
require_once CHILD_DIR . '/includes/layout/class-post-team-member.php';
require_once CHILD_DIR . '/includes/layout/class-archive-team-member.php';

// Structure classes.
require_once CHILD_DIR . '/includes/structure/header.php';
require_once CHILD_DIR . '/includes/structure/footer.php';

// Settings for Advanced Custom Fields PRO.
require_once CHILD_DIR . '/includes/class-acf.php';

// Team member.
require_once CHILD_DIR . '/includes/class-team-member.php';
