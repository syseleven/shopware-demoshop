<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/_includes/product_slider_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14597596257a24c35e20ba4-57424653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d654f62800eeb618f4ba998893829bed341df18' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/_includes/product_slider_items.tpl',
      1 => 1470256650,
      2 => 'file',
    ),
    'd9484e42b394b80c1e315506ac305d22f0bfd7ba' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/box-basic.tpl',
      1 => 1470256650,
      2 => 'snippet',
    ),
    '71486786a1b59523a6bc62b4da2ee2bfe8fe0591' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-badges.tpl',
      1 => 1470256650,
      2 => 'snippet',
    ),
    'd15635aceadb641370fd7b5234a614f911862903' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-image.tpl',
      1 => 1470256650,
      2 => 'snippet',
    ),
    'f4a767f3ddead494d00f6af00aaaf44451e174ca' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/_includes/rating.tpl',
      1 => 1470256650,
      2 => 'snippet',
    ),
    'ada68169b58e271654c4fd6f4625f88431b18281' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price-unit.tpl',
      1 => 1470256650,
      2 => 'snippet',
    ),
    'd2f7200fe5df22973b99c23e96022250aa4a72e6' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price.tpl',
      1 => 1470256650,
      2 => 'snippet',
    ),
    '243daa4dd8bca61600dc798f9798c6ddd64a55c6' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-actions.tpl',
      1 => 1470256650,
      2 => 'snippet',
    ),
    '141b21de4ba66dc43553228393e51967742daba2' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/box-minimal.tpl',
      1 => 1470256650,
      2 => 'snippet',
    ),
    'c41afa014bf790017668c68f6c59494f9cce976d' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/box-big-image.tpl',
      1 => 1470256650,
      2 => 'snippet',
    ),
    '8e6c676ff7d74f9aa093422e5c0438322cdb5a48' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/box-product-slider.tpl',
      1 => 1470256650,
      2 => 'snippet',
    ),
    '78b30fb499c6fa227ddf33b76b650c87e6ee2892' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/box-emotion.tpl',
      1 => 1470256650,
      2 => 'snippet',
    ),
    '25fb7e5aba58b33469184fe053f9f68f4a7bfb72' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/box_article.tpl',
      1 => 1470256650,
      2 => 'snippet',
    ),
    'bd2242c652f102d1f3e167feb279f479d31911e6' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/_includes/product_slider_item.tpl',
      1 => 1470256650,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '14597596257a24c35e20ba4-57424653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a24c3685aca1_29560750',
  'variables' => 
  array (
    'articles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a24c3685aca1_29560750')) {function content_57a24c3685aca1_29560750($_smarty_tpl) {?>
    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
        <?php /*  Call merged included template "frontend/_includes/product_slider_item.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/_includes/product_slider_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582d90fe40_24797253($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/_includes/product_slider_item.tpl" */?>
    <?php } ?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/_includes/product_slider_item.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582d90fe40_24797253')) {function content_57a2582d90fe40_24797253($_smarty_tpl) {?>
    <?php $_smarty_tpl->tpl_vars['productBoxLayout'] = new Smarty_variable($_smarty_tpl->tpl_vars['productBoxLayout']->value ? $_smarty_tpl->tpl_vars['productBoxLayout']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['fixedImageSize'] = new Smarty_variable($_smarty_tpl->tpl_vars['fixedImageSize']->value ? $_smarty_tpl->tpl_vars['fixedImageSize']->value : '', null, 0);?>



    <div class="product-slider--item">
        <?php /*  Call merged included template "frontend/listing/box_article.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/box_article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sArticle'=>$_smarty_tpl->tpl_vars['article']->value,'productBoxLayout'=>$_smarty_tpl->tpl_vars['productBoxLayout']->value,'fixedImageSize'=>$_smarty_tpl->tpl_vars['fixedImageSize']->value), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582d926282_38413887($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/box_article.tpl" */?>
    </div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/box_article.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582d926282_38413887')) {function content_57a2582d926282_38413887($_smarty_tpl) {?>

    <?php if ($_smarty_tpl->tpl_vars['productBoxLayout']->value=='minimal'){?>
        <?php /*  Call merged included template "frontend/listing/product-box/box-minimal.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/box-minimal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582d92e8d3_42885227($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/box-minimal.tpl" */?>

    <?php }elseif($_smarty_tpl->tpl_vars['productBoxLayout']->value=='image'){?>
        <?php /*  Call merged included template "frontend/listing/product-box/box-big-image.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/box-big-image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582db112d1_26177333($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/box-big-image.tpl" */?>

    <?php }elseif($_smarty_tpl->tpl_vars['productBoxLayout']->value=='slider'){?>
        <?php /*  Call merged included template "frontend/listing/product-box/box-product-slider.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/box-product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582dc75cd7_31151484($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/box-product-slider.tpl" */?>

    <?php }elseif($_smarty_tpl->tpl_vars['productBoxLayout']->value=='emotion'){?>
        <?php /*  Call merged included template "frontend/listing/product-box/box-emotion.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/box-emotion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582ddb39a3_77146566($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/box-emotion.tpl" */?>

    <?php }else{ ?>
        
            <?php /*  Call merged included template "frontend/listing/product-box/box-basic.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/box-basic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('productBoxLayout'=>"basic"), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582e0aafb0_83327625($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/box-basic.tpl" */?>
        
    <?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/box-minimal.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582d92e8d3_42885227')) {function content_57a2582d92e8d3_42885227($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_currency')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>


    <div class="product--box box--<?php echo $_smarty_tpl->tpl_vars['productBoxLayout']->value;?>
"
         data-page-index="<?php echo $_smarty_tpl->tpl_vars['pageIndex']->value;?>
"
         data-ordernumber="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'];?>
"
         <?php ob_start();?><?php echo 0;?><?php $_tmp1=ob_get_clean();?><?php if (!$_tmp1){?> data-category-id="<?php echo $_smarty_tpl->tpl_vars['sCategoryCurrent']->value;?>
"<?php }?>>

        
            <div class="box--content is--rounded">

                
                
                    <?php /*  Call merged included template "frontend/listing/product-box/product-badges.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-badges.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582d98ee65_25857393($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-badges.tpl" */?>
                

                
                    <div class="product--info">

                        
                        
                            <?php /*  Call merged included template "frontend/listing/product-box/product-image.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582d9b7cc9_02236642($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-image.tpl" */?>
                        

                        
                        
                            <div class="product--rating-container">
                                <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['sVoteAverage']['average']){?>
                                    <?php /*  Call merged included template "frontend/_includes/rating.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('frontend/_includes/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('points'=>$_smarty_tpl->tpl_vars['sArticle']->value['sVoteAverage']['average'],'type'=>"aggregated",'label'=>false,'microData'=>false), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582d9f1cb3_00461898($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/_includes/rating.tpl" */?>
                                <?php }?>
                            </div>
                        

                        
                        
                            <a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
                               class="product--title"
                               title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml($_smarty_tpl->tpl_vars['sArticle']->value['articleName']);?>
">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml(smarty_modifier_truncate($_smarty_tpl->tpl_vars['sArticle']->value['articleName'],50));?>

                            </a>
                        

                        
                        

                        
                            <div class="product--price-info">

                                
                                
                                    <?php /*  Call merged included template "frontend/listing/product-box/product-price-unit.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-price-unit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582da78cd6_81951655($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-price-unit.tpl" */?>
                                

                                
                                
    <div class="product--price-outer">
        <div class="product--price">

            
            
                <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
                    <span class="price--pseudo">

                        
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        

                        <span class="price--discount is--nowrap">
                            <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']);?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </span>

                        
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        
                    </span>
                <?php }?>
            

            
            
                <span class="price--default is--nowrap<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?> is--discount<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['priceStartingFrom']&&!$_smarty_tpl->tpl_vars['sArticle']->value['liveshoppingData']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ab<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?>
                    <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['price']);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </span>
            
        </div>
    </div>

                            </div>
                        

                        
                        
                    </div>
                
            </div>
        
    </div>

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-badges.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582d98ee65_25857393')) {function content_57a2582d98ee65_25857393($_smarty_tpl) {?>



	<div class="product--badges">

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
				<div class="product--badge badge--discount">
                    <i class="icon--percent2"></i>
                </div>
			<?php }?>
		

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['highlight']){?>
                <div class="product--badge badge--recommend">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
TIPP!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            <?php }?>
        

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['newArticle']){?>
				<div class="product--badge badge--newcomer">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
NEU<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			<?php }?>
		

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['esd']){?>
                <div class="product--badge badge--esd">
                    <i class="icon--download"></i>
                </div>
            <?php }?>
        
	</div>







