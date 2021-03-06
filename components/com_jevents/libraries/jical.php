<?php
/**
 * JEvents Component for Joomla 1.5.x
 *
 * @version     $Id: jical.php 1400 2009-03-30 08:45:17Z geraint $
 * @package     JEvents
 * @copyright   Copyright (C) 2008-2009 GWE Systems Ltd, 2006-2008 JEvents Project Group
 * @license     GNU/GPLv2, see http://www.gnu.org/licenses/gpl-2.0.html
 * @link        http://www.jevents.net
 */

defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * Utility class that holds an instanceof an iCalICSFile and its associated collection
 * of iCalEvent
 *
 */
class jIcal {
	var $icalFile;
	var $icalEvents;

	function iCal(){
		$this->icalEvents=array();
	}
}
