<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:18:43
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/customer/view/detail/base.js" */ ?>
<?php /*%%SmartyHeaderCode:201085167457a251a3bc5c92-89473880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb739836d198b9d8f5b54cba22efefb39a0e5e82' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/customer/view/detail/base.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201085167457a251a3bc5c92-89473880',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a251a3d888f4_29352315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a251a3d888f4_29352315')) {function content_57a251a3d888f4_29352315($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Detail
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Customer detail page
 *
 * The base field set contains the base data of the customer
 * which is stored in the base model and filled over the s_user table
 *
 */
//
Ext.define('Shopware.apps.Customer.view.detail.Base', {
    /**
     * Define that the base field set is an extension of the Ext.form.FieldSet
     * @string
     */
    extend:'Ext.form.FieldSet',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.customer-base-field-set',

    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'base-field-set',

    /**
     * Layout type for the component.
     * @string
     */
    layout: 'column',

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'title','default'=>'Base data','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'title','default'=>'Base data','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Stammdaten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'title','default'=>'Base data','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        email:{
            message:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'validate_email_message','default'=>'Email address is already in use','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'validate_email_message','default'=>'Email address is already in use','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
E-Mail-Adresse wird bereits verwendet<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'validate_email_message','default'=>'Email address is already in use','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            label:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'email','default'=>'Email','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'email','default'=>'Email','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
E-Mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'email','default'=>'Email','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        confirm:{
            label:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'password_confirm','default'=>'Confirm password','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'password_confirm','default'=>'Confirm password','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Passwort bestätigen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'password_confirm','default'=>'Confirm password','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'confirm_support','default'=>'Please confirm the password you have entered','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'confirm_support','default'=>'Please confirm the password you have entered','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bitte das Passwort erneut bestätigen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'confirm_support','default'=>'Please confirm the password you have entered','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'confirm_help_title','default'=>'Password confirmation','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'confirm_help_title','default'=>'Password confirmation','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Passwortbestätigung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'confirm_help_title','default'=>'Password confirmation','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'confirm_help_text','default'=>'For security reasons, please enter the password again.','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'confirm_help_text','default'=>'For security reasons, please enter the password again.','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aus Sicherheitsgründen muss das Passwort ein zweites Mal eingegeben werden.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'confirm_help_text','default'=>'For security reasons, please enter the password again.','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        active:{
            box:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'active_box_label','default'=>'Mark the account as active','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'active_box_label','default'=>'Mark the account as active','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kennzeichnet das Konto als aktiv.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'active_box_label','default'=>'Mark the account as active','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            field:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'active_field_label','default'=>'Active','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'active_field_label','default'=>'Active','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktiv<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'active_field_label','default'=>'Active','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        password:{
            label:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'password','default'=>'Password','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'password','default'=>'Password','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Passwort<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'password','default'=>'Password','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            support:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'password_support','default'=>'To automatically create the password, use the button on the right side.','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'password_support','default'=>'To automatically create the password, use the button on the right side.','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Für die automatische Passwort-Generierung benutzen Sie den Button auf der rechten Seite.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'password_support','default'=>'To automatically create the password, use the button on the right side.','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            button:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'password_generate','default'=>'Generate password','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'password_generate','default'=>'Generate password','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Passwort generieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'password_generate','default'=>'Generate password','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            message:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'password_error','default'=>'The passwords do not match.','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'password_error','default'=>'The passwords do not match.','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Passwörter stimmen nicht überein.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'password_error','default'=>'The passwords do not match.','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        group:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'customer_group','default'=>'Customer group','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'customer_group','default'=>'Customer group','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kundengruppe<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'customer_group','default'=>'Customer group','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        shop:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'shop','default'=>'Shop','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'shop','default'=>'Shop','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shop<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'shop','default'=>'Shop','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        number: {
            label:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'customer_number','default'=>'Customer number','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'customer_number','default'=>'Customer number','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kundennummer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'customer_number','default'=>'Customer number','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'customer_number_help_title','default'=>'Customer number generation','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'customer_number_help_title','default'=>'Customer number generation','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kundennummer-Generierung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'customer_number_help_title','default'=>'Customer number generation','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'base'/'customer_number_help_text','default'=>'If the parameter sShopwareManagedCustomerNumbers is set to 1 in the shopware configuration, the customer number will be set automatically when the customer is saved and the field is not editable.','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'customer_number_help_text','default'=>'If the parameter sShopwareManagedCustomerNumbers is set to 1 in the shopware configuration, the customer number will be set automatically when the customer is saved and the field is not editable.','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wenn in der Shopware Konfiguration der Parameter sShopwareManagedCustomerNumbers auf 1 steht, ist das Feld Kundennummer nicht editierbar und Shopware generiert die Kundennummer automatisch.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'base'/'customer_number_help_text','default'=>'If the parameter sShopwareManagedCustomerNumbers is set to 1 in the shopware configuration, the customer number will be set automatically when the customer is saved and the field is not editable.','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },


    /**
     * Component event method which is fired when the component
     * is initials. The component is initials when the user
     * want to create a new customer or edit an existing customer
     * @return void
     */
    initComponent:function () {
        var me = this;
        me.title = me.snippets.title;
        me.registerEvents();

        me.items = me.createBaseForm();

        me.callParent(arguments);
    },

    /**
     * Registers the generatePassword event which is fired when the
     * user clicks on the generatePassword button.
     *
     * @return void
     */
    registerEvents:function () {
        this.addEvents(
            /**
             * Event will be fired when the user clicks the button to
             * generate a new password
             *
             * @event generatePassword
             * @param [object] passwordField - Associated password field
             * @param [object] confirmField - Associated confirm password field
             */
            'generatePassword'
        );
    },


    /**
     * Creates the both containers for the field set
     * to display the form fields in two columns.
     *
     * @return [Array] Contains the left and right container
     */
    createBaseForm:function () {
        var leftContainer, rightContainer, me = this;

        leftContainer = Ext.create('Ext.container.Container', {
            columnWidth:0.5,
            border:false,
            cls: Ext.baseCSSPrefix + 'field-set-container',
            layout:'anchor',
            defaults:{
                anchor:'95%',
                labelWidth:150,
                minWidth:250,
                xtype:'textfield'
            },
            items:me.createBaseFormLeft()
        });

        rightContainer = Ext.create('Ext.container.Container', {
            columnWidth:0.5,
            border:false,
            layout:'anchor',
            cls: Ext.baseCSSPrefix + 'field-set-container',
            defaults:{
                labelWidth:150,
                xtype:'textfield'
            },
            items: me.createBaseFormRight()
        });

        return [ leftContainer, rightContainer ];
    },

    /**
     * Creates the left container of the base field set.
     * Contains the email field and the combo boxes for
     * the shop and customer group
     *
     * @return [Array] Contains the different form field of the left container
     */
    createBaseFormLeft:function () {
        var me = this;

        me.customerGroupCombo = Ext.create('Ext.form.field.ComboBox', {
            triggerAction:'all',
            queryMode: 'local',
            name:'groupKey',
            fieldLabel:me.snippets.group,
            valueField:'key',
            displayField:'name',
            editable:false,
            allowBlank:false,
            anchor:'95%',
            labelWidth:150,
            minWidth:250
        });

        me.shopStoreCombo = Ext.create('Ext.form.field.ComboBox', {
            triggerAction:'all',
            name:'languageId',
            queryMode: 'local',
            fieldLabel:me.snippets.shop,
            valueField:'id',
            displayField:'name',
            allowBlank:false,
            editable:false,
            anchor:'95%',
            labelWidth:150,
            minWidth:250,
            listeners: {
                // When the selected job changes, validate the mail address again
                change: function(combo, newValue, oldValue, eOpts) {
                    var me = this,
                        fieldSet = me.up('fieldset');

                    fieldSet.customerMail.validationRequestParams = { 'param' : fieldSet.record.get('id'),'subshopId' : newValue};

                    // set oldValue to null in order to force a re-check
                    // else VType 'remote' will just return "oldValid"
                    fieldSet.customerMail.oldValue = null;
                    fieldSet.customerMail.validate();
                }
            }
        });

        me.customerMail = Ext.create('Ext.form.field.Text', {
            fieldLabel:me.snippets.email.label,
            labelWidth:150,
            name:'email',
            allowBlank:false,
            required:true,
            enableKeyEvents:true,
            checkChangeBuffer:700,
            vtype:'remote',
            validationUrl: null,
            validationRequestParams:{ 'param' : me.record.get('id'),'subshopId' : me.record.get('shopId')},
            validationErrorMsg:me.snippets.email.message,
            listeners: {
                scope: me,
                afterrender: function(field) {
                    window.setTimeout(function() {
                        field.validationUrl = '<?php echo '/backend/customer/validateEmail';?>';
                    }, 500);
                }
            }
        });

        return [
            me.customerMail,
            me.customerGroupCombo,
            me.shopStoreCombo,
        {
            /*<?php ob_start();?><?php echo true;?><?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1){?>*/
            xtype: 'displayfield',
            /*<?php }?>*/
            name: 'billing[number]',
            fieldLabel: me.snippets.number.label,
            helpText: me.snippets.number.helpText,
            helpWidth: 360,
            helpTitle: me.snippets.number.helpTitle
        }];
    },

    /**
     * Creates the right container of the base field set.
     * Contains the active checkbox and the two text fields
     * for the password
     *
     * @return [Array] Contains the three form fields
     */
    createBaseFormRight:function () {
        var me = this,
            pwRequired = false;

        if ( me.record.data.id === 0 ) {
            pwRequired = true;
        }

        //create the confirm password field to get access in the create password
        //button handler to pass the field to the generate password event
        me.confirmField = Ext.create('Ext.form.field.Text', {
            name:'confirm',
            inputType:'password',
            anchor: '95%',
            allowBlank:!pwRequired,
            required:pwRequired,
            fieldLabel:me.snippets.confirm.label,
            supportText:me.snippets.confirm.support,
            helpTitle:me.snippets.confirm.helpTitle,
            helpText:me.snippets.confirm.helpText,
            validator:function (value) {
                if ( Ext.String.trim(value) == Ext.String.trim(me.passwordField.getValue()) ) {
                    me.passwordField.clearInvalid();
                    return true;
                } else {
                    return me.snippets.password.message;
                }
            }
        });

        me.passwordContainer = me.createPasswordContainer();

        return [{
            name:'active',
            boxLabel:me.snippets.active.box,
            fieldLabel:me.snippets.active.field,
            xtype:'checkbox',
            value: true,
            labelWidth:100,
            uncheckedValue:false,
            inputValue:true
        },  me.passwordContainer, me.confirmField ];
    },


    /**
     * Creates the container for the password field and the generatePassword button.
     * @return [Ext.container.Container] - Contains the text field and the button
     */
    createPasswordContainer:function () {
        var me = this,
            pwRequired = false;

        if ( me.record.data.id === 0 ) {
            pwRequired = true;
        }

        //create the password generation button
        me.passwordButton = Ext.create('Ext.button.Button', {
            cls: Ext.baseCSSPrefix + 'password-button',
            iconCls:'sprite-license-key',
            action:'create-password',
            tooltip:me.snippets.password.button,
            style: {
                display: 'inline-block'
            },
            /**
             * Add button handler to fire the generatePassword event which is handled
             * in the detail controller. The detail controller generates a password and set it into the password field
             */
            handler:function () {
                me.fireEvent('generatePassword', me.passwordField, me.confirmField);
            }
        });

        //create the password field to get access in the create password
        //button handler to pass the field to the generate password event
        me.passwordField = Ext.create('Ext.form.field.Text', {
            name:'newPassword',
            anchor: '92%',
            inputType:'password',
            allowBlank:!pwRequired,
            required:pwRequired,
            fieldLabel:me.snippets.password.label,
            supportText:me.snippets.password.support,
            cls: Ext.baseCSSPrefix + 'password-field',
            //can't be set in sass.. extJs don't resize the password field.
            style:{
                display: 'inline-block',
                margin: '0 8px 0 0 !important'
            },
            validator:function (value) {
                if ( Ext.String.trim(value) == Ext.String.trim(me.confirmField.getValue()) ) {
                    me.confirmField.clearInvalid();
                    return true;
                } else {
                    return me.snippets.password.message;
                }
            }
        });

        //create a container for the password field to append the generate password button
        return Ext.create('Ext.container.Container', {
            layout:'anchor',
            cls: Ext.baseCSSPrefix + 'password-container',
            defaults:{
                labelWidth:150,
                validateOnBlur:true,
                validateOnChange:false
            },
            height:70,
            items:[ me.passwordField, me.passwordButton ]
        });
    }

});
//
<?php }} ?>