<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-image.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582d9b7cc9_02236642')) {function content_57a2582d9b7cc9_02236642($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Smarty/plugins/modifier.truncate.php';
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
   title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true);?>
"
   class="product--image">
    
        <span class="image--element">
            
                <span class="image--media">

                    <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true), null, 0);?>

                    <?php if (isset($_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'])){?>

                        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['image']['description']){?>
                            <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['image']['description'], ENT_QUOTES, 'utf-8', true), null, 0);?>
                        <?php }?>

                        
                            <img srcset="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'][0]['sourceSet'];?>
"
                                 alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                                 title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" />
                        
                    <?php }else{ ?>
                        <img src="/themes/Frontend/Responsive/frontend/_public/src/img/no-picture.jpg"
                             alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                             title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" />
                    <?php }?>
                </span>
            
        </span>
    
</a><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/_includes/rating.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582d9f1cb3_00461898')) {function content_57a2582d9f1cb3_00461898($_smarty_tpl) {?>

    <?php $_smarty_tpl->tpl_vars['isType'] = new Smarty_variable('single', null, 0);?> 
    <?php if (isset($_smarty_tpl->tpl_vars['type']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isType'] = new Smarty_variable($_smarty_tpl->tpl_vars['type']->value, null, 0);?>
    <?php }?>




    <?php $_smarty_tpl->tpl_vars['isBase'] = new Smarty_variable(10, null, 0);?> 
    <?php if (isset($_smarty_tpl->tpl_vars['base']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isBase'] = new Smarty_variable($_smarty_tpl->tpl_vars['base']->value, null, 0);?>
    <?php }?>




    <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable(true, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['microData']->value)){?>
        <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable($_smarty_tpl->tpl_vars['microData']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value&&$_smarty_tpl->tpl_vars['isType']->value==='aggregated'&&$_smarty_tpl->tpl_vars['count']->value===0){?> 
        <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable(false, null, 0);?>
    <?php }?>




    <?php if ($_smarty_tpl->tpl_vars['isType']->value==='single'){?>
        <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable('itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"', null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable('itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"', null, 0);?>
    <?php }?>




    <?php if (isset($_smarty_tpl->tpl_vars['label']->value)){?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable($_smarty_tpl->tpl_vars['label']->value, null, 0);?>
    <?php }?>




    <?php if ($_smarty_tpl->tpl_vars['isType']->value==='aggregated'){?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable(true, null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable(false, null, 0);?>
    <?php }?>




    <span class="product--rating"<?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value){?> <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
<?php }?>>

        
        
            <?php $_smarty_tpl->tpl_vars['average'] = new Smarty_variable($_smarty_tpl->tpl_vars['points']->value/2, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['isBase']->value==5){?>
                <?php $_smarty_tpl->tpl_vars['average'] = new Smarty_variable($_smarty_tpl->tpl_vars['points']->value, null, 0);?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value){?>
                <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['points']->value;?>
">
                <meta itemprop="worstRating" content="1">
                <meta itemprop="bestRating" content="<?php echo $_smarty_tpl->tpl_vars['isBase']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['isType']->value==='aggregated'){?>
                    <meta itemprop="ratingCount" content="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
                <?php }?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['points']->value!=0){?>
                <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['value']->step = 1;$_smarty_tpl->tpl_vars['value']->total = (int)ceil(($_smarty_tpl->tpl_vars['value']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['value']->step));
if ($_smarty_tpl->tpl_vars['value']->total > 0){
for ($_smarty_tpl->tpl_vars['value']->value = 1, $_smarty_tpl->tpl_vars['value']->iteration = 1;$_smarty_tpl->tpl_vars['value']->iteration <= $_smarty_tpl->tpl_vars['value']->total;$_smarty_tpl->tpl_vars['value']->value += $_smarty_tpl->tpl_vars['value']->step, $_smarty_tpl->tpl_vars['value']->iteration++){
$_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->iteration == 1;$_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration == $_smarty_tpl->tpl_vars['value']->total;?>
                    <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star', null, 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['value']->value>$_smarty_tpl->tpl_vars['average']->value){?>
                        <?php $_smarty_tpl->tpl_vars['diff'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value-$_smarty_tpl->tpl_vars['average']->value, null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['diff']->value>0&&$_smarty_tpl->tpl_vars['diff']->value<=0.5){?>
                            <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star-half', null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star-empty', null, 0);?>
                        <?php }?>
                    <?php }?>

                    <i class="<?php echo $_smarty_tpl->tpl_vars['cls']->value;?>
"></i>
                <?php }} ?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['hasLabel']->value&&$_smarty_tpl->tpl_vars['count']->value){?>
                <span class="rating--count-wrapper">
                    (<span class="rating--count"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>)
                </span>
            <?php }?>
        
    </span>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price-unit.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582da78cd6_81951655')) {function content_57a2582da78cd6_81951655($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="price--unit">

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=0){?>

        
        
            <span class="price--label label--purchase-unit is--bold is--nowrap">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Inhalt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </span>
        

        
        
            <span class="is--nowrap">
                <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>

            </span>
        
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=$_smarty_tpl->tpl_vars['sArticle']->value['referenceunit']){?>

        
        
            <span class="is--nowrap">
                (<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['referenceprice']);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 / <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['referenceunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>
)
            </span>
        
    <?php }?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582da9b383_80073073')) {function content_57a2582da9b383_80073073($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="product--price">

    
    
        <span class="price--default is--nowrap<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?> is--discount<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['priceStartingFrom']&&!$_smarty_tpl->tpl_vars['sArticle']->value['liveshoppingData']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ab<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?>
            <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['price']);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </span>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
            <span class="price--pseudo">

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                

                <span class="price--discount is--nowrap">
                    <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </span>

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                
            </span>
        <?php }?>
    
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-actions.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582dae3d11_18545017')) {function content_57a2582dae3d11_18545017($_smarty_tpl) {?>

<div class="product--actions">

    
    
        <?php ob_start();?><?php echo 1;?><?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
            <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'add_article', 'articleID' => $_smarty_tpl->tpl_vars['sArticle']->value['articleID'], ))); ?>"
               title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleichen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
               class="product--action action--compare"
               data-product-compare-add="true"
               rel="nofollow">
                <i class="icon--compare"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleichen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </a>
        <?php }?>
    

    
    
        <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'note', 'action' => 'add', 'ordernumber' => $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'], ))); ?>"
           title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Auf den Merkzettel";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_tmp2, ENT_QUOTES, 'utf-8', true);?>
