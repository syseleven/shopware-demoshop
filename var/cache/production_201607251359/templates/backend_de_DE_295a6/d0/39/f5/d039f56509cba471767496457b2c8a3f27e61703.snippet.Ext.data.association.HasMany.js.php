<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 21:55:23
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Library/ExtJs/overrides/Ext.data.association.HasMany.js" */ ?>
<?php /*%%SmartyHeaderCode:28499219457a24c2bbeaeb2-54911677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd039f56509cba471767496457b2c8a3f27e61703' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Library/ExtJs/overrides/Ext.data.association.HasMany.js',
      1 => 1469447988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28499219457a24c2bbeaeb2-54911677',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a24c2bbf7d96_22466884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a24c2bbf7d96_22466884')) {function content_57a24c2bbf7d96_22466884($_smarty_tpl) {?>/**
 * Override of the Ext.data.association.HasMany.
 * This override add shopware specify properties to the component.
 * Additionally this override allows the shopware default components,
 * to configure an association store class, over the storeClass property, for each defined
 * Ext JS association.
 *
 * @example:
 *
 *
 *  Ext.define('Shopware.apps.Product.model.Product', {
 *      extend: 'Shopware.data.Model',
 *
 *      configure: function() {
 *          return {
 *              controller: 'Product',
 *              ...
 *          };
 *      },
 *
 *      fields: [
 *          { name: 'id', type: 'int', useNull: true },
 *          { name: 'taxId', type: 'int', useNull: true },
 *          ...
 *      ],
 *
 *      associations: [
 *          {
 *              storeClass: 'Shopware.apps.Product.store.Variant',
 *
 *              relation: 'OneToMany',
 *              lazyLoading: true,
 *
 *              type: 'hasMany',
 *              model: 'Shopware.apps.Product.model.Variant',
 *              name: 'getVariants',
 *              associationKey: 'details'
 *          }
 *      ]
 *  });
 */
Ext.define('Ext.data.association.HasMany-Shopware', {
    override: 'Ext.data.association.HasMany',

    /**
     * Flag if the store will be loaded
     * if the grid panel will be activated.
     *
     * @type { boolean }
     */
    lazyLoading: true,

    /**
     * Shopware mapping property for doctrine association
     * types.
     * Possible values:
     *  -   OneToOne
     *  -   OneToMany
     *  -   ManyToOne
     *  -   ManyToMany
     *
     * This property is used to define how the model
     * data of an association will be displayed.
     *
     * @type { String }
     */
    relation: undefined,

    /**
     * Allows to define a specify store class
     * for the association.
     * Ext JS creates as default an dynamic Ext.data.Store
     * without any configurable property.
     * If this property contains a full store name of a shopware
     * sub application, shopware creates the defined
     * store.
     * Otherwise the Ext JS default will be executed.
     *
     * @type { String }
     */
    storeClass: undefined,

    /**
     * Allows to define that the association is bind to
     * a model field.
     * This property is used for ManyToOne associations
     * to display a Shopware.form.field.Search element
     * for the form field.
     *
     * @type { String }
     */
    field: undefined,

    createStore: function() {
        var that            = this,
            associatedModel = that.associatedModel,
            storeName       = that.storeName,
            foreignKey      = that.foreignKey,
            primaryKey      = that.primaryKey,
            filterProperty  = that.filterProperty,
            autoLoad        = that.autoLoad,
            storeConfig     = that.storeConfig || {};

        return function() {
            var me = this,
                config, filter,
                modelDefaults = {};

            if (me[storeName] === undefined) {
                if (filterProperty) {
                    filter = {
                        property  : filterProperty,
                        value     : me.get(filterProperty),
                        exactMatch: true
                    };
                } else {
                    filter = {
                        property  : foreignKey,
                        value     : me.get(primaryKey),
                        exactMatch: true
                    };
                }

                modelDefaults[foreignKey] = me.get(primaryKey);

                config = Ext.apply({}, storeConfig, {
                    model        : associatedModel,
                    filters      : [filter],
                    remoteFilter : false,
                    modelDefaults: modelDefaults,

                    /**
                     * Shopware override:
                     * Additional parameter for association reloading
                     */
                    association  : that
                });

                /**
                 * Shopware override:
                 * Check if a store class was defined. Otherwise create a abstract store
                 */
                if (that.hasOwnProperty('storeClass')) {
                    config.extraParams = {
                        id: me.get(primaryKey),
                        association: that.associationKey
                    };

                    me[storeName] = Ext.create(that.storeClass, config);
                } else {
                    me[storeName] = Ext.data.AbstractStore.create(config);
                    if (autoLoad) {
                        me[storeName].load();
                    }
                }

            }

            return me[storeName];
        };
    }


});

<?php }} ?>