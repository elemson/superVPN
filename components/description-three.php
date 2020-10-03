    <?php require('config/db.php');
       $sql = "SELECT title, primary_desc, secondary_desc FROM header_data WHERE section='area3'";
         $result = mysqli_query($conn, $sql);
         if (!$result) {
             printf("Error: %s\n", mysqli_error($conn));
             exit();
         }
         //fetch the resulting rows as an array
         $first_section = mysqli_fetch_all($result, MYSQLI_ASSOC);
         //free result from memory
         mysqli_free_result($result);
         //close connection
         mysqli_close($conn);
     ?>


    <div class="third layer jumbotron">
        <div class="container row mx-auto">
            <?php foreach($first_section as $display) : ?>
            <div class="col-lg-6 mb-4 my-lg-auto">
                <h1 class="pb-3"><?php echo $display["title"]; ?></h1>
                <p class="mb-4"><?php echo $display["primary_desc"]; ?></p>
            </div>
            <div class="col-lg-6 p-5"><img alt="" class="img-fluid" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1500" src="img/img-6.svg"></div>
        </div>
        <?php endforeach; ?>
    </div>