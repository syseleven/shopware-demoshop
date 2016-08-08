<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:45:24
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/login/view/main.js" */ ?>
<?php /*%%SmartyHeaderCode:173522505457a257e4830606-85196368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbc6e4a8e579ee4bc2d2a57b8e157099d6727721' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/login/view/main.js',
      1 => 1470256651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173522505457a257e4830606-85196368',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a257e4833f04_44529204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a257e4833f04_44529204')) {function content_57a257e4833f04_44529204($_smarty_tpl) {?>/**
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
 * @package    Login
 * @subpackage Main
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Login.view.Main', {
    extend: 'Ext.window.Window',
    width: 360,
    height: 435,
    ui: 'shopware-ui',
    cls: 'login-window',
    shadow: false,
    preventHeader: true,
    footerButton: false,
    border: false,
    resizable: false,
    maximizable: false,
    plain: true,
    header: false,

    /**
     * Initialize the component and bind an event listener to
     * the `onWindowResize` to center the window.
     *
     * @returns { Void }
     */
    initComponent: function() {
        var me = this;

        me.callParent();

        Ext.EventManager.onWindowResize(function() { me.center(); })
    }
});
<?php }} ?>