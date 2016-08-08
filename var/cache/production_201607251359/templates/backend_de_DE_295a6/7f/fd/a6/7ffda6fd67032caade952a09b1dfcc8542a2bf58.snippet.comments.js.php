<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:50:24
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/detail/comments.js" */ ?>
<?php /*%%SmartyHeaderCode:174478930457a2591076edd2-97633790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ffda6fd67032caade952a09b1dfcc8542a2bf58' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/detail/comments.js',
      1 => 1470256597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174478930457a2591076edd2-97633790',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a25910787755_08705402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a25910787755_08705402')) {function content_57a25910787755_08705402($_smarty_tpl) {?>/**
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
 * @subpackage Detail
 * @version    $Id$
 * @author shopware AG
 */
//

//
Ext.define('Shopware.apps.PluginManager.view.detail.Comments', {
    extend: 'Ext.container.Container',
    commentCount: 0,

    mixins: {
        events: 'Shopware.apps.PluginManager.view.PluginHelper'
    },

    initComponent: function() {
        var me = this, items = [];

        me.commentCount = 0;

        if (!me.plugin) {
            me.callParent(arguments);
            return;
        }

        if (!me.plugin['getCommentsStore']) {
            me.callParent(arguments);
            return;
        }

        me.commentCount = me.plugin['getCommentsStore'].getCount();

        if (me.commentCount <= 0) {
            me.callParent(arguments);
            return;
        }

        items.push({
            xtype: 'component',
            cls: 'headline',
            html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"customer_rating_for",'default'=>'Customer rating for','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"customer_rating_for",'default'=>'Customer rating for','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kundenbewertungen für<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"customer_rating_for",'default'=>'Customer rating for','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 ' + me.plugin.get('label')
        });

        items.push({
            xtype: 'component',
            cls: 'rating-average',
            html:  '<div class="label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"rating_average",'default'=>'Average customer rating:','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"rating_average",'default'=>'Average customer rating:','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Durchschnittliche Kundenbewertung:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"rating_average",'default'=>'Average customer rating:','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>' +
                    '<div class="store-plugin-rating star' + me.plugin.get('rating') + '">&nbsp;</div>' +
                    '<div class="suffix">('+ me.commentCount +' <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"rating",'default'=>'customer reviews','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"rating",'default'=>'customer reviews','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kundenbewertungen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"rating",'default'=>'customer reviews','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)</div>'
        });

        if (me.plugin['getCommentsStore']) {
            me.plugin['getCommentsStore'].each(function(item) {
                items.push(me.createCommentItem(item));
            });
        }

        me.items = items;

        me.callParent(arguments);
    },

    getCommentCount: function() {
        return this.commentCount;
    },

    createCommentItem: function(comment) {
        var me = this;

        var date = me.formatDate(comment.get('creationDate').date);

        var left = Ext.create('Ext.container.Container', {
            cls: 'comment-left',
            defaults: { xtype: 'component' },
            items: [{
                cls: 'store-plugin-rating star' + comment.get('rating'),
                html: '&nbsp'
            }, {
                cls: 'comment-name',
                html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"rating_author",'default'=>'From','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"rating_author",'default'=>'From','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Von<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"rating_author",'default'=>'From','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: ' + comment.get('author')
            }, {
                cls: 'comment-date',
                html: Ext.util.Format.date(date) + ' ' + Ext.util.Format.date(date, timeFormat)
            }]
        });

        var right = Ext.create('Ext.container.Container', {
            cls: 'comment-right',
            defaults: { xtype: 'component' },
            items: [{
                cls: 'comment-headline',
                html: comment.get('headline')
            }, {
                cls: 'comment-text',
                html: comment.get('text')
            }]
        });

        return Ext.create('Ext.container.Container', {
            cls: 'store-plugin-comment',
            items: [ left, right ]
        });
    }
});
//<?php }} ?>