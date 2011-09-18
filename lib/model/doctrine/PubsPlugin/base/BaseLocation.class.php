<?php

/**
 * BaseLocation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property string $description
 * @property integer $is_active
 * @property sfGuardUser $User
 * 
 * @method integer     getId()          Returns the current record's "id" value
 * @method integer     getUserId()      Returns the current record's "user_id" value
 * @method string      getDescription() Returns the current record's "description" value
 * @method integer     getIsActive()    Returns the current record's "is_active" value
 * @method sfGuardUser getUser()        Returns the current record's "User" value
 * @method Location    setId()          Sets the current record's "id" value
 * @method Location    setUserId()      Sets the current record's "user_id" value
 * @method Location    setDescription() Sets the current record's "description" value
 * @method Location    setIsActive()    Sets the current record's "is_active" value
 * @method Location    setUser()        Sets the current record's "User" value
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLocation extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('location');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('is_active', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}