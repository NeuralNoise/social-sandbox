<?php

/**
 * PluginPhotoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginPhotoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PluginPhotoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('PluginPhoto');
    }

    public static function listPhotosQuery($params) {
        $q = Doctrine_Query::create()
                        ->select('p.*,a.user_id auid,a.name albumName,sfu.username username')
                        ->from('Photo p')
                        ->leftJoin('p.Album a')
                        ->leftJoin('a.User sfu')
                        ->where('p.album_id=?', $params['album_id'])
                        ->addWhere('a.id=?', $params['album_id'])
                        ->orderBy('p.ord')
                        ->addOrderBy('p.updated_at DESC');
        return $q;
    }

    public static function listAllPhotos(Doctrine_Query $q){
        $rootAlias = $q->getRootAlias();
        $q->leftJoin($rootAlias . '.Album a');
        $q->leftJoin('a.User sfu');
        return $q;
    }

    public static function listPhotos($params) {
        $q = self::listPhotosQuery($params);
        return $q->execute();
    }

    public static function amountPhotos($params) {
        $q = self::listPhotosQuery($params);
        return $q->count();
    }

    public static function getPhotoQuery($params) {
        $q = Doctrine_Query::create()
                        ->select('p.*,a.user_id auid,a.name album,sfu.username username')
                        ->from('Album_photo a')
                        ->leftJoin('a.User sfu')
                        ->leftJoin('a.Photos p')
                        ->where('p.id=?', $params['photo_id'])
                        ->orderBy('p.ord')
                        ->addOrderBy('p.updated_at DESC');
        return $q;
    }

    public static function getPhoto($params) {
         $q = self::getPhotoQuery($params);
        return $q->execute();
     }

    public static function deleteComments($params) {
        $q = Doctrine_Query::create()
                        ->delete('Comment')
                        ->where('record_id=?', $params['photo_id'])
                        ->addWhere('record_model=?','Photo');
        return $q->execute();
    }

    public static function deletePublications($params) {
        $q = Doctrine_Query::create()
                        ->delete('pubs')
                        ->where('record_id=?', $params['photo_id'])
                        ->addWhere('record_model=?','photo');
        return $q->execute();
    }
}