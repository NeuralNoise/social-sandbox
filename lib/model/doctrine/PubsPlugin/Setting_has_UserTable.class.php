<?php

/**
 * Setting_has_UserTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Setting_has_UserTable extends PluginSetting_has_UserTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object Setting_has_UserTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Setting_has_User');
    }
}