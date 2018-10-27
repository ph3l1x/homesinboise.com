
<html><head>

        <title>HackeD By T3RR0R B@B@</title>
		<link rel="icon" type="<img class="irc_mi" src="https://orig00.deviantart.net/d988/f/2013/298/0/7/anonymous_wallpaper____download_here___by_iisakkir6522-d6rrbsk.png" onload="typeof google==='object'&amp;&amp;google.aft&amp;&amp;google.aft(this)" width="304" height="171" style="margin-top: 91px;" alt="Gambar terkait">
<script> var message="Sorry Admin Your Website fucked by T3RR0R B@B@";
///////////////////////////////////
function clickIE4(){if (event.button==2){alert(message);return false;}} function clickNS4(e){if (document.layers||document.getElementById&&!document.all){if (e.which==2||e.which==3){alert(message);return false;}}} if (document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS4;} else if (document.all&&!document.getElementById){document.onmousedown=clickIE4;} document.oncontextmenu=new Function("alert(message);return false")</script>






<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="http://karyamurid.com/jangandihapus/videoYoutubeBackground/css/normalize.css" media="all">    

<!-- jQuery -->
<script src="http://karyamurid.com/jangandihapus/videoYoutubeBackground/js/jquery-1.11.1.min.js">
</script>
<script src="http://karyamurid.com/jangandihapus/videoYoutubeBackground/js/device.min.js"></script>
<script src="http://karyamurid.com/jangandihapus/videoYoutubeBackground/js/jquery.mb.YTPlayer.js">
</script>
<script src="http://karyamurid.com/jangandihapus/videoYoutubeBackground/js/custom.js"></script>

<style type="text/css">
/*
Tutorial Name: Modernize Your Site: Building a YouTube Video Background 
Author: Samuel Dalusung
*/


/* GENERAL STYLES
================================================== */
html {
    height:100%
}

body {
    font:15px/23px 'Raleway',sans-serif;
    margin:0;
    padding:0;
    height:100%;
    width:100%;
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:100%
}


p {
    font-size:20px;
    line-height:140%;
    text-align:center
}


ul li {
    display:inline-block;
    list-style:none;
    padding-right: 10px;
}

.wrapper {
    z-index:600;
    position:relative
}

.pattern {
    background-image:url(../images/pattern.png);
    background-repeat: repeat;
    background-attachment:scroll;
    width:100%;
    height:100%;
    position:absolute;
    top:0;
    left:0
}

.divider {
    background-image:url(../images/divider.png);
    display:block;
    width:300px;
    height:35px;
    margin:10px auto
}


#colorize {
    color:#f1c40f;
    font-family:'Lato',sans-serif;
    font-size:40px
}



/* BIG VIDEO BACKGROUND
================================================== */
.big-background {
    z-index:550;
    text-align:center;
    height:100%;
    min-height:100%;
    position:relative;
    overflow:hidden
}

.big-background .big-background-container {
    width:830px;
    max-width:100%;
    display:inline-block;
    position:absolute;
    top:50%;
    left:50%;
    -webkit-transform:translate(-50%,-50%);
    -moz-transform:translate(-50%,-50%);
    -ms-transform:translate(-50%,-50%);
    -o-transform:translate(-50%,-50%);
    transform:translate(-50%,-50%)
}

.big-background-title {
    font-family:'Raleway',sans-serif;
    font-size:78px;
    color:#fff;
    font-weight:300;
    text-transform:uppercase;
    text-align:center;
    margin-bottom:22px;
    padding-top:20px;
    display:inline-block;
    background-attachment:scroll;
    background-repeat:repeat-x;
    background-position:top center
}

a.big-background-btn {
    font-family:'Lato',sans-serif;
    font-size:13px;
    text-transform:uppercase;
    text-decoration:none;
    color:#fff;
    background:transparent;
    border:2px solid #fff;
    padding:10px 14px;
    cursor:pointer;
    letter-spacing:2px;
    text-align:center;
    display:inline-block;
    -webkit-transition:.4s background ease;
    -moz-transition:.4s background ease;
    -o-transition:.4s background ease;
    transition:.4s background ease;
}

.big-background-btn:hover {
    color:#fff;
    background:rgba(255,255,255,0.20)
}

.big-background-default-image {
    background:url(../images/sunset.jpg);
    background-repeat:no-repeat;
    background-position:center center;
    background-size:cover;
    width:100%;
    height:100%;
    z-index:0;
    backface-visibility:hidden
}



/* ABOUT SECTION
================================================== */
.about-section {
    font-family:'Lato',sans-serif;
    color:#7f8c8d;
    background:#fff;
    padding:60px 20px
}

