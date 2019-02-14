<!DOCTYPE html>
<html>
<title>History - UBC BAJA</title>
<?php include 'header.php';?>

<body  style="min-height: 100%; background-attachment: fixed; background-position: center;
    background-repeat: no-repeat; background-size: cover; background-image: url(images/desert-1.png)">
<?php include 'menu.php';?>
    
<!-- Baja SAE Kansas 2017 -->
<div style="padding: 64px">
<h1 style="font-size: 3em; font-weight: bold">Baja SAE Kansas 2017</h1>
<ul class="list-accolades">
    <li>Overall: 38th</li>
    <li>Sled Pull: 8th</li>
    <li>Sales: 10th</li>
    <li>Maneuverability: 36th</li>
    <li>Design: 40th</li>
    <li>Acceleration: 46th</li>
    <li>Endurance: 49th</li>
</ul>
<p>Unfortunately we didn't get to run the suspension and traction event due to a thunderstorm. For the endurance race we were out for the race for two of the 4 hours fixing some mechanical issues. We melted a CVT primary because of a fuel delivery issue that resulted in a run away engine, had to solve the fuel delivery issue and replace a broken Ackerman arm. Once that was sorted the car ran flawless for the remainder of endurance (save for one rollover by Dan), and we were on pace by lap time to finish in 6th.<br>
Overall it was an excellent learning experience. We are a young team of dedicated and passionate members and we are striving to improve every year.</p>
</div>
<div class="slideshow-container" style="padding-top:10px">

<?php
    $dir = "images/Baja_SAE_Kansas_2017/*.jpg";
    $images = glob($dir);
    $i = 1; 
    foreach($images as $image):
        echo "<div class='kansas2017Slide'>";
        echo "<img style='width: 100%;' src='".$dirname.$image."'/>";
        echo "<div class='prev' onclick='plusDivs(-1, 0)'>&#8249</div>";
        echo "<div class='next' onclick='plusDivs(1, 0)'>&#8250</div></div>";
    endforeach;
?>
</div>

<div style="padding: 64px" class="">
<h1 style="font-size: 3em; font-weight: bold">Baja SAE California 2016</h1>
<ul class="list-accolades">
    <li>Overall (1000): 480.39</li>
    <li>Overall Dynamic (300): 164.88</li>
    <li>Overall Static (300): 169.17</li>
    <li>Cost Event (100): 73.17</li>
    <li>Design Event (150): 70</li>
    <li>Sales Presentation (50): 26</li>
    <li>Acceleration (75): 53.12</li>
    <li>Maneuverability (75): 42.74</li>
    <li>Hill Climb (75): 30.25</li>
    <li>Suspenstion and Traction (75): 38.77</li>
    <li>Endurance (400): 146.34</li>
</ul>
</div>
<div class="slideshow-container" style="padding-top:10px">
<?php
    $dir = "images/BAJA_SAE_California_2016/*.jpg";
    $images = glob($dir);
    $i = 1; 
    foreach($images as $image):
        echo "<div class='california2016Slide'>";
        echo "<img style='width: 100%;' src='".$dirname.$image."'/>";
        echo "<div class='prev' onclick='plusDivs(-1, 1)'>&#8249</div>";
        echo "<div class='next' onclick='plusDivs(1, 1)'>&#8250</div></div>";
    endforeach;
?>
</div>

<!--- Washington 2013 -->
<div style="padding: 64px" class="">
<h1 style="font-size: 3em; font-weight: bold">Baja SAE Washington 2013</h1>
<ul class="list-accolades">
    <li>Overall (1000): 531.50</li>
    <li>Overall Dynamic (300): 133.82</li>
    <li>Overall Static (300): 110.28</li>
    <li>Cost Event (100): 17.78</li>
    <li>Design Event (150): 55.00</li>
    <li>Sales Presentation (50): 37.50</li>
    <li>Acceleration (75): 50.97</li>
    <li>Maneuverability (75): 40.68</li>
    <li>Hill Climb (75): 6.88</li> 
    <li>Rock Crawl (75): 35.29</li>
    <li>Endurance (400): 287.50</li>
</ul>
</div>
<div class="slideshow-container" style="padding-top:10px; padding-bottom:10px">
<?php
    $dir = "images/Baja_ SAE_Washington_2014/*.jpg";
    $images = glob($dir);
    $i = 1; 
    foreach($images as $image):
        echo "<div class='washington2014Slide'>";
        echo "<img style='width: 100%;' src='".$dirname.$image."'/>";
        echo "<div class='prev' onclick='plusDivs(-1, 2)'>&#8249</div>";
        echo "<div class='next' onclick='plusDivs(1, 2)'>&#8250</div></div>";
    endforeach;
?>
</div>
   
<script>    
var slideIndex = [1,1, 1];
var slideId = ["kansas2017Slide", "california2016Slide", "washington2014Slide"]
showDivs(1, 0);
showDivs(1, 1);
showDivs(1, 2);

function plusDivs(n, no) {
  showDivs(slideIndex[no] += n, no);
}

function showDivs(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>
    
<?php include 'footer.php';?>   
</body>
</html>