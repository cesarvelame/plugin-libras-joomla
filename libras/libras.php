<?php
/**
 * @version     0.9.1
 * @package     plg_content_exampledate
 * @copyright   Copyright (C) 2011. All rights reserved.
 * @license     None
 * @author      Tobias Wallenqvist (tobias@aloq.se)
 */

// No direct access.
defined('_JEXEC') or die;

class plgContentLibras extends JPlugin
{
	public function __construct(& $subject, $config)
	{
		parent::__construct($subject, $config);
	}

	
	public function onContentPrepareForm($form, $data) {
		if($form->getName() == 'com_content.article') {
			JForm::addFormPath(dirname(__FILE__).'/articles');
			$form->loadFile('libras', false);
			
			//print_r($form);
		}
	}
}
