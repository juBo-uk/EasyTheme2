<p class='et-admin-red'><strong>You need to complete this form, and 'SAVE', before EasyTheme is ready to use.</strong></p>

<h2>[1a] Header Image ~ Front Page</h2><br />
<img  style="width:100%; height: auto; padding: 5px; border: 1px dashed #000;" src="<?php echo elgg_get_site_url();?>mod/easytheme2/graphics/headimg.jpg" alt="" />	


<p>First choose your <strong>HEADER IMAGE</strong> and save it as headimg.jpg in 'mod/easytheme2/graphics'. <em> You need to choose your image carefully - make sure it is the right width and height for the header of your page.</em></p><p><strong>For EasyTheme 2.0 your image needs to be 1240px wide - and 370px high</strong></p> 
<h2>[1b] Header Image ~ Inner Pages</h2><br />
<img  style="width:100%; height: auto; padding: 5px; border: 1px dashed #000;" src="<?php echo elgg_get_site_url();?>mod/easytheme2/graphics/headinner.jpg" alt="" />	


<p>First choose your <strong>HEADER IMAGE</strong> and save it as headinner.jpg in 'mod/easytheme2/graphics'. <em> You need to choose your image carefully - make sure it is the right width for the header of your page.</em></p><p><strong>For EasyTheme 2.0 your image needs to be 1240px wide</strong></p> 

<h2>[2] Menu Bar</h2><br />
<img style="padding: 5px; border: 1px dashed #000;" src="<?php echo elgg_get_site_url();?>mod/easytheme2/graphics/header.png" alt="" />	

<br /><br /><p><strong> Menu Bar ~ Colour '3' on the image above</strong> <em>(Theme default = #38599e).</em></p>
<?php


	if(empty($vars['entity']->et2menu)){
	$vars['entity']->et2menu = "#38599e";
	}

echo elgg_view('input/text', array(     'name' => 'params[et2menu]', 
                                        'value' => $vars['entity']->et2menu,
                                        'class' => 'easytheme2', ) );  
                                        
                                        
echo "<br /><br /><p><strong> Top Bar ~ Colour '1' on the image above</strong> <em>(Theme default = #26478a).</em><p>";                                        
	if(empty($vars['entity']->et2menu1)){
	$vars['entity']->et2menu1 = "#26478a";
	}

echo elgg_view('input/text', array(     'name' => 'params[et2menu1]', 
                                        'value' => $vars['entity']->et2menu1,
                                        'class' => 'easytheme2', ) );   

echo "<p><strong> Top Bar Border ~ Colour '2' on the image above</strong> <em>(Theme default = #1d3d7e).</em><p>";                                        
	if(empty($vars['entity']->et2menu2)){
	$vars['entity']->et2menu2 = "#1d3d7e";
	}

echo elgg_view('input/text', array(     'name' => 'params[et2menu2]', 
                                        'value' => $vars['entity']->et2menu2,
                                        'class' => 'easytheme2', ) );        
echo "<p><strong>Menu Link Colour</strong> - Choose between Black or White <em>(Theme default = #fff).</em><p>";                                        
	if(empty($vars['entity']->et2menua)){
	$vars['entity']->et2menua = "#fff";
	}


echo elgg_view('input/text', array(     'name' => 'params[et2menua]', 
                                        'value' => $vars['entity']->et2menua,
                                        'class' => 'easytheme2', ) );   
                                        
                                        
                                  
                                                                                     
?> 
	                                       
<br /><br /><h2>[3] The page background image</h2> 
<img  style="padding: 5px; border: 1px dashed #000; margin: 20px;" src="<?php echo elgg_get_site_url();?>mod/easytheme2/graphics/bkgr.jpg" alt="" />
<br />The background image is found here: <strong>'mod/easytheme2/graphics/bkgr.jpg'</strong>. Replace this image with a repeating image of your choice - any size - Remember to name your image <strong> 'bkgr.jpg'</strong>.</em></p><br />  
<br /><h2>[4] Forms</h2><br />                                                                                                            
<?php
echo '<div>';
echo 'Show <strong>Log In</strong> and <strong>Register Forms</strong> on the front page?';
echo ' ';
echo elgg_view('input/select', array(
	'name' => 'params[et2forms]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'yes' => elgg_echo('option:yes')
	),
	'value' => $vars['entity']->et2forms,
));
echo '</div>';
?>




<br /><br /><h2>[5] The Front Page Text Areas</h2> 
<?php



echo "<br /><p><strong>Short Site Introduction</strong> Write a short, 2 line, introduction to your site - <em>(This will appear at the top of the custom index page.  Be careful to copy/paste from a text file - otherwise it's easy to paste unwanted mark-up into the box.)</em></p>";

