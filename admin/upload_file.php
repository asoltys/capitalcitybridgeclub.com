<?php
$allowedExts = array("txt");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "text/plain"))
&& ($_FILES["file"]["size"] < 800000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    move_uploaded_file($_FILES["file"]["tmp_name"], "../Results/2008/" . $_FILES["file"]["name"]);
    header("Location: upload.php?success=true");
    }
  }
else
  {
  echo "Invalid file";
  }
?>