.about-section-container {
    text-align:center;
    padding-bottom:50px
}

.about-section-title {
    font-family:'Raleway',sans-serif;
    font-size:40px;
    background:#fff;
    color:#3d566e;
    padding:0 35px;
    margin-bottom:22px;
    background-attachment:scroll;
    background-repeat:repeat-x;
    background-position:center center;
    text-transform:uppercase
}



a.about-section-btn {
    font-family:'Lato',sans-serif;
    font-size:13px;
    text-transform:uppercase;
    text-decoration:none;
    color:#34495e;
    background:transparent;
    border:2px solid #34495e;
    padding:10px 14px;
    cursor:pointer;
    letter-spacing:2px;
    text-align:center;
    display:inline-block;
    -webkit-transition:.4s background ease;
    -moz-transition:.4s background ease;
    -o-transition:.4s background ease;
    transition:.4s background ease;
}

.about-section-btn:hover {
    color:#fff;
    background: #34495e;
}



/* SMALL VIDEO BACKGROUND 
================================================== */
.small-background-section {
    font-family:'Raleway',sans-serif;
    padding:100px 0;
    position:relative;
    width:100%;
    overflow:hidden
}

.small-background-container {
    position:relative;
    text-align:center
}

.small-background-title {
    font-size:40px;
    color:#f1c40f;
    font-weight:300;
    z-index:10;
    display:inline-block;
    text-transform:uppercase;
    margin-bottom:20px;
    margin-top: 20px;
    position:relative;
    background-attachment:scroll;
    background-repeat:repeat-x;
    background-position:top center
}



/* SOCIALS
================================================== */
.socials a {
    color:#fff
}

.socials a:hover {
    color:#bdc3c7
}




/* MEDIA QUERIES
================================================== */

@media screen and (max-width: 768px) {
.about-section-title {
    line-height:1
}
}

@media screen and (max-width: 480px) {
.big-background-title {
    font-size:58px
}

.small-background-title {
    line-height:1
}

/*.player{ display: none;}  -> If you want to remove the video bg on a specific viewport w/o plugin*/
}

@media screen and (max-width: 360px) {
.big-background-title,#colorize {
    line-height:1
}
}

@media screen and (max-width: 320px) {
.small-background-title {
    font-size:30px
}
}

.percobaan{
  -webkit-animation: noise-1 .2s linear infinite;
          animation: noise-1 .2s linear infinite;
}

.error {
  -webkit-animation: noise-3 1s linear infinite;
          animation: noise-3 1s linear infinite;
  overflow: default;
}
@-webkit-keyframes noise-1 {
  0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
  10% {opacity: .1;}
  50% {opacity: .5; left: -6px;}
  80% {opacity: .3;}
  100% {opacity: .6; left: 2px;}
}

@keyframes noise-1 {
  0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
  10% {opacity: .1;}
  50% {opacity: .5; left: -6px;}
  80% {opacity: .3;}
  100% {opacity: .6; left: 2px;}
}

@-webkit-keyframes noise {
  0%, 3%, 5%, 42%, 44%, 100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}  
  4.3% {opacity: 1; -webkit-transform: scaleY(1.7); transform: scaleY(1.7);}
  43% {opacity: 1; -webkit-transform: scaleX(1.5); transform: scaleX(1.5);}
}

@keyframes noise {
  0%, 3%, 5%, 42%, 44%, 100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}  
  4.3% {opacity: 1; -webkit-transform: scaleY(1.7); transform: scaleY(1.7);}
  43% {opacity: 1; -webkit-transform: scaleX(1.5); transform: scaleX(1.5);}
}

@-webkit-keyframes noise-3 {
  0%,3%,5%,42%,44%,100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}
  4.3% {opacity: 1; -webkit-transform: scaleY(4); transform: scaleY(4);}
  43% {opacity: 1; -webkit-transform: scaleX(10) rotate(60deg); transform: scaleX(10) rotate(60deg);}
}

@keyframes noise-3 {
  0%,3%,5%,42%,44%,100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}
  4.3% {opacity: 1; -webkit-transform: scaleY(4); transform: scaleY(4);}
  43% {opacity: 1; -webkit-transform: scaleX(10) rotate(60deg); transform: scaleX(10) rotate(60deg);}
}


</style><link rel='shortcut icon' href='https://orig00.deviantart.net/223d/f/2014/059/a/4/skull_logo_by_thilli-d78bat3.png' />
























</head><body bgcolor="black">
 <div id="shadow" class="shadow">
 <br><br><br> <br><br>
