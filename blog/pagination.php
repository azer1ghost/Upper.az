


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/stylepag.css" type="text/css">  
</head>
<body>


<?php
	/*
		Place code to connect to your DB here.
	*/
	include('../admin/setting/connect.php');	// include your code to connect to DB.

	$tbl_name="blog";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/

	
	/* Setup vars for query. */
	$targetpage = "searchresult.php"; 	//your file name  (the name of this file)
	$limit = 4; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	



	/* Get data. */
$keyword=$_POST['ap'];
$sql="SELECT blog_picurl,
			 blog_id,
			 blog_name,
			 blog_text
 FROM blog WHERE blog_name LIKE :keyword; DESC LIMIT $start, $limit";
$results=$db->prepare($sql);
$results->bindValue(':keyword','%'.$keyword.'%');
$results->execute();
$total_pages= $results ->rowCount();
//getting results from database

	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		
		$pagination .= "<div class=\"pagination\" align=\"right\" class=\"col-md-12\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">« Previous</a>";
		else
			$pagination.= "<span class=\"disabled\">« Previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "<a>...</a>";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">Next »</a>";
		else
			$pagination.= "<span class=\"disabled\">Next »</span>";
		$pagination.= "</div>\n";		
	}
?>



<?php
while($blogcek=$results->fetch(PDO::FETCH_ASSOC)){  ?>
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <a href="single.php?post=<?php echo $blogcek['blog_id']?>&<?php echo seo($blogcek['blog_name'])?>"><img src="../<?php echo $blogcek['blog_picurl']?>"></a>
              <div class="caption">
                <h4><?php echo substr($blogcek['blog_name'],0,150) ?></h4>
               <?php echo substr($blogcek['blog_text'],0,150) ?>
                
            </div>
          </div>
        </div>
<?php } $pagination .= "<div class=\"col-md-12\"><hr><br></div>"; ?>



<?=$pagination?>
	

</body>
</html>
