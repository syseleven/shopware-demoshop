<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:18:40
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/base/component/element/interval.js" */ ?>
<?php /*%%SmartyHeaderCode:50901422757a251a0769eb3-56016083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2914dafc751da7a6ddede6adb7a7f913d909cda1' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/base/component/element/interval.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50901422757a251a0769eb3-56016083',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a251a07a4954_73728239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a251a07a4954_73728239')) {function content_57a251a07a4954_73728239($_smarty_tpl) {?>//

/**
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
 * @package    Base
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */
Ext.define('Shopware.apps.Base.view.element.Interval', {
    extend:'Ext.form.field.ComboBox',
    alias:[
        'widget.base-element-interval'
    ],

    queryMode: 'local',
    forceSelection: false,
    editable: true,

    store: [
        [0, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'empty_value','default'=>'None (0 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'empty_value','default'=>'None (0 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kein (0 Sek.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'empty_value','default'=>'None (0 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [120, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'2_minutes','default'=>'2 Minutes (120 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'2_minutes','default'=>'2 Minutes (120 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
2 Minuten (120 Sek.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'2_minutes','default'=>'2 Minutes (120 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [300, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'5_minutes','default'=>'5 Minutes (300 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'5_minutes','default'=>'5 Minutes (300 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
5 Minuten (300 Sek.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'5_minutes','default'=>'5 Minutes (300 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [600, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'10_minutes','default'=>'10 Minutes (600 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'10_minutes','default'=>'10 Minutes (600 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
10 Minuten (600 Sek.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'10_minutes','default'=>'10 Minutes (600 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [900, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'15_minutes','default'=>'15 Minutes (900 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'15_minutes','default'=>'15 Minutes (900 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
15 Minuten (900 Sek.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'15_minutes','default'=>'15 Minutes (900 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [1800, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'30_minutes','default'=>'30 Minutes (1800 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'30_minutes','default'=>'30 Minutes (1800 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
30 Minuten (1800 Sek.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'30_minutes','default'=>'30 Minutes (1800 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [3600, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'1_hour','default'=>'1 Hour (3600 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'1_hour','default'=>'1 Hour (3600 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
1 Stunde (3600 Sek.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'1_hour','default'=>'1 Hour (3600 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [7200, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'2_hours','default'=>'2 Hours (7200 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'2_hours','default'=>'2 Hours (7200 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
2 Stunden (7200 Sek.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'2_hours','default'=>'2 Hours (7200 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [14400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'4_hours','default'=>'4 Hours (14400 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'4_hours','default'=>'4 Hours (14400 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
4 Stunden (14400 Sek.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'4_hours','default'=>'4 Hours (14400 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [28800, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'12_hours','default'=>'12 Hours (28800 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'12_hours','default'=>'12 Hours (28800 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
12 Stunden (28800 Sek.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'12_hours','default'=>'12 Hours (28800 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [86400, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'1_day','default'=>'1 Day (86400 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'1_day','default'=>'1 Day (86400 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
1 Tag (86400 Sek.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'1_day','default'=>'1 Day (86400 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [172800, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'2_days','default'=>'2 Days (172800 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'2_days','default'=>'2 Days (172800 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
2 Tage (172800 Sek.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'2_days','default'=>'2 Days (172800 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'],
        [604800, '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'element'/'interval'/'1_week','default'=>'1 Week (604800 Sec.)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'1_week','default'=>'1 Week (604800 Sec.)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
1 Woche (604800 Sek.)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'element'/'interval'/'1_week','default'=>'1 Week (604800 Sec.)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
']
    ],

    initComponent:function () {
        var me = this;

        me.callParent(arguments);
    }
});
<?php }} ?>