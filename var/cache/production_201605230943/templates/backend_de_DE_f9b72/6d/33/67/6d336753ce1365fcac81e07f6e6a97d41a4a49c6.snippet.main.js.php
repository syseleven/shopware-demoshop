<?php /* Smarty version Smarty-3.1.12, created on 2016-08-02 11:09:10
         compiled from "/var/www/html/shopware.agnostic.syseleven.de/themes/Backend/ExtJs/backend/index/controller/main.js" */ ?>
<?php /*%%SmartyHeaderCode:64296874657a06336dd85f0-37947006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d336753ce1365fcac81e07f6e6a97d41a4a49c6' => 
    array (
      0 => '/var/www/html/shopware.agnostic.syseleven.de/themes/Backend/ExtJs/backend/index/controller/main.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64296874657a06336dd85f0-37947006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a06336e351e7_62150685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a06336e351e7_62150685')) {function content_57a06336e351e7_62150685($_smarty_tpl) {?>/**
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

/**
 * SHOPWARE UI - Index Controller
 *
 * This file contains the index application which represents
 * the basic backend structure.
 */

//
//
Ext.define('Shopware.apps.Index.controller.Main', {
	extend: 'Ext.app.Controller',

	/**
	 * Creates the necessary event listener for this
	 * specific controller and opens a new Ext.window.Window
	 * to display the subapplication
     *
     * @public
     * @return void
	 */
	init: function() {
        var me = this,
            firstRunWizardStep = Ext.util.Cookies.get('firstRunWizardStep'),
            firstRunWizardEnabled = me.subApplication.firstRunWizardEnabled;

        if (!firstRunWizardEnabled) {
            firstRunWizardStep = 0;
        } else if (Ext.isEmpty(firstRunWizardStep)) {
            firstRunWizardStep = firstRunWizardEnabled;
        }

        if (firstRunWizardStep > 0) {
            Ext.util.Cookies.set('firstRunWizardStep', firstRunWizardStep);

            Shopware.app.Application.addSubApplication({
                    name: 'Shopware.apps.PluginManager',
                    params: {
                        hidden: true
                    }
                },
                undefined,
                function() {
                    Shopware.app.Application.addSubApplication({
                        name: 'Shopware.apps.FirstRunWizard'
                    });
                }
            );


        } else {
            me.initBackendDesktop();
        }
	},

    initBackendDesktop: function() {
        var me = this,
            mainApp = Shopware.app.Application,
            viewport = mainApp.viewport = Ext.create('Shopware.container.Viewport');

        /** Create our menu and footer */
        me.menu =  me.getView('Menu').create();
        me.footer = me.getView('Footer').create();

        viewport.add(me.menu);
        viewport.add(me.footer);

        me.addKeyboardEvents();
        me.checkLoginStatus();

        var skipTemplateCheck = localStorage.getItem('skipTemplateCheck');
        if (skipTemplateCheck) {
            return;
        }

        Ext.Ajax.request({
            url: '<?php echo '/backend/Base/getShopsWithEmotionTemplates';?>',
            success: function(operation) {
                var response = Ext.decode(operation.responseText);
                if (response.data.length > 0) {
                    var message = Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"emotion_template_warning",'namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"emotion_template_warning",'namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Folgende Shops besitzen noch ein zugewiesenes Emotion Template: [0]. <br>Emotion Templates werden mit der Shopware Version 5.2 nicht mehr unterstützt. Bitte wechseln Sie auf das neue Responsive Template.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"emotion_template_warning",'namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', response.data.join(','));
                    Shopware.Notification.createStickyGrowlMessage({
                        title: '',
                        text: message,
                        onCloseButton: function() {
                            Ext.MessageBox.confirm('', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"skip_emotion_template_warning",'namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"skip_emotion_template_warning",'namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Möchten Sie die Meldung für die Template Prüfung dauerhaft deaktivieren?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"skip_emotion_template_warning",'namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', function(button) {
                                if (button != 'yes') {
                                    return;
                                }
                                localStorage.setItem('skipTemplateCheck', 1);
                            });
                        }
                    });
                }
            }
        });
	},

    /**
     * This method provides experimental support
     * for shortcuts in the Shopware Backend.
     *
     * @return void
     */
    addKeyboardEvents: function() {
        var me = this, map,
            msg = Shopware.Notification;

        map = new Ext.util.KeyMap(document, [
            /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'read','resource'=>'article'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
            // New article - CTRL + ALT + N
            {
                key: 'n',
                ctrl: true,
                alt: true,
                fn: function() {
                    msg.createGrowlMessage('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tastenkombination gedrückt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'content'/'article_open','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'article_open','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artikel wird geöffnet.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'article_open','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
                    openNewModule('Shopware.apps.Article', {
                        params: {
                            articleId: null
                        }
                    });
                }
            },
            /*<?php }?>*/

            /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'read','resource'=>'articlelist'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
            // Article overview - CTRL + ALT + U
            {
                key: "o",
                ctrl: true,
                alt: true,
                fn: function(){
                    msg.createGrowlMessage('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tastenkombination gedrückt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'content'/'article_overview_open','default'=>'Article overview module will be opened.','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'article_overview_open','default'=>'Article overview module will be opened.','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artikelübersicht wird geöffnet.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'article_overview_open','default'=>'Article overview module will be opened.','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
                    openNewModule('Shopware.apps.ArticleList');
                }
            },
            /*<?php }?>*/

            /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'read','resource'=>'order'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>*/
            // Order overview - CTRL + ALT + B
            {
                key: "b",
                ctrl: true,
                alt: true,
                fn: function() {
                    msg.createGrowlMessage('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tastenkombination gedrückt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'content'/'order_open','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'order_open','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestellungen wird geöffnet.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'order_open','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
                    openNewModule('Shopware.apps.Order');
                }
            },
            /*<?php }?>*/

            /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'read','resource'=>'customer'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4){?>*/
             // Order overview - CTRL + ALT + K
            {
                key: "k",
                ctrl: true,
                alt: true,
                fn: function(){
                    msg.createGrowlMessage('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tastenkombination gedrückt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'content'/'customer_open','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'customer_open','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunden wird geöffnet<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'customer_open','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
                    openNewModule('Shopware.apps.Customer');
                }
            },
            /*<?php }?>*/

            // Shopware Community - CTRL + ALT + H
            {
                key: 'h',
                ctrl: true,
                alt: true,
                fn: function() {
                    createKeyNavOverlay();
                }
            },

            /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'read','resource'=>'pluginmanager'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5){?>*/
            // Plugin Manager - CTRL + ALT + P
            {
                key: 'p',
                ctrl: true,
                alt: true,
                fn: function() {
                    msg.createGrowlMessage('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tastenkombination gedrückt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'key_pressed','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'content'/'plugin_open','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'plugin_open','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugin-Manager wird geöffnet.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'plugin_open','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
');
                    openNewModule('Shopware.apps.PluginManager');
                }
            },
            /*<?php }?>*/

            /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'clear','resource'=>'performance'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6){?>*/
            // Cache Manager - CTRL + ALT + TFX
            {
                key: 'tfx',
                ctrl: true,
                alt: true,
                handler: function(keyCode, e) {
                    switch(keyCode) {
                        // Frontend Cache - CTRL + ALT + F
                        case 70: var action = 'Frontend'; break;
                        // Template Cache - CTRL + ALT + T
                        case 84: var action = 'Template'; break;
                        // Config Cache - CTRL + ALT + X
                        case 88: var action = 'Config'; break;
                        default: return;
                    }
                    Shopware.app.Application.addSubApplication({
                        name: 'Shopware.apps.Performance',
                        action: action
                    });
                }
            }
            /*<?php }?>*/
        ]);
    },

    /**
     * Helper method which sends each 5 seconds an request
     * to the backend and checks if the user is logged in.
     *
     * The method registers an new task runner which checks
     * the status.
     *
     * @private
     * @return void
     */
    checkLoginStatus: function() {
        Ext.TaskManager.start({
            interval: 30000,
            run: function() {
                Ext.Ajax.request({
                    url: '<?php echo '/backend/login/getLoginStatus';?>',
                    success: function(response) {
                        var json = Ext.decode(response.responseText);

                        if(!json.success) {
                            window.location.href = '<?php echo '/backend';?>';
                        }
                    },
                    failure: function() {
                        window.location.href = '<?php echo '/backend';?>';
                    }
                });
            }
        });
    }
});

Ext.define('Shopware.apps.Index.view.Main', {
	extend: 'Ext.panel.Panel',
	alias: 'widget.index-desktoppanel',
    cls: 'main-backend-holder',
    height: '100%',
    width: '100%',
    border: false,
    plain: true,
    frame: false,
    region: 'center',
    layout: 'fit',
    bodyStyle: 'background: transparent'
});


/**
 * Wrapper methods which allows to open deprecated
 * modules in the new ExtJS 4 structure.
 *
 * Note that this method is only an alias and isn't
 * needed for new modules. New modules will be loaded
 * with the method Shopware.app.Application.addSubApplication
 * or the shorthand openNewModule()
 *
 * @param [string] module - the module to load
 * @param [boolean] forceNewWindow - has no impact
 * @param [object] requestConfig - additional params which will passed to the module
 * @return void
 */
loadSkeleton = function(module, forceNewWindow, requestConfig) {

	var options = { };
    options.name = 'Shopware.apps.Deprecated';
    options.moduleName = module;
    options.requestConfig = requestConfig || {};

    Shopware.app.Application.addSubApplication(options);
};

/**
 * Wrapper method which loads newer modules. This method
 * is mostly used by backend modules which are shipped
 * within a plugin
 *
 * @param [string] controller - the controllername to load
 * @return void
 */
openAction = function(controller, action) {
    var options =  {};
    options.name = 'Shopware.apps.Deprecated';
    options.controllerName = controller;
    options.actionName = action;
    Shopware.app.Application.addSubApplication(options);
};

/**
 * Initialize a new sub application. This method
 * will be used in the future to load new
 * backend modules
 *
 * @param [string] subapp - the complete name of the controller
 * @param [object] options - additional options
 * @return void
 *
 * @example openModule('Shopware.apps.Auth')
 */
openNewModule = function(subapp, options) {
    options = options || { };
    options.name = subapp;
	Shopware.app.Application.addSubApplication(options);
};

createKeyNavOverlay = function() {
    var store = Ext.create('Ext.data.Store', {
            fields: [ 'name', 'key', 'alt', 'ctrl' ],
            data: [
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'read','resource'=>'article'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7){?>*/
                { name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'article','default'=>'Article','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'article','default'=>'Article','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artikel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'article','default'=>'Article','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', key: 'n', alt: true , ctrl: true },
                /*<?php }?>*/
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'read','resource'=>'articlelist'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8){?>*/
                { name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'article_overview','default'=>'Article overview','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'article_overview','default'=>'Article overview','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artikelübersicht<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'article_overview','default'=>'Article overview','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', key: 'o', alt: true , ctrl: true },
                /*<?php }?>*/
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'read','resource'=>'order'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9){?>*/
                { name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'order','default'=>'Order','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'order','default'=>'Order','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestellungen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'order','default'=>'Order','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', key: 'b', alt: true , ctrl: true },
                /*<?php }?>*/
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'read','resource'=>'customer'),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php if ($_tmp10){?>*/
                { name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'customer','default'=>'Customer','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'customer','default'=>'Customer','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'customer','default'=>'Customer','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', key: 'k', alt: true , ctrl: true },
                /*<?php }?>*/
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'read','resource'=>'pluginmanager'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php if ($_tmp11){?>*/
                { name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'plugin_manager','default'=>'Plugin manager','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'plugin_manager','default'=>'Plugin manager','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugin Manager<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'plugin_manager','default'=>'Plugin manager','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', key: 'p', alt: true , ctrl: true },
                /*<?php }?>*/
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'clear','resource'=>'performance'),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php if ($_tmp12){?>*/
                { name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'cache_template','default'=>'Clear template cache','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'cache_template','default'=>'Clear template cache','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Templatecache leeren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'cache_template','default'=>'Clear template cache','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', key: 't', alt: true , ctrl: true },
                { name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'cache_config','default'=>'Clear config cache','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'cache_config','default'=>'Clear config cache','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Konfigurationscache leeren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'cache_config','default'=>'Clear config cache','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', key: 'x', alt: true , ctrl: true },
                { name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'cache_frontend','default'=>'Clear shop cache','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'cache_frontend','default'=>'Clear shop cache','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artikel + Kategorien Cache leeren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'cache_frontend','default'=>'Clear shop cache','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', key: 'f', alt: true , ctrl: true }
                /*<?php }?>*/
            ]
        }),
        tpl = new Ext.XTemplate(
            '<tpl for=".">',
                '<div class="row">',
                    '<span class="title">{name}:</span>',
                    '<div class="keys">',

                        // Ctrl key
                        '<tpl if="ctrl === true">',
                            '<span class="sprite-key_ctrl_alternative">ctrl</span>',
                        '</tpl>',

                        // Alt key
                        '<tpl if="alt === true">',
                            '<span class="key_sep">+</span>',
                            '<span class="sprite-key_alt_alternative">alt</span>',
                        '</tpl>',

                        // Output the actual key
                        '<span class="key_sep">+</span>',
                        '<span class="sprite-key_{key}">{key}</span>',
                    '</div>',
                '</div>',
            '</tpl>'
        ),
        emptyTpl = '<span class="no-shortcuts"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shortcuts'/'no_shortcuts_acl','default'=>'Due to your permissions, there are no shortcuts available','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shortcuts'/'no_shortcuts_acl','default'=>'Due to your permissions, there are no shortcuts available','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aufgrund Ihrer Berechtigungen sind keine Tastenkürzel verfügbar.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shortcuts'/'no_shortcuts_acl','default'=>'Due to your permissions, there are no shortcuts available','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>',
        itemCount = store.totalCount,
        dataView = Ext.create('Ext.view.View', {
            store: store,
            tpl: itemCount ? tpl : emptyTpl
        });

    var win = Ext.create('Ext.window.Window', {
        modal: true,
        layout: 'fit',
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'keyboard_shortcuts','default'=>'Keyboard shortcuts','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'keyboard_shortcuts','default'=>'Keyboard shortcuts','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tastaturkürzel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'keyboard_shortcuts','default'=>'Keyboard shortcuts','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        width: 500,
        height: 400,
        bodyPadding: 20,
        autoScroll: true,
        cls: Ext.baseCSSPrefix + 'shortcut-overlay',
        items: [ dataView ]
    });
    win.show();

};

/**
 * Proxy method which opens up the specific module
 * if the user clicks on an entry in the search result.
 *
 * @public
 * @param [string] module - Name of the module
 * @param [integer] id - id of the item
 * @return [boolean]
 */
openSearchResult = function(module, id) {
    // Force the id to be an integer
    id = ~~(1 * id);

    // Hide search drop down
    Ext.defer(function() {
        Shopware.searchField.searchDropDown.hide();
    }, 100);

    switch(module) {
        case 'articles':
            Shopware.app.Application.addSubApplication({
                name: 'Shopware.apps.Article',
                action: 'detail',
                params: {
                    articleId: id
                }
            });
            break;
        case 'customers':
            Shopware.app.Application.addSubApplication({
                name: 'Shopware.apps.Customer',
                action: 'detail',
                params: {
                    customerId: id
                }
            });
            break;
        case 'orders':
            Shopware.app.Application.addSubApplication({
                name: 'Shopware.apps.Order',
                params: {
                    orderId: id
                }
            });
            break;
        default:
            break;
    }
    return false;
}

/**
 * Proxy method which just shows a growl like
 * message with the current version of Shopware.
 *
 * @public
 * @return void
 */
createShopwareVersionMessage = function() {

    var aboutWindow = Ext.create('Ext.window.Window', {
        autoShow: true,
        unstyled: true,
        baseCls: Ext.baseCSSPrefix + 'about-shopware',
        layout: 'border',
        width: 402,
        header: false,
        height: 302,
        resizable: false,
        closable: false,
        items: [{
            region: 'north',
            xtype: 'container',
            height: 126,
            cls: Ext.baseCSSPrefix + 'about-shopware-header-logo'
        }, {
            height: 35,
            xtype: 'container',
            region: 'south',
            cls: Ext.baseCSSPrefix + 'about-shopware-footer',
            html: '<a  href="http://www.shopware.de" target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'about'/'footer','default'=>'Copyright &copy; shopware AG. All rights reserved.','namespace'=>'backend/index/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'about'/'footer','default'=>'Copyright &copy; shopware AG. All rights reserved.','namespace'=>'backend/index/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Copyright &copy; shopware AG. Alle Rechte reserviert.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'about'/'footer','default'=>'Copyright &copy; shopware AG. All rights reserved.','namespace'=>'backend/index/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>'
        }, {
            xtype: 'container',
            region: 'center',
            padding: '15 75',
            autoScroll: true,
            cls: Ext.baseCSSPrefix + 'about-shopware-content',
            html: '<p>' +
                    '<strong>Shopware <?php echo Shopware::VERSION;?>
 <?php echo Shopware::VERSION_TEXT;?>
</strong>' +
                    '<span>Build Rev <?php echo Shopware::REVISION;?>
</span></p>' +

                    '<?php if (!$_smarty_tpl->tpl_vars['product']->value){?><p><strong>Community Edition under <a href="http://www.gnu.org/licenses/agpl.html" target="_blank">AGPL license</a></strong><span>No support included in this shopware package.</span></p><?php }else{ ?>' +
                    '<p><strong><?php if ($_smarty_tpl->tpl_vars['product']->value=="PE"){?>Professional Edition <?php }elseif($_smarty_tpl->tpl_vars['product']->value=="EB"){?>Enterprise Business Edition <?php }elseif($_smarty_tpl->tpl_vars['product']->value=="EC"){?>Enterprise Cluster Edition<?php }?> under commercial / proprietary license</strong><span>See eula.txt / eula_en.txt (bundled with shopware) for details</span></p><?php }?>' +

                    '<p><strong>Shopware 5 uses the following components</strong></p>' +
                    '<p><strong>Enlight 2</strong><span>BSD License</span><span>&nbsp;Origin: shopware AG</span></p>' +
                    '<p><strong>Zend Framework 1</strong><span>New BSD License</span><span>&nbsp;Origin: Zend Technologies</span></p>' +
                    '<p><strong>ExtJS 4</strong><span>GPL v3 License</span><span>&nbsp;Origin: Sencha Corp.</span></p>' +
                    'If you want to develop proprietary extensions that makes use of ExtJS (ie extensions that are not licensed under the GNU Affero General Public License, version 3, or a compatible license), you´ll need to license shopware SDK to get the necessary rights for the distribution of your extensions / plugins.' +
                    '<p><strong>Doctrine 2</strong><span>MIT License</span><span>&nbsp;Origin: http://www.doctrine-project.org/</span></p>' +
                    '<p><strong>password_compat</strong><span>MIT License</span><span>&nbsp;Origin: https://github.com/ircmaxell/password_compat/</span></p>' +
                    '<p><strong>TinyMCE 3</strong><span>LGPL 2.1 License</span><span>&nbsp;Origin: Moxiecode Systems AB.</span></p>' +
                    '<p><strong>Symfony 2</strong><span>MIT License</span><span>&nbsp;Origin: SensioLabs</span></p>' +
                    '<p><strong>Smarty 3</strong><span>LGPL 2.1 License</span><span>&nbsp;Origin: New Digital Group, Inc.</span></p>' +
                    '<p><strong>Mpdf 5.0</strong><span>GPL License</span><span>&nbsp;Origin: http://www.mpdf1.com/mpdf/</span></p>' +
                    '<p><strong>CodeMirror</strong><span>BSD License</span><span>&nbsp;Origin: http://codemirror.net/</span></p>' +
                    '<p><strong>FPDF</strong><span>License</span><span>&nbsp;Origin: http://www.fpdf.org/</span></p>' + "</p>" +
                    '<p><strong>Guzzle</strong><span>MIT License</span><span>&nbsp;Origin: http://guzzlephp.org/</span></p>' + "</p>" +
                    '<p><strong>Less.php</strong><span>Apache-2.0</span><span>&nbsp;Origin: http://lessphp.gpeasy.com/</span></p>' + "</p>" +
                    '<p><strong>reactphp/promise</strong><span>MIT License</span><span>&nbsp;Origin: https://github.com/reactphp/promise</span></p>' + "</p>" +
                    '<p><strong>array_column</strong><span>MIT License</span><span>&nbsp;Origin: https://github.com/ramsey/array_column</span></p>' + "</p>" +
                    '<p><strong>Mobile_Detect</strong><span>MIT License</span><span>&nbsp;Origin: https://github.com/serbanghita/Mobile-Detect/</span></p>' + "</p>" +
                    '<p><strong>Monolog</strong><span>MIT License</span><span>&nbsp;Origin: https://github.com/Seldaek/monolog/</span></p>' + "</p>"
        }]
    });

    // Add event listener method closes the about window
    Ext.getBody().on('click', function() {
        this.destroy();
    }, aboutWindow, {
        single: true,
        stopEvent: true
    });
}
//
<?php }} ?>