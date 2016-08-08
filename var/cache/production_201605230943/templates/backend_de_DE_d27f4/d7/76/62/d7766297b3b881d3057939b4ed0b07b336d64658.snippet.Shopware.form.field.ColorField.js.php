<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:18:40
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/base/component/Shopware.form.field.ColorField.js" */ ?>
<?php /*%%SmartyHeaderCode:157232896057a251a0698620-34828158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7766297b3b881d3057939b4ed0b07b336d64658' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/base/component/Shopware.form.field.ColorField.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157232896057a251a0698620-34828158',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a251a06a5fa9_09969064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a251a06a5fa9_09969064')) {function content_57a251a06a5fa9_09969064($_smarty_tpl) {?>/**
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

//

Ext.define('Shopware.form.field.ColorField', {
    extend: 'Ext.form.FieldContainer',
    alias: 'widget.shopware-color-picker',

    /**
     * Important: In order for child items to be correctly sized and positioned, typically a layout manager must be
     * specified through the layout configuration option.
     * The sizing and positioning of child items is the responsibility of the Container's layout manager which
     * creates and manages the type of layout you have in mind. For example:
     * If the layout configuration is not explicitly specified for a general purpose container (e.g. Container or Panel)
     * the default layout manager will be used which does nothing but render child components sequentially into the
     * Container (no sizing or positioning will be performed in this situation).
     *
     * @type { Object }
     */
    layout: {
        type: 'hbox',
        align: 'stretch'
    },

    pickerButton: true,

    editable: true,

    initComponent: function () {
        var me = this;

        me.items = me.createItems();

        if (me.value) {
            me.inputField.setValue(me.value);
            me.valueChanged(me.value);
        }

        //listen to change event to change the color field background.
        me.inputField.on('change', function(field, newValue) {
            me.valueChanged(newValue);
        });

        me.callParent(arguments);
    },

    createItems: function() {
        var me = this, items = [];

        me.inputField = me.createInputField();
        me.colorField = me.createColorField();

        items.push(me.inputField);
        items.push(me.colorField);

        if (me.pickerButton == true) {
            me.pickerButton = me.createPickerButton();
            items.push(me.pickerButton);
        }

        return items;
    },

    createPickerButton: function() {
        var me = this;

        return Ext.create('Ext.button.Button', {
            iconCls: 'sprite-color--pencil',
            handler: function() {
                me.colorWindow = Ext.create('Shopware.color.Window', {
                    modal: true,
                    value: me.getValue()
                }).show();

                me.colorWindow.on('apply-color', function(win, value) {
                    win.destroy();
                    me.setValue(value);
                });
            }
        });
    },

    createInputField: function () {
        var me = this;

        return Ext.create('Ext.form.field.Text', {
            name: me.name,
            flex: 1,
            readOnly: !me.editable
        });
    },

    createColorField: function () {
        return Ext.create('Ext.form.field.Text', {
            width: 30,
            readOnly: true
        });
    },

    getValue: function () {
        return this.inputField.getValue();
    },

    setValue: function (value) {
        var color = '#fff';
        if (value) {
            color = value;
        }
        this.valueChanged(color);

        return this.inputField.setValue(value)
    },

    getSubmitData: function () {
        return this.inputField.getSubmitData();
    },

    valueChanged: function(value) {
        this.colorField.setFieldStyle('background: ' + value);
    },

    validate: function() {
        return this.inputField.validate();
    },

    getName: function() {
        return this.inputField.getName();
    }

});

//

<?php }} ?>