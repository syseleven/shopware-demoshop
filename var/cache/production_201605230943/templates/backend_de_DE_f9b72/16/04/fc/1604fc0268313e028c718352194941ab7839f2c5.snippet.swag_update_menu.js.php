<?php /* Smarty version Smarty-3.1.12, created on 2016-08-02 11:09:11
         compiled from "/var/www/html/shopware.agnostic.syseleven.de/engine/Shopware/Plugins/Default/Backend/SwagUpdate/Views/backend/index/view/swag_update_menu.js" */ ?>
<?php /*%%SmartyHeaderCode:95945974757a0633706d317-31885370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1604fc0268313e028c718352194941ab7839f2c5' => 
    array (
      0 => '/var/www/html/shopware.agnostic.syseleven.de/engine/Shopware/Plugins/Default/Backend/SwagUpdate/Views/backend/index/view/swag_update_menu.js',
      1 => 1463989432,
      2 => 'file',
    ),
    'a57f13d76fdd17c99c3639428390525a7517a3d9' => 
    array (
      0 => '/var/www/html/shopware.agnostic.syseleven.de/themes/Backend/ExtJs/backend/index/view/widgets/base.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95945974757a0633706d317-31885370',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a06337077849_44513818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a06337077849_44513818')) {function content_57a06337077849_44513818($_smarty_tpl) {?>/**
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

/**
 * Base for Shopware Widgets
 *
 * This file contains a basic class for all widgets in the backend. Please
 * note that this class is just a base file and does only contain base logic that applies to all widgets.
 */
Ext.define('Shopware.apps.Index.view.widgets.Base', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.widget-base',
    layout: 'fit',
    anchor: '100%',
    minHeight: 200,
    cls: Ext.baseCSSPrefix + 'widget-component',
    bodyPadding: '16 28',
    frame: true,
    closable: false,
    collapsible: false,

    initComponent: function() {
        var me = this,
            tools = me.tools || [],
            defaults = [{
                type: 'close',
                margin: '0 8',
                scope: me,
                handler: function() {
                    me.fireEvent('closeWidget', me);
                }
            }];

        me.tools = Ext.Array.merge(tools, defaults);

        me.callParent();
    }
});

Ext.define('Ext.chart.theme.Widget', {
    extend: 'Ext.chart.theme.Base',

    constructor: function (config) {
        this.callParent([Ext.apply({
            axis: {
                stroke: '#536773',
                'stroke-width': 1
            },
            series: {
                'stroke-width': 0
            },
            marker: {
                stroke: '#2EDC79',
                radius: 3,
                size: 3
            },
            colors: [ '#2EDC79', '#13C6A2' ],
            seriesThemes: [{
                fill: '#2EDC79'
            }, {
                fill: '#13C6A2'
            },{
                fill: '#2EDC79'
            }, {
                fill: '#13C6A2'
            }],
            markerThemes: [{
                fill: '#2EDC79',
                type: 'circle'
            }, {
                fill: '#2EDC79',
                type: 'cross'
            }, {
                fill: '#2EDC79',
                type: 'plus'
            }, {
                fill: '#13C6A2',
                type: 'circle'
            }, {
                fill: '#13C6A2',
                type: 'cross'
            }]
        }, config)]);
    }
});

<?php }} ?>