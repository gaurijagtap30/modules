<?php


?>
<div style="width:100%">
<div id="sidemenubar-first-wrapper" style="float:left;width:30%;">
	<?php print render(menu_tree_output((menu_build_tree('menu-app-register'))));?>
</div>

<div style="float:left;width:50%;">
<?php print render($mainContents);?>
</div>
</div>
