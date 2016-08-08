<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:18:41
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/index/view/merchant/window.js" */ ?>
<?php /*%%SmartyHeaderCode:25388043657a251a1844537-55100478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b15adb2c06417167b057e8aedf6fcfadad36d92' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/index/view/merchant/window.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25388043657a251a1844537-55100478',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a251a1884532_34157278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a251a1884532_34157278')) {function content_57a251a1884532_34157278($_smarty_tpl) {?>/**
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

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Index.view.merchant.Window', {
    extend: 'Enlight.app.Window',
    alias : 'widget.merchant-window',
    width: 600,
    height: 500,
    stateful: true,
    stateId: 'shopware-merchant-window',
    layout: 'fit',

    /**
     * Snippets for the window.
     *
     * @object
     */
    snippets: {
        labels: {
            recipient_mail: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'window'/'label'/'recipient_mail','default'=>'Recipient mail address','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'label'/'recipient_mail','default'=>'Recipient mail address','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Empfänger-E-Mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'label'/'recipient_mail','default'=>'Recipient mail address','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            sender_name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'window'/'label'/'sender_name','default'=>'Sender ','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'label'/'sender_name','default'=>'Sender ','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Absender<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'label'/'sender_name','default'=>'Sender ','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            sender_mail: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'window'/'label'/'sender_mail','default'=>'Sender mail address','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'label'/'sender_mail','default'=>'Sender mail address','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Absender-E-Mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'label'/'sender_mail','default'=>'Sender mail address','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            subject: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'window'/'label'/'subject','default'=>'Subject','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'label'/'subject','default'=>'Subject','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Betreff<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'label'/'subject','default'=>'Subject','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            message: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'window'/'label'/'message','default'=>'Message','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'label'/'message','default'=>'Message','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nachricht<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'label'/'message','default'=>'Message','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        buttons: {
            allow_merchant: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'window'/'buttons'/'allow_merchant','default'=>'Unlock and send confirmation','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'buttons'/'allow_merchant','default'=>'Unlock and send confirmation','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Freischalten & Bestätigung verschicken<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'buttons'/'allow_merchant','default'=>'Unlock and send confirmation','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            decline_merchant: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'window'/'buttons'/'decline_merchant','default'=>'Deny inquiry','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'buttons'/'decline_merchant','default'=>'Deny inquiry','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Anfrage ablehnen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'buttons'/'decline_merchant','default'=>'Deny inquiry','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        messages: {
            success: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'window'/'messages'/'success','default'=>'The mail was sent successful.','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'messages'/'success','default'=>'The mail was sent successful.','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Die E-Mail wurde erfolgreich versendet.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'messages'/'success','default'=>'The mail was sent successful.','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            error: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'window'/'messages'/'error','default'=>'The mail could not be sent.','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'messages'/'error','default'=>'The mail could not be sent.','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Die E-Mail konnte nicht erfolgreich versendet werden.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'window'/'messages'/'error','default'=>'The mail could not be sent.','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    /**
     * Sets up the ui component
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.items = [ me.createFormPanel() ];
        me.dockedItems = [ me.createActionToolbar() ];

        me.addEvents(
            'allow',
            'decline'
        );

        me.callParent(arguments);

        if(me.record) {
            me.formPanel.loadRecord(me.record);
        }
    },

    createFormPanel: function() {
        var me = this, labels = me.snippets.labels;

        return me.formPanel = Ext.create('Ext.form.Panel', {
            layout: 'anchor',
            url: '<?php echo '/backend/widgets/sendMailToMerchant';?>',
            bodyPadding: 10,
            defaults: {
                labelWidth: 155,
                xtype: 'textfield',
                anchor: '100%'
            },
            items: [{
                xtype: 'hidden',
                name: 'userId'
            },{
                xtype: 'hidden',
                name: 'status'
            }, {
                fieldLabel: labels.recipient_mail,
                name: 'toMail'
            }, {
                fieldLabel: labels.sender_name,
                name: 'fromName'
            }, {
                fieldLabel: labels.sender_mail,
                name: 'fromMail'
            }, {
                fieldLabel: labels.subject,
                name: 'subject'
            }, {
                xtype: 'htmleditor',
                name: 'content',
                fieldLabel: labels.message,
                height: 250
            }]
        });
    },

    createActionToolbar: function() {
        var me = this, buttons = me.snippets.buttons;

        return Ext.create('Ext.toolbar.Toolbar', {
            dock: 'bottom',
            cls: 'shopware-toolbar',
            items: ['->', {
                text: (me.mode === 'allow') ? buttons.allow_merchant : buttons.decline_merchant,
                cls: 'primary',
                handler: function() {
                    me.submitFormPanel();
                }
            }]
        })
    },

    /**
     * Submits the form panel to the serverside using
     * an AJAX request
     * @return [false|null]
     */
    submitFormPanel: function() {
        var me = this,
            form = me.formPanel.getForm(),
            messages = me.snippets.messages;

        if(!form.isValid()) {
            return false;
        }

        me.setLoading(true);
        form.submit({
            success: function(form, operation) {
                var response = operation.result;
                me.setLoading(false);
                if(!response.success) {
                    Shopware.Notification.createGrowlMessage(me.title, messages.error);
                    return false;
                }

                Shopware.Notification.createGrowlMessage(me.title, messages.success);
                me.destroy();
            },
            failure: function(form, operation) {
                var response = operation.result;
                me.setLoading(false);

                Shopware.Notification.createGrowlMessage(me.title, messages.error);
            }
        })
    }
});
//
<?php }} ?>