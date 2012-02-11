<!DOCTYPE html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta name="AUTHOR" content="Virendra Rajput">
<meta name="KEYWORDS" content="study notes, ETC, Electronics & Telecommunication, Study material">
<meta name="DESCRIPTION" content="We offer awesome study notes that will surely help you prepare for Diploma exams for  ETC courses.">
<title>Contact Us | Free Study Notes for ETC</title>
<script src="freecontactformvalidation.js"></script>
	<script>
	required.add('Full_Name','NOT_EMPTY','Full Name');
	required.add('Email_Address','EMAIL','Email Address');
	required.add('Your_Message','NOT_EMPTY','Your Message');
	required.add('AntiSpam','NOT_EMPTY','Anti-Spam Question');
	</script>
	<link rel="stylesheet" type="text/css" href="freecontactform.css">
<style type="text/css">
	@import url(menu_style.css); 
.style1 {
	font-family: Tahoma;
	font-weight: bold;
}
.style2 {font-family: Tahoma}
.style3 {font-family: Tahoma; font-size: 14px; }
</style>
<script>
var weekdaystxt=["Sun", "Mon", "Tues", "Wed", "Thurs", "Fri", "Sat"]
function showLocalTime(container, servermode, offsetMinutes, displayversion){
if (!document.getElementById || !document.getElementById(container)) return
this.container=document.getElementById(container)
this.displayversion=displayversion
var servertimestring=(servermode=="server-php")? '<? print date("F d, Y H:i:s", time())?>' : (servermode=="server-ssi")? '<!--#config timefmt="%B %d, %Y %H:%M:%S"--><!--#echo var="DATE_LOCAL" -->' : '<%= Now() %>'
this.localtime=this.serverdate=new Date(servertimestring)
this.localtime.setTime(this.serverdate.getTime()+offsetMinutes*60*1000) //add user offset to server time
this.updateTime()
this.updateContainer()
}

showLocalTime.prototype.updateTime=function(){
var thisobj=this
this.localtime.setSeconds(this.localtime.getSeconds()+1)
setTimeout(function(){thisobj.updateTime()}, 1000) //update time every second
}

showLocalTime.prototype.updateContainer=function(){
var thisobj=this
if (this.displayversion=="long")
this.container.innerHTML=this.localtime.toLocaleString()
else{
var hour=this.localtime.getHours()
var minutes=this.localtime.getMinutes()
var seconds=this.localtime.getSeconds()
var ampm=(hour>=12)? "PM" : "AM"
var dayofweek=weekdaystxt[this.localtime.getDay()]
this.container.innerHTML=formatField(hour, 1)+":"+formatField(minutes)+":"+formatField(seconds)+" "+ampm+" ("+dayofweek+")"
}
setTimeout(function(){thisobj.updateContainer()}, 1000) //update container every second
}

function formatField(num, isHour){
if (typeof isHour!="undefined"){ //if this is the hour field
var hour=(num>12)? num-12 : num
return (hour==0)? 12 : hour
}
return (num<=9)? "0"+num : num//if this is minute or sec field
}
</script>
</head>
<body bgcolor="#FFFFFF" bgproperties="fixed">
<div align="center">
<center>
<table border="0" cellpadding="3" cellspacing="1" width="821" height="76" bgcolor="#FCEFDE">
<tr>
<td width="808" valign="top" align="center" height="66" bgcolor="#FFFFFF"><img src="logo.png" width="700" height="116"></td>
</tr>
</table>
</center>
</div>
<center>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-6377952601366126";
/* StudyNotes Text */
google_ad_slot = "9771649964";
google_ad_width = 728;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>
<div align="center">
<center>
<table border="0" cellpadding="3" cellspacing="1" width="841" height="790" bgcolor="#EFA541">
<tr>
<td width="776" colspan="3" align="center" height="19" bgcolor="#F9DDB6"><b>
<font size="2" face="Arial">
<ul id="menu">
	<li><a href="index.php">Home</a></li>
	<li><a href="Courses.php">Courses</a></li>
	<li><a href="Schedule.php">Schedule</a></li>
	<li><a href="TimeTable.php">TimeTable</a></li>
	<li><a href="Submit.php">Submit Your Stuff</a></li>
	<li><a href="AboutUs.php">AboutUs </a></li>
	<li><a href="ContactUs.php">ContactUs</a></li></font></b>
