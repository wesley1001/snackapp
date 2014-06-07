<?php
	# initialize session and request cookies -> for keeping the user logged in everywhere on the website
	session_start();
?>
<?php
	if (!isset($_SESSION[email]))
	{
		header('Location: http://itspixeled.nl/index.php');
		exit();
	} else {
		$_SESSION = array();
		session_destroy();
		setcookie (session_name(), '', time()-300, '/', '', 0);
	}
?>

<!DOCTYE html>
<html lang="nl">

	<head>
<link rel="shortcut icon" href="./cssstylesheets/logo.gif"
		<meta charset="UTF-8">
		<title>Xantes | Snack-IT</title>
		<link rel="stylesheet" type="text/css" href="../cssstylesheets/general.css">
	</head>
	
	<body>
		<header>
		</header>
		
		<table id="menu">
  	 		<tr>
  	     		<td id="menuitem" onclick="window.location = 'mijnsnackit.php';">
  	         		Mijn Snack-IT
  	         	</td>
  	         	<td id="menuitem" onclick="window.location = '../subpages/patat.php';">
  	         		Patat
  	         	</td>
  	         	<td id="menuitem" onclick="window.location = '../subpages/snacks.php';">
  	         		Snacks
  	         	</td>
  	         	<td id="menuitem" onclick="window.location = '../subpages/burgers.php';">
  	         		Burgers
  	         	</td>
  	         	<td id="menuitem" onclick="window.location = '../subpages/dranken.php';">
  	         		Dranken
  	        	 </td>
  	         	<td id="menuitemselected" onclick="window.location = 'logout.php';">
  	         		Log uit 
  	         	</td>
  			</tr>
  		</table>
		
		<div id="main">
			<?php
				echo "<b>U bent uitgelogd!</b>";
			?>

      </div>
		
	</body>
</html>