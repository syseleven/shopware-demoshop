<?php /* Smarty version Smarty-3.1.12, created on 2016-08-02 11:09:12
         compiled from "/var/www/html/shopware.agnostic.syseleven.de/themes/Backend/ExtJs/backend/article_list/resource/tokenizer.js" */ ?>
<?php /*%%SmartyHeaderCode:192267308857a06338b97c75-08416968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d6212a58121df3b0b5fdedc4639f9c6d6fafdf4' => 
    array (
      0 => '/var/www/html/shopware.agnostic.syseleven.de/themes/Backend/ExtJs/backend/article_list/resource/tokenizer.js',
      1 => 1463989432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192267308857a06338b97c75-08416968',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57a06338b9a773_34660381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a06338b9a773_34660381')) {function content_57a06338b9a773_34660381($_smarty_tpl) {?>/**
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
 * The tokenizer splits a given string into distinct tokens. It does not check for syntax or such - it just
 * checks for known tokens
 */
Ext.define('Tokenizer', {

    // Process canceled
    canceled: false,

    /**
     * Constructs the tokenizer
     *
     * @param knownTokens
     * @param callback
     */
    constructor: function(knownTokens, callback) {
        var me = this;

        // Enforce array
        me.knownTokens = knownTokens.splice ? knownTokens : [knownTokens];

        if (callback) {
            me.callback = callback;
        }
    },

    /**
     * Do cancel the tokenizer
     */
    cancel: function() {
        this.canceled = true;
    },

    /**
     * Parse inputString for knownTokens
     *
     * @param inputString
     * @returns Array
     */
    parse: function (inputString) {
        var me = this;

        me.canceled = false;
        me.inputString = inputString || '';
        me.ended = false;
        me.tokens = [ ];

        do {
            me.processNextToken()
        } while (!me.ended && !me.canceled);

        return me.tokens;
    },

    /**
     * Push found tokens to the result array
     *
     * @param token
     * @param realToken
     */
    pushToken: function (token, realToken) {
        var me = this;

        if (token)
            if (me.callback) {
                var ret = me.callback(token, realToken, me.currentToken);

                // Allow the callback to skip a token by returning nothing
                if (undefined != ret) {
                    me.tokens.push(ret);
                }
            } else {
                me.tokens.push(token);
            }
    },

    /**
     * Get the next valid token and save it
     */
    processNextToken: function () {
        var me = this,
            plain;

        me.findNextToken();
        // Extract string to next token
        plain = me.inputString.slice(0, me.currentPosition);

        // Push string
        me.pushToken(plain, false);

        // Remove from input string
        me.inputString = me.inputString.slice(me.currentPosition).replace(me.currentToken, function (token) {
            me.pushToken(token, true);
            return '';
        });

        // If no inputString is remaining, we are done
        if (!me.inputString)
            me.ended = true;
    },

    /**
     * Finds the next token.
     *
     * Will set me.currentToken for the token and me.currentPosition for its position
     */
    findNextToken: function () {
        var me = this,
            i = 0, currentToken, index, compareToken, compareString;

        me.currentPosition = -1;
        me.currentToken = '';

        // Iterate all known tokens
        while (( currentToken = me.knownTokens[i++]) !== undefined) {
            // Uppercase regular string for comparison
            compareString = me.inputString.toUpperCase();
            if (!currentToken.test) {
                compareToken = currentToken.toUpperCase();
            } else {
                compareToken = currentToken;
            }
            // find matching tokens
            index = compareString[currentToken.test ? 'search' : 'indexOf'](compareToken);
            // If the current token is found before any other token, use this as current token
            if (index != -1 && (me.currentPosition == -1 || index < me.currentPosition )) {
                me.currentToken = currentToken;
                me.currentPosition = index;
            }
        }

        if (me.currentPosition == -1) {
            me.currentPosition = me.inputString.length;
        }
    }
});
<?php }} ?>