<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:31:35
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/premium_plugins_page.js" */ ?>
<?php /*%%SmartyHeaderCode:2712426757a254a73f7e37-56553217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f38253009606f8a08c892e72114f7464900e246c' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/premium_plugins_page.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2712426757a254a73f7e37-56553217',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a254a74224a6_47380848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a254a74224a6_47380848')) {function content_57a254a74224a6_47380848($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.PluginManager.view.list.PremiumPluginsPage', {
    extend: 'Shopware.apps.PluginManager.view.list.StoreListingPage',
    alias: 'widget.plugin-manager-premium-plugins-page',

    mixins: {
        events: 'Shopware.apps.PluginManager.view.PluginHelper'
    },

    initComponent: function() {
        var me = this;

        me.callParent(arguments);

        Shopware.app.Application.on('plugin-reloaded', function(plugin) {
            me.communityStore.each(function(record, index) {
                if (record && record.get('technicalName') == plugin.get('technicalName')) {
                    me.communityStore.remove(record);
                }
            });

            if (plugin.get('id') > 0) {
                plugin.set('groupingState', null);
                plugin.dirty = false;
                try {
                    me.communityStore.add(plugin);
                } catch (e) {
                    me.communityStore.load();
                }
            }

            me.communityStore.sort();
            me.communityStore.group();
            me.hideLoadingMask();
        });
    },

    createStoreListing: function() {
        var me = this;

        var content = me.callParent(arguments);

        me.communityStore.filter({ property: "premium", value: true });
        me.communityStore.load();

        return content;
    },

    createListing: function() {
        var me = this;

        var listing = me.callParent(arguments);

        listing.addItems = function(records) {
            var self = this, plugins = [];

            Ext.each(records, function (record) {
                plugins.push(me.createListItem(record));
            });

            self.listingContainer.add(plugins);
        };


        return listing;
    },

    createFilterPanel: function() {
        return Ext.create('Ext.container.Container', {
            border: false,
            items: [
                Ext.create('Ext.container.Container', {
                    html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"premium_plugins/headline",'default'=>'Shopware Premium Plugins - Try for free!','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"premium_plugins/headline",'default'=>'Shopware Premium Plugins - Try for free!','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopware Premium Plugins - 30 Tage kostenlos testen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"premium_plugins/headline",'default'=>'Shopware Premium Plugins - Try for free!','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    cls: 'headline',
                    padding: '30 30 0 30'
                }),
                Ext.create('Ext.container.Container', {
                    html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"premium_plugins/description_text",'default'=>'Try our premium plugins 30 days free of charge and without obligation.','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"premium_plugins/description_text",'default'=>'Try our premium plugins 30 days free of charge and without obligation.','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erweitere Deinen Store um hochwertige Premium Features und bau den Erfolg Deines Online-Business weiter aus. Nutze die Gelegenheit Dich von der Qualität und dem Nutzen der Shopware Premium Plugins zu überzeugen. Teste jetzt \<b\>völlig unverbindlich\</b\> unsere Premium Plugins für volle \<b\>30 Tage lang kostenlos\</b\>.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"premium_plugins/description_text",'default'=>'Try our premium plugins 30 days free of charge and without obligation.','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    padding: '10 30 0 30'
                })
            ]
        });
    },

    createListItem: function(record) {
        var me = this;

        return Ext.create('PluginManager.components.StorePlugin', {
            record: record,
            onClickElement: function(record) {
                var me = this;
                me.displayPluginEvent(record, function(detailWindow) {
                    detailWindow.setActivePriceTab('test');
                });
            },
            createButton: function() {
                var me = this,
                         cls,
                         text,
                         handlerCallback = function() {
                            me.displayPluginEvent(record, function(detailWindow) {
                                detailWindow.setActivePriceTab('test');
                            });
                        };

                switch(true) {
                    case record.allowUpdate():
                        return Ext.create('PluginManager.container.Container', {
                            cls: 'button update',
                            html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"update_plugin",'default'=>'Update','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"update_plugin",'default'=>'Update','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktualisieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"update_plugin",'default'=>'Update','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            handler: function() {
                                me.updatePluginEvent(record);
                            }
                        });

                    case record.allowInstall():
                        return Ext.create('PluginManager.container.Container', {
                            cls: 'button install',
                            html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"install",'default'=>'Install','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"install",'default'=>'Install','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Installieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"install",'default'=>'Install','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            handler: function() {
                                me.registerConfigRequiredEvent(record);
                                me.installPluginEvent(record);
                            }
                        });

                    case record.allowActivate():
                        return Ext.create('PluginManager.container.Container', {
                            cls: 'button activate',
                            html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"activate",'default'=>'Activate','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"activate",'default'=>'Activate','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktivieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"activate",'default'=>'Activate','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            handler: function() {
                                me.activatePluginEvent(record);
                            }
                        });

                    case record.allowConfigure():
                        return Ext.create('PluginManager.container.Container', {
                            cls: 'button configure',
                            html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"configure",'default'=>'Configure','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"configure",'default'=>'Configure','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Konfigurieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"configure",'default'=>'Configure','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            handler: handlerCallback
                        });

                    case record.isAdvancedFeature():
                    case record.isLocalPlugin():
                        return Ext.create('PluginManager.container.Container', {
                            cls: 'button locale',
                            html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"open",'default'=>'Open','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"open",'default'=>'Open','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Öffnen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"open",'default'=>'Open','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            handler: handlerCallback
                        });
                }


                return Ext.create('PluginManager.container.Container', {
                    cls: 'button configure',
                    html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"premium_plugins/try_button",'default'=>'Try now','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"premium_plugins/try_button",'default'=>'Try now','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jetzt testen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"premium_plugins/try_button",'default'=>'Try now','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    handler: handlerCallback
                });
            }
        });
    }

});
//<?php }} ?>