	<?php require('config/db.php');
	   $sql = "SELECT title, primary_desc, secondary_desc FROM header_data WHERE section='area1'";
         $result = mysqli_query($conn, $sql);
         if (!$result) {
             printf("Error: %s\n", mysqli_error($conn));
             exit();
         }
         //fetch the resulting rows as an array
          while($row = mysqli_fetch_assoc($result)) {
            $first_section[] = $row;
        }
         //free result from memory
         mysqli_free_result($result);
         //close connection
         mysqli_close($conn);
	 ?>

    <div class="first layer jumbotron">
        <div class="jumbo container row mx-auto">
         <?php foreach($first_section as $display) : ?>
            <div class="col-lg-6 mb-4 my-lg-auto">
                <h1 class="pb-3"><?php echo $display["title"]; ?></h1>
                <p class="mb-4"> <?php echo $display["primary_desc"]; ?></p>
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Protect your IP</button>
            </div>
            <div class="col-lg-6 p-5"><img alt="" class="img-fluid" data-aos="fade-right" src="img/img-2.svg"></div>
        <?php endforeach; ?>
        </div>
    </div>