<html>
<head>
	<title>ADMIN</title>
	<link rel='stylesheet' type="text/css" href='<?php echo base_url()."css/header.css";?>'>
	<link rel='stylesheet' href='<?php echo base_url()."css/admin.css";?>' type='text/css'>
</head>
<body>
	<div id="top">
	<div class="header">
		<a class='home' href="<?php echo site_url('home/'); ?>">Home</a>
		<label class='h l280'>Admin Home</label>
			<a class='logout' href="<?php echo site_url('login/logout'); ?>">Logout</a>
		<div>
			<ul>
				<li >
					<a href="<?php echo site_url('home/admin'); ?>"><span>C</span>reate a Test</a>
				</li>
				<li class='selected'>
					<a href="#"><span>Q</span>uestions</a>
				</li>
				<li>
					<a href="<?php echo site_url('home/question3'); ?>"><span>S</span>cores</a>
				</li>
			</ul>
		</div>
	</div>
	</div>
</body>
</html>
<?php

//$aname=$this->session->userdata('username');
/*
if (isset($_POST['submit'])) 
{
	if(isset($_POST['testname']))
	{
		if(!empty($_POST['testname']))
		{
		$_SESSION['testname']=$_POST['testname'];
		header( 'location:questions.php');	
		}
	}
}
*/
?>

<html>
	<head>
	
	</head>
	<body>
	<div id='wrapper'>
		<div id='content'>
<form action= "<?php echo site_url('home/scores'); ?>" method ="POST">
			<div id='tname'>
					<input type="submit" name='final' value="Generate" align='center' ></input>
			</div>
		</div>
</form>
<footer>
		</footer>
	</div>
	
	
	</body>
</html>
<?php
$idofuser=$this->session->userdata('id');

if(!isset($idofuser))
{
redirect('login/logout');
}?>

