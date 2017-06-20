<?php

namespace Collections;
use Models\EventModel;

class EventsCollection
{
    protected $table  = 'events';
    protected $db     = null;


    public function __construct()
    {
        $this->db = \Core\DB::getInstance();
    }
    public function create(EventModel $event)
    {
        $sql="INSERT INTO {$this->table} SET ";

        $sql.="name = '".$event->getName()."',";
        $sql.="location = '".$event->getLocation()."',";
        $sql.="time_start = '".$event->getTimeStart()."',";
        $sql.="time_end = '".$event->getTimeEnd()."'";

        $result = $this->db->query($sql);

        if(!$result) {
            echo "database error";
        }
    }
    public function getAll($date=null){
        $sql="SELECT * FROM ".$this->table;
        if($date!=null){
            $sql.=" WHERE time_start < '".date("Y-m-d")."'";
        }else{
            $sql.=" WHERE time_start >= '".date("Y-m-d")."'";
        }

        $sql.=" ORDER by time_start";

        $result = $this->db->query($sql);

        if(!$result) {
            echo "database error";
        }

        $collection = array();
        while ($row = $this->db->translate($result)) {
            $event = new EventModel();
            $event->setId($row["id"]);
            $event->setName($row["name"]);
            $event->setLocation($row["location"]);
            $event->setTimeStart($row["time_start"]);
            $event->setTimeEnd($row["time_end"]);
            $collection[] =$event;
        }

        return $collection;
    }
    public function getById($id){
        $sql="SELECT * FROM ".$this->table;
        $sql.=" WHERE id=".$id;
        $result = $this->db->query($sql);

        if(!$result) {
            echo "database error";
        }
        $row = $this->db->translate($result);
        $event = new EventModel();
        $event->setId($row["id"]);
        $event->setName($row["name"]);
        $event->setLocation($row["location"]);
        $event->setTimeStart($row["time_start"]);
        $event->setTimeEnd($row["time_end"]);
        return $event;

    }
    public function save(EventModel $event){
        $sql="UPDATE ".$this->table." SET ";
        $sql.="name = '".$event->getName()."',";
        $sql.="location = '".$event->getLocation()."',";
        $sql.="time_start = '".$event->getTimeStart()."',";
        $sql.="time_end = '".$event->getTimeEnd()."'";
        $sql.= " WHERE id = '{$event->getId()}'";

        $result = $this->db->query($sql);

        if(!$result) {
            echo "database error";
        }
    }
    public function delete($id){

        $sql = "DELETE FROM {$this->table} WHERE id = {$id}";

        $result = $this->db->query($sql);
        if(!$result) {
            echo "database error";
            die;
        }
    }
}