</ul>
</td>
</tr>
<tr>
<td width="44" height="733" valign="top" align="center">
<div align="center">
</div>
<div align="center">
<table border="0" cellpadding="3" cellspacing="1" width="137" height="121" bgcolor="#2D1C04">
<tr>
<td width="124" bgcolor="#FFFFFF" height="111">
<p align="center"><span class="style2"><strong>What is Study Notes for ETC ?</strong><br>
  Study Notes for ETC is  your free resource for ETC course notes!<br>
  We offer free study materials for for ETC course notes.<br>
  *Please note that the site is still under Development &amp; we are in the Process of adding the course material so please be patient. </span></p>
</td>
</tr>
</table>
</div>
</td>
<td width="654" height="733" valign="top" bgcolor="#FCEFDE">
<p align="center" class="style1"><font size="5">Contact Us </font></p>
<center>
<form name="freecontactform" method="post" action="freecontactformprocess.php" onsubmit="return validate.check(this)">
	<table width="400px" class="freecontactform">
	<tr>
	 <td colspan="2">
	  
	 <div class="freecontactformheader"></div>
	  
	 <div class="freecontactformmessage">Fields marked with <span class="required_star"> * </span> are mandatory.</div>
	  
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Full_Name" class="required">Full Name<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top">
	  <input type="text" name="Full_Name" id="Full_Name" maxlength="80" style="width:230px">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Email_Address" class="required">Email Address<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top">
	  <input type="text" name="Email_Address" id="Email_Address" maxlength="100" style="width:230px">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Telephone_Number" class="not-required">Telephone Number</label>
	 </td>
	 <td valign="top">
	  <input type="text" name="Telephone_Number" id="Telephone_Number" maxlength="100" style="width:230px">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Your_Message" class="required">Your Message<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top">
	  <textarea style="width:230px;height:160px" name="Your_Message" id="Your_Message" maxlength="2000"></textarea>
	 </td>
	</tr>
	<tr>
	 <td colspan="2" style="text-align:center" >
	  <div class="antispammessage">
	  To help prevent automated spam, please answer this question
	  <br /><br />
		  <div class="antispamquestion">
		   <span class="required_star"> * </span>
		   Using only numbers, what is 10 plus 15? &nbsp; 
		   <input type="text" name="AntiSpam" id="AntiSpam" maxlength="100" style="width:30px">
		  </div>
	  </div>
	 </td>
	</tr>
	<tr>
	 <td colspan="2" style="text-align:center" >
	 <br /><br />
	  <input type="submit" value=" Submit Form ">
	  <br /><br />
	 </td>
	</tr>
	</table>
	</form>
<br><br><br><br>
<center>
<script language="Javascript" src="http://teckzone.in/count/graphcount.php?page=mainpage"><!--
//--></script>
</center>
</center>
</td>
<center>
<td width="147" height="733" valign="top" align="center">
<div align="center">
<table border="0" cellpadding="3" cellspacing="1" height="113" width="134">
<tr>
<td height="105" width="123" bgcolor="#F9DDB6" valign="top" align="center"><b><font size="2" face="Tahoma">
Current Server Time:<span id="timecontainer"></span>
<script type="text/javascript">
new showLocalTime("timecontainer", "server-php", 0, "short")
</script>
</td>
</table>
</div>
</center>
<div align="center">
<table border="0" cellpadding="3" cellspacing="1" height="610" width="135">
<tr>
<td height="602" width="124" valign="middle" align="center" bgcolor="#F9DDB6">
  <p align="center">
  <script type="text/javascript"><!--
google_ad_client = "ca-pub-6377952601366126";
/* Studynotes vertical tower */
google_ad_slot = "0739959236";
google_ad_width = 120;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
  </p>
</td>
</tr>
</table>
</div>
</td>
</tr>
<center>
<tr>
<td width="787" height="4" colspan="3" bgcolor="#EFA541">
  <p align="center"><strong><span class="style2"><font size="2">Developed By <a href="http://teckzone.in/blog/about/" target="_blank">Virendra Rajput</a> </font></span></strong></td>
</tr>
<tr>
<td width="787" height="4" colspan="3" bgcolor="#FCEFDE">
  <p align="center" class="style3">&copy; 2012 Study Notes for ETC. All Rights Reserved.</td> 
</tr>
</table>
</center>
</div>

</body>

</html>