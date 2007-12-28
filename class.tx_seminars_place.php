<?php
/***************************************************************
* Copyright notice
*
* (c) 2007 Niels Pardon (mail@niels-pardon.de)
* All rights reserved
*
* This script is part of the TYPO3 project. The TYPO3 project is
* free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Class 'tx_seminars_place' for the 'seminars' extension.
 *
 * This class represents a place.
 *
 * @package		TYPO3
 * @subpackage	tx_seminars
 * @author		Niels Pardon <mail@niels-pardon.de>
 */

require_once(t3lib_extMgm::extPath('seminars').'lib/tx_seminars_constants.php');
require_once(t3lib_extMgm::extPath('seminars').'class.tx_seminars_objectfromdb.php');

class tx_seminars_place extends tx_seminars_objectfromdb {
	/** same as class name */
	var $prefixId = 'tx_seminars_place';
	/**  path to this script relative to the extension dir */
	var $scriptRelPath = 'class.tx_seminars_place.php';

	/**
	 * The constructor. Creates a place instance from a DB record.
	 *
	 * @param	integer		The UID of the place to retrieve from the DB.
	 * 						This parameter will be ignored if $dbResult is provided.
	 * @param	pointer		MySQL result pointer (of SELECT query)/DBAL object.
	 * 						If this parameter is provided, $uid will be ignored.
	 *
	 * @access	public
	 */
	function tx_seminars_place($sitesUid, $dbResult = null) {
		$this->init();
		$this->tableName = SEMINARS_TABLE_SITES;

		if (!$dbResult) {
			$dbResult = $this->retrieveRecord($sitesUid);
		}

		if ($dbResult && $GLOBALS['TYPO3_DB']->sql_num_rows($dbResult)) {
			$this->getDataFromDbResult(
				$GLOBALS['TYPO3_DB']->sql_fetch_assoc($dbResult)
			);
		}
	}

	/**
	 * Returns the UID of this place record.
	 *
	 * @return	integer		the UID of this record, will always be > 0
	 *
	 * @access	public
	 */
	function getUid() {
		return $this->getRecordPropertyInteger('uid');
	}

	/**
	 * Returns the title of this place record.
	 *
	 * @return	string		the title of this record, will not be empty
	 *
	 * @access	public
	 */
	function getTitle() {
		return $this->getRecordPropertyString('title');
	}

	/**
	 * Returns the name of the city of this place record.
	 *
	 * This should not return an empty string as the city field is a required
	 * field. But records that existed before, an empty string will be returned
	 * as they don't have the city set yet.
	 *
	 * @return	string		the name of the city, will be empty if the place
	 * 						record has no city set
	 *
	 * @access	public
	 */
	function getCity() {
		return $this->getRecordPropertyString('city');
	}

	/**
	 * Returns the ISO 3166-1 alpha-2 code for the country of this place or an
	 * empty string if this place has no country set.
	 *
	 * This method does not validate the value of the saved field value. As the
	 * country is selected and saved through the backend from a prefilled list,
	 * those values should be valid.
	 *
	 * @return	string		the ISO 3166-1 alpha-2 code of the country or an
	 * 						empty string if this place has no country set
	 *
	 * @access	public
	 */
	function getCountryIsoCode() {
		return $this->getRecordPropertyString('country');
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/seminars/class.tx_seminars_place.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/seminars/class.tx_seminars_place.php']);
}

?>
