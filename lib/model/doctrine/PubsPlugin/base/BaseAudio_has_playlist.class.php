<?php

/**
 * BaseAudio_has_playlist
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $audio_id
 * @property integer $pl_id
 * @property integer $orden
 * @property Audio $Audio
 * @property Playlist $Playlist
 * 
 * @method integer            getAudioId()  Returns the current record's "audio_id" value
 * @method integer            getPlId()     Returns the current record's "pl_id" value
 * @method integer            getOrden()    Returns the current record's "orden" value
 * @method Audio              getAudio()    Returns the current record's "Audio" value
 * @method Playlist           getPlaylist() Returns the current record's "Playlist" value
 * @method Audio_has_playlist setAudioId()  Sets the current record's "audio_id" value
 * @method Audio_has_playlist setPlId()     Sets the current record's "pl_id" value
 * @method Audio_has_playlist setOrden()    Sets the current record's "orden" value
 * @method Audio_has_playlist setAudio()    Sets the current record's "Audio" value
 * @method Audio_has_playlist setPlaylist() Sets the current record's "Playlist" value
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAudio_has_playlist extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('audio_has_playlist');
        $this->hasColumn('audio_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('pl_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('orden', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Audio', array(
             'local' => 'audio_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Playlist', array(
             'local' => 'pl_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}