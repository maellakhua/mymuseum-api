<!doctype html>
<html>
<head>
	<meta charset="utf-8">
		<title>Show venues</title>
           
	<style>
	div.venue
	{   
		float: left;
		padding: 10px;
		background: #efefef;
		height: 90px;
		margin: 10px;
		width: 340px;
    }
    div.venue a
    {
    	color:#000;
    	text-decoration: none;

    }
    div.venue .icon
    {
    	background: #000;
		width: 88px;
		height: 88px;
		float: left;
		margin: 0px 10px 0px 0px;
    }
	</style>
</head>
<body>
<h1>Basic Request Example</h1>
<p>
	Search for venues near...
	<form action="" method="GET">
		<input type="text" name="location" />
		<input type="submit" value="Search!" />
	</form>
<p>Searching for venues near <?php echo $location; ?></p>
<hr />
	
		<?php 
				
		foreach($venues->response->venues as $venue): ?>
			<div class="venue">
				<?php 
					

					if(isset($venue->categories['0']))
					{
						echo '<image class="icon" src="'.$venue->categories['0']->icon->prefix.'88.png"/>';
					}
					else
						echo '<image class="icon" src="https://foursquare.com/img/categories/building/default_88.png"/>';
					
					if(isset($venue->url) && !empty($venue->url))
					{
					echo '<a href="'.$venue->url.'" target="_blank"/><b>';
					echo $venue->name;
					echo "</b></a><br/>";
					}else{
					echo $venue->name."<br>";	
					}
		
                    if(isset($venue->categories['0']))
                    {
						if(property_exists($venue->categories['0'],"name"))
						{
							echo ' <i> '.$venue->categories['0']->name.'</i><br/>';
						}
					}
					
					if(property_exists($venue,"rating"))
					{
							echo ' Βαθμολογία '.$venue->rating ." <br/> ";
					}
					/*if(property_exists($venue->hereNow,"count"))
					{
							echo ''.$venue->hereNow->count ." people currently here <br/> ";
					}*/

                    //echo '<b><i>History</i></b> :'.$venue->stats->usersCount." visitors , ".$venue->stats->checkinsCount." visits <br/> ";
					echo '<b><i>Distance :'.$venue->location->distance."μ. Βαθμολογία: ".$venue->stats->checkinsCount."</i></b>";
				?>
			
			</div>
			
		<?php endforeach; ?>
	
</body>
</html>
