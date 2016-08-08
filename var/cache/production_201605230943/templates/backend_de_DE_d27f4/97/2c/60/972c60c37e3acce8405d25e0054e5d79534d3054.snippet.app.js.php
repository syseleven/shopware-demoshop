<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:31:34
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/app.js" */ ?>
<?php /*%%SmartyHeaderCode:97013462857a254a6d95bb7-44729473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '972c60c37e3acce8405d25e0054e5d79534d3054' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/app.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97013462857a254a6d95bb7-44729473',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a254a6dc9194_83203781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a254a6dc9194_83203781')) {function content_57a254a6dc9194_83203781($_smarty_tpl) {?>/**
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
 * @subpackage App
 * @version    $Id$
 * @author shopware AG
 */

//
Ext.define('Shopware.apps.PluginManager', {
    extend: 'Enlight.app.SubApplication',
    name: 'Shopware.apps.PluginManager',
    bulkLoad: true,
    loadPath: '<?php echo '/backend/PluginManager/load';?>',

    controllers: [
        'Main',
        'Navigation',
        'Plugin'
    ],

    views: [
        'PluginHelper',

        'components.Container',
        'components.ImageSlider',
        'components.Listing',
        'components.StorePlugin',
        'components.Tab',
        'components.Tree',

        'list.HomePage',
        'list.LocalPluginListingPage',
        'list.Navigation',
        'list.StoreListingPage',
        'list.UpdatePage',
        'list.LicencePage',
        'list.PremiumPluginsPage',
        'list.Window',


        'detail.Window',
        'detail.Container',
        'detail.Prices',
        'detail.Comments',
        'detail.Header',
        'detail.Meta',
        'detail.Actions',

        'loading.Mask',
        'account.Login',
        'account.LoginWindow',
        'account.Register',
        'account.Checkout',
        'account.Upload'

    ],

    stores: [
        'Basket',
        'Licence',
        'LocalPlugin',
        'StorePlugin',
        'Category',
        'UpdatePlugins'
    ],

    models: [
        'Licence',
        'Plugin',
        'Comment',
        'Picture',
        'Basket',
        'BasketPosition',
        'Domain',
        'Address',
        'Price',
        'Category',
        'Producer'
    ],

    //remove listeners
    globalEvents: [
        'load-update-listing',
        'display-plugin',
        'install-plugin',
        'uninstall-plugin',
        'secure-uninstall-plugin',
        'reinstall-plugin',
        'activate-plugin',
        'deactivate-plugin',
        'update-plugin',
        'update-dummy-plugin',
        'upload-plugin',
        'delete-plugin',
        'reload-plugin',
        'store-login',
        'download-plugin-licence',
        'reload-local-listing',
        'import-plugin-licence',
        'save-plugin-configuration',
        'buy-plugin',
        'rent-plugin',
        'download-free-plugin',
        'request-plugin-test-version',
        'check-store-login',
        'open-login',
        'check-licence-plugin',
        'plugin-reloaded',
        'refresh-account-data'
    ],

    dynamicEvents: [
        'plugin-reloaded-',
        'plugin-bought'
    ],

    windowClasses: [
        'Shopware.apps.PluginManager.view.account.Checkout',
        'Shopware.apps.PluginManager.view.account.Login',
        'Shopware.apps.PluginManager.view.account.Upload',
        'Shopware.apps.PluginManager.view.detail.Window',
        'Shopware.apps.PluginManager.view.list.Window',
        'Shopware.apps.PluginManager.view.loading.Mask'
    ],

    onBeforeLaunch: function() {
        var me = this;

        me._destroyGlobalListeners(function() {
            me._destroyOtherModuleInstances(function() {
            });
        });

        me.callParent(arguments);
    },

    launch: function () {
        var me = this;
        return me.getController('Main').mainWindow;
    },


    _destroyGlobalListeners: function(callback) {
        var me = this;
        var events = Shopware.app.Application.events;

        for (var key in events) {
            var event = events[key];

            if (me.globalEvents.indexOf(event.name) >= 0 && event.listeners.length > 0) {
                Ext.each(event.listeners, function(listener) {
                    if(!listener) {
                        return;
                    }

                    Shopware.app.Application.removeListener(
                        event.name,
                        listener.fn,
                        listener.scope
                    );
                });
            }

            Ext.each(me.dynamicEvents, function(eventName) {
                if (event.name && event.name.indexOf(eventName) >= 0) {
                    Ext.each(event.listeners, function(listener) {
                        if (listener) {
                            Shopware.app.Application.removeListener(
                                event.name,
                                listener.fn,
                                listener.scope
                            );
                        }
                    });
                }
            });
        }

        callback();
    },

    _destroyOtherModuleInstances: function (cb, cbArgs) {
        var me = this, activeWindows = [], subAppId = me.$subAppId;
        cbArgs = cbArgs || [];

        Ext.each(Shopware.app.Application.subApplications.items, function (subApp) {

            if (!subApp || !subApp.windowManager || subApp.$subAppId === subAppId || !subApp.windowManager.hasOwnProperty('zIndexStack')) {
                return;
            }
            Ext.each(subApp.windowManager.zIndexStack, function (item) {
                if (typeof(item) !== 'undefined' && me.windowClasses.indexOf(item.$className) > -1) {
                    activeWindows.push(item);
                }
            });
        });

        if (activeWindows && activeWindows.length) {
            Ext.each(activeWindows, function (win) {
                win.destroy();
            });

            if (Ext.isFunction(cb)) {
                cb.apply(me, cbArgs);
            }
        } else {
            if (Ext.isFunction(cb)) {
                cb.apply(me, cbArgs);
            }
        }
    }
});
//<?php }} ?>