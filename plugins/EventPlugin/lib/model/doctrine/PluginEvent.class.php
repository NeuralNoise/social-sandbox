<?php

/**
 * PluginEvent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7691 2011-02-04 15:43:29Z jwage $
 */
abstract class PluginEvent extends BaseEvent {

    public function getImagePath($tamanyo='thumb') {
        return '/users/' . $this->getUser()->getUsername() . '/eventImages/' . $tamanyo . '/' . $this->getimage();
    }

    public function isMine() {
        return $this->getUserId() == sfContext::getInstance()->getUser()->getGuardUser()->getId();
    }

    public function getDestUserId() {
        return $this->getUser()->getId();
    }

    public function getFavlikes() {
        $query = Doctrine::getTable('Favlike')->createQuery('p')
                ->where('p.record_id = ?', $this->_get('id'))
                ->andWhere('p.record_model = ?', 'event')
                ->leftJoin('p.User u')
                ->orderBy('p.created_at DESC');
        return $query->execute();
    }

    public function getComments() {
        $query = Doctrine::getTable('Comment')->createQuery('p')
                ->where('p.record_id = ?', $this->_get('id'))
                ->andWhere('p.record_model = ?', 'event')
                ->leftJoin('p.User u')
                ->orderBy('p.created_at ASC');
        return $query->execute();
    }

}