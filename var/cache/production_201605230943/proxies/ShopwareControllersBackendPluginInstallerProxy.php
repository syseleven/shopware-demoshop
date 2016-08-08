<?php
class Shopware_Proxies_ShopwareControllersBackendPluginInstallerProxy extends Shopware_Controllers_Backend_PluginInstaller implements Enlight_Hook_Proxy
{
    public function executeParent($method, $args = array())
    {
        return call_user_func_array(array($this, 'parent::' . $method), $args);
    }

    public static function getHookMethods()
    {
        return array ();
    }
    
}
