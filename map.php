<html>
<!-- DW6 -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="robots" content="index,follow">
<meta name="author" content="Brian Latta">

<!--//if (empty ($metaDescription))-->

<meta name="description" content="Capital City Bridge Club">
<meta name="keywords" content="victoria, bridge, club">

<title> Capital City Bridge Club</title>
 
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  function initialize() {
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    var myOptions = {
      zoom: 8,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  }

</script>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000" onload="initialize()">
<table width="98%" border="1" cellspacing="2" cellpadding="2" bordercolor="#999999">
  <tr align="center" valign="top" bgcolor="#33CC66"> 
    <td colspan="3" height="97"><img src="/Images/CapitalCityBridgeClub3.jpg" width="800" height="90"></td>
  </tr>
  <tr align="center" valign="top"> 
    <td rowspan="2" width="20%" bgcolor="#33CC66" bordercolor="#FF0000"> 
      <?php require('navigation.php') ?>      </td>
    <td height="500" bgcolor="#33CC66" width="67%" bordercolor="#333333">

      <h1>Location</h1>
      <div id="map_canvas"></div>

<p>
Capital City Bridge Club located in the Lakehill Lawn Bowling Clubhouse Drive. 
Cars may be parked on LaSalle St. or in the large parking lot past the clubhouse. 
</p>
<p>
Bus access is from Blenkinsop Road and Union Road Bus stop on Route 25.
</p>

			</td>
  </tr>
  <tr>
    <td align="center" valign="bottom" height="50" bgcolor="#33CC66" bordercolor="#FF0000" width="67%"> 
      <?php require('footer.php') ?>      </td>
  </tr>
</table>
</body>
</html>