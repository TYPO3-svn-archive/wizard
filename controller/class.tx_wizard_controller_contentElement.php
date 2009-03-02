<?php
/***************************************************************
 *  Copyright notice
 *
 *  Copyright (c) 2009, AOE media GmbH <dev@aoemedia.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

	// autoload the mvc
t3lib_extMgm::isLoaded('mvc', true);
tx_mvc_common_classloader::loadAll();

/**
 * Content element controller
 *
 * {@inheritdoc}
 *
 * class.tx_wizard_controller_contentElement.php
 *
 * @author Michael Klapper <klapper@aoemedia.de>
 * @copyright Copyright (c) 2009, AOE media GmbH <dev@aoemedia.de>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version $Id: class.tx_wizard_controller_contentElement.php $
 * @date 01.03.2009 - 23:21:51
 * @see tx_mvc_controller_action
 * @category controller
 * @package TYPO3
 * @subpackage wizard
 * @access public
 */
class tx_wizard_controller_contentElement extends tx_mvc_controller_action {

	/**
	 * @var string
	 */
	protected $extensionKey = 'wizard';

	/**
	 * @var string
	 */
	protected $defaultActionMethodName = 'indexAction';

	/**
	 * @var string
	 */
	protected $argumentsNamespace = 'wizard';

	/**
	 * Called before processing - used to initialise the arguments
	 *
	 * @access protected
	 * @return void
	 */
	protected function initializeArguments() {
		//!TODO implement function "initializeArguments"
	}

	/**
	 * functionDescription
	 *
	 * @access public
	 * @return string HTML formated output
	 */
	public function indexAction() {
		$this->view->setTemplate($this->configuration->get('template.index'));

		//!TODO implement function "indexAction"

		return $this->view->render();
	}

	/**
	 * Custom error method called automaticly when not available action is called
	 *
	 * @todo Reconsider error handling
	 * @see tx_wizard_controller_contentElement::indexAction()
	 * @access public
	 * @return string
	 */
	public function errorAction () {
		return $this->routeToAction('indexAction');
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/wizard/controller/class.tx_wizard_controller_contentElement.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/wizard/controller/class.tx_wizard_controller_contentElement.php']);
}
?>