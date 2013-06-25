<html>
<!-- DW6 -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="robots" content="index,follow">
<meta name="author" content="Brian Latta">

<meta name="description" content="Capital City Bridge Club">
<meta name="keywords" content="victoria, bridge, club">

<title> Capital City Bridge Club</title>
 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table width="98%" border="1" cellspacing="2" cellpadding="2" bordercolor="#999999">
  <tr align="center" valign="top" bgcolor="#33CC66"> 
    <td colspan="3" height="97"><img src="/images/CapitalCityBridgeClub3.jpg" width="800" height="90"></td>
  </tr>
  <tr align="center" valign="top"> 
    <td rowspan="2" width="20%" bgcolor="#33CC66" bordercolor="#FF0000"> 
      <?php require('../navigation.php') ?>     </td>
    <td height="500" bgcolor="#33CC66" width="67%" bordercolor="#333333"> 

<? if ($_GET['success']) {
  echo "Upload succeeded.  Add another? <br />";
} ?>

<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>

</td>
    <td rowspan="2" width="15%" bgcolor="#33CC66" bordercolor="#FF0000"> 
      <p><img src="/images/bridgehand.gif" width="125" height="100"></p>      </td>
  </tr>
  <tr>
    <td align="center" valign="bottom" height="50" bgcolor="#33CC66" bordercolor="#FF0000" width="67%"> 
      <?php require('../footer.php') ?>      </td>
  </tr>
</table>
</body>
</html>
