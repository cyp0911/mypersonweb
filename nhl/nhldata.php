<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>NHL Big-Data</title>
	<!--data visual-->
    <script src="google/jquery.min.2.0.3.js"></script>
  	<script src="google/raphael-min.js"></script>
  	<script src="inc/morris.1/morris.js"></script>
  	<script src="google/prettify.min.js"></script>
  	<script src="inc/morris.1/examples/lib/example.js"></script>
  	<link rel="stylesheet" href="google/prettify.min.css">
    <link rel="stylesheet" href="inc/morris.1/morris.css">

    
    <!--bootstrp-->
    <script src="google/jquery.min.1.11.1.js"></script>
	<script src="google/bootstrap.min.js"></script>    
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  
  div.container{
	  margin:auto;
  
  }
  
  </style>
    
</head>
<body style="padding:40px">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Play Datas</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#top">HOW</a></li>
        <li><a href="#nhl">NHL DATAS</a></li>
        <li><a href="http://www.yinpengchen.com">BACK TO MY WEBSITE</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php 
include "conn.php";
include "attfile/sybolic.php";
include "attfile/solartolunar.php";
?>

<div class="container">
	<div class="row"><h1 align="center">PLAY DATAs~</h1>
    </div>
 
 
    <div class="row">
    	<div class="col-lg-2"></div>
    	<div class="col-lg-4">
        <h4><b>I wrote a PYTHON script to extract all 2015-2016 Season 748 NHL players data to my personal MySQL database and Then use php and jquenry compoent to implement the data visuliziation.</b></h4>
        </div>
        <div class="col-lg-4">
        <img class="how" src="img/python.JPG">
        </div>
        <div class="col-lg-2"></div>
    </div>
<br>
<hr>
<br>
<section id="nhl">
<div class="row" align="center">
<img src="img/NHL-Banner-1.jpg" alt="nhl banner1">
</div>    
    <div class="row">
    	<h1 align="center">Let's see where is the majority NHL players come form?</h1>
    	<div id="graph"></div>
<?php 
	$dd = 1;
   	$chartcheck = mysql_query( "SELECT * FROM nhlroster");
	while( $row = mysql_fetch_row( $chartcheck ) )
	{
	$nation[$dd] = $row[9];
	$dd++;
	}
	
	$diff = array_count_values($nation);
	
	$total;
	foreach($diff as $key => $value){
    $country[]=$key;
	$numbers[]=$value;
	$total = $value +$total;
}
	
	
	
?>
<script>
Morris.Donut({
  element: 'graph',
  data: [
<?php  	foreach($diff as $key => $value){
		$percent = ($value/$total)*100;
    ?>
    {value: <?php echo $percent; ?>, label: '<?php echo $key; ?>', formatted: '<?php echo number_format($percent,2); ?>%' },
<?php    } ?>
  ],
  formatter: function (x, data) { return data.formatted; }
});
</script>

	</div>

<br>
<hr>
<br>
<div class="row">
<?php
	$agecount = 0;
	$chartcheck1 = mysql_query( "SELECT * FROM nhlroster");
	while( $row1 = mysql_fetch_row( $chartcheck1 ) )
	{
	$agelist[$agecount] = $row1[6];
	$agecount++;
	}
	
	$diffage = array_count_values($agelist);
	ksort($diffage);
?>

<h1 align="center">NHL player's age distribution</h1>
<p align="center"><em>X axis:AGE, Y axis:NUNBER OF PLAYERS</em></p>
<div id="agegraph"></div>

<script>
var day_data = [
<?php  	foreach($diffage as $key => $value){
    ?>
    {"elapsed": "<?php echo $key; ?>", "value": <?php echo $value; ?>},
<?php    } ?>
];
Morris.Line({
  element: 'agegraph',
  data: day_data,
  xkey: 'elapsed',
  ykeys: ['value'],
  labels: ['num of players'],
  parseTime: false
});
</script>

</div>
</div>
</section>

<div class="container">
	<div class="row" align="center">
    	<img src="http://fantraveler.com/wp-content/uploads/2015/06/Fantraveler.com_NBA_Ticket_Finder_Packages.jpg">
    </div>
    
<div class="row">
<h2 align="center">NBA players' nationality statistics</h2>
    	<div id="nbana"></div>
<?php 
	$na1 = 1;
   	$nbacheck = mysql_query( "SELECT * FROM nbaroster");
	while( $row = mysql_fetch_row( $nbacheck ) )
	{
	$cou[$na1] = $row[8];
	$na1++;
	}
	
	$diffcountry = array_count_values($cou);
	arsort($diffcountry);
	$diffcountry = array_slice($diffcountry,0,15,true);
	
	$total = 0;
	foreach($diffcountry as $key => $value){
    $country[]=$key;
	$numbers[]=$value;
	$total = $value +$total;
}
	
	
	
?>
<script>
Morris.Donut({
  element: 'nbana',
  data: [
<?php  	foreach($diffcountry as $key => $value){
		$percent = ($value/$total)*100;
    ?>
    {value: <?php echo $percent; ?>, label: '<?php echo $key; ?>', formatted: '<?php echo number_format($percent,2); ?>%' },
<?php    } ?>
  ],
  formatter: function (x, data) { return data.formatted; }
});
</script>
</div>
<div class="row">
<?php
	$agecount = 0;
	$nbatakeage = mysql_query( "SELECT * FROM nbaroster");
	while( $birthrow = mysql_fetch_row( $nbatakeage ) )
	{
	$agelistnba[$agecount] = get_age(date('Y', strtotime($birthrow[6])),date('n', strtotime($birthrow[6])),date('j', strtotime($birthrow[6]))); 
	$agecount++;
	}
	
	$diffagenba = array_count_values($agelistnba);
	ksort($diffagenba);
?>

<h1 align="center">NBA player's age distribution</h1>
<p align="center"><em>X axis:AGE, Y axis:NUNBER OF PLAYERS</em></p>
<div id="agegraphnba"></div>

<script>
var day_data = [
<?php  	foreach($diffagenba as $key => $value){
    ?>
    {"elapsed": "<?php echo $key; ?>", "value": <?php echo $value; ?>},
<?php    } ?>
];
Morris.Line({
  element: 'agegraphnba',
  data: day_data,
  xkey: 'elapsed',
  ykeys: ['value'],
  labels: ['num of players'],
  parseTime: false
});
</script>

</div>
</body>
</html>