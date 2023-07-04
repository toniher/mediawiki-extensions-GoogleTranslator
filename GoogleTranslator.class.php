<?php
if (!defined('MEDIAWIKI')) die();
/**
 * Class file for the GoogleTranslator extension
 *
 * @addtogroup Extensions
 * @author Joachim De Schrijver
 * @license LGPL
 */
class GoogleTranslator {
  static function GoogleTranslatorInSidebar( $skin, &$bar ) {

    $mylink1 = [
      'text'   => 'TestPage',
      'html'   => "<div id='google_translate_element'></div>"
    ];
		$bar['googletranslator'] = [ $mylink1 ];
		return true;
	}
}
