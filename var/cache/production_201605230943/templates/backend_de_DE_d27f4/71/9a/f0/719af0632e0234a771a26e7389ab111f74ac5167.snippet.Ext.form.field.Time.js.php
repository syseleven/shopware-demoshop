<?php /* Smarty version Smarty-3.1.12, created on 2016-08-03 22:18:39
         compiled from "/var/www/html/app.sdoering.syseleven.de/engine/Library/ExtJs/overrides/Ext.form.field.Time.js" */ ?>
<?php /*%%SmartyHeaderCode:74280163257a2519f8d1485-41069964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '719af0632e0234a771a26e7389ab111f74ac5167' => 
    array (
      0 => '/var/www/html/app.sdoering.syseleven.de/engine/Library/ExtJs/overrides/Ext.form.field.Time.js',
      1 => 1463989428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74280163257a2519f8d1485-41069964',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a2519f8d6366_27526619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a2519f8d6366_27526619')) {function content_57a2519f8d6366_27526619($_smarty_tpl) {?>/**
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
 * Shopware UI - Time field Override
 *
 * Extends the default safeParse function to allow
 * parsing partial times using the alternative formats
 */
Ext.override(Ext.form.field.Time,
/** @lends Ext.form.field.Time */
{
    /** Extends the default function to allow parsing partial times using the alternative formats. */
    safeParse: function(value, format){
        var me = this,
            utilDate = Ext.Date,
            parsedDate,
            result = null,
            altFormats = me.altFormats,
            altFormatsArray = me.altFormatsArray,
            j = 0,
            len;

        if (utilDate.formatContainsDateInfo(format)) {
            // assume we've been given a full date
            result = utilDate.parse(value, format);
        } else {
            // Use our initial safe date
            parsedDate = utilDate.parse(me.initDate + ' ' + value, me.initDateFormat + ' ' + format);
            if (parsedDate) {
                result = parsedDate;
            } else {
                if (!result && altFormats) {
                    altFormatsArray = altFormatsArray || altFormats.split('|');
                    len = altFormatsArray.length;
                    for (; j < len && !result; ++j) {
                        parsedDate = utilDate.parse(me.initDate + ' ' + value, me.initDateFormat + ' ' + altFormatsArray[j]);
                        if (parsedDate) {
                            result = parsedDate;
                        }
                    }
                }
            }
        }
        return result;
    }
});
<?php }} ?>