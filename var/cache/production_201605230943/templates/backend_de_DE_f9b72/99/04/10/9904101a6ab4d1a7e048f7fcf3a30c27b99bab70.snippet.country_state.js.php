<?php /* Smarty version Smarty-3.1.12, created on 2016-08-02 11:09:10
         compiled from "/var/www/html/shopware.agnostic.syseleven.de/themes/Backend/ExtJs/backend/base/model/country_state.js" */ ?>
<?php /*%%SmartyHeaderCode:141854064957a06336395886-90165941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9904101a6ab4d1a7e048f7fcf3a30c27b99bab70' => 
    array (
      0 => '/var/www/html/shopware.agnostic.syseleven.de/themes/Backend/ExtJs/backend/base/model/country_state.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141854064957a06336395886-90165941',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a06336398869_02590817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a06336398869_02590817')) {function content_57a06336398869_02590817($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Base
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 */
//
Ext.define('Shopware.apps.Base.model.CountryState', {
    extend: 'Shopware.data.Model',
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'countryId', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'shortCode', type: 'string' },
        { name: 'position', type: 'int' },
        { name: 'active', type: 'boolean' }
    ]
});
//
<?php }} ?>