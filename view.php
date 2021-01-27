<?php include 'connection.php';?>

<html>
<head>
<title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <style> 
 body{
	 
	 background-image: url("images/contact-bg.png");
	 background-repeat:no-repeat;
	 background-size:cover;
	 background-position:center;
	 text-align: center;
	 color: white;
	 padding-top: 100px;
	 
	 }
</style>
</head>

	<body>
		<div>
		<h1>Welcome to doctor portal</h1>
		
		</div>
		
	
		<div class="container">
			<table class="table table-bordered  table-condensed">
				<thead>
					<tr>
						<th>sr_no</th>
						<th>Fullname</th>
						<th>Age</th>
						<th>Height</th>
						<th>Weight</th>
						<th>Mobile</th>
						<th>Date of App</th>
						<th>Actions</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
					
					/* How many records you want to show in a single page. */
                    $limit = 10;
                    /* How may adjacent page links should be shown on each side of the current page link. */
                    $adjacents = 3;
                    /* Get total number of records */
                    $sql = "SELECT COUNT(*) as 'total_rows' FROM data ";
                    $res = mysqli_fetch_object(mysqli_query($conn, $sql));
                    $total_rows = $res->total_rows;
                    /* Get the total number of pages. */
                    $total_pages = ceil($total_rows / $limit);


                    if (isset($_GET['page']) && $_GET['page'] != "") {
                        $page = $_GET['page'];
                        $offset = $limit * ($page - 1);
                    } else {
                        $page = 1;
                        $offset = 0;
                    }
					
					//$sql_image = mysqli_query($conn, "SELECT `id`,`photo_link` FROM `forum` order by photo_date DESC, photo_time desc limit $offset, $limit");
					$sql = "SELECT sr_no, name, age, height, weight, mobile, date, status FROM data order by sr_no desc limit $offset, $limit";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					  // output data of each row
					  while($row = $result->fetch_assoc()) {
                                              $status = $row["status"];
					?>	
				
					<tr>
						<td><?php echo $row["sr_no"];?></td>
						<td><?php echo $row["name"];?></td>
						<td><?php echo $row["age"];?></td>
						<td><?php echo $row["height"];?></td>
						<td><?php echo $row["weight"];?></td>
						<td><?php echo $row["mobile"];?></td>
						<td><?php echo $row["date"];?></td>
						<td>
                                                    <?php
                                                        if($status == 1){
                                                            ?>
                                                                <center>
                                                                    <a href="patdet.php?id=<?php echo $row["sr_no"]?>"><button type="submit" style="font-size:18px">Open</button></a> 
                                                                </center>
                                                               
                                                            <?php
                                                        }else{
                                                            ?>
                                                               <form method="POST" action="confirmappoint.php">
                                                        <center>
                                                            <input type="hidden" value="<?php echo $row["mobile"];?>" name="conmobile">
                                                            <button type="submit"  style="font-size:18px"><i class="fa fa-check"></i>Confirm</button>
                                                            
                                                        </center>
                                                        
                                                    </form>
                                                            <?php
                                                        }
                                                    ?>
                                                    
							
						</td>
					</tr>
					
					<?php	
						
					  }
					} else {
					  echo "0 results";
					}
					$conn->close();
					?>
					
				</tbody>
			</table>
			
			<br><br><br>
            <center>
                <?php
                if ($total_pages <= (1 + ($adjacents * 2))) {
                    $start = 1;
                    $end = $total_pages;
                } else {
                    if (($page - $adjacents) > 1) {       //Checking if the current page minus adjacent is greateer than one.
                        if (($page + $adjacents) < $total_pages) {  //Checking if current page plus adjacents is less than total pages.
                            $start = ($page - $adjacents);         //If true, then we will substract and add adjacent from and to the current page number  
                            $end = ($page + $adjacents);         //to get the range of the page numbers which will be display in the pagination.
                        } else {           //If current page plus adjacents is greater than total pages.
                            $start = ($total_pages - (1 + ($adjacents * 2)));  //then the page range will start from total pages minus 1+($adjacents*2)
                            $end = $total_pages;         //and the end will be the last page number that is total pages number.
                        }
                    } else {            //If the current page minus adjacent is less than one.
                        $start = 1;                                //then start will be start from page number 1
                        $end = (1 + ($adjacents * 2));             //and end will be the (1+($adjacents * 2)).
                    }
                }
                ?>
                <?php if ($total_pages > 1) { ?>
                    <ul class="pagination justify-content-center">

                        <!-- Link of the first page -->
                        <li class='page-item <?php ($page <= 1 ? print 'disabled' : '') ?>'>
                            <a class='page-link' href='?page=1'>&lt;&lt;</a>
                        </li>

                        <!-- Link of the previous page -->
                        <li class='page-item <?php ($page <= 1 ? print 'disabled' : '') ?>'>
                            <a class='page-link' href='?page=<?php ($page > 1 ? print($page - 1) : print 1) ?>'>&lt;</a>
                        </li>

                        <!-- Links of the pages with page number -->
                        <?php
                        for ($i = $start; $i <= $end; $i++) {
                            ?>
                            <li class='page-item <?php ($i == $page ? print 'active' : '') ?>'>
                                <a class='page-link' href='?page=<?php echo $i; ?>'><?php echo $i; ?></a>
                            </li>
                            <?php
                        }
                        ?>

                        <!-- Link of the next page -->
                        <li class='page-item <?php ($page >= $total_pages ? print 'disabled' : '') ?>'>
                            <a class='page-link' href='?page=<?php ($page < $total_pages ? print($page + 1) : print $total_pages) ?>'>&gt;</a>
                        </li>
                        <!-- Link of the last page -->
                        <li class='page-item <?php ($page >= $total_pages ? print 'disabled' : '') ?>'>
                            <a class='page-link' href='?page=<?php echo $total_pages; ?>'>&gt;&gt;</a>
                        </li>
                    </ul>
                <?php } ?>
            </center>
			
		</div>
	</body>
</html>

