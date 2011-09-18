<?php

/**
 * PluginEventTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginEventTable extends Doctrine_Table {

    /**
     * Returns an instance of this class.
     *
     * @return object PluginEventTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('PluginEvent');
    }

    public static function searchNear($coors, $params=array()) {
        $latMax = max(array($coors['latMin'], $coors['latMax']));
        $latMin = min(array($coors['latMin'], $coors['latMax']));
        $lngMax = max(array($coors['lngMin'], $coors['lngMax']));
        $lngMin = min(array($coors['lngMin'], $coors['lngMax']));
        $q = Doctrine_Query::create()
                ->from('Event e')
                ->leftJoin('e.User')
                ->where('e.latitude BETWEEN ? AND ?', array($latMin, $latMax))
                ->addWhere('e.longitude BETWEEN ? AND ?', array($lngMin, $lngMax))
                ->addWhere('e.is_active=?', 1)
                ->orderBy('date')
                ->addOrderBy('hour');
        foreach ($params as $param => $value) {
            $q->addWhere('e.' . $param . '=?', $value);
        }
        return $q->execute();
    }

    public static function searchDateRange($dates, $params=array()) {
        $q = Doctrine_Query::create()
                ->from('Event e')
                ->leftJoin('e.User')
                ->where('e.date BETWEEN ? AND ?', array($dates['min'], $dates['max']))
                ->addWhere('e.is_active=?', 1)
                ->orderBy('date')
                ->addOrderBy('hour');
        foreach ($params as $param => $value) {
            $q->addWhere('e.' . $param . '=?', $value);
        }
        return $q->execute();
    }

    public static function getEventsQuery($params=array()) {
        $q = Doctrine_Query::create()
                ->from('Event e')
                ->leftJoin('e.User')
                ->where('e.is_active=?', 1)
                ->orderBy('date')
                ->addOrderBy('hour');
        foreach ($params as $param => $value) {
            $q->addWhere('e.' . $param . '=?', $value);
        }
        return $q;
    }

    public static function getEvents($params=array()) {
        return self::getEventsQuery($params)->execute();
    }

}