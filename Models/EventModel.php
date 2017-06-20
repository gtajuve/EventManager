<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 6/16/17
 * Time: 11:55 PM
 */

namespace Models;


class EventModel
{
    private $id;
    private $name;
    private $location;
    private $timeStart;
    private $timeEnd;

    /**
     * EventModel constructor
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getTimeStart()
    {
        return $this->timeStart;
    }

    /**
     * @param mixed $timeStart
     */
    public function setTimeStart($timeStart)
    {
        $this->timeStart = $timeStart;
    }

    /**
     * @return mixed
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }

    /**
     * @param mixed $timeEnd
     */
    public function setTimeEnd($timeEnd)
    {
        $this->timeEnd = $timeEnd;
    }

    public function valiationModel(){
        $this->name=addslashes(trim($this->name));
        $this->location=addslashes(trim($this->location));
        $this->timeStart=addslashes(trim($this->timeStart));
        $this->timeEnd=addslashes(trim($this->timeEnd));

        $error="";
        if (strlen($this->name)<3||strlen($this->name)>25) {
            $error = 'Event name is incorrent';
        }
        if (strlen($this->location)<3||strlen($this->location)>50) {
            $error = 'Event location is incorrect';
        }
        if($this->timeStart>$this->timeEnd||$this->timeStart<date("Y-m-d")){
            $error= "Event time is incorrent";
        }
        return $error;


    }
}