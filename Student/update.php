<?php include('./navbar.php'); ?>
    <form action="./script.php" method="post">
        <h1 class="fw-bold">Update Student</h1>

        <?php
            $id=$_GET['id'];
            $sql="SELECT * FROM student WHERE ID='$id'";
            $res=mysqli_query($conn,$sql);

            if(mysqli_num_rows($res)>0){
                $row=mysqli_fetch_assoc($res); 
                ?>

                <div class="form-group">
                    <label class="form-label fw-bold">ID</label>
                    <input type="text" name="id" required class="form-control" readonly value="<?php echo $row['ID']; ?>";
                </div>

                <div class="form-group">
                    <label class="form-label fw-bold">Name</label>
                    <input type="text" name="name" required class="form-control"  value="<?php echo $row['name']; ?>";
                </div>

                <div class="form-group">
                    <label class="form-label fw-bold">Regno</label>
                    <input type="text" name="regno" required class="form-control"  value="<?php echo $row['regno']; ?>";
                </div>

                <div class="form-group">
                    <label class="form-label fw-bold">City</label>
                    <input type="text" name="city" required class="form-control" value="<?php echo $row['city']; ?>";
                </div>

                <input type="submit" name="update"class="btn btn-success m-2" value="Update">
                <a class="btn btn-secondary m-2"  href="./home.php">Go Back</a>

                <?php
            }

            ?>
            

<?php include('./footer.php'); ?>