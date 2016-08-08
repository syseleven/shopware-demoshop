<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:50:24
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/local_plugin_listing_page.js" */ ?>
<?php /*%%SmartyHeaderCode:115253312357a25910559b19-13980306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ba7524ae51b3fdef32ec9dcaeabf424a4c9f6f' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/local_plugin_listing_page.js',
      1 => 1470256597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115253312357a25910559b19-13980306',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a259105c23d8_96686826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a259105c23d8_96686826')) {function content_57a259105c23d8_96686826($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.PluginManager.view.list.LocalPluginListingPage', {
    extend: 'Shopware.grid.Panel',
    alias: 'widget.plugin-manager-local-plugin-listing',
    cls: 'plugin-manager-local-plugin-listing',

    mixins: {
        events: 'Shopware.apps.PluginManager.view.PluginHelper'
    },
    viewConfig: {
        markDirty: false
    },

    configure: function() {
        return {
            addButton: false,
            pageSizeCombo: false,
            deleteButton: false,
            deleteColumn: false,
            editColumn: false,
            columns: {
                label: {
                    flex: 2,
                    header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"plugin_name",'default'=>'Plugin name','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"plugin_name",'default'=>'Plugin name','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pluginname<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"plugin_name",'default'=>'Plugin name','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    groupable: false,
                    renderer: this.nameRenderer,
                    editor: null
                },
                version: {
                    width: 60,
                    header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"version",'default'=>'Version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"version",'default'=>'Version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"version",'default'=>'Version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    groupable: false,
                    editor: null
                },
                installationDate: {
                    header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"installed_on",'default'=>'Installed on','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"installed_on",'default'=>'Installed on','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Installiert am<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"installed_on",'default'=>'Installed on','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    groupable: false,
                    renderer: this.dateRenderer,
                    editor: null
                },
                updateDate: {
                    header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"updated_on",'default'=>'Updated on','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"updated_on",'default'=>'Updated on','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktualisiert am<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"updated_on",'default'=>'Updated on','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    groupable: false,
                    renderer: this.dateRenderer,
                    editor: null
                },
                licenceCheck: {
                    flex: 2,
                    sortable: false,
                    groupable: false,
                    cls: 'licence-column',
                    header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"licence",'default'=>'License','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"licence",'default'=>'License','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Lizenz<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"licence",'default'=>'License','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    renderer: this.licenceRenderer,
                    editor: null
                },
                active: this.createActiveColumn,
                author: {
                    header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"from_producer",'default'=>'Developed by','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"from_producer",'default'=>'Developed by','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erstellt von<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"from_producer",'default'=>'Developed by','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    groupable: false,
                    renderer: this.authorRenderer,
                    editor: null
                }
            }
        };
    },

    initComponent: function() {
        var me = this;

        me.callParent(arguments);

        Shopware.app.Application.on('plugin-reloaded', function(plugin) {
            me.store.load();
            me.hideLoadingMask();
        });
    },

    createActionColumn: function () {
        var me = this;

        var actionColumn = me.callParent(arguments);

        actionColumn.width = 120;
        return actionColumn;
    },

    createSelectionModel: function() { },

    createActiveColumn: function() {
        var me = this,
            items = [];

        items.push({
            tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"activate_deactivate",'default'=>'Activate / Deactivate','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"activate_deactivate",'default'=>'Activate / Deactivate','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktivieren / Deaktivieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"activate_deactivate",'default'=>'Activate / Deactivate','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function(grid, rowIndex, colIndex, item, eOpts, record) {
                if (record.allowActivate()) {
                    me.activatePluginEvent(record);

                } else if (record.allowDeactivate()) {
                    me.deactivatePluginEvent(record);
                }
            },
            getClass: function(value, metaData, record) {
                if (!record.allowActivate() && !record.allowDeactivate()) {
                    return Ext.baseCSSPrefix + 'hidden';
                }

                if (record.allowActivate()) {
                    return 'sprite-ui-check-box-uncheck';
                } else {
                    return 'sprite-ui-check-box';
                }
            }
        });

        return {
            xtype: 'actioncolumn',
            width: 60,
            align: 'center',
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"active",'default'=>'Active','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"active",'default'=>'Active','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktiviert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"active",'default'=>'Active','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            groupable: false,
            items: items
        };
    },


    searchEvent: function(field, value) {
        var me = this;

        me.store.clearFilter();

        value = value.toLowerCase();

        me.store.filterBy(function(record, id) {
            var description = record.get('description') + '';
            var name = record.get('label') + '';
            var technicalName = record.get('technicalName') + '';
            var producer = '';

            if (record['getProducerStore']) {
                producer = record['getProducerStore'].first().get('name') + '';
            }

            name = name.toLowerCase();
            technicalName = technicalName.toLowerCase();
            producer = producer.toLowerCase();
            description = description.toLowerCase();

            return (
                name.indexOf(value) > -1
                || description.indexOf(value) > -1
                || producer.indexOf(value) > -1
                || technicalName.indexOf(value) > -1
            );
        });
    },

    createFeatures: function() {
        var me = this,
            items = me.callParent(arguments);

        me.groupingFeature = Ext.create('Ext.grid.feature.Grouping', {
            groupHeaderTpl: new Ext.XTemplate(
                '{name:this.formatName} ({rows.length} Plugins)',
                {
                    formatName: function(name) {
                        switch(name) {
                            case 2:
                                return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"group_headline_installed",'default'=>'Installed','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"group_headline_installed",'default'=>'Installed','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Installiert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"group_headline_installed",'default'=>'Installed','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
                            case 1:
                                return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"group_headline_deactivated",'default'=>'Inactive','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"group_headline_deactivated",'default'=>'Inactive','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Deaktiviert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"group_headline_deactivated",'default'=>'Inactive','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
                            case 0:
                                return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"group_headline_uninstalled",'default'=>'Uninstalled','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"group_headline_uninstalled",'default'=>'Uninstalled','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Deinstalliert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"group_headline_uninstalled",'default'=>'Uninstalled','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
                        }
                    }
                }
            )
        });

        items.push(me.groupingFeature);
        return items;
    },

    nameRenderer: function(value, metaData, record) {
        var name = record.get('label');

        if (!record.get('localIcon') || record.get('localIcon') == 'false') {
            return name;
        }

        return '<div style="display: inline-block; position:relative; top: 2px; margin-right: 6px; width:16px; height:16px; background:url('+record.get('localIcon')+') no-repeat"></div>' + name;
    },

    authorRenderer: function(value, metaData, record) {
        if (!record || !record['getProducerStore']) {
            return value;
        }

        var producer = record['getProducerStore'].first();
        var website = producer.get('website');

        if (producer.get('name') == 'shopware AG' && !website) {
            website = 'http://www.shopware.com';
        }

        if (website && website.length > 0) {
            return '<a href="' + website + '" target="_blank">'+producer.get('name')+'</a>'
        } else {
            return producer.get('name');
        }
    },

    dateRenderer: function(value) {
        if (!value || !value.hasOwnProperty('date')) {
            return value;
        }
        var date = this.formatDate(value.date);
        return Ext.util.Format.date(date);
    },

    licenceRenderer: function(value, metaData, record) {
        var me = this;

        if (!record || !record['getLicenceStore']) {
            return;
        }
        var result = '';
        try {
            var licence = record['getLicenceStore'].first(),
                price = licence['getPriceStore'].first(),
                type = me.getTextForPriceType(price.get('type')),
                expiration = licence.get('expirationDate');
            result += type;
            if (price.get('type') == 'unlicensed') {
                result = Ext.String.format('<div style="color: [0]">[1]</div>', '#ff0000', result);
            }
        } catch (e) {
            return result;
        }

        if (!expiration) {
            return result;
        }

        if (expiration) {
            var expirationDate = new Date(expiration.date),
                today = new Date();
            result += '<br><span class="label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"till",'default'=>'until','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"till",'default'=>'until','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
bis<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"till",'default'=>'until','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: </span><span class="date">' + Ext.util.Format.date(expiration.date) + '</span>';

            if (expirationDate < today) {
                result = Ext.String.format('<div style="color: [0]">[1]</div>', '#ff0000', result);
            }
        }

        return result;
    },

    createToolbarItems: function() {
        var me = this,
            items = me.callParent(arguments);

        Ext.Array.insert(items, 0, [
            me.createUploadButton()
        ]);

        return items;
    },

    createUploadButton: function() {
        var me = this;

        me.uploadButton = Ext.create('Ext.button.Button', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"upload_plugin",'default'=>'Upload plugin','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"upload_plugin",'default'=>'Upload plugin','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugin hochladen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"upload_plugin",'default'=>'Upload plugin','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            iconCls: 'sprite-plus-circle',
            handler: function() {
                me.fireEvent('open-plugin-upload');
            }
        });

        return me.uploadButton;
    },

    createActionColumnItems: function() {
        var me = this, items = [];

        items.push({
            iconCls: 'sprite-pencil',
            tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"open",'default'=>'Open','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"open",'default'=>'Open','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Öffnen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"open",'default'=>'Open','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function(grid, rowIndex, colIndex, item, eOpts, record) {
                me.displayPluginEvent(record);
            }
        });

        items.push({
            iconCls: 'sprite-plus-circle',
            tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"install",'default'=>'Install','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"install",'default'=>'Install','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Installieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"install",'default'=>'Install','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function(grid, rowIndex, colIndex, item, eOpts, record) {
                me.updateDummyPluginEvent(record);
            },
            getClass: function(value, metaData, record) {
                if (!record.allowDummyUpdate()) {
                    return Ext.baseCSSPrefix + 'hidden';
                }
            }
        });

        items.push({
            iconCls: 'sprite-minus-circle',
            tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"install_uninstall",'default'=>'Install / Uninstall','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"install_uninstall",'default'=>'Install / Uninstall','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Installieren / Deinstallieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"install_uninstall",'default'=>'Install / Uninstall','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function(grid, rowIndex, colIndex, item, eOpts, record) {
                if (record.allowInstall()) {
                    me.registerConfigRequiredEvent(record);

                    me.installPluginEvent(record);
                } else {
                    me.uninstallPluginEvent(record);
                }
            },
            getClass: function(value, metaData, record) {
                if (record.allowDummyUpdate()) {
                    return Ext.baseCSSPrefix + 'hidden';
                }

                if (record.allowInstall()) {
                    return 'sprite-plus-circle';
                }
            }
        });

        items.push({
            iconCls: 'sprite-arrow-continue',
            tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"reinstall",'default'=>'Reinstall','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"reinstall",'default'=>'Reinstall','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Neu installieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"reinstall",'default'=>'Reinstall','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function(grid, rowIndex, colIndex, item, eOpts, record) {
                me.reinstallPluginEvent(record);
            },
            getClass: function(value, metaData, record) {
                if (!record.allowReinstall()) {
                    return Ext.baseCSSPrefix + 'hidden';
                }
            }
        });

        items.push({
            iconCls: 'sprite-arrow-circle-135',
            tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"update_plugin",'default'=>'Update','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"update_plugin",'default'=>'Update','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktualisieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"update_plugin",'default'=>'Update','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function(grid, rowIndex, colIndex, item, eOpts, record) {
                me.updatePluginEvent(record);
            },
            getClass: function(value, metaData, record) {
                if (!record.allowUpdate()) {
                    return Ext.baseCSSPrefix + 'hidden';
                }
                this.items[4].tooltip = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"install_update",'default'=>'Install update','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"install_update",'default'=>'Install update','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Update installieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"install_update",'default'=>'Install update','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 (v ' + record.get('availableVersion') + ')';
            }
        });

        items.push({
            iconCls: 'sprite-bin-metal-full',
            tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"delete",'default'=>'Delete','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"delete",'default'=>'Delete','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Löschen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"delete",'default'=>'Delete','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function(grid, rowIndex, colIndex, item, eOpts, record) {
                me.deletePluginEvent(record);
            },
            getClass: function(value, metaData, record) {
                if (!record.allowDelete()) {
                    return Ext.baseCSSPrefix + 'hidden';
                }
            }
        });

        items.push({
            iconCls: 'sprite-arrow-circle-225-left',
            tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"local_update",'default'=>'Update','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"local_update",'default'=>'Update','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Update<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"local_update",'default'=>'Update','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function(grid, rowIndex, colIndex, item, eOpts, record) {
                me.executePluginUpdateEvent(record);
            },
            getClass: function(value, metaData, record) {
                if (!record.allowLocalUpdate()) {
                    return Ext.baseCSSPrefix + 'hidden';
                }
            }
        });

        return items;
    }
});
//<?php }} ?>