$myFile = elgg_get_data_path() . "easytheme2/intro.php";
if (file_exists($myFile)) {
$fh = fopen($myFile, 'r');
$et2introfile = fread($fh, filesize($myFile));
fclose($fh);
}
echo elgg_view('input/longtext', array( 'name' => 'params[et2intro]', 
                                        'value' => $et2introfile,
                                        'class' => 'easytheme2', ) ); 
                                        
                                        
echo "<br /><br /><p><strong>Full Site Introduction Text.</strong> Left Hand side.</p>";
$myFile = elgg_get_data_path() . "easytheme2/textleft.php";
if (file_exists($myFile)) {
$fh2 = fopen($myFile, 'r');
$et2txtl = fread($fh2, filesize($myFile));
fclose($fh2);
}
echo elgg_view('input/longtext', array( 'name' => 'params[et2textleft]', 
                                        'value' => $et2txtl,
                                        'class' => 'easytheme2', ) ); 
                                        
echo "<br /><br /><p><strong>Full Site Introduction Text.</strong> Right Hand side.</p>";
$myFile = elgg_get_data_path() . "easytheme2/textright.php";
if (file_exists($myFile)) {
$fh3 = fopen($myFile, 'r');
$et2txtr = fread($fh3, filesize($myFile));
fclose($fh3);
}
echo elgg_view('input/longtext', array( 'name' => 'params[et2textright]', 
                                        'value' => $et2txtr,
                                        'class' => 'easytheme2', ) ); 
                                        


echo "<br /><br /><h2>[6] The Search Box </h2><br /><p> You might need to move the search box up or down <em>(Theme default = -27px)</em></p> ";          

	if(empty($vars['entity']->et2search)){
	$vars['entity']->et2search = "-27px";
	}
                              
echo elgg_view('input/text', array(     'name' => 'params[et2search]', 
                                        'value' => $vars['entity']->et2search,
                                        'class' => 'easytheme2', ) ); 

                                       
                                     

                                        
echo "<br /><br /><h2>[7] Heading and Link Colours</h2><br /><p>Link Colour (1) <em>(Theme default = #38599e)</em></p> ";   

	if(empty($vars['entity']->et2color1)){
	$vars['entity']->et2color1 = "#38599e";
	}
                                              
echo elgg_view('input/text', array(     'name' => 'params[et2color1]', 
                                        'value' => $vars['entity']->et2color1,
                                        'class' => 'easytheme2', ) ); 

echo "<br /><br /><p>Link Colour (2) <em>(Theme default = #a95e27)</em></p> ";          

	if(empty($vars['entity']->et2color2)){
	$vars['entity']->et2color2 = "#a95e27";
	}
                                        
echo elgg_view('input/text', array(     'name' => 'params[et2color2]', 
                                        'value' => $vars['entity']->et2color2,
                                        'class' => 'easytheme2', ) );                                         



                                   

                                  
echo "<br /><br /><h2>[8] Footer</h2><br /><p>Footer :: height <em>(Theme default = 100px)</em></p> ";    

	if(empty($vars['entity']->et2footh)){
	$vars['entity']->et2footh = "100px";
	}
                                    
echo elgg_view('input/text', array(     'name' => 'params[et2footh]', 
                                        'value' => $vars['entity']->et2footh,
                                        'class' => 'easytheme2', ) ); 


echo "<br /><br /><p>Footer :: background colour <em>(Theme default = #eee)</em></p> ";   

	if(empty($vars['entity']->et2footbk)){
	$vars['entity']->et2footbk = "#eee";
	}
                                     
echo elgg_view('input/text', array(     'name' => 'params[et2footbk]', 
                                        'value' => $vars['entity']->et2footbk,
                                        'class' => 'easytheme2', ) ); 


                                        
echo "<br /><br /><p>Footer :: text colour <em>(Theme default = #999)</em></p> ";      

	if(empty($vars['entity']->et2foottext)){
	$vars['entity']->et2foottext = "#999";
	}
                                  
echo elgg_view('input/text', array(     'name' => 'params[et2foottext]', 
                                        'value' => $vars['entity']->et2foottext,
                                        'class' => 'easytheme2', ) ); 



echo "<br /><br /><p>Footer :: link colour <em> (Theme default = #ccc)</em></p> ";             

	if(empty($vars['entity']->et2footlink)){
	$vars['entity']->et2footlink = "#ccc";
	}
                           
echo elgg_view('input/text', array(     'name' => 'params[et2footlink]', 
                                        'value' => $vars['entity']->et2footlink ,
                                        'class' => 'easytheme2', ) ); 


echo "<br /><br /><p>Footer :: link hover colour <em>(Theme default = #666)</em></p> ";  

	if(empty($vars['entity']->et2foothov)){
	$vars['entity']->et2foothov = "#666";
	}
                                                             
echo elgg_view('input/text', array(     'name' => 'params[et2foothov]', 
                                        'value' => $vars['entity']->et2foothov,
                                        'class' => 'easytheme2', ) ); 




echo"<br /><br /><p class='et-admin-red'><strong>Now save your settings.</strong></p>";