<div style="text-align:center;"><img class="irc_mi" src="http://myhdwallpapers.org/wp-content/uploads/2018/02/HD-Cartoon-Boy-Black-Hat.jpg" onload="typeof google==='object'&amp;&amp;google.aft&amp;&amp;google.aft(this)" width="304" height="190" style="margin-top: 94px;" alt="Gambar terkait"><br>
<font face="Nova Square" color="goldenrod" size="8px">|HackeD By T3RR0R B@B@|</font><br>
<font face="Nova Square" color="Grey" size="5px">
<br> <font face="New" size="">!! Black HacKer Cyber Army !! </font>
<br>_____________________
<br>
<marquee direction='right'><font color='grey' size='4' face='Iceland'><font size="3" face="Audiowide" color="White">|grezz to :: My pc and All Defacer and atracker|</font></marquee>
<center> 
<marquee direction='left'><font color='White' size='4' face='Iceland'>|We Are Anonymous|<font size="3" face="Audiowide" color="red"> We Are Legion </font> | We Do Not Forgive  |<font size="3" face="Audiowide" color="Red"> We Do Not Forget </font> | Expect us |</font></marquee>
<center> 
<br>
<a><font color="white" size="3" face="Audiowide"> .:: Find Me ::. 
</center>
<br>https://www.facebook.com/mr.T3RR0R</a>
<br> 
<br>
<br> ~T3RR0R B@B@~
<br>
<marquee behavior="scroll" direction="down" scrollamount="4" scrolldelay="40" height="583" style="position:absolute; left:69%; top:167px; width:100; height:583px;">
   <font color="red">T3RR0R B@B@</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="4" scrolldelay="16" height="508" style="position:absolute; left:7%; top:86px; width:100; height:508px;">
   <font color="red">anonymous</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="2" scrolldelay="28" height="584" style="position:absolute; left:71%; top:151px; width:100; height:584px;">
   <font color="Yellow">127.0.0.1</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="5" scrolldelay="28" height="630" style="position:absolute; left:63%; top:128px; width:100; height:630px;">
   <font color="Blue">3lacksql</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="1" scrolldelay="45" height="558" style="position:absolute; left:73%; top:160px; width:100; height:558px;">
   <font color="YELLOW">Mr Root ErroR</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="5" scrolldelay="17" height="561" style="position:absolute; left:60%; top:169px; width:100; height:561px;">
   <font color="Blue">deface</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="1" scrolldelay="48" height="564" style="position:absolute; left:13%; top:176px; width:100; height:564px;">
   <font color="GREY">T3RR0R B@B@</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="2" scrolldelay="19" height="538" style="position:absolute; left:70%; top:117px; width:100; height:538px;">
   <font color="VIOLET">Hacker</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="4" scrolldelay="33" height="651" style="position:absolute; left:34%; top:69px; width:100; height:651px;">
   <font color="white">T3RR0R B@B@</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="3" scrolldelay="20" height="672" style="position:absolute; left:55%; top:18px; width:100; height:672px;">
   <font color="white">Hacker</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="3" scrolldelay="49" height="541" style="position:absolute; left:54%; top:10px; width:100; height:541px;">
   <font color="white">3lacksql</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="4" scrolldelay="48" height="535" style="position:absolute; left:21%; top:145px; width:100; height:535px;">
   <font color="VIOLET">Mr Root ErroR</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="3" scrolldelay="7" height="576" style="position:absolute; left:21%; top:26px; width:100; height:576px;">
   <font color="steel blue">AnonyMouse</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="6" scrolldelay="20" height="565" style="position:absolute; left:60%; top:52px; width:100; height:565px;">
   <font color="steel blue">3lacksql</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="6" scrolldelay="5" height="678" style="position:absolute; left:23%; top:100px; width:100; height:678px;">
   <font color="white">Hacker</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="5" scrolldelay="30" height="580" style="position:absolute; left:32%; top:65px; width:100; height:580px;">
   <font color="Grey">127.0.0.1</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="4" scrolldelay="15" height="509" style="position:absolute; left:10%; top:152px; width:100; height:509px;">
   <font color="white">3lacksql</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="4" scrolldelay="21" height="601" style="position:absolute; left:89%; top:162px; width:100; height:601px;">
   <font color="Grey">127.0.0.1</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="5" scrolldelay="25" height="560" style="position:absolute; left:86%; top:83px; width:100; height:560px;">
   <font color="Green">Anonymouse</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="2" scrolldelay="34" height="671" style="position:absolute; left:59%; top:95px; width:100; height:671px;">
   <font color="Orange">127.0.0.1</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="5" scrolldelay="47" height="650" style="position:absolute; left:28%; top:25px; width:100; height:650px;">
   <font color="light">black</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="2" scrolldelay="43" height="584" style="position:absolute; left:14%; top:59px; width:100; height:584px;">
   <font color="Red">Anonymouse</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="2" scrolldelay="14" height="696" style="position:absolute; left:44%; top:23px; width:100; height:696px;">
   <font color="white">cyber</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="5" scrolldelay="43" height="652" style="position:absolute; left:38%; top:114px; width:100; height:652px;">
   <font color="Violet">army</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="1" scrolldelay="28" height="503" style="position:absolute; left:70%; top:149px; width:100; height:503px;">
   <font color="steel blue">HACKER</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="3" scrolldelay="42" height="513" style="position:absolute; left:77%; top:143px; width:100; height:513px;">
   <font color="Grey">T3RR0R B@B@</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="4" scrolldelay="13" height="607" style="position:absolute; left:84%; top:138px; width:100; height:607px;">
   <font color="rainbow">Hacker</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="5" scrolldelay="35" height="547" style="position:absolute; left:66%; top:37px; width:100; height:547px;">
   <font color="white">T3RR0R B@B@</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="1" scrolldelay="25" height="697" style="position:absolute; left:53%; top:99px; width:100; height:697px;">
   <font color="ruby">T3RR0R B@B@</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="4" scrolldelay="12" height="520" style="position:absolute; left:31%; top:59px; width:100; height:520px;">
   <font color="Orange">T3RR0R B@B@</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="1" scrolldelay="21" height="686" style="position:absolute; left:13%; top:192px; width:100; height:686px;">
   <font color="Dark Green">darkweb</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="1" scrolldelay="35" height="632" style="position:absolute; left:24%; top:177px; width:100; height:632px;">
   <font color="ultramarin">Mr Root ErroR</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="3" scrolldelay="9" height="644" style="position:absolute; left:35%; top:6px; width:100; height:644px;">
   <font color="pink">T3RR0R B@B@</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="5" scrolldelay="23" height="521" style="position:absolute; left:55%; top:52px; width:100; height:521px;">
   <font color="ultramarin">T3RR0R B@B@</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="1" scrolldelay="26" height="547" style="position:absolute; left:72%; top:64px; width:100; height:547px;">
   <font color="ultramarin">127.0.0.1</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="4" scrolldelay="47" height="523" style="position:absolute; left:5%; top:141px; width:100; height:523px;">
   <font color="Violet">Hacker</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="5" scrolldelay="46" height="545" style="position:absolute; left:71%; top:191px; width:100; height:545px;">
   <font color="Yellow">Anonymouse</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="4" scrolldelay="11" height="668" style="position:absolute; left:20%; top:196px; width:100; height:668px;">
   <font color="red">Mr Root ErroR</font>
  </marquee> 
  <marquee behavior="scroll" direction="down" scrollamount="1" scrolldelay="46" height="668" style="position:absolute; left:83%; top:128px; width:100; height:668px;">
   <font color="Blue">T3RR0R B@B@</font>
  </marquee> 
