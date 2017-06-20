<?php

namespace Controllers;

use Collections\EventsCollection;
use Models\EventModel;

class EventsController
{
  public function index($date=null){
      $view = new \Core\View();
      $eventsCollection = new EventsCollection();
      $events=$eventsCollection->getAll($date);
      $view->render("Events/index",$events);
  }
    public function create(){
        $view = new \Core\View();
        $view->render("Events/create");
    }
    public function createEvent(EventModel $event){
        $error=$event->valiationModel();
        if($error!=""){
            $_SESSION["flash_message"]=$error;
            $view = new \Core\View();
            $view->render("Events/create",$event);
        }else{
            $eventCollection = new \Collections\EventsCollection();
            $eventCollection->create($event);
            header("Location:index");
        }

    }
    public function update($id){
        $view = new \Core\View();
        $eventsCollection = new EventsCollection();
        $event=$eventsCollection->getById($id);
        $view->render("Events/update",$event);
    }
    public function updateEvent($id,EventModel $event){
        $error=$event->valiationModel();
        $event->setId($id);
        if($error!=""){
            $_SESSION["flash_message"]=$error;
            $view = new \Core\View();
            $view->render("Events/update",$event);
        }else{
            $eventCollection = new \Collections\EventsCollection();
            $eventCollection->save($event);
            header("Location:../index");
        }
    }
    public function delete($id){

        $eventsCollection = new EventsCollection();
        $eventsCollection->delete($id);
        header("Location:../index");
    }


}