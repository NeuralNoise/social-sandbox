<?php

/**
 * Profile_photoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Profile_photoTable extends PluginProfile_photoTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object Profile_photoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Profile_photo');
    }
}