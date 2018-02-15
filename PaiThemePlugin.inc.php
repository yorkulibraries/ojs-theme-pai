<?php

/**
 * @file plugins/themes/pai/PaiThemePlugin.inc.php
 *
 * @class PaiThemePlugin
 * @ingroup plugins_themes_pai
 *
 * @brief Pai theme
 */
import('lib.pkp.classes.plugins.ThemePlugin');

class PaiThemePlugin extends ThemePlugin {
	/**
	 * Initialize the theme's styles, scripts and hooks. This is only run for
	 * the currently active theme.
	 *
	 * @return null
	 */
	public function init() {
		$this->setParent('defaultthemeplugin');
		$this->modifyStyle('stylesheet', array('addLess' => array('styles/variables.less', 'styles/head.less', 'styles/footer.less')));
	}

	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return 'pai';
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return 'Problem as Inspiration';
	}
}

?>