"
           class="product--action action--note"
           data-ajaxUrl="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'note', 'action' => 'ajaxAdd', 'ordernumber' => $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'], ))); ?>"
           data-text="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gemerkt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
           rel="nofollow">
            <i class="icon--heart"></i> <span class="action--text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Merken<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
        </a>
    

    
    

    
    
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/box-big-image.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582db112d1_26177333')) {function content_57a2582db112d1_26177333($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Smarty/plugins/modifier.truncate.php';
?>


    <div class="product--box box--<?php echo $_smarty_tpl->tpl_vars['productBoxLayout']->value;?>
"
         data-page-index="<?php echo $_smarty_tpl->tpl_vars['pageIndex']->value;?>
"
         data-ordernumber="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'];?>
"
         <?php ob_start();?><?php echo 0;?><?php $_tmp1=ob_get_clean();?><?php if (!$_tmp1){?> data-category-id="<?php echo $_smarty_tpl->tpl_vars['sCategoryCurrent']->value;?>
"<?php }?>>

        
            <div class="box--content is--rounded">

                
                
                    <?php /*  Call merged included template "frontend/listing/product-box/product-badges.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-badges.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582db34df6_02892465($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-badges.tpl" */?>
                

                
                    <div class="product--info">

                        
                        
    <a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true);?>
"
       class="product--image">
        
            <span class="image--element">
            
                <span class="image--media">

                    <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true), null, 0);?>

                    <?php if (isset($_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'])){?>

                        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['image']['description']){?>
                            <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['image']['description'], ENT_QUOTES, 'utf-8', true), null, 0);?>
                        <?php }?>

                        
                            <img srcset="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'][1]['sourceSet'];?>
"
                                 alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                                 title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" />
                        
                    <?php }else{ ?>
                        <img src="/themes/Frontend/Responsive/frontend/_public/src/img/no-picture.jpg"
                             alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                             title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" />
                    <?php }?>
                </span>
            
        </span>
        
    </a>


                        
                        
                            <div class="product--rating-container">
                                <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['sVoteAverage']['average']){?>
                                    <?php /*  Call merged included template "frontend/_includes/rating.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('frontend/_includes/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('points'=>$_smarty_tpl->tpl_vars['sArticle']->value['sVoteAverage']['average'],'type'=>"aggregated",'label'=>false,'microData'=>false), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582db9d2f9_82523937($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/_includes/rating.tpl" */?>
                                <?php }?>
                            </div>
                        

                        
                        
                            <a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
                               class="product--title"
                               title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml($_smarty_tpl->tpl_vars['sArticle']->value['articleName']);?>
">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml(smarty_modifier_truncate($_smarty_tpl->tpl_vars['sArticle']->value['articleName'],50));?>

                            </a>
                        

                        
                        

                        
                            <div class="product--price-info">

                                
                                
                                    <?php /*  Call merged included template "frontend/listing/product-box/product-price-unit.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-price-unit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582dc0c953_94242316($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-price-unit.tpl" */?>
                                

                                
                                
                                    <?php /*  Call merged included template "frontend/listing/product-box/product-price.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582dc2c5f1_83206341($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-price.tpl" */?>
                                
                            </div>
                        

                        
                        
                            <?php /*  Call merged included template "frontend/listing/product-box/product-actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582dc4ff04_97727575($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-actions.tpl" */?>
                        
                    </div>
                
            </div>
        
    </div>

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-badges.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582db34df6_02892465')) {function content_57a2582db34df6_02892465($_smarty_tpl) {?>



	<div class="product--badges">

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
				<div class="product--badge badge--discount">
                    <i class="icon--percent2"></i>
                </div>
			<?php }?>
		

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['highlight']){?>
                <div class="product--badge badge--recommend">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
TIPP!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            <?php }?>
        

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['newArticle']){?>
				<div class="product--badge badge--newcomer">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
NEU<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			<?php }?>
		

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['esd']){?>
                <div class="product--badge badge--esd">
                    <i class="icon--download"></i>
                </div>
            <?php }?>
        
	</div>







<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-image.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582db51221_40512465')) {function content_57a2582db51221_40512465($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Smarty/plugins/modifier.truncate.php';
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
   title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true);?>
"
   class="product--image">
    
        <span class="image--element">
            
                <span class="image--media">

                    <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true), null, 0);?>

                    <?php if (isset($_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'])){?>

                        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['image']['description']){?>
                            <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['image']['description'], ENT_QUOTES, 'utf-8', true), null, 0);?>
                        <?php }?>

                        
                            <img srcset="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'][0]['sourceSet'];?>
"
                                 alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                                 title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" />
                        
                    <?php }else{ ?>
                        <img src="/themes/Frontend/Responsive/frontend/_public/src/img/no-picture.jpg"
                             alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                             title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" />
                    <?php }?>
                </span>
            
        </span>
    
</a><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/_includes/rating.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582db9d2f9_82523937')) {function content_57a2582db9d2f9_82523937($_smarty_tpl) {?>

    <?php $_smarty_tpl->tpl_vars['isType'] = new Smarty_variable('single', null, 0);?> 
    <?php if (isset($_smarty_tpl->tpl_vars['type']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isType'] = new Smarty_variable($_smarty_tpl->tpl_vars['type']->value, null, 0);?>
    <?php }?>




    <?php $_smarty_tpl->tpl_vars['isBase'] = new Smarty_variable(10, null, 0);?> 
    <?php if (isset($_smarty_tpl->tpl_vars['base']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isBase'] = new Smarty_variable($_smarty_tpl->tpl_vars['base']->value, null, 0);?>
    <?php }?>




    <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable(true, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['microData']->value)){?>
        <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable($_smarty_tpl->tpl_vars['microData']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value&&$_smarty_tpl->tpl_vars['isType']->value==='aggregated'&&$_smarty_tpl->tpl_vars['count']->value===0){?> 
        <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable(false, null, 0);?>
    <?php }?>




    <?php if ($_smarty_tpl->tpl_vars['isType']->value==='single'){?>
        <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable('itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"', null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable('itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"', null, 0);?>
    <?php }?>




    <?php if (isset($_smarty_tpl->tpl_vars['label']->value)){?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable($_smarty_tpl->tpl_vars['label']->value, null, 0);?>
    <?php }?>




    <?php if ($_smarty_tpl->tpl_vars['isType']->value==='aggregated'){?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable(true, null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable(false, null, 0);?>
    <?php }?>




    <span class="product--rating"<?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value){?> <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
<?php }?>>

        
        
            <?php $_smarty_tpl->tpl_vars['average'] = new Smarty_variable($_smarty_tpl->tpl_vars['points']->value/2, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['isBase']->value==5){?>
                <?php $_smarty_tpl->tpl_vars['average'] = new Smarty_variable($_smarty_tpl->tpl_vars['points']->value, null, 0);?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value){?>
                <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['points']->value;?>
">
                <meta itemprop="worstRating" content="1">
                <meta itemprop="bestRating" content="<?php echo $_smarty_tpl->tpl_vars['isBase']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['isType']->value==='aggregated'){?>
                    <meta itemprop="ratingCount" content="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
                <?php }?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['points']->value!=0){?>
                <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['value']->step = 1;$_smarty_tpl->tpl_vars['value']->total = (int)ceil(($_smarty_tpl->tpl_vars['value']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['value']->step));
if ($_smarty_tpl->tpl_vars['value']->total > 0){
for ($_smarty_tpl->tpl_vars['value']->value = 1, $_smarty_tpl->tpl_vars['value']->iteration = 1;$_smarty_tpl->tpl_vars['value']->iteration <= $_smarty_tpl->tpl_vars['value']->total;$_smarty_tpl->tpl_vars['value']->value += $_smarty_tpl->tpl_vars['value']->step, $_smarty_tpl->tpl_vars['value']->iteration++){
$_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->iteration == 1;$_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration == $_smarty_tpl->tpl_vars['value']->total;?>
                    <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star', null, 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['value']->value>$_smarty_tpl->tpl_vars['average']->value){?>
                        <?php $_smarty_tpl->tpl_vars['diff'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value-$_smarty_tpl->tpl_vars['average']->value, null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['diff']->value>0&&$_smarty_tpl->tpl_vars['diff']->value<=0.5){?>
                            <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star-half', null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star-empty', null, 0);?>
                        <?php }?>
                    <?php }?>

                    <i class="<?php echo $_smarty_tpl->tpl_vars['cls']->value;?>
"></i>
                <?php }} ?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['hasLabel']->value&&$_smarty_tpl->tpl_vars['count']->value){?>
                <span class="rating--count-wrapper">
                    (<span class="rating--count"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>)
                </span>
            <?php }?>
        
    </span>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price-unit.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582dc0c953_94242316')) {function content_57a2582dc0c953_94242316($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="price--unit">

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=0){?>

        
        
            <span class="price--label label--purchase-unit is--bold is--nowrap">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Inhalt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </span>
        

        
        
            <span class="is--nowrap">
                <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>

            </span>
        
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=$_smarty_tpl->tpl_vars['sArticle']->value['referenceunit']){?>

        
        
            <span class="is--nowrap">
                (<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['referenceprice']);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 / <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['referenceunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>
)
            </span>
        
    <?php }?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582dc2c5f1_83206341')) {function content_57a2582dc2c5f1_83206341($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="product--price">

    
    
        <span class="price--default is--nowrap<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?> is--discount<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['priceStartingFrom']&&!$_smarty_tpl->tpl_vars['sArticle']->value['liveshoppingData']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ab<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?>
            <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['price']);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </span>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
            <span class="price--pseudo">

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                

                <span class="price--discount is--nowrap">
                    <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </span>

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                
            </span>
        <?php }?>
    
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-actions.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582dc4ff04_97727575')) {function content_57a2582dc4ff04_97727575($_smarty_tpl) {?>

