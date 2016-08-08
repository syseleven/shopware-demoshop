<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:45:23
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/base/attribute/mixins/Shopware.attribute.SelectionFactory.js" */ ?>
<?php /*%%SmartyHeaderCode:124178459957a24c2d27fae5-50375516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63490987d9cfa8a6fecd8e893c76401b8594f891' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/base/attribute/mixins/Shopware.attribute.SelectionFactory.js',
      1 => 1470256654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124178459957a24c2d27fae5-50375516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a24c2d29a7d4_52467618',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a24c2d29a7d4_52467618')) {function content_57a24c2d29a7d4_52467618($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

Ext.define('Shopware.attribute.SelectionFactory', {
    getRelevantFields: function() {
        return ['label', 'name', 'title', 'number', 'description','value'];
    },

    getLabelField: function(record) {
        var fields = this.getRelevantFields();
        var found = null;
        var recordFields = record.fields.keys;

        Ext.each(fields, function(field) {
            if (recordFields.indexOf(field) >= 0) {
                found = field;
                return false;
            }
        });

        return found;
    },

    getLabelOfObject: function(values) {
        var fields = this.getRelevantFields();
        var found = null;
        Ext.each(Object.keys(values), function(field) {
            if (fields.indexOf(field) >= 0) {
                found = field;
                return false;
            }
        });
        if (found) {
            return values[found];
        } else {
            return null;
        }
    },

    createSelection: function(config, attribute, className, store, searchStore) {
        config.store = store;
        config.flex = 1;
        config.searchStore = searchStore;
        return Ext.create(className, config);
    },

    createDynamicSearchStore: function(attribute) {
        return Ext.create('Ext.data.Store', {
            model: 'Shopware.model.Dynamic',
            proxy: {
                type: 'ajax',
                url: '<?php echo '/backend/EntitySearch/search';?>?model=' + attribute.get('entity'),
                reader: Ext.create('Shopware.model.DynamicReader')
            }
        });
    },

    createModelSearchStore: function(attribute, model) {
        return Ext.create('Ext.data.Store', {
            model: model,
            proxy: {
                type: 'ajax',
                url: '<?php echo '/backend/EntitySearch/search';?>?model=' + attribute.get('entity'),
                reader: { type: 'json', root: 'data' }
            }
        });
    }
});<?php }} ?>