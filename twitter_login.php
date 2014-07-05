<?php include "twitteroauth/twitteroauth.php"; ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php
$consumer = "yaabrMzig0spRpUHySamRl77w";
$consumersecret ="MpGwpxuAB6Fqdbjz4Bx1VoIUS7zz4KsWjtPs1DzbQf519mctyp";
$accesstoken ="2602792340-iHrEyDieEEVEc9Bux9ZrUpjloAUhd6XSzZ1sawt";
$accesstokensecret ="FswUuccVFMZ3ckq1AmQIyeBzIqmQMgVTYwjEwCLq0iyG3";
$twitter = new TwitterOAuth($consumer,$consumersecret,$accesstoken,$accesstokensecret);
$BRA=0;
$COL=0;
$CRO=0;
$MEX=0;
$CMR=0;
$ESP=0;
$NED=0;
$CHI=0;
$AUS=0;
$GRE=0;
$CIV=0;
$JPN=0;
$URU=0;
$CRC=0;
$ENG=0;
$ITA=0;
$SUI=0;
$ECU=0;
$FRA=0;
$HON=0;
$ARG=0;
$BIH=0;
$IRN=0;
$NGA=0;
$GER=0;
$POR=0;
$GHA=0;
$USA=0;
$BEL=0;
$ALG=0;
$RUS=0;
$KOR=0;
?>

<html>

<style>
#jstwitter {
    position: relative;
}
#jstwitter .item {
width:650px;
height:800px;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    border-radius:10px;
    -webkit-box-shadow:0 0 3px 1px rgba(100,100,100,0.2);
    -moz-box-shadow:0 0 3px 1px rgba(100,100,100,0.2);
    box-shadow:0 0 3px 1px rgba(100,100,100,0.2);
    overflow:hidden;
    background: #fff;
}

#jstwitter .item a {
    text-decoration: none;
    color: #000000;
}
#jstwitter .item img {
    width:100%;
}

body {
    background: #333;
    
}

#wrapper {
  margin: 10px;
}


.menu,
.sub-menu {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  background-color: #3E454D;
  cursor: pointer;
  position: relative;
  transition: background-color .5s;
  -moz-transition: background-color .5s;
  -o-transition: background-color .5s;
  -webkit-transition: background-color .5s;
  
}

.menu li:hover {
  background-color: #353B41 ;
  }

.menu a {
  color: #FFF;
  display: block;
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  height: 100%;
  margin: 0 5px;
  overflow: hidden;
  position: relative;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  word-wrap: break-word;
}

.menu a:hover {
 
  color: #FFF;
}

.menu {
  
  height: 90px;
}

.menu > li {
  float: left;
  height: 100%;
  width: 15%; 
  width: calc((100% - 90px) / 2);
  width: -moz-calc((100% - 90px) / 2);
  width: -webkit-calc((100% - 90px) / 2);
  
}

.menu > li.home {
  background: #3E454D url(http://icons.iconarchive.com/icons/visualpharm/icons8-metro-style/48/Very-Basic-Home-icon.png) center no-repeat ;
  
  width: 90px;
}

.menu > li.current {
  background-color: #F2762E ; 
 
  
  
}



.menu > li.home > a {
  color: transparent ;
}

.menu > li > a > span {
  left: 0; 
  position: absolute;
  right: 0;
  top: 50%;
  
  
}


 

</style>

<head>

	<meta charset="UTF-8" />
</head>
<body>
<div id="wrapper">
      <nav>
        <ul class="menu">
          <li class="home current"><a href="about.html"><span>Home</span></a></li>
          
          <li><a href="twitter_login.php"><span>FIFA TWEETS</span></a>
          
             
          </li>
          
          <li><a href="raphel.php"><span>TWEET STATS</span></a></li>
        </ul>
      </nav>
    </div>
<?php 

$tweets = $twitter -> get('https://api.twitter.com/1.1/search/tweets.json?q=FIFA&lang=en&result_type=recent&count=100');
?>

<?php	
foreach($tweets as $tweet){
foreach($tweet as $t)
{
?>
<center>
<div id="jstwitter">
<div class="item">
<?php
$tt = $t->user->profile_image_url;

$uinfo = pathinfo($tt);

$url_ext = $uinfo['extension'];

if ($url_ext === jpeg) {
  $tc = substr($tt, 0, -12); //deletes 12 chars from end for jpeg
}
else {
  $tc = substr($tt, 0, -11); //deletes 11 chars from end for jpg/png
}


$original_img_final = $tc.'.'.$url_ext;

?>
<center><?php echo '<img src="'.$original_img_final.'"/> '?></center>

    <center><div class="tweet-wrapper">
	<?php
if (@strpos($t->text,'#BRA') !== false) {
    $BRA++;
}
if (@strpos($t->text,'#CRO') !== false) {
    $CRO++;
}
if (@strpos($t->text,'#MEX') !== false) {
    $MEX++;
}
if (@strpos($t->text,'#CMR') !== false) {
    $CMR++;
}
if (@strpos($t->text,'#ESP') !== false) {
    $ESP++;
}
if (@strpos($t->text,'#NED') !== false) {
    $NED++;
}
if (@strpos($t->text,'#CHI') !== false) {
    $CHI++;
}
if (@strpos($t->text,'#AUS') !== false) {
    $AUS++;
}
if (@strpos($t->text,'#COL') !== false) {
    $COL++;
}
if (@strpos($t->text,'#GRE') !== false) {
    $GRE++;
}
if (@strpos($t->text,'#CIV') !== false) {
    $CIV++;
}
if (@strpos($t->text,'#JPN') !== false) {
    $JPN++;
}
if (@strpos($t->text,'#URU') !== false) {
    $URU++;
}
if (@strpos($t->text,'#CRC') !== false) {
    $CRC++;
}
if (@strpos($t->text,'#ENG') !== false) {
    $ENG++;
}
if (@strpos($t->text,'#ITA') !== false) {
    $ITA++;
}
if (@strpos($t->text,'#SUI') !== false) {
    $SUI++;
}
if (@strpos($t->text,'#ECU') !== false) {
    $ECU++;
}
if (@strpos($t->text,'#FRA') !== false) {
    $FRA++;
}
if (@strpos($t->text,'#HON') !== false) {
    $HON++;
}
if (@strpos($t->text,'#ARG') !== false) {
    $ARG++;
}
if (@strpos($t->text,'#BIH') !== false) {
    $BIH++;
}
if (@strpos($t->text,'#IRN') !== false) {
    $IRN++;
}
if (@strpos($t->text,'#NGA') !== false) {
    $NGA++;
}
if (@strpos($t->text,'#GER') !== false) {
    $GER++;
}
if (@strpos($t->text,'#POR') !== false) {
    $POR++;
}
if (@strpos($t->text,'#GHA') !== false) {
    $GHA++;
}
if (@strpos($t->text,'#USA') !== false) {
    $USA++;
}
if (@strpos($t->text,'#BEL') !== false) {
    $BEL++;
}
if (@strpos($t->text,'#ALG') !== false) {
    $ALG++;
}
if (@strpos($t->text,'#RUS') !== false) {
    $RUS++;
}
if (@strpos($t->text,'#KOR') !== false) {
    $KOR++;
}

?>
<span class="text">
<?php echo $t->text ?>
</span>
</div></center>
</div>
</div>
<?php
}
}

?>
</center>

    

</body>
</html>