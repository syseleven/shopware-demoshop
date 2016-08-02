<?php /* Smarty version Smarty-3.1.12, created on 2016-08-02 11:09:11
         compiled from "/var/www/html/shopware.agnostic.syseleven.de/themes/Frontend/Bare/widgets/index/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18432918957a0633776e922-95241991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c73bcdc902becb0496a0cc6b60d7f253f45c94' => 
    array (
      0 => '/var/www/html/shopware.agnostic.syseleven.de/themes/Frontend/Bare/widgets/index/menu.tpl',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18432918957a0633776e922-95241991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sGroup' => 0,
    'sMenu' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a06337776289_10294765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a06337776289_10294765')) {function content_57a06337776289_10294765($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sMenu']->value[$_smarty_tpl->tpl_vars['sGroup']->value]){?>
    <ul class="service--list is--rounded" role="menu">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sMenu']->value[$_smarty_tpl->tpl_vars['sGroup']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li class="service--entry" role="menuitem">
                <a class="service--link" href="<?php if ($_smarty_tpl->tpl_vars['item']->value['link']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
<?php }else{ ?><?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'custom', 'sCustom' => $_smarty_tpl->tpl_vars['item']->value['id'], 'title' => $_smarty_tpl->tpl_vars['item']->value['description'], ))); ?><?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['description'], ENT_QUOTES, 'utf-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['target']){?>target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                </a>
            </li>
        <?php } ?>
    </ul>
<?php }?><?php }} ?>