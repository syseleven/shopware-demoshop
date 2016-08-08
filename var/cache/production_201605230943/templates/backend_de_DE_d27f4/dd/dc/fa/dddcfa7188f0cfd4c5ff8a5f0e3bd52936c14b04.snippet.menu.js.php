<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:18:41
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/index/view/menu.js" */ ?>
<?php /*%%SmartyHeaderCode:72951656157a251a1615847-48874464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dddcfa7188f0cfd4c5ff8a5f0e3bd52936c14b04' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/index/view/menu.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72951656157a251a1615847-48874464',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a251a1657dd1_90029287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a251a1657dd1_90029287')) {function content_57a251a1657dd1_90029287($_smarty_tpl) {?>/**
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
 * Shopware Menu
 *
 * This component creates the main backend menu. The data for the items
 * array are placed in a global variable named "backendMenu".
 *
 * Note that this component are based on the Ext.toolbar.Toolbar instead
 * of Ext.menu.Menu.
 */
//
Ext.define('Shopware.apps.Index.view.Menu', {
    extend:'Ext.toolbar.Toolbar',
    alias:'widget.mainmenu',
    alternateClassName:'Shopware.Menu',
    cls: 'shopware-menu',
    dock:'top',
    height:40,
    width: Ext.Element.getViewportWidth(),

    /**
     * Creates the menu and sets the component items
     */
    initComponent: function () {
        var me = this;

        Ext.Ajax.request({
            url: '<?php echo '/backend/Index/menu';?>',
            success: Ext.bind(me.onMenuLoaded, me)
        });

        me.callParent(arguments);
        me.items.add(Ext.create('Shopware.Search'));

        // Add event listener which sets the width of the toolbar to the viewport width
        Ext.EventManager.onWindowResize(function(width) {
            me.setWidth(width);
        });

        // Hides the menu's when the user enters the frame of a simplied module
        Shopware.app.Application.on('global-close-menu', function() {
            Ext.menu.Manager.hideAll();
        });
    },

    onMenuLoaded: function(response) {
        var me = this;

        me.insert(0, Ext.decode(response.responseText));
        me.fireEvent('menu-created', me.items);

        Ext.create('Shopware.notification.ExpiredLicence').check();
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'read','resource'=>'pluginmanager'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
        Ext.create('Shopware.notification.SubscriptionWarning').check();
        /*<?php }?>*/
    },

    afterRender: function() {
        var me = this;

        Shopware.app.Application.baseComponentIsReady(me);

        me.add({ xtype: 'tbfill' }, {
            xtype: 'container',
            cls  : 'x-main-logo-container',
            width: 23, height: 17
        });

        me.callParent(arguments);
    }
});
//
Ext.define('Shopware.apps.Index.view.SwagUpdateMenu', {
    override: 'Shopware.apps.Index.view.Menu',

    /**
     * @Override
     */
    initComponent: function() {
        var me = this, result;

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'read','resource'=>'swagupdate'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
        me.on('menu-created', function(items) {
            window.setTimeout(function() {
                me.performVersionCheck();
            }, 500);
        });
        /*<?php }?>*/

        result = me.callParent(arguments);

        return result;
    },

    /**
     * Triggers the version check
     */
    performVersionCheck: function() {
        var me = this,
                snippets;

        snippets = {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growl'/'update'/'title','default'=>'A new version of Shopware is available','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl'/'update'/'title','default'=>'A new version of Shopware is available','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Eine neue Version von Shopware ist verfügbar!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl'/'update'/'title','default'=>'A new version of Shopware is available','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            button: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growl'/'update'/'button','default'=>'Display info','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl'/'update'/'button','default'=>'Display info','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Details<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl'/'update'/'button','default'=>'Display info','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            messageSticky: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growl'/'update'/'message','default'=>'Version [0] of Shopware is available.','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl'/'update'/'message','default'=>'Version [0] of Shopware is available.','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Version [0] steht zum Download bereit.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growl'/'update'/'message','default'=>'Version [0] of Shopware is available.','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        };

        /**
         * Perform the actual version check
         */
        Ext.Ajax.request({
            url: '<?php echo '/backend/SwagUpdate/popup';?>',
            async: true,
            success: function(response) {
                if (!response || !response.responseText) {
                    return;
                }

                var result = Ext.decode(response.responseText);

                if (!result.success) {
                    return;
                }

                // add badge class for help menu
                Ext.each(me.items.items, function(item) {
                    if (!item.iconCls) {
                        return true;
                    }

                    if (item.iconCls.indexOf('shopware-help-menu') > -1) {
                        item.addClass('x-btn-badge');
                    }
                });

                // Check if popups disabled for this version
                var skipVersion = localStorage.getItem('skipVersion');
                if (result.data.name == skipVersion) {
                    return;
                }

                // Create growl notification for the update
                Shopware.Notification.createStickyGrowlMessage({
                    title: snippets.title,
                    text: Ext.String.format(snippets.messageSticky, result.data.name),
                    btnDetail: {
                        text: snippets.button,
                        callback: function() {
                            Shopware.app.Application.addSubApplication({
                                name: 'Shopware.apps.SwagUpdate'
                            });
                        }
                    },

                    onCloseButton: function() {
                        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'skipUpdate','resource'=>'swagupdate'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
                        Ext.MessageBox.confirm('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"skip_update",'default'=>'Aktualisierung überspingen','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"skip_update",'default'=>'Aktualisierung überspingen','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktualisierung überspringen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"skip_update",'default'=>'Aktualisierung überspingen','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"skip_update_question",'default'=>'Möchten Sie die Meldungen für diese Aktualisierung dauerhaft deaktivieren?','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"skip_update_question",'default'=>'Möchten Sie die Meldungen für diese Aktualisierung dauerhaft deaktivieren?','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Möchten Sie die Meldungen für diese Aktualisierung dauerhaft deaktivieren?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"skip_update_question",'default'=>'Möchten Sie die Meldungen für diese Aktualisierung dauerhaft deaktivieren?','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', skipUpdate);
                        /*<?php }?>*/
                    }
                });

                function skipUpdate(button) {
                    if (button == 'yes') {
                        var version = result.data.name,
                            skipVersion = localStorage.getItem('skipVersion');

                        // No version skipped before or an old version
                        if(!skipVersion || skipVersion != version) {
                            localStorage.setItem('skipVersion', version);
                        }

                        Shopware.Notification.createGrowlMessage('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"popups_disabled",'default'=>'Meldungen deaktiviert','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"popups_disabled",'default'=>'Meldungen deaktiviert','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meldungen deaktiviert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"popups_disabled",'default'=>'Meldungen deaktiviert','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"no_more_popups",'default'=>'Es werden keine weiteren Meldungen für die Shopware Version [0] angezeigt.','namespace'=>'backend/swag_update/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"no_more_popups",'default'=>'Es werden keine weiteren Meldungen für die Shopware Version [0] angezeigt.','namespace'=>'backend/swag_update/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Es werden keine weiteren Meldungen für die Shopware Version [0] angezeigt.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"no_more_popups",'default'=>'Es werden keine weiteren Meldungen für die Shopware Version [0] angezeigt.','namespace'=>'backend/swag_update/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', version));
                    }
                }
            }
        });
    }
});
//
<?php }} ?>