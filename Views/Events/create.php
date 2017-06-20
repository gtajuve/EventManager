<?php /** @var $model \Models\EventModel */?>
<h2>Create Event</h2>
<a href="index">Back to Events</a>
<h5 style="color:red"><?php  echo isset($_SESSION['flash_message'])?$_SESSION['flash_message']:''?></h5>
<form action="createEvent" method="post">
    Eventname:<input type="text" name="name" required value="<?php  echo $model!=null?$model->getName():''?>"><br>
    Location:<input type="text" name="location" required value="<?php  echo $model!=null?$model->getLocation():''?>"><br>
    TimeStart:<input type="datetime-local" name="timeStart" required value="<?php  echo $model!=null?$model->getTimeStart():''?>"><br>
    TimeEnd:<input type="datetime-local" name="timeEnd" required value="<?php  echo $model!=null?$model->getTimeEnd():''?>"><br>
    <input type="submit" value="Create">

</form>