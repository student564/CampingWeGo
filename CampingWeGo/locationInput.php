<?php
$locals = [
["siteName"=>'Pines Hills Campground', "siteCity" => 'Mauk, GA', "siteCoordinates" => '37.5159 N, 89.4221 W'],
["siteName"=> 'Mulberry Gap', "siteCity" => 'Ellijay, GA', "siteCoordinates" => '34.798536 N, -84.609671'],
["siteName"=> 'Castleberry Bridge', "siteCity" => 'Dawsonville, GA', 'siteCoordinates' => '34.47287 N 84.03658 W'],
["siteName"=>'Little Bluffs', "siteCity" => 'Wildwoods, GA', "siteCoordinates" => '43.9308 N, 76.9921 W'],
["siteName"=>'Bennett Cove ', "siteCity" => 'Monticello, GA', "siteCoordinates" => '33.3610 N, 83.7880 W'],
["siteName"=>'Stone Mountain Park', "siteCity" => 'Stone Mountain, GA', "siteCoordinates" =>'33.805359 N, 84.145882 W']
];


?>
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
    <form action="locationInput.php" method="post">
    <div id="georgiaSites">
    <input type="text" name="location" placeholder="Enter a campsite in Georgia">
    <br>
    <br>
   <button type="submit">Submit</button>
    </form>    
    <div>
    <p>
 
    <?php 
    
   
        $locationInput = filter_input(INPUT_POST, 'location');
        
        $site_input = array_filter($locals, fn($site) => $site["siteName"] == $locationInput);
     
    foreach($site_input as $campsite) :
   
       echo '<ul class = "siteCard">';
        echo'<li>' . $campsite["siteName"] .'</li>' . '<br>';
        
        echo'<li>' . $campsite["siteCoordinates"] . '</li>' . '<br>' ;
       
        echo'<li>' .$campsite["siteCity"]. '</li>';
         echo '</ul>';
    ?>
    <?php endforeach;?>
    </p>
    <?php
     if($site_input != true){
        echo include('error.php');
       }
    
    ?>
    </div>
</div>
<div class="footNote">
This is the locations page. Here, you will be able to search for various campsites 
throughout georgia by typing the site's name into the search bar above. The text below
the bar will then show the site's name, coordiantes, and state. If a name is entered 
that the page does not recognize, the page will showcase an error. The number of recognized sites 
will be updated with time.


Locations will be added based on group votes. The groups selected to be added must be within 
every group memeber's range. In addition, any groups added must be local to georgia.
With that said, I hope you understand and enjoy.

Before coming to a location, we must research its surroundings in order to get an idea of what to bring.
After researching individually, we will meet up as a group an discuss our findings. The group will also discuss
cheap yet efficient ways to get what is needed for the trip. After everything is done with we will be free to begin our trip.
We hope to see you there!
</div>
</body>
</html>