<div class="product--actions">

    
    
        <?php ob_start();?><?php echo 1;?><?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
            <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'add_article', 'articleID' => $_smarty_tpl->tpl_vars['sArticle']->value['articleID'], ))); ?>"
               title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleichen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
               class="product--action action--compare"
               data-product-compare-add="true"
               rel="nofollow">
                <i class="icon--compare"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleichen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </a>
        <?php }?>
    

    
    
        <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'note', 'action' => 'add', 'ordernumber' => $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'], ))); ?>"
           title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Auf den Merkzettel";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_tmp2, ENT_QUOTES, 'utf-8', true);?>
"
           class="product--action action--note"
           data-ajaxUrl="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'note', 'action' => 'ajaxAdd', 'ordernumber' => $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'], ))); ?>"
           data-text="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gemerkt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
           rel="nofollow">
            <i class="icon--heart"></i> <span class="action--text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Merken<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
        </a>
    

    
    

    
    
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/box-product-slider.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582dc75cd7_31151484')) {function content_57a2582dc75cd7_31151484($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Smarty/plugins/modifier.truncate.php';
?>


    <div class="product--box box--<?php echo $_smarty_tpl->tpl_vars['productBoxLayout']->value;?>
"
         data-page-index="<?php echo $_smarty_tpl->tpl_vars['pageIndex']->value;?>
"
         data-ordernumber="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'];?>
"
         <?php ob_start();?><?php echo 0;?><?php $_tmp1=ob_get_clean();?><?php if (!$_tmp1){?> data-category-id="<?php echo $_smarty_tpl->tpl_vars['sCategoryCurrent']->value;?>
"<?php }?>>

        
            <div class="box--content is--rounded">

                
                
                    <?php /*  Call merged included template "frontend/listing/product-box/product-badges.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-badges.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582dc84bc0_30524831($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-badges.tpl" */?>
                

                
                    <div class="product--info">

                        
                        
                            <?php /*  Call merged included template "frontend/listing/product-box/product-image.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582dca06c9_43616631($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-image.tpl" */?>
                        

                        
                        

                        
                        
                            <a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
                               class="product--title"
                               title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml($_smarty_tpl->tpl_vars['sArticle']->value['articleName']);?>
">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml(smarty_modifier_truncate($_smarty_tpl->tpl_vars['sArticle']->value['articleName'],50));?>

                            </a>
                        

                        
                        

                        
                            <div class="product--price-info">

                                
                                
                                    <?php /*  Call merged included template "frontend/listing/product-box/product-price-unit.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-price-unit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582dd44bc2_33699953($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-price-unit.tpl" */?>
                                

                                
                                
                                    <?php /*  Call merged included template "frontend/listing/product-box/product-price.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582dd67320_81435006($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-price.tpl" */?>
                                
                            </div>
                        

                        
                        
                    </div>
                
            </div>
        
    </div>

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-badges.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582dc84bc0_30524831')) {function content_57a2582dc84bc0_30524831($_smarty_tpl) {?>



	<div class="product--badges">

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
				<div class="product--badge badge--discount">
                    <i class="icon--percent2"></i>
                </div>
			<?php }?>
		

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['highlight']){?>
                <div class="product--badge badge--recommend">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
TIPP!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            <?php }?>
        

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['newArticle']){?>
				<div class="product--badge badge--newcomer">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
NEU<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			<?php }?>
		

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['esd']){?>
                <div class="product--badge badge--esd">
                    <i class="icon--download"></i>
                </div>
            <?php }?>
        
	</div>







<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-image.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582dca06c9_43616631')) {function content_57a2582dca06c9_43616631($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Smarty/plugins/modifier.truncate.php';
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
   title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true);?>
"
   class="product--image">
    
        <span class="image--element">
            
                <span class="image--media">

                    <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true), null, 0);?>

                    <?php if (isset($_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'])){?>

                        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['image']['description']){?>
                            <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['image']['description'], ENT_QUOTES, 'utf-8', true), null, 0);?>
                        <?php }?>

                        
                            <img srcset="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'][0]['sourceSet'];?>
"
                                 alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                                 title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" />
                        
                    <?php }else{ ?>
                        <img src="/themes/Frontend/Responsive/frontend/_public/src/img/no-picture.jpg"
                             alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                             title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" />
                    <?php }?>
                </span>
            
        </span>
    
