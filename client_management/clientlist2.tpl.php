

<a href='' style="display: block; width: 25%;border: 1px solid #000; padding: 15px 5px; text-decoration: none;">Create new application</a> 
<?php

  foreach($clientlist as $item) {
  if($item->name!=NULL)
   echo "<a href='' style='display: block;width: 25%;border: 1px solid #000; padding: 15px 5px; text-decoration: none;'>".$item->name."</a> " ;
}
?>
        <a style=""></a>


