<?php

/**
 * TextTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TextTable extends PluginTextTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object TextTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Text');
    }
}