</a><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/_includes/rating.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582dccc0b6_46751424')) {function content_57a2582dccc0b6_46751424($_smarty_tpl) {?>

    <?php $_smarty_tpl->tpl_vars['isType'] = new Smarty_variable('single', null, 0);?> 
    <?php if (isset($_smarty_tpl->tpl_vars['type']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isType'] = new Smarty_variable($_smarty_tpl->tpl_vars['type']->value, null, 0);?>
    <?php }?>




    <?php $_smarty_tpl->tpl_vars['isBase'] = new Smarty_variable(10, null, 0);?> 
    <?php if (isset($_smarty_tpl->tpl_vars['base']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isBase'] = new Smarty_variable($_smarty_tpl->tpl_vars['base']->value, null, 0);?>
    <?php }?>




    <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable(true, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['microData']->value)){?>
        <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable($_smarty_tpl->tpl_vars['microData']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value&&$_smarty_tpl->tpl_vars['isType']->value==='aggregated'&&$_smarty_tpl->tpl_vars['count']->value===0){?> 
        <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable(false, null, 0);?>
    <?php }?>




    <?php if ($_smarty_tpl->tpl_vars['isType']->value==='single'){?>
        <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable('itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"', null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable('itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"', null, 0);?>
    <?php }?>




    <?php if (isset($_smarty_tpl->tpl_vars['label']->value)){?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable($_smarty_tpl->tpl_vars['label']->value, null, 0);?>
    <?php }?>




    <?php if ($_smarty_tpl->tpl_vars['isType']->value==='aggregated'){?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable(true, null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable(false, null, 0);?>
    <?php }?>




    <span class="product--rating"<?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value){?> <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
<?php }?>>

        
        
            <?php $_smarty_tpl->tpl_vars['average'] = new Smarty_variable($_smarty_tpl->tpl_vars['points']->value/2, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['isBase']->value==5){?>
                <?php $_smarty_tpl->tpl_vars['average'] = new Smarty_variable($_smarty_tpl->tpl_vars['points']->value, null, 0);?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value){?>
                <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['points']->value;?>
">
                <meta itemprop="worstRating" content="1">
                <meta itemprop="bestRating" content="<?php echo $_smarty_tpl->tpl_vars['isBase']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['isType']->value==='aggregated'){?>
                    <meta itemprop="ratingCount" content="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
                <?php }?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['points']->value!=0){?>
                <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['value']->step = 1;$_smarty_tpl->tpl_vars['value']->total = (int)ceil(($_smarty_tpl->tpl_vars['value']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['value']->step));
if ($_smarty_tpl->tpl_vars['value']->total > 0){
for ($_smarty_tpl->tpl_vars['value']->value = 1, $_smarty_tpl->tpl_vars['value']->iteration = 1;$_smarty_tpl->tpl_vars['value']->iteration <= $_smarty_tpl->tpl_vars['value']->total;$_smarty_tpl->tpl_vars['value']->value += $_smarty_tpl->tpl_vars['value']->step, $_smarty_tpl->tpl_vars['value']->iteration++){
$_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->iteration == 1;$_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration == $_smarty_tpl->tpl_vars['value']->total;?>
                    <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star', null, 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['value']->value>$_smarty_tpl->tpl_vars['average']->value){?>
                        <?php $_smarty_tpl->tpl_vars['diff'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value-$_smarty_tpl->tpl_vars['average']->value, null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['diff']->value>0&&$_smarty_tpl->tpl_vars['diff']->value<=0.5){?>
                            <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star-half', null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star-empty', null, 0);?>
                        <?php }?>
                    <?php }?>

                    <i class="<?php echo $_smarty_tpl->tpl_vars['cls']->value;?>
"></i>
                <?php }} ?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['hasLabel']->value&&$_smarty_tpl->tpl_vars['count']->value){?>
                <span class="rating--count-wrapper">
                    (<span class="rating--count"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>)
                </span>
            <?php }?>
        
    </span>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price-unit.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582dd44bc2_33699953')) {function content_57a2582dd44bc2_33699953($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="price--unit">

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=0){?>

        
        
            <span class="price--label label--purchase-unit is--bold is--nowrap">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Inhalt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </span>
        

        
        
            <span class="is--nowrap">
                <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>

            </span>
        
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=$_smarty_tpl->tpl_vars['sArticle']->value['referenceunit']){?>

        
        
            <span class="is--nowrap">
                (<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['referenceprice']);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 / <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['referenceunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>
)
            </span>
        
    <?php }?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582dd67320_81435006')) {function content_57a2582dd67320_81435006($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="product--price">

    
    
        <span class="price--default is--nowrap<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?> is--discount<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['priceStartingFrom']&&!$_smarty_tpl->tpl_vars['sArticle']->value['liveshoppingData']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ab<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?>
            <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['price']);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </span>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
            <span class="price--pseudo">

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                

                <span class="price--discount is--nowrap">
                    <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </span>

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                
            </span>
        <?php }?>
    
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-actions.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582dd8dd84_80609560')) {function content_57a2582dd8dd84_80609560($_smarty_tpl) {?>

<div class="product--actions">

    
    
        <?php ob_start();?><?php echo 1;?><?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
            <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'add_article', 'articleID' => $_smarty_tpl->tpl_vars['sArticle']->value['articleID'], ))); ?>"
               title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleichen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
               class="product--action action--compare"
               data-product-compare-add="true"
               rel="nofollow">
                <i class="icon--compare"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleichen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </a>
        <?php }?>
    

    
    
        <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'note', 'action' => 'add', 'ordernumber' => $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'], ))); ?>"
           title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Auf den Merkzettel";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_tmp2, ENT_QUOTES, 'utf-8', true);?>
"
           class="product--action action--note"
           data-ajaxUrl="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'note', 'action' => 'ajaxAdd', 'ordernumber' => $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'], ))); ?>"
           data-text="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gemerkt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
           rel="nofollow">
            <i class="icon--heart"></i> <span class="action--text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Merken<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
        </a>
    

    
    

    
    
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/box-emotion.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582ddb39a3_77146566')) {function content_57a2582ddb39a3_77146566($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Smarty/plugins/modifier.truncate.php';
?>


    <div class="product--box box--<?php echo $_smarty_tpl->tpl_vars['productBoxLayout']->value;?>
" data-ordernumber="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'];?>
">

        
            <div class="box--content">

                
                
                    <?php if (!$_smarty_tpl->tpl_vars['imageOnly']->value){?>
                        <?php /*  Call merged included template "frontend/listing/product-box/product-badges.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-badges.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582df314c0_61985802($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-badges.tpl" */?>
                    <?php }?>
                

                
                    <div class="product--info">

                        
                        
                            <a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
                               title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true);?>
