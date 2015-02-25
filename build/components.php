<?php /* Template Name: Components */ 

include('header.php');
echo '<div class="t-components">';
	include('components/logos.php');
	include('components/colors.php');
	include('components/gradients.php'); 
	include('components/text.php'); 
	include('components/lists.php'); 
	include('components/form-all.php'); 
	include('components/buttons.php');
	include('components/gridview.php');
	
	echo '<section class="m-components"><a href="components-js.php">Javascript interactions</a></section>';
	
echo '</div>';
include('footer.php');?> 