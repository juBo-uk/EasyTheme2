<?php
/**
 * Walled garden page shell
 *
 * Used for the walled garden index page
 */

// Set the content type
header("Content-type: text/html; charset=UTF-8");
$site = elgg_get_site_entity();
$title = $site->name;
$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php echo elgg_view('page/elements/head', $vars[head]); ?>
</head>
<body>
<div class="elgg-page elgg-page-default" >
<div class="elgg-page-messages">
    <?php echo $messages ?>
</div>


<div class="elgg-page-header">
<div class="elgg-inner">
<h1>
    <a class="elgg-heading-site" href="<?php echo elgg_get_site_url(); ?>"><?php echo $title; ?></a>
</h1>
    <img style="width: 100%; height: auto;" src="<?php echo elgg_get_site_url(); ?>/mod/easytheme2/graphics/headimg.jpg" />
</div>
</div>


<div class="custom-index elgg-main elgg-grid clearfix" style="max-width: 100%; background: #fff; border-bottom: 150px solid #eee; border-right: 2px solid #eee; border-left: 2px solid #eee; margin-left: -2px;" >
<div class="et-module-intro">
<?php include elgg_get_data_path() . "easytheme2/intro.php"; ?> 
</div>
<div class="elgg-module-et-login">
<div class="elgg-body-walledgarden" >
		<?php echo $vars['body']; ?>
</div>
</div>
<div class="elgg-col elgg-col-1of2">
<div class="elgg-inner pvm prl">
<?php
// left column
// a view for plugins to extend
echo elgg_view("index/lefthandside");
?>

<div class="et-module-text-left">
<?php include elgg_get_data_path() . "easytheme2/textleft.php"; ?> 
</div>
    </div>
	</div>
<div class="elgg-col elgg-col-1of2">
<div class="elgg-inner pvm">
<?php
// a view for plugins to extend
echo elgg_view("index/righthandside");
?>

<div class="et-module-text-right">
<?php include elgg_get_data_path() . "easytheme2/textright.php"; ?> 
</div>
    </div>
	</div>
</div>
</div>
</body>
</html>