"
                               class="product--image<?php if ($_smarty_tpl->tpl_vars['imageOnly']->value){?> is--large<?php }?>">

                                
                                    <span class="image--element">

                                        
                                            <span class="image--media">

                                                
                                                    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails']){?>

                                                        <?php $_smarty_tpl->tpl_vars['baseSource'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'][0]['source'], null, 0);?>

                                                        <?php if ($_smarty_tpl->tpl_vars['itemCols']->value&&$_smarty_tpl->tpl_vars['emotion']->value['grid']['cols']&&!$_smarty_tpl->tpl_vars['fixedImageSize']->value){?>
                                                            <?php $_smarty_tpl->tpl_vars['colSize'] = new Smarty_variable(100/$_smarty_tpl->tpl_vars['emotion']->value['grid']['cols'], null, 0);?>
                                                            <?php $_smarty_tpl->tpl_vars['itemSize'] = new Smarty_variable(((string)($_smarty_tpl->tpl_vars['itemCols']->value*$_smarty_tpl->tpl_vars['colSize']->value))."vw", null, 0);?>
                                                        <?php }else{ ?>
                                                            <?php $_smarty_tpl->tpl_vars['itemSize'] = new Smarty_variable("200px", null, 0);?>
                                                        <?php }?>

                                                        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->index++;
?>
                                                            <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['image']->index!==0){?><?php echo (string)$_smarty_tpl->tpl_vars['srcSet']->value;?><?php echo ", ";?><?php }?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['srcSet'] = new Smarty_variable($_tmp1.((string)$_smarty_tpl->tpl_vars['image']->value['source'])." ".((string)$_smarty_tpl->tpl_vars['image']->value['maxWidth'])."w", null, 0);?>

                                                            <?php if ($_smarty_tpl->tpl_vars['image']->value['retinaSource']){?>
                                                                <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['image']->index!==0){?><?php echo (string)$_smarty_tpl->tpl_vars['srcSetRetina']->value;?><?php echo ", ";?><?php }?><?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['srcSetRetina'] = new Smarty_variable($_tmp2.((string)$_smarty_tpl->tpl_vars['image']->value['retinaSource'])." ".((string)$_smarty_tpl->tpl_vars['image']->value['maxWidth'])."w", null, 0);?>
                                                            <?php }?>
                                                        <?php } ?>
                                                    <?php }elseif($_smarty_tpl->tpl_vars['sArticle']->value['image']['source']){?>
                                                        <?php $_smarty_tpl->tpl_vars['baseSource'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['image']['source'], null, 0);?>
                                                    <?php }else{ ?>
                                                        <?php ob_start();?>/themes/Frontend/Responsive/frontend/_public/src/img/no-picture.jpg<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['baseSource'] = new Smarty_variable($_tmp3, null, 0);?>
                                                    <?php }?>

                                                    <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true), null, 0);?>

                                                    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['image']['description']){?>
                                                        <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['image']['description'], ENT_QUOTES, 'utf-8', true), null, 0);?>
                                                    <?php }?>

                                                    <picture>
                                                        <?php if ($_smarty_tpl->tpl_vars['srcSetRetina']->value){?><source sizes="(min-width: 48em) <?php echo $_smarty_tpl->tpl_vars['itemSize']->value;?>
, 100vw" srcset="<?php echo $_smarty_tpl->tpl_vars['srcSetRetina']->value;?>
" media="(min-resolution: 192dpi)" /><?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['srcSet']->value){?><source sizes="(min-width: 48em) <?php echo $_smarty_tpl->tpl_vars['itemSize']->value;?>
, 100vw" srcset="<?php echo $_smarty_tpl->tpl_vars['srcSet']->value;?>
" /><?php }?>
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['baseSource']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
" title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" />
                                                    </picture>
                                                
                                            </span>
                                        
                                    </span>
                                
                            </a>
                        

                        <?php if (!$_smarty_tpl->tpl_vars['imageOnly']->value){?>
                            <div class="product--details">

                                
                                
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
                                       class="product--title"
                                       title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml($_smarty_tpl->tpl_vars['sArticle']->value['articleName']);?>
">
                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml(smarty_modifier_truncate($_smarty_tpl->tpl_vars['sArticle']->value['articleName'],50));?>

                                    </a>
                                

                                
                                    <div class="product--price-info">

                                        
                                        
                                            <?php /*  Call merged included template "frontend/listing/product-box/product-price-unit.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-price-unit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582e0621c5_92280540($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-price-unit.tpl" */?>
                                        

                                        
                                        
                                            <?php /*  Call merged included template "frontend/listing/product-box/product-price.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582e0827c6_05755807($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-price.tpl" */?>
                                        
                                    </div>
                                
                            </div>
                        <?php }?>
                    </div>
                
            </div>
        
    </div>

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-badges.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582de0e5d2_01852722')) {function content_57a2582de0e5d2_01852722($_smarty_tpl) {?>



	<div class="product--badges">

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
				<div class="product--badge badge--discount">
                    <i class="icon--percent2"></i>
                </div>
			<?php }?>
		

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['highlight']){?>
                <div class="product--badge badge--recommend">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
TIPP!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            <?php }?>
        

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['newArticle']){?>
				<div class="product--badge badge--newcomer">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
NEU<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			<?php }?>
		

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['esd']){?>
                <div class="product--badge badge--esd">
                    <i class="icon--download"></i>
                </div>
            <?php }?>
        
	</div>







<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-image.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582de29b99_26644803')) {function content_57a2582de29b99_26644803($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Smarty/plugins/modifier.truncate.php';
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
   title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true);?>
"
   class="product--image">
    
        <span class="image--element">
            
                <span class="image--media">

                    <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true), null, 0);?>

                    <?php if (isset($_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'])){?>

                        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['image']['description']){?>
                            <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['image']['description'], ENT_QUOTES, 'utf-8', true), null, 0);?>
                        <?php }?>

                        
                            <img srcset="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'][0]['sourceSet'];?>
"
                                 alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                                 title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" />
                        
                    <?php }else{ ?>
                        <img src="/themes/Frontend/Responsive/frontend/_public/src/img/no-picture.jpg"
                             alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                             title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" />
                    <?php }?>
                </span>
            
        </span>
    
</a><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/_includes/rating.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582de51b29_46207191')) {function content_57a2582de51b29_46207191($_smarty_tpl) {?>

    <?php $_smarty_tpl->tpl_vars['isType'] = new Smarty_variable('single', null, 0);?> 
    <?php if (isset($_smarty_tpl->tpl_vars['type']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isType'] = new Smarty_variable($_smarty_tpl->tpl_vars['type']->value, null, 0);?>
    <?php }?>




    <?php $_smarty_tpl->tpl_vars['isBase'] = new Smarty_variable(10, null, 0);?> 
    <?php if (isset($_smarty_tpl->tpl_vars['base']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isBase'] = new Smarty_variable($_smarty_tpl->tpl_vars['base']->value, null, 0);?>
    <?php }?>




    <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable(true, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['microData']->value)){?>
        <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable($_smarty_tpl->tpl_vars['microData']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value&&$_smarty_tpl->tpl_vars['isType']->value==='aggregated'&&$_smarty_tpl->tpl_vars['count']->value===0){?> 
        <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable(false, null, 0);?>
    <?php }?>




    <?php if ($_smarty_tpl->tpl_vars['isType']->value==='single'){?>
        <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable('itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"', null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable('itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"', null, 0);?>
    <?php }?>




    <?php if (isset($_smarty_tpl->tpl_vars['label']->value)){?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable($_smarty_tpl->tpl_vars['label']->value, null, 0);?>
    <?php }?>




    <?php if ($_smarty_tpl->tpl_vars['isType']->value==='aggregated'){?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable(true, null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable(false, null, 0);?>
    <?php }?>




    <span class="product--rating"<?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value){?> <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
<?php }?>>

        
        
            <?php $_smarty_tpl->tpl_vars['average'] = new Smarty_variable($_smarty_tpl->tpl_vars['points']->value/2, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['isBase']->value==5){?>
                <?php $_smarty_tpl->tpl_vars['average'] = new Smarty_variable($_smarty_tpl->tpl_vars['points']->value, null, 0);?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value){?>
                <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['points']->value;?>
">
                <meta itemprop="worstRating" content="1">
                <meta itemprop="bestRating" content="<?php echo $_smarty_tpl->tpl_vars['isBase']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['isType']->value==='aggregated'){?>
                    <meta itemprop="ratingCount" content="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
                <?php }?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['points']->value!=0){?>
                <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['value']->step = 1;$_smarty_tpl->tpl_vars['value']->total = (int)ceil(($_smarty_tpl->tpl_vars['value']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['value']->step));
if ($_smarty_tpl->tpl_vars['value']->total > 0){
for ($_smarty_tpl->tpl_vars['value']->value = 1, $_smarty_tpl->tpl_vars['value']->iteration = 1;$_smarty_tpl->tpl_vars['value']->iteration <= $_smarty_tpl->tpl_vars['value']->total;$_smarty_tpl->tpl_vars['value']->value += $_smarty_tpl->tpl_vars['value']->step, $_smarty_tpl->tpl_vars['value']->iteration++){
$_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->iteration == 1;$_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration == $_smarty_tpl->tpl_vars['value']->total;?>
                    <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star', null, 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['value']->value>$_smarty_tpl->tpl_vars['average']->value){?>
                        <?php $_smarty_tpl->tpl_vars['diff'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value-$_smarty_tpl->tpl_vars['average']->value, null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['diff']->value>0&&$_smarty_tpl->tpl_vars['diff']->value<=0.5){?>
                            <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star-half', null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star-empty', null, 0);?>
                        <?php }?>
                    <?php }?>

                    <i class="<?php echo $_smarty_tpl->tpl_vars['cls']->value;?>
"></i>
                <?php }} ?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['hasLabel']->value&&$_smarty_tpl->tpl_vars['count']->value){?>
                <span class="rating--count-wrapper">
                    (<span class="rating--count"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>)
                </span>
            <?php }?>
        
    </span>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price-unit.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582dec1f74_59979683')) {function content_57a2582dec1f74_59979683($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="price--unit">

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=0){?>

        
        
            <span class="price--label label--purchase-unit is--bold is--nowrap">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Inhalt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </span>
        

        
        
            <span class="is--nowrap">
                <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>

            </span>
        
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=$_smarty_tpl->tpl_vars['sArticle']->value['referenceunit']){?>

        
        
            <span class="is--nowrap">
                (<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['referenceprice']);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 / <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['referenceunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>
)
            </span>
        
    <?php }?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582dee2ec2_80105131')) {function content_57a2582dee2ec2_80105131($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="product--price">

    
    
        <span class="price--default is--nowrap<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?> is--discount<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['priceStartingFrom']&&!$_smarty_tpl->tpl_vars['sArticle']->value['liveshoppingData']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ab<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?>
            <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['price']);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </span>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
            <span class="price--pseudo">

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                

                <span class="price--discount is--nowrap">
                    <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </span>

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                
            </span>
        <?php }?>
    
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-actions.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582df07e23_27012771')) {function content_57a2582df07e23_27012771($_smarty_tpl) {?>

