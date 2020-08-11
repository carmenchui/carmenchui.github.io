<?php
$pathLen = 0;

function prePad($level)
{
  $ss = "";

  for ($ii = 0;  $ii < $level;  $ii++)
  {
    $ss = $ss . "|&nbsp;&nbsp;";
  }

  return $ss;
}

function myScanDir($dir, $level, $rootLen)
{
  global $pathLen;

  if ($handle = opendir($dir)) {

    $allFiles = array();

    while (false !== ($entry = readdir($handle))) {
      if ($entry != "." && $entry != "..") {
        if (is_dir($dir . "/" . $entry))
        {
          $allFiles[] = "D: " . $dir . "/" . $entry;
        }
        else
        {
          $allFiles[] = "F: " . $dir . "/" . $entry;
        }
      }
    }
    closedir($handle);

    natsort($allFiles);



    foreach($allFiles as $value)
    {
//      echo $value;
      $displayName = substr($value, $rootLen + 4);
      $fileName    = substr($value, 3);
      $internal = "internal";
      $shared = "SHARED";
      $linkName    = substr($value, $pathLen + 3);//str_replace(" ", "%20", substr($value, $pathLen + 3));
//      $linkName = "internal/SHARED/".$linkName;



      echo '<td class="tg-0lax">';
      if (is_dir($fileName)) {
        echo "<a href=\"" . $fileName . "\" style=\"text-decoration:none;\">" .$displayName . "</a><br>\n";
        myScanDir($fileName, $level + 1, strlen($fileName));
        echo '</td>';

      } else {
        echo '<td class="tg-0lax">';        
                echo "<a href=\"" . $fileName . "\" style=\"text-decoration:none;\">" . $displayName . "</a><br>\n";

      }
echo '</td>';
echo '</tr>';
    }
  }
}

?>


<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>STL: SHARED Site Map</title>
</head>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-cly1{text-align:left;vertical-align:middle}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-wa1i{font-weight:bold;text-align:center;vertical-align:middle}
.tg .tg-nrix{text-align:center;vertical-align:middle}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>

<body>
<h1>STL: SHARED Site Map (Tree Table)</h1>
<p style="font-family:'Courier New', Courier, monospace; font-size:small;">

<table class="tg">
<thead>
  <tr>
    <th class="tg-1wig"><span style="font-weight:bold">Folder</span></th>
    <th class="tg-1wig"><span style="font-weight:bold">Folder(s)/File(s)</span></th>
  </tr>
</thead>
<tbody>
<tr>
<?php
  $root = '.';

  $pathLen = strlen($root);

  myScanDir($root, 0, strlen($root)); ?>
</tr>
</tbody></table>
</body>

</html>