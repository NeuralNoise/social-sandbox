<?php

/**
 * BaseFavlike
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $record_model
 * @property integer $record_id
 * @property integer $user_id
 * @property integer $dest_user_id
 * @property integer $is_active
 * @property sfGuardUser $User
 * @property sfGuardUser $DestUser
 * @property Doctrine_Collection $AudioFav
 * 
 * @method integer             getId()           Returns the current record's "id" value
 * @method string              getRecordModel()  Returns the current record's "record_model" value
 * @method integer             getRecordId()     Returns the current record's "record_id" value
 * @method integer             getUserId()       Returns the current record's "user_id" value
 * @method integer             getDestUserId()   Returns the current record's "dest_user_id" value
 * @method integer             getIsActive()     Returns the current record's "is_active" value
 * @method sfGuardUser         getUser()         Returns the current record's "User" value
 * @method sfGuardUser         getDestUser()     Returns the current record's "DestUser" value
 * @method Doctrine_Collection getAudioFav()     Returns the current record's "AudioFav" collection
 * @method Favlike             setId()           Sets the current record's "id" value
 * @method Favlike             setRecordModel()  Sets the current record's "record_model" value
 * @method Favlike             setRecordId()     Sets the current record's "record_id" value
 * @method Favlike             setUserId()       Sets the current record's "user_id" value
 * @method Favlike             setDestUserId()   Sets the current record's "dest_user_id" value
 * @method Favlike             setIsActive()     Sets the current record's "is_active" value
 * @method Favlike             setUser()         Sets the current record's "User" value
 * @method Favlike             setDestUser()     Sets the current record's "DestUser" value
 * @method Favlike             setAudioFav()     Sets the current record's "AudioFav" collection
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFavlike extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('favlike');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('record_model', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('record_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('dest_user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => false,
             ));
        $this->hasColumn('is_active', 'integer', null, array(
             'type' => 'integer',
             'default' => 0,
             ));


        $this->index('record_model_record_id', array(
             'fields' => 
             array(
              0 => 'record_model',
              1 => 'record_id',
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser as DestUser', array(
             'local' => 'dest_user_id',
             'foreign' => 'id'));

        $this->hasMany('Album_photo as AudioFav', array(
             'local' => 'record_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}