<div class="product--actions">

    
    
        <?php ob_start();?><?php echo 1;?><?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
            <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'add_article', 'articleID' => $_smarty_tpl->tpl_vars['sArticle']->value['articleID'], ))); ?>"
               title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleichen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
               class="product--action action--compare"
               data-product-compare-add="true"
               rel="nofollow">
                <i class="icon--compare"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleichen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </a>
        <?php }?>
    

    
    
        <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'note', 'action' => 'add', 'ordernumber' => $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'], ))); ?>"
           title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Auf den Merkzettel";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_tmp2, ENT_QUOTES, 'utf-8', true);?>
"
           class="product--action action--note"
           data-ajaxUrl="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'note', 'action' => 'ajaxAdd', 'ordernumber' => $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'], ))); ?>"
           data-text="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gemerkt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
           rel="nofollow">
            <i class="icon--heart"></i> <span class="action--text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Merken<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
        </a>
    

    
    

    
    
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:37
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-badges.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582df314c0_61985802')) {function content_57a2582df314c0_61985802($_smarty_tpl) {?>



	<div class="product--badges">

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
				<div class="product--badge badge--discount">
                    <i class="icon--percent2"></i>
                </div>
			<?php }?>
		

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['highlight']){?>
                <div class="product--badge badge--recommend">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
TIPP!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            <?php }?>
        

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['newArticle']){?>
				<div class="product--badge badge--newcomer">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
NEU<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			<?php }?>
		

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['esd']){?>
                <div class="product--badge badge--esd">
                    <i class="icon--download"></i>
                </div>
            <?php }?>
        
	</div>







<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:38
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price-unit.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582e0621c5_92280540')) {function content_57a2582e0621c5_92280540($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="price--unit">

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=0){?>

        
        
            <span class="price--label label--purchase-unit is--bold is--nowrap">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Inhalt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </span>
        

        
        
            <span class="is--nowrap">
                <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>

            </span>
        
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=$_smarty_tpl->tpl_vars['sArticle']->value['referenceunit']){?>

        
        
            <span class="is--nowrap">
                (<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['referenceprice']);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 / <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['referenceunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>
)
            </span>
        
    <?php }?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:38
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582e0827c6_05755807')) {function content_57a2582e0827c6_05755807($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="product--price">

    
    
        <span class="price--default is--nowrap<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?> is--discount<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['priceStartingFrom']&&!$_smarty_tpl->tpl_vars['sArticle']->value['liveshoppingData']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ab<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?>
            <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['price']);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </span>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
            <span class="price--pseudo">

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                

                <span class="price--discount is--nowrap">
                    <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </span>

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                
            </span>
        <?php }?>
    
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:38
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/box-basic.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582e0aafb0_83327625')) {function content_57a2582e0aafb0_83327625($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Smarty/plugins/modifier.truncate.php';
?>


    <div class="product--box box--<?php echo $_smarty_tpl->tpl_vars['productBoxLayout']->value;?>
"
         data-page-index="<?php echo $_smarty_tpl->tpl_vars['pageIndex']->value;?>
"
         data-ordernumber="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'];?>
"
         <?php ob_start();?><?php echo 0;?><?php $_tmp1=ob_get_clean();?><?php if (!$_tmp1){?> data-category-id="<?php echo $_smarty_tpl->tpl_vars['sCategoryCurrent']->value;?>
"<?php }?>>

        
            <div class="box--content is--rounded">

                
                
                    <?php /*  Call merged included template "frontend/listing/product-box/product-badges.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-badges.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582e0b75a3_91511314($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-badges.tpl" */?>
                

                
                    <div class="product--info">

                        
                        
                            <?php /*  Call merged included template "frontend/listing/product-box/product-image.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582e0d4d15_84003475($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-image.tpl" */?>
                        

                        
                        
                            <div class="product--rating-container">
                                <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['sVoteAverage']['average']){?>
                                    <?php /*  Call merged included template "frontend/_includes/rating.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('frontend/_includes/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('points'=>$_smarty_tpl->tpl_vars['sArticle']->value['sVoteAverage']['average'],'type'=>"aggregated",'label'=>false,'microData'=>false), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582e0fe805_34811727($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/_includes/rating.tpl" */?>
                                <?php }?>
                            </div>
                        

                        
                        
                            <a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
                               class="product--title"
                               title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml($_smarty_tpl->tpl_vars['sArticle']->value['articleName']);?>
">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml(smarty_modifier_truncate($_smarty_tpl->tpl_vars['sArticle']->value['articleName'],50));?>

                            </a>
                        

                        
                        
                            <div class="product--description">
                                <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['sArticle']->value['description_long']),240);?>

                            </div>
                        

                        
                            <div class="product--price-info">

                                
                                
                                    <?php /*  Call merged included template "frontend/listing/product-box/product-price-unit.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-price-unit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582e171893_67050438($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-price-unit.tpl" */?>
                                

                                
                                
                                    <?php /*  Call merged included template "frontend/listing/product-box/product-price.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582e1931a4_20516525($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-price.tpl" */?>
                                
                            </div>
                        

                        
                        
                            <?php /*  Call merged included template "frontend/listing/product-box/product-actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '14597596257a24c35e20ba4-57424653');
content_57a2582e1b9527_59824277($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-actions.tpl" */?>
                        
                    </div>
                
            </div>
        
    </div>

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:38
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-badges.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582e0b75a3_91511314')) {function content_57a2582e0b75a3_91511314($_smarty_tpl) {?>



	<div class="product--badges">

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
				<div class="product--badge badge--discount">
                    <i class="icon--percent2"></i>
                </div>
			<?php }?>
		

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['highlight']){?>
                <div class="product--badge badge--recommend">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
TIPP!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            <?php }?>
        

		
		
			<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['newArticle']){?>
				<div class="product--badge badge--newcomer">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
NEU<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			<?php }?>
		

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['esd']){?>
                <div class="product--badge badge--esd">
                    <i class="icon--download"></i>
                </div>
            <?php }?>
        
	</div>







