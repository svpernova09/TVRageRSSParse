<?php
$rss = simplexml_load_file('YOUR-TV-RAGE-RSS-URL');
foreach ($rss->channel->item as $item) {
   echo  $item->title . " " . $item->description . "<br>";
}
?>