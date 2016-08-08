<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:50:24
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/detail/header.js" */ ?>
<?php /*%%SmartyHeaderCode:168710794557a2591078a155-81927959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b77eb591688d2f29876be1910b3ef30182f844ad' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/detail/header.js',
      1 => 1470256597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168710794557a2591078a155-81927959',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a25910799192_51840970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a25910799192_51840970')) {function content_57a25910799192_51840970($_smarty_tpl) {?>/**
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
 * @package    PluginManager
 * @subpackage Detail
 * @version    $Id$
 * @author shopware AG
 */
//

//
Ext.define('Shopware.apps.PluginManager.view.detail.Header', {
    extend: 'Ext.container.Container',
    cls: 'store-plugin-detail-headline-container-content',
    layout: {
        type: 'hbox',
        align: 'stretch'
    },

    initComponent: function() {
        var me = this, certified = null, producer = null;

        if (!me.plugin) {
            return;
        }

        if (me.plugin.get('certified')) {
            certified = Ext.create('Ext.Component', {
                cls: 'headline-certified',
                html: '<span class="icon">&nbsp;</span><span class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"certified",'default'=>'Certified','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"certified",'default'=>'Certified','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Certified<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"certified",'default'=>'Certified','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>'
            });
        }

        if (me.plugin['getProducerStore'] instanceof Ext.data.Store) {
            var record = me.plugin['getProducerStore'].first();

            producer = Ext.create('Ext.Component', {
                cls: 'headline-author',
                margin: '5 0 0',
                html: '<span class="prefix"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"from_producer",'default'=>'Developed by','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"from_producer",'default'=>'Developed by','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erstellt von<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"from_producer",'default'=>'Developed by','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</span> ' + record.get('name')
            });
        }

        var image = null;

        if (me.plugin.get('iconPath')) {
            image = {
                xtype: 'component',
                cls: 'headline-image',
                width: 128,
                height: 128,
                html: '<img src="'+ me.plugin.get('iconPath') +'" />'
            };
        }

        me.items = [image, {
            xtype: 'container',
            cls: 'headline-right-container',
            flex: 1,
            layout: {
                type: 'vbox',
                align: 'stretch'
            },
            items: [
                {
                    xtype: 'component',
                    html: '<div>'+ me.plugin.get('label') + '</div>',
                    cls: 'headline-name',
                    width: 750
                },
                certified,
                producer
            ]
        }];

        me.callParent(arguments);
    }
});
//<?php }} ?>