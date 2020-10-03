    <?php require('config/db.php');
       $sql = "SELECT title, primary_desc, secondary_desc FROM header_data WHERE section='call_to_action'";
         $result = mysqli_query($conn, $sql);

         //fetch the resulting rows as an array
		 while($row = mysqli_fetch_assoc($result)) {
            $call_to_action[] = $row;
        }
         //free result from memory
         mysqli_free_result($result);
         //close connection
         mysqli_close($conn);
     ?>

    <?php foreach($call_to_action as $display) : ?>
	<div class="fourth layer jumbotron text-center">
		<h1 class="pb-3"><?php echo $display["title"]; ?></h1>
		<p class="mb-4"><?php echo $display["primary_desc"]; ?></p>
		<a class="cta btn btn-danger btn-lg" onclick="RedirectURL();return false;" role="button">Protect your IP <i class="fas fa-lock"></i></a>
	</div>
	<?php endforeach; ?>