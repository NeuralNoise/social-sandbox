<?php

/**
 * BaseInbox
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $dest_user_id
 * @property string $title
 * @property clob $description
 * @property boolean $is_active
 * @property boolean $reply
 * @property integer $record_id
 * @property boolean $featured
 * @property sfGuardUser $User
 * @property sfGuardUser $UserDest
 * 
 * @method integer     getUserId()       Returns the current record's "user_id" value
 * @method integer     getDestUserId()   Returns the current record's "dest_user_id" value
 * @method string      getTitle()        Returns the current record's "title" value
 * @method clob        getDescription()  Returns the current record's "description" value
 * @method boolean     getIsActive()     Returns the current record's "is_active" value
 * @method boolean     getReply()        Returns the current record's "reply" value
 * @method integer     getRecordId()     Returns the current record's "record_id" value
 * @method boolean     getFeatured()     Returns the current record's "featured" value
 * @method sfGuardUser getUser()         Returns the current record's "User" value
 * @method sfGuardUser getUserDest()     Returns the current record's "UserDest" value
 * @method Inbox       setUserId()       Sets the current record's "user_id" value
 * @method Inbox       setDestUserId()   Sets the current record's "dest_user_id" value
 * @method Inbox       setTitle()        Sets the current record's "title" value
 * @method Inbox       setDescription()  Sets the current record's "description" value
 * @method Inbox       setIsActive()     Sets the current record's "is_active" value
 * @method Inbox       setReply()        Sets the current record's "reply" value
 * @method Inbox       setRecordId()     Sets the current record's "record_id" value
 * @method Inbox       setFeatured()     Sets the current record's "featured" value
 * @method Inbox       setUser()         Sets the current record's "User" value
 * @method Inbox       setUserDest()     Sets the current record's "UserDest" value
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseInbox extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('inbox');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('dest_user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('reply', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('record_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('featured', 'boolean', null, array(
             'type' => 'boolean',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardUser as UserDest', array(
             'local' => 'dest_user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}