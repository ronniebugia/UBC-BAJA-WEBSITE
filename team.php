<!DOCTYPE html>
<html>
<title>Team - UBC BAJA</title>
<?php include 'header.php';?>
<style>
/* Three columns side by side */
.column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
    }
}

/* Some left and right padding inside the container */
.container {
    padding: 16px;
    font-size: 1em;
    background-color: rgba(50,18,81);
}

/* Clear floats */
.container::after, .row::after {
    content: "";
    clear: both;
    display: table;
}
</style>
    
<body>  
<!-- Sidebar -->
<?php include 'menu.php';?>

<!-- UBC LOGO -->
<div style="padding:64px">
   <h1 style="font-size:3em; text-align:center"><b>MEET THE TEAM</b></h1>
</div>
    
<!-- Row 1-->
<!-- Enoa Preston -->
<div class="row">
  <div class="column">
    <div class="card">
    <img src="images/enoa-preston.png" class="image">
      <div class="container">
          <h1><b>Enoa Preston</b></h1>
          <p>Enoa Preston is the captain of the 2017-2018 UBC BAJA team. Growing up in Hawaii, Enoa spent a lot of time working in his grandfather's shop and became familiar with the practical side of engineering. Currently in his fourth year of integrated engineering, Enoa is working on his capstone project and leading the team.<br>Working with the Baja team for the last four years, Enoa has become extremely familiar and invested with the team and strives for the best. While being very involved with the design process, Enoa also focuses on managing the administration and treasury of the team.</p>
      </div>
    </div>
    </div>
    
<!-- Daniel Granger -->
  <div class="column">
    <div class="card">
    <img src="images/daniel-granger.png" class="image">
        <div class="container">
            <h1><b>Daniel Granger</b></h1>
            <p>Daniel Granger is the co-captain of the 2017-2018 UBC BAJA team. Daniel grew up in Alberta and is currently in his fourth year of Mechanical Engineering. With a passion for vehicles and fabrication, Daniel hopes to merge his mechanical engineering degree and passion for custom vehicle design into a career. <br> After being on the team for the last four years, Daniel is now in charge of setting the major vehicle design goals. He has completely re-designed the suspension geometry for the 2018 season and is excited to see how the improved vehicle dynamics perform at competition.  In Addition to being the suspension design lead, Daniel is also the team’s welder and social media manager.</p>
        </div>
    </div>
    </div>
    
 <!-- Damian Parlee -->
  <div class="column">
    <div class="card">
    <img src="images/damian-parlee.png" style="width: 100%" class="image">
         <div class="container">
             <h1><b>Damian Parlee</b></h1>
             <p>Damian Parlee is the lead of the UBC Baja's design and frame sub-teams. He grew up on Vancouver Island, and is currently in his third year of mechanical engineering. Damian hopes to find a career that combines his passion for bikes with his experience in mechanical design <br>In his off-time, Damian built a 3d-printer, which is currently being used by UBC Baja to print functional parts as well as test parts before manufacturing.</p>
        </div>
    </div>
    </div>
</div>
    
<!-- Row 2 -->
<!-- Adrien Noble -->
<div class="row">
  <div class="column">
    <div class="card">
    <img src="images/adrien-noble.png" class="image">
        <div class="container">
            <h1><b>Adrien Noble</b></h1>
            <p>Adrien Noble is the lead of the UBC Baja drive train sub-team. Coming to UBC from Kingston Ontario, Adrien is currently in his third year mechanical engineering. With a passion for design, Adrien sees himself working in a design aspect of engineering. <br>This is only Adrien's second year on the Baja team, but he has a vital role. With the project of a custom design gearbox he can often be founding working in the bay and 3D printing prototypes.</p>
        </div>
    </div>
    </div>
    
<!-- Kate Mason -->
  <div class="column">
    <div class="card">
    <img src="images/kate-mason.png" class="image">
        <div class="container">
            <h1><b>Kate Mason</b></h1>
            <p>Kate Mason is the lead for the UBC Baja's steering sub-team. She grew up in Surrey and is currently in her fourth year of Integrated Engineering. With a strong interest in automobiles and design, Kate is looking for a career in the automotive industry. <br>This being her second year on the team, Kate plays a vital role in timeline management on top of her managing her sub team. With an active lifestyle Kate can either be found in the bay or out playing a sport.</p>
        </div>
    </div>
    </div>    
    
 <!-- Madeline Odegaard -->
  <div class="column">
    <div class="card">  
        <img src="images/madline-odegaard.png" class="image">
            <div class="container">
                <h1><b>Madeline Odegaard</b></h1>
                <p>Madeline Odegaard is the lead for the UBC Baja's brake sub-team. She grew up in Kamloops and is currently in her third year of mechanical engineering. Madi plays an important role in admin on top of her managing brakes.</p>
     </div>
    </div>
    </div>
</div>
    
<!-- Row 3 -->
<!-- Emrick Rurange-->
<div class="row">
  <div class="column">
    <div class="card"> 
    <img src="images/emrick-rurange.png" class="image">
        <div class="container">
            <h1><b>Emrick Rurange</b></h1>
            <p>Emrick Rurange is the lead for the UBC Baja's mechatronics sub-team. He came to UBC from Philadelphia and is currently in his fourth year of mechanical engineering. With a strong base in designing and running code, Emrick hopes to find a career in technical designing. <br>Being the lead of the mechatronics means Emrick is constantly working with code and data acquisition systems. You can often find him in the bay running tests on the car.</p>
     </div>
    </div>
    </div>
</div>
    
<?php include 'footer.php';?>

    
