<?php
/**
 * Typography test page for SilverStripe
 * =====================================
 *
 * A SilerStripe extension to add a typography test page to your website
 *
 * Once installed, run a flush=1 and access /typo on your website
 * eg: www.exmaple.com/typo
 *
 * License: MIT-style license http://opensource.org/licenses/MIT
 * Authors: Techno Joy development team (www.technojoy.co.nz)
 * Inspired by http://sunny.svnrepository.com/svn/sunny-side-up-general/typography/trunk/
 */
class Typo extends Page_Controller{

	public function init() {
		parent::init();
		Requirements::javascript(
			basename(dirname(dirname(__FILE__))) . "/javascript/typo.js"
		);
	}
}