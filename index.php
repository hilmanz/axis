<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>AXIS BAROKAH - GSM YANG BAIK</title>
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/favicon.png">
<link rel="stylesheet" type="text/css" href="css/axis.css" />
<link rel="stylesheet" type="text/css" href="js/jqueryui/css/smoothness/jquery-ui-1.7.2.custom.css">
<link rel="stylesheet" type="text/css" href="css/scrollbar.css">
<link rel='stylesheet' media='screen and (min-width: 768px) and (max-width: 1280px)' href='css/axismedium.css' />
<script type="text/javascript" src="js/jquery-1.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.js"></script>
<script type="text/javascript" src="js/jquery-custom-file-input.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jScrollPane.js"></script>
<script type="text/javascript" src="js/jquery-custom-file-input.js"></script>
<script type="text/javascript" src="js/jquery-scroller-v1.min.js"></script>
<script type="text/javascript" src="js/scroll-startstop.events.jquery.js"></script>
<script type="text/javascript" src="js/axis.js"></script>
</head>

<body>
<div id="body">
	<div id="top">
    	<div class="wrapper">
        	<a href="index.php" class="logoBarokah">&nbsp;</a>
            <div class="userInfo">
            	<a href="index.php" class="logoAxis">&nbsp;</a>
                <div class="clear">
                    <span class="welcome">Hello, User</span>
                    <a href="#popupEditProfile" class="edit showPopup">&nbsp;</a>
                    <a href="#" class="logout">&nbsp;</a> 
                </div>
            </div>
        </div>
    </div><!-- end #top -->
	<?php include("widget/slider.php"); ?>
    <div class="wrapper">
        <div id="container">
        	<div id="lefBar">
				<?php include("widget/counter.php"); ?>
				<?php include("widget/pushselling.php"); ?>
            </div><!-- end #lefBar -->
            <div id="center">
				<?php include("widget/status_admin.php"); ?>
				<?php include("widget/obrolan.php"); ?>
            </div><!-- end #center -->
            <div id="rightBar">
				<?php include("widget/update_status.php"); ?>
                <a id="weeklyWinner" class="showPopup" href="#popupWeeklyWinner"></a>
            </div><!-- end #rightBar -->
			<?php include("widget/newsticker.php"); ?>
        </div><!-- end #container -->
    </div><!-- end .wrapper -->
    <div id="footer">
    	<div class="footer">
        	<a class="facebook" href="#" target="_blank">&nbsp;</a>
            <a class="twitter" href="#" target="_blank">&nbsp;</a>
            <span class="copy">&copy; 2012 Axis. All rights reserved.</span>
        </div>
    </div><!-- end #footer -->
</div><!-- end #body -->
<?php // include("popup/popup_messages_home.php"); ?>
<?php include("popup/popup_messages.php"); ?>
<?php include("popup/popup_edit_profile.php"); ?>
<?php include("popup/popup_weekly_winner.php"); ?>
<?php include("popup/popup_hadiah.php"); ?>
<?php include("popup/popup_hadiah2.php"); ?>
<?php include("popup/popup_friend_detail.php"); ?>
<?php include("popup/popup_user_detail.php"); ?>
<?php include("popup/popup_push_selling.php"); ?>
<?php include("popup/popup_image.php"); ?>
<div id="bgPopup"></div>
</body>
</html>