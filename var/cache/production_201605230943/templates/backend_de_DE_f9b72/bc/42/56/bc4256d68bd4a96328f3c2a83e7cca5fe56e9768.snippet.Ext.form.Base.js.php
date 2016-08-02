<?php /* Smarty version Smarty-3.1.12, created on 2016-08-02 11:09:09
         compiled from "/var/www/html/shopware.agnostic.syseleven.de/engine/Library/ExtJs/overrides/Ext.form.Base.js" */ ?>
<?php /*%%SmartyHeaderCode:145772895957a06335ed7082-28084032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc4256d68bd4a96328f3c2a83e7cca5fe56e9768' => 
    array (
      0 => '/var/www/html/shopware.agnostic.syseleven.de/engine/Library/ExtJs/overrides/Ext.form.Base.js',
      1 => 1463989428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145772895957a06335ed7082-28084032',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a06335eda771_16068231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a06335eda771_16068231')) {function content_57a06335eda771_16068231($_smarty_tpl) {?>Ext.override(Ext.form.Basic, {
    loadRecord: function(record) {
        var me = this;

        if(record && record.associations && record.associations.length) {
            var data = record.getAssociatedData(),
                values = Ext.clone(record.data);

            Ext.each(record.associations.items, function(item) {
                if(!Ext.isObject(item)) {
                    return;
                }
                if (data[item.name] !== Ext.undefined) {
                    var model = Ext.create(item.associatedName, data[item.name][0]);
                    Ext.each(model.fields.keys, function(key) {
                        values[item.associationKey + '[' + key + ']'] = model.data[key];
                    });
                }
            });

            me.setValues(values);
        }

        if(record) {
            me.callOverridden(arguments);
        } else {
            me._record = undefined;
            me.reset();
        }

        me.fireEvent('recordchange', me, record);
    },

    /**
     * The update record override allows to handle Ext.data.Model associations within a form panel.
     * @param record
     * @return
     */
    updateRecord: function(record) {
        record = record || this._record;

        var values = this.getValues(),
            fields = record.fields,
            data = {}, associationModel, associationUpdated;

        //iterate all record associations to update the model fields with the form data
        record.associations.each(function(association) {
            var associationStore = record[association.storeName];

            associationUpdated = false;

            //check if ExtJs has created a association store dynamically.
            if (!(associationStore instanceof Ext.data.Store)) {
                associationStore = Ext.create('Ext.data.Store', {
                    model: association.associatedName
                });
            }

            //if the association store already contains data use this data to update.
            if (associationStore.getCount() > 0) {
                associationModel = associationStore.first()
            } else {
                associationModel = Ext.create(association.associatedName);
            }

            Ext.each(associationModel.fields.keys, function(key) {
                var fieldName = association.associationKey + '['+ key +']';

                if (fieldName in values) {
                    associationModel.set(key, values[fieldName]);
                    associationUpdated = true;
                    delete values[fieldName];
                }
            });

            //if the store has no record, add the updated association model.
            if (associationStore.getCount() === 0 && associationUpdated) {
                associationStore.add(associationModel);
            }
            record[association.storeName] = associationStore;
        });

        fields.each(function(field) {
            var name = field.name;
            if (name in values) {
                data[name] = values[name];
            }
        });

        record.beginEdit();
        record.set(data);
        record.endEdit();

        return this;
    }
});<?php }} ?>