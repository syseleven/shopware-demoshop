<?php

/**
 * Shopware 4
 * Copyright © shopware AG
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */
/**
 * @category Shopware
 * @package Shopware\Plugins\SwagCookiePermission
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */


class Shopware_Controllers_Widgets_SwagCookiePermission extends Enlight_Controller_Action
{

    /**
     * Controller action which can be access over an ajax request.
     * This function is used to get user cookie permission.
     */
    public function isAffectedUserAction()
    {
        $plugin = Shopware()->Plugins()->Frontend()->SwagCookiePermission();
        $result = $plugin->isAffectedUser();

        if ($result === true && $plugin->Config()->get('swagCookieMode') == $plugin->getRemoveCookiesMode()) {
            //delete cookies
            header_remove('Set-Cookie');
            $cookies = $this->Request()->getCookie();
            foreach ($cookies as $key => $value) {
                $this->Response()->setCookie($key, null, 0);
            }
        }

        $this->Front()->Plugins()->Json()->setRenderer();
        $this->View()->assign(array('success' => true, 'isAffectedUser' => $result));
    }

}
