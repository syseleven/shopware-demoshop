<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:18:41
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/index/model/widget_settings.js" */ ?>
<?php /*%%SmartyHeaderCode:124973980657a251a159d295-49587767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87bbe2ed7803292bff19925b692ab0d3531818a8' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/index/model/widget_settings.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124973980657a251a159d295-49587767',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a251a15a4145_18372490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a251a15a4145_18372490')) {function content_57a251a15a4145_18372490($_smarty_tpl) {?>/**
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
 */

//

Ext.define('Shopware.apps.Index.model.WidgetSettings', {

    extend: 'Ext.data.Model',

    fields: [
        'authId',
        'height',
        'columnsShown',
        'dock',
        'pinned',
        'minimized'
    ]
});

//
<?php }} ?>