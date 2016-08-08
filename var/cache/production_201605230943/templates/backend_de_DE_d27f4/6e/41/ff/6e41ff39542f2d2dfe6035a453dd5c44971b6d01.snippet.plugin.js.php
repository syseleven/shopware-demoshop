<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:31:35
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/model/plugin.js" */ ?>
<?php /*%%SmartyHeaderCode:143356372757a254a7151071-95928027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e41ff39542f2d2dfe6035a453dd5c44971b6d01' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/model/plugin.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143356372757a254a7151071-95928027',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a254a7174332_04592286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a254a7174332_04592286')) {function content_57a254a7174332_04592286($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

//
Ext.define('Shopware.apps.PluginManager.model.Plugin', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'PluginManager'
        };
    },

    fields: [
        { name: 'id',                 type: 'int' },

        { name: 'label',              type: 'string' },
        { name: 'technicalName',      type: 'string' },
        { name: 'installationManual', type: 'string' },
        { name: 'source',             type: 'string' },
        { name: 'code',               type: 'string', useNull: true, defaultValue: null },
        { name: 'description',        type: 'string' },
        { name: 'localDescription',   type: 'string' },
        { name: 'author',             type: 'string' },
        { name: 'addons',             type: 'array' },
        { name: 'certified',          type: 'boolean' },
        { name: 'encrypted',          type: 'boolean' },
        { name: 'licenceCheck',       type: 'boolean' },
        { name: 'active',             type: 'boolean' },
        { name: 'iconPath',           type: 'string' },
        { name: 'localIcon',          type: 'string', defaultValue: '' },
        { name: 'rating',             type: 'int' },
        { name: 'updateDate',         type: 'datetime' },
        { name: 'installationDate',   type: 'datetime', useNull: true },
        { name: 'version',            type: 'string' },
        { name: 'availableVersion',   type: 'string',   defaultValue: null, useNull: true },
        { name: 'updateAvailable',    type: 'boolean',  defaultValue: false },
        { name: 'capabilityDummy',    type: 'boolean',  defaultValue: false },
        { name: 'capabilityInstall',  type: 'boolean',  defaultValue: false },
        { name: 'capabilitySecureUninstall',  type: 'boolean',  defaultValue: false },
        { name: 'capabilityUpdate',   type: 'boolean',  defaultValue: false },
        { name: 'localUpdateAvailable',   type: 'boolean',  defaultValue: false },
        { name: 'capabilityActivate', type: 'boolean',  defaultValue: false },
        { name: 'useContactForm',     type: 'boolean',  defaultValue: false },
        { name: 'formId',             type: 'int', useNull: true, defaultValue: null },

        { name: 'groupingState', type: 'int', convert: function(value, record) {

            if (record.get('active') && record.get('installationDate') !== null) {
                return 2;
            } else if (record.get('installationDate') !== null) {
                return 1;
            } else {
                return 0;
            }
        }},
        { name: 'changelog' }
    ],

    getReloadExtraParams: function() {
        var me = this;

        return {
            technicalName: me.get('technicalName')
        };
    },

    isLocalPlugin: function() {
        return (this.get('id') > 0);
    },

    hasStoreData: function() {
        return (this.get('code') !== null);
    },

    allowInstall: function() {
        return (
            !this.allowDummyUpdate()
            && (this.get('id') > 0)
            && this.get('capabilityInstall')
            && this.get('installationDate') == null
        );
    },

    allowUninstall: function () {
        return (
            !this.allowDummyUpdate()
            && (this.get('id') > 0)
            && this.get('capabilityInstall')
            && this.get('installationDate') != null
        );
    },

    allowSecureUninstall: function() {
        return (this.get('capabilitySecureUninstall'));
    },

    allowLocalUpdate: function() {
        return this.get('localUpdateAvailable');
    },

    allowReinstall: function () {
        return (
            !this.allowDummyUpdate()
            && (this.get('id') > 0)
            && this.get('capabilityInstall')
            && this.get('installationDate') != null
        );
    },

    isAdvancedFeature: function() {
        var addons = this.get('addons');

        if (!addons) {
            return false;
        }
        return addons.indexOf('advancedFeature') > -1;
    },

    allowActivate: function () {
        return (
            !this.allowDummyUpdate()
            && (this.get('id') > 0)
            && this.get('capabilityActivate')
            && this.get('installationDate') !== null
            && this.get('active') == false
        );
    },

    allowDeactivate: function () {
        return (
            !this.allowDummyUpdate()
            && (this.get('id') > 0)
            && this.get('capabilityActivate')
            && this.get('installationDate') !== null
            && this.get('active') == true
        );
    },

    allowUpdate: function () {
        return (
            !this.allowDummyUpdate()
            && (this.get('id') > 0)
            && this.get('availableVersion') !== null
            && this.get('version') !== this.get('availableVersion')
        );
    },

    allowDummyUpdate: function () {
        return (this.get('capabilityDummy') && !this.isLocalPlugin());
    },

    flaggedAsDummyPlugin: function() {
        return (this.get('capabilityDummy'));
    },

    allowConfigure: function () {
        return (
            !this.allowDummyUpdate()
            && (this.get('id') > 0)
            && (this.get('formId') > 0)
            && this.get('installationDate') != null
        );
    },

    allowDelete: function () {
        return (
            !this.allowDummyUpdate()
            && (this.get('id') > 0)
            && this.get('installationDate') == null
            && this.get('source') != 'Default'
        );
    },

    associations: [{
        type: 'hasMany',
        model: 'Shopware.apps.PluginManager.model.Producer',
        name: 'getProducer',
        associationKey: 'producer'
    }, {
        type: 'hasMany',
        model: 'Shopware.apps.PluginManager.model.Comment',
        name: 'getComments',
        associationKey: 'comments'
    }, {
        type: 'hasMany',
        model: 'Shopware.apps.PluginManager.model.Price',
        name: 'getPrices',
        associationKey: 'prices'
    }, {
        type: 'hasMany',
        model: 'Shopware.apps.PluginManager.model.Picture',
        name: 'getPictures',
        associationKey: 'pictures'
    }, {
        type: 'hasMany',
        model: 'Shopware.apps.PluginManager.model.Licence',
        name: 'getLicence',
        associationKey: 'licence'
    }]
});
//<?php }} ?>