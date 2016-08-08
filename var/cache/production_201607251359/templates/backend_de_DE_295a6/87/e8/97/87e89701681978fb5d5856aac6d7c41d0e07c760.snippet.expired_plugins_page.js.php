<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:50:24
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/expired_plugins_page.js" */ ?>
<?php /*%%SmartyHeaderCode:1849346357a259106a4d37-46803606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87e89701681978fb5d5856aac6d7c41d0e07c760' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/expired_plugins_page.js',
      1 => 1470256597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1849346357a259106a4d37-46803606',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a259106b4a89_46074972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a259106b4a89_46074972')) {function content_57a259106b4a89_46074972($_smarty_tpl) {?>/**
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
 * @subpackage List
 * @version    $Id$
 * @author shopware AG
 */
//

//
Ext.define('Shopware.apps.PluginManager.view.list.ExpiredPluginsPage', {
    extend: 'Ext.container.Container',
    autoScroll: true,
    cls: 'plugin-manager-listing-page',
    alias: 'widget.plugin-manager-expired-plugins-page',

    initComponent: function() {
        var me = this;

        me.expiredStore = Ext.create('Shopware.apps.PluginManager.store.ExpiredPlugins', {
            autoLoad: true
        });
        me.items = [ me.createFilterPanel(), me.createStoreListing() ];

        me.callParent(arguments);
    },

    createFilterPanel: function() {
        return Ext.create('Ext.container.Container', {
            border: false,
            items: [
                Ext.create('Ext.container.Container', {
                    html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"expired_plugins/headline",'default'=>'We hope you enjoyed using the plugins','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"expired_plugins/headline",'default'=>'We hope you enjoyed using the plugins','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Profitieren Sie langfristig von den Vorzügen Ihrer getesteten Plugins<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"expired_plugins/headline",'default'=>'We hope you enjoyed using the plugins','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    cls: 'headline',
                    padding: '30 30 0 30'
                }),
                Ext.create('Ext.container.Container', {
                    html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"expired_plugins/description_text",'default'=>'The test phase for the following plugins is expired. You can now easily buy the plugins via Plugin Manager. If you did not like the plugin you can easily uninstall it.','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"expired_plugins/description_text",'default'=>'The test phase for the following plugins is expired. You can now easily buy the plugins via Plugin Manager. If you did not like the plugin you can easily uninstall it.','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Die kostenfreie Testversion folgender Plugins ist <b>abgelaufen</b>. Um langfristig in Ihrem Online-Shop von den Vorzügen der Erweiterungen <b>profitieren</b> zu können, <b>erwerben</b> Sie die Plugins ganz <b>bequem</b> über Ihren Pluginmanager. Alternativ können Sie die Erweiterungen <b>deinstallieren</b>.<br><br> Zudem haben Sie über die Bewertungsfunktion in Ihrem Account die Möglichkeit, <b>Feedback</b> zu Ihren getesteten Erweiterungen abzugeben sowie <b>Verbesserungswünsche</b> zu äußern.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"expired_plugins/description_text",'default'=>'The test phase for the following plugins is expired. You can now easily buy the plugins via Plugin Manager. If you did not like the plugin you can easily uninstall it.','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    padding: '10 30 0 30'
                })
            ]
        });
    },

    createStoreListing: function() {
        var me = this;

        me.listing = Ext.create('PluginManager.components.Listing', {
            store: me.expiredStore,
            padding: 30,
            width: 1007,
            addItems: function(records) {
                var me = this, plugins = [];

                Ext.each(records, function(record) {
                    var item = Ext.create('PluginManager.components.ExpiredPlugin', {
                        record: record
                    });

                    plugins.push(item);
                });
                me.listingContainer.add(plugins);
            }
        });

        me.content = Ext.create('Ext.container.Container', {
            items: [
                me.listing
            ]
        });

        return me.content;
    }
});
//<?php }} ?>