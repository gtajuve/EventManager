<?php /** @var $model \Models\EventModel[] */ ?>

<h2>Event Manager</h2>

<?php
    if($model[0]->getTimeStart()>=date("Y-m-d")){
        require_once "menu.php";
    }else{
        require_once "menu_past.php";
    }
?>
<table border="1px solid black">
    <tr>
        <th>Name</th>
        <th>Location</th>
        <th>StartDate</th>
        <th>EndDate</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach($model as $event):?>
    <tr>
        <td><?=$event->getName()?></td>
        <td><?=$event->getLocation()?></td>
        <td><?=$event->getTimeStart()?></td>
        <td><?=$event->getTimeEnd()?></td>
        <td><a href="update/<?=$event->getId()?>">Edit</a></td>
        <td><a href="delete/<?=$event->getId()?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>

</table>
