<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 21:55:30
         compiled from "/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/article/model/dependency.js" */ ?>
<?php /*%%SmartyHeaderCode:78557770957a24c32873ff0-22208511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80737c2d621449de5bce890913bf15d36ac10a43' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/themes/Backend/ExtJs/backend/article/model/dependency.js',
      1 => 1469447990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78557770957a24c32873ff0-22208511',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a24c328c0033_67307749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a24c328c0033_67307749')) {function content_57a24c328c0033_67307749($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Category
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.Dependency', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    /**
     * Fields array which contains the model fields
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'integer', useNull: true },
        { name: 'configuratorSetId', type: 'integer', useNull: true },
        { name: 'parentId', type: 'integer', useNull: true },
        { name: 'childId', type: 'integer', useNull: true },
        {
            name: 'parentGroupId',
            type: 'integer',
            convert: function(value, record) {
                if (value) {
                    return value;
                }
                if (record && record.raw && record.raw.parentOption) {
                    return record.raw.parentOption.groupId;
                }
                return null;
            }
       },
       {
            name: 'childGroupId',
            type: 'integer',
            convert: function(value, record) {
                if (value) {
                    return value;
                }
                if (record && record.raw && record.raw.childOption) {
                    return record.raw.childOption.groupId;
                }
                return null;
            }
       }
    ],

    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorOption', name: 'getParentOption', associationKey: 'parentOption' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorOption', name: 'getChildOption', associationKey: 'childOption' }
    ],

    proxy: {
        type: 'ajax',
        api: {
            destroy: '<?php echo '/backend/Article/deleteConfiguratorDependency';?>'
        }
    }



});
//

<?php }} ?>