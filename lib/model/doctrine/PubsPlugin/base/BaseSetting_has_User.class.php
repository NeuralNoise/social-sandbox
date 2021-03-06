<?php

/**
 * BaseSetting_has_User
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $setting_id
 * @property integer $user_id
 * @property boolean $is_active
 * @property Setting $Settings
 * @property sfGuardUser $SettingsUser
 * 
 * @method integer          getSettingId()    Returns the current record's "setting_id" value
 * @method integer          getUserId()       Returns the current record's "user_id" value
 * @method boolean          getIsActive()     Returns the current record's "is_active" value
 * @method Setting          getSettings()     Returns the current record's "Settings" value
 * @method sfGuardUser      getSettingsUser() Returns the current record's "SettingsUser" value
 * @method Setting_has_User setSettingId()    Sets the current record's "setting_id" value
 * @method Setting_has_User setUserId()       Sets the current record's "user_id" value
 * @method Setting_has_User setIsActive()     Sets the current record's "is_active" value
 * @method Setting_has_User setSettings()     Sets the current record's "Settings" value
 * @method Setting_has_User setSettingsUser() Sets the current record's "SettingsUser" value
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSetting_has_User extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('setting_has__user');
        $this->hasColumn('setting_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Setting as Settings', array(
             'local' => 'setting_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardUser as SettingsUser', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}