<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:38
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-image.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582e0d4d15_84003475')) {function content_57a2582e0d4d15_84003475($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Smarty/plugins/modifier.truncate.php';
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
   title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true);?>
"
   class="product--image">
    
        <span class="image--element">
            
                <span class="image--media">

                    <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true), null, 0);?>

                    <?php if (isset($_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'])){?>

                        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['image']['description']){?>
                            <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['image']['description'], ENT_QUOTES, 'utf-8', true), null, 0);?>
                        <?php }?>

                        
                            <img srcset="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'][0]['sourceSet'];?>
"
                                 alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                                 title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" />
                        
                    <?php }else{ ?>
                        <img src="/themes/Frontend/Responsive/frontend/_public/src/img/no-picture.jpg"
                             alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                             title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" />
                    <?php }?>
                </span>
            
        </span>
    
</a><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:38
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/_includes/rating.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582e0fe805_34811727')) {function content_57a2582e0fe805_34811727($_smarty_tpl) {?>

    <?php $_smarty_tpl->tpl_vars['isType'] = new Smarty_variable('single', null, 0);?> 
    <?php if (isset($_smarty_tpl->tpl_vars['type']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isType'] = new Smarty_variable($_smarty_tpl->tpl_vars['type']->value, null, 0);?>
    <?php }?>




    <?php $_smarty_tpl->tpl_vars['isBase'] = new Smarty_variable(10, null, 0);?> 
    <?php if (isset($_smarty_tpl->tpl_vars['base']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isBase'] = new Smarty_variable($_smarty_tpl->tpl_vars['base']->value, null, 0);?>
    <?php }?>




    <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable(true, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['microData']->value)){?>
        <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable($_smarty_tpl->tpl_vars['microData']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value&&$_smarty_tpl->tpl_vars['isType']->value==='aggregated'&&$_smarty_tpl->tpl_vars['count']->value===0){?> 
        <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable(false, null, 0);?>
    <?php }?>




    <?php if ($_smarty_tpl->tpl_vars['isType']->value==='single'){?>
        <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable('itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"', null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable('itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"', null, 0);?>
    <?php }?>




    <?php if (isset($_smarty_tpl->tpl_vars['label']->value)){?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable($_smarty_tpl->tpl_vars['label']->value, null, 0);?>
    <?php }?>




    <?php if ($_smarty_tpl->tpl_vars['isType']->value==='aggregated'){?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable(true, null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable(false, null, 0);?>
    <?php }?>




    <span class="product--rating"<?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value){?> <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
<?php }?>>

        
        
            <?php $_smarty_tpl->tpl_vars['average'] = new Smarty_variable($_smarty_tpl->tpl_vars['points']->value/2, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['isBase']->value==5){?>
                <?php $_smarty_tpl->tpl_vars['average'] = new Smarty_variable($_smarty_tpl->tpl_vars['points']->value, null, 0);?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value){?>
                <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['points']->value;?>
">
                <meta itemprop="worstRating" content="1">
                <meta itemprop="bestRating" content="<?php echo $_smarty_tpl->tpl_vars['isBase']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['isType']->value==='aggregated'){?>
                    <meta itemprop="ratingCount" content="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
                <?php }?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['points']->value!=0){?>
                <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['value']->step = 1;$_smarty_tpl->tpl_vars['value']->total = (int)ceil(($_smarty_tpl->tpl_vars['value']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['value']->step));
if ($_smarty_tpl->tpl_vars['value']->total > 0){
for ($_smarty_tpl->tpl_vars['value']->value = 1, $_smarty_tpl->tpl_vars['value']->iteration = 1;$_smarty_tpl->tpl_vars['value']->iteration <= $_smarty_tpl->tpl_vars['value']->total;$_smarty_tpl->tpl_vars['value']->value += $_smarty_tpl->tpl_vars['value']->step, $_smarty_tpl->tpl_vars['value']->iteration++){
$_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->iteration == 1;$_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration == $_smarty_tpl->tpl_vars['value']->total;?>
                    <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star', null, 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['value']->value>$_smarty_tpl->tpl_vars['average']->value){?>
                        <?php $_smarty_tpl->tpl_vars['diff'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value-$_smarty_tpl->tpl_vars['average']->value, null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['diff']->value>0&&$_smarty_tpl->tpl_vars['diff']->value<=0.5){?>
                            <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star-half', null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star-empty', null, 0);?>
                        <?php }?>
                    <?php }?>

                    <i class="<?php echo $_smarty_tpl->tpl_vars['cls']->value;?>
"></i>
                <?php }} ?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['hasLabel']->value&&$_smarty_tpl->tpl_vars['count']->value){?>
                <span class="rating--count-wrapper">
                    (<span class="rating--count"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>)
                </span>
            <?php }?>
        
    </span>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:38
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price-unit.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582e171893_67050438')) {function content_57a2582e171893_67050438($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="price--unit">

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=0){?>

        
        
            <span class="price--label label--purchase-unit is--bold is--nowrap">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Inhalt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </span>
        

        
        
            <span class="is--nowrap">
                <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>

            </span>
        
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=$_smarty_tpl->tpl_vars['sArticle']->value['referenceunit']){?>

        
        
            <span class="is--nowrap">
                (<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['referenceprice']);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 / <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['referenceunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>
)
            </span>
        
    <?php }?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:38
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-price.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582e1931a4_20516525')) {function content_57a2582e1931a4_20516525($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/app.sdoering.syseleven.de/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="product--price">

    
    
        <span class="price--default is--nowrap<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?> is--discount<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['priceStartingFrom']&&!$_smarty_tpl->tpl_vars['sArticle']->value['liveshoppingData']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ab<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?>
            <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['price']);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </span>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
            <span class="price--pseudo">

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                

                <span class="price--discount is--nowrap">
                    <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </span>

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                
            </span>
        <?php }?>
    
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:46:38
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Frontend/Bare/frontend/listing/product-box/product-actions.tpl" */ ?>
<?php if ($_valid && !is_callable('content_57a2582e1b9527_59824277')) {function content_57a2582e1b9527_59824277($_smarty_tpl) {?>

<div class="product--actions">

    
    
        <?php ob_start();?><?php echo 1;?><?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
            <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'add_article', 'articleID' => $_smarty_tpl->tpl_vars['sArticle']->value['articleID'], ))); ?>"
               title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleichen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
               class="product--action action--compare"
               data-product-compare-add="true"
               rel="nofollow">
                <i class="icon--compare"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vergleichen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </a>
        <?php }?>
    

    
    
        <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'note', 'action' => 'add', 'ordernumber' => $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'], ))); ?>"
           title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Auf den Merkzettel";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_tmp2, ENT_QUOTES, 'utf-8', true);?>
"
           class="product--action action--note"
           data-ajaxUrl="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'note', 'action' => 'ajaxAdd', 'ordernumber' => $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'], ))); ?>"
           data-text="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gemerkt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
           rel="nofollow">
            <i class="icon--heart"></i> <span class="action--text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Merken<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
        </a>
    

    
    

    
    
</div><?php }} ?>