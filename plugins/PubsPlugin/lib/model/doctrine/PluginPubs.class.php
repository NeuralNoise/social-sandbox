<?php

/**
 * Pubs
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class PluginPubs extends BasePubs {

    public function getObject() {
        $query = Doctrine::getTable($this->_get('record_model'))->createQuery('p')
                ->where('p.id = ?', $this->_get('record_id'));
        if ($this->_get('record_model') != 'photo') {
            $query->leftJoin('p.User u');
        }
        $query->orderBy('p.created_at DESC');
        return $query->execute();
    }

    public function getFormatDate() {
        $format = 'Y-m-d H:i:s';
        try {
            $dt = new DateTime();
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    public function getType() {
        $return = '';
        switch ($this->getRecordModel()) {
            case 'text':
                $return = 'publication';
                break;
            case 'photo':
                $return = 'image';
                break;
            case 'album_photo':
                $return = 'album';
                break;
            case 'audio':
                $return = 'audio';
                break;
            case 'link':
                $return = 'website';
                break;
        }
        return $return;
    }

    public function getDescription() {
        $object = $this->getObject();
        $return = '';
        switch ($this->getRecordModel()) {
            case 'text':
                $return = $object[0]->getDescription();
                break;
            case 'photo':
                $return = $object[0]->getUser()->getName() . ' ha compartido una imagen a través de Social Sandbox.';
                break;
            case 'album_photo':
                $return = $object[0]->getUser()->getName() . ' ha compartido su album de fotos ' . $object[0]->getName() . ' a través de Social Sandbox.';
                break;
            case 'audio':
                $return = $object[0]->getUser()->getName() . ' ha compartido ' . $object[0]->getDescription() . ' a través de Social Sandbox.';
                ;
                break;
            case 'link':
                $return = $object[0]->getDescription();
                break;
        }
        return $return;
    }

    public function getImage() {
        $object = $this->getObject();
        $return = '';
        switch ($this->getRecordModel()) {
            case 'text':
                $return = sfConfig::get('app_base_url') . 'PubsPlugin/images/default_avatar.png';
                break;
            case 'photo':
                $return = $object[0]->getThumb();
                break;
            case 'album_photo':
                $return = $object[0]->getCover();
                break;
            case 'audio':
                $return = sfConfig::get('app_base_url') . 'PubsPlugin/images/default_avatar.png';
                break;
            case 'link':
                $return = $object[0]->getImage();
                break;
        }
        return $return;
    }

    public function getTitle() {
        $object = $this->getObject();
        $return = '';
        switch ($this->getRecordModel()) {
            case 'text':
                $return = 'Publication by ' . $object[0]->getUser()->getName();
                break;
            case 'photo':
                $return = $object[0]->getTitle();
                break;
            case 'album_photo':
                $return = $object[0]->getName();
                break;
            case 'audio':
                $return = $object[0]->getDescription();
                break;
            case 'link':
                $return = $object[0]->getTitle() . ' - Shared by ' . $this->getUser()->getName() . ' in Social Sandbox';
                break;
        }
        return $return;
    }

}