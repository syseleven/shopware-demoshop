<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:31:35
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/plugin_helper.js" */ ?>
<?php /*%%SmartyHeaderCode:81377425457a254a71d0498-60229823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '044445c2dfe11b666caaed2bb26c53bc8be798b3' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/plugin_helper.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81377425457a254a71d0498-60229823',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a254a721e833_69043770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a254a721e833_69043770')) {function content_57a254a721e833_69043770($_smarty_tpl) {?>/**
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
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */
//

//
Ext.define('Shopware.apps.PluginManager.view.PluginHelper', {

    displayPluginEvent: function(record, callback) {
        Shopware.app.Application.fireEvent(
            'display-plugin',
            record,
            callback
        );
    },

    getPluginReloadedEventName: function(plugin) {
        return 'plugin-reloaded-' + plugin.get('technicalName');
    },

    getPluginBoughEventName: function(plugin) {
        return 'plugin-bought-' + plugin.get('technicalName');
    },

    registerConfigRequiredEvent: function(record) {
        var me = this;

        var event = me.getPluginReloadedEventName(record);
        Shopware.app.Application.on(event, function(plugin) {
            if (plugin.get('formId') > 0) {
                me.displayPluginEvent(plugin);
            }
        }, me, { single: true });
    },

    downloadFreePluginEvent: function(record, price) {
        var me = this;

        Shopware.app.Application.fireEvent(
            'download-free-plugin',
            record,
            price,
            function() {
                me.fireReloadEvent(record);
            }
        );
    },

    buyPluginEvent: function(record, price) {
        var me = this;

        Shopware.app.Application.fireEvent(
            'buy-plugin',
            record,
            price,
            function() {
                me.fireReloadEvent(record);
            }
        );
    },

    rentPluginEvent: function(record, price) {
        var me = this;

        Shopware.app.Application.fireEvent(
            'rent-plugin',
            record,
            price,
            function() {
                me.fireReloadEvent(record);
            }
        );
    },

    pluginBoughtEvent: function(record) {
        var me = this;

        var event = me.getPluginBoughEventName(record);

        Shopware.app.Application.fireEvent(
            event,
            record
        );
    },

    updateDummyPluginEvent: function(record) {
        var me = this;

        Shopware.app.Application.fireEvent(
            'update-dummy-plugin',
            record,
            function() {
                me.firePluginEvent('install-plugin', record);
            }
        );
    },

    updatePluginEvent: function(record) {
        this.firePluginEvent('update-plugin', record, function() {
            Shopware.app.Application.fireEvent('load-update-listing');
        });
    },

    executePluginUpdateEvent: function(record, callback) {
        this.firePluginEvent('execute-plugin-update', record, callback);
    },

    installPluginEvent: function(record) {
        this.firePluginEvent('install-plugin', record);
    },

    uninstallPluginEvent: function(record) {
        this.firePluginEvent('uninstall-plugin', record);
    },

    reinstallPluginEvent: function(record) {
        this.firePluginEvent('reinstall-plugin', record);
    },

    activatePluginEvent: function(record) {
        this.firePluginEvent('activate-plugin', record);
    },

    deactivatePluginEvent: function(record) {
        this.firePluginEvent('deactivate-plugin', record);
    },

    deletePluginEvent: function(record) {
        var me = this;

        Shopware.app.Application.fireEvent('delete-plugin', record, function() {
            me.removeLocalData(record);
            Shopware.app.Application.fireEvent(me.getPluginReloadedEventName(record), record);
            Shopware.app.Application.fireEvent('plugin-reloaded', record);
        });
    },

    requestPluginTestVersionEvent: function(record, price) {
        var me = this;

        Shopware.app.Application.fireEvent(
            'request-plugin-test-version',
            record,
            price,
            function() {
                me.fireReloadEvent(record);
            }
        );
    },

    reloadPlugin: function(plugin, callback) {
        var me = this;

        plugin.reload({
            callback: function(updated) {
                var merged = me.mergePlugin(plugin, updated.data);
                var event = me.getPluginReloadedEventName(plugin);

                Shopware.app.Application.fireEvent(event, merged);
                Shopware.app.Application.fireEvent('plugin-reloaded', merged);

                if (Ext.isFunction(callback)) {
                    callback(merged);
                }
            }
        });
    },

    mergePlugin: function(plugin, data) {
        var whiteList = [
            'active', 'installationDate', 'version', 'localDescription',
            'capabilityInstall', 'capabilityUpdate',
            'capabilityActivate', 'id', 'formId', 'localIcon'
        ];

        Ext.each(whiteList, function(property) {
            if (data.hasOwnProperty(property)) {
                plugin.set(property, data[property]);
            }
        });

        plugin.set('groupingState', null);

        return plugin;
    },

    removeLocalData: function(record) {
        record.set('id', null);
        record.set('active', false);
        record.set('version', null);
        record.set('capabilityInstall', false);
        record.set('capabilityUpdate', false);
        record.set('capabilityActivate', false);
        record.set('formId', false);
        record.set('localIcon', false);
    },

    fireRefreshAccountData: function(response) {
        Shopware.app.Application.fireEvent(
            'refresh-account-data',
            response
        );
    },

    firePluginEvent: function(event, record, callback) {
        var me = this;

        Shopware.app.Application.fireEvent(
            event,
            record,
            function() {
                me.fireReloadEvent(record, callback);
            }
        );
    },

    fireReloadEvent: function(record, callback) {
        var me = this;

        Shopware.app.Application.fireEvent(
            'reload-plugin',
            record,
            callback
        );
    },

    sendAjaxRequest: function(url, params, callback, errorCallback) {
        var me = this;

        Ext.Ajax.request({
            url: url,
            method: 'POST',
            params: params,
            success: function(operation, opts) {
                var response = Ext.decode(operation.responseText);

                if (response.success === false) {
                    if (Ext.isFunction(errorCallback)) {
                        errorCallback(response);
                    } else {
                        me.displayErrorMessage(response);
                        me.hideLoadingMask();
                    }
                    return;
                }

                callback(response);
            }
        });
    },

    createDownloadMask: function(plugin, download, callback) {
        var icon;

        if (!plugin.get('iconPath')) {
            icon = '/themes/Backend/ExtJs/backend/_resources/resources/themes/images/shopware-ui/plugin_manager/default_icon.png';
        } else {
            icon = plugin.get('iconPath');
        }

        return Ext.create('Shopware.apps.PluginManager.view.components.DownloadWindow', {
            headline: plugin.get('label'),
            description: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"execute_plugin_download",'default'=>'Plugin is being downloaded','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"execute_plugin_download",'default'=>'Plugin is being downloaded','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugin wird heruntergeladen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"execute_plugin_download",'default'=>'Plugin is being downloaded','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            download: download,
            icon: icon,
            callback: callback
        });
    },

    displayLoadingMask: function(plugin, description, autoTimeout) {
        var me = this;

        me.hideLoadingMask();

        Shopware.app.Application.loadingMask = Ext.create('Shopware.apps.PluginManager.view.loading.Mask', {
            plugin: plugin,
            description: description
        });

        if (autoTimeout === false) {
            Shopware.app.Application.loadingMask.show();
            return;
        }

        Ext.Function.defer(function(deferPlugin) {
            if (!Shopware.app.Application.loadingMask) {
                return;
            }

            var loadingPlugin = Shopware.app.Application.loadingMask.plugin;
            if (loadingPlugin.get('technicalName') !== deferPlugin.get('technicalName')) {
                return;
            }
            me.hideLoadingMask();
        }, 15000, this, [plugin]);

        Shopware.app.Application.loadingMask.show();
    },

    hideLoadingMask: function() {
        if (Shopware.app.Application.loadingMask) {
            Shopware.app.Application.loadingMask.destroy();
        }
    },

    confirmMessage: function(title, message, callback, declineCallback) {
        var me = this;

        Ext.MessageBox.confirm(title, message, function (apply) {
            if (apply !== 'yes') {
                me.hideLoadingMask();

                if (Ext.isFunction(declineCallback)) {
                     declineCallback();
                }

                return;
            }
            callback();
        });
    },

    displayErrorMessage: function(response, callback) {
        var message = response.message;

        Shopware.Notification.createStickyGrowlMessage({
            title: 'Error',
            text: message,
            width: 350
        });

        callback = typeof callback === 'function' && callback || function() {};

        if (response.hasOwnProperty('authentication') && response.authentication) {
            Shopware.app.Application.fireEvent('open-login', callback);
        }

        this.hideLoadingMask();
    },

    getPriceByType: function(prices, type) {
        var me = this, price = null;

        prices.each(function(item) {
            if (item.get('type') == type) {
                price = item;
            }
        });
        return price;
    },

    formatDate: function(date) {
        var value = date.replace(' ', 'T');

        value += '+00:00';
        value = new Date(value);
        value = new Date((value.getTime() + (value.getTimezoneOffset() * 60 * 1000)));

        return value;
    },

    getTextForPriceType: function(type) {
        if (type == 'buy') {
            return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"buy_version",'default'=>'Purchase version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"buy_version",'default'=>'Purchase version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kaufversion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"buy_version",'default'=>'Purchase version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        }

        if (type == 'rent') {
            return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"rent_version",'default'=>'Rent version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"rent_version",'default'=>'Rent version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mietversion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"rent_version",'default'=>'Rent version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        }

        if (type == 'test') {
            return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"test_version",'default'=>'Test version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"test_version",'default'=>'Test version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Testversion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"test_version",'default'=>'Test version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }

        if (type == 'free') {
            return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"free_version",'default'=>'Free version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"free_version",'default'=>'Free version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kostenlose Version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"free_version",'default'=>'Free version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        }

        return null;
    }
});
//<?php }} ?>