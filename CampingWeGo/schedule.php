
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="campingWeGo.css">
    <header>
       <nav class="navBar">
       <h2>Menu</h2>
       <ul>
       <li><a href="Login.php"> Home</a></li>
       <li>
       <a href="schedule.php">Members</a>
       </li>
       <li>
       <a href="locationInput.php">Location</a>
       </li>
       </ul>
       </nav>
    </header>
</head>
<body>
<div id = "schedule">
  <h1>Trip Schedule</h1>
  <div class="inputList">
<table> 
  <tr>
  <th><b>Activity:</b></th>
  <th><b>Date:</th>
 </tr>

<?php
$scheduledEvents = array('Canoeing', 'Smores', 'Hiking');
$eventDates = array('Monday', 'Wednesday', 'Friday');
$tableImages = array('canoeing', 'hiking', 'smores');
    ?> 
<tr>
<td>
<?php
foreach($scheduledEvents as $events){
  echo "$events <br><br>";
}
?>
</td>
<td>
  <?php
  foreach($eventDates as $dates){
    echo "$dates<br><br>";
  }
  ?>
</td> 
<td>
  <?php
  for($i = 0; $i < 3; $i++) {
  $images = $tableImages[$i];
  echo "<img style = 'width:60px; height:50px;' src = 'images/$images.jpg'><br>";
  }
  ?>
</td> 
</tr> 

</table>
  </div>
  </div> 
  <footer class="footer">
  <p>This page is used to display the various activities the club will participate in on their trips.
  While these activities might vary depending on what the camping site allows, we will usually attend sites
  that do. Monday will get things wet with a canoeing session at the local lake.
  With wendnesday, will take a hike through the forest or a local mountain, feel free to take pictures if you
  want. Friday, will sweeten the end of the trip with the taste of a few smores.
  This camping group is also open to suggestions for change to the schedule.</p>
  <br>
  In further regards to the changing of the schedule, any changes will have to be made within the bounds
  of a single week as that is how long our trips will last. Additionally, any changes will be put through a  
  group vote.  Once the voting is done, the activity will be added to the schedule, based on where
  we could fit everyone's schedules. Any Equipment required for the activities will need to be provided by the
  camper or the campground. Thank you for reading!

  Anyone who comes to a camping trip must bring their own vehicle in case of an emergency 
  requiring them to return home. You may willing leave a site trip at any time possible.
  If you are to leave, you must notify me or ask another member to do so for you.
  This notification rule does not apply in the case of the most dire of emergency.
  Hope to see you camping.
</footer>
</body>
</html>