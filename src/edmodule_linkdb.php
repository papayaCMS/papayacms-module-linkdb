<?php
/**
* Module link db
*
* @copyright 2002-2007 by papaya Software GmbH - All rights reserved.
* @link http://www.papaya-cms.com/
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, version 2
*
* You can redistribute and/or modify this script under the terms of the GNU General Public
* License (GPL) version 2, provided that the copyright and license notes, including these
* lines, remain unmodified. papaya is distributed in the hope that it will be useful, but
* WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.
*
* @package Papaya-Modules
* @subpackage Free-LinkDatabase
* @version $Id: edmodule_linkdb.php 39512 2014-03-04 15:57:18Z weinert $
*/

/**
* Module link db
*
* @package Papaya-Modules
* @subpackage Free-LinkDatabase
*/
class edmodule_linkdb extends base_module {

  /**
  * permissions
  * @var array $permissions
  */
  var $permissions = array(
    1 => 'Manage',
    2 => 'View statistic',
    3 => 'Reset counter'
  );


  /**
  * Function for execute module
  *
  * @access public
  */
  function execModule() {
    if ($this->hasPerm(1, TRUE)) {
      $linkDatabase = new admin_linkdb;
      $linkDatabase->module = $this;
      $linkDatabase->layout = $this->layout;

      $linkDatabase->initialize();
      $linkDatabase->execute();
      $linkDatabase->getXML();
    }
  }
}
