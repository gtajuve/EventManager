<?php /** @var $model \Models\EventModel */
?>
<h2>Update Event</h2>
<a href="../index">Back to Events</a>
<h5 style="color:red"><?php  echo isset($_SESSION['flash_message'])?$_SESSION['flash_message']:''?></h5>
<form action="../updateEvent/<?=$model->getId()?>" method="post">
    Eventname:<input type="text" name="name" value="<?=$model->getName()?>" required><br>
    Location:<input type="text" name="location" value="<?=$model->getLocation()?>" required><br>
    TimeStart:<input type="datetime-local" name="timeStart" value="<?=$model->getTimeStart()?>" required><br>
    TimeEnd:<input type="datetime-local" name="timeEnd" value="<?=$model->getTimeEnd()?>" required><br>
    <input type="submit" value="Update">

</form>