<font id="hckk"><jir>|</jir>3lacksql   <jir>|</jir> T3RR0R B@B@ <jir>|</jir> Mr Root ErroR<jir>|</jir> ^-^ <jir>|</jir>Mr Root ErroR <jir>|</jir><jir>|</jir> T3RR0R B@B@ <jir>|</jir> 3lacksql <jir>|</jir>
</font></font></div><font face="Nova Square" color="silver" size="5px"><font id="hckk">
<body> 
<script type="text/javascript">

                <!--
				//Disable right click script
				//visit http://www.rainbow.arch.scriptmania.com/scripts/
				var message="Sorry, right-click has been disabled";
				///////////////////////////////////
				function clickIE() {if (document.all) {(message);return false;}}
				function clickNS(e) {if
				(document.layers||(document.getElementById&&!document.all)) {
				if (e.which==2||e.which==3) {(message);return false;}}}
				if (document.layers)
				{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
				else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
				document.oncontextmenu=new Function("return false")
				// -->
		</script>
		
		<style type="text/css">* {cursor: url(http://cur.cursors-4u.net/cursors/cur-11/cur1054.cur), auto !important;}</style><a href="http://www.cursors-4u.com/cursor/2012/02/12/chrome-pointer.html" target="_blank" title="Chrome Pointer"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Chrome Pointer" style="position:absolute; top: 0px; right: 0px;" /></a>
		</body>



<div style="visibility:hidden">
<audio autoplay loop>
    <source src="https://dl.dropbox.com/s/hawul5wfedydpkf/ya.mp3?dl=0">
</audio> 
 </div>

</font></font></div></body></html>
