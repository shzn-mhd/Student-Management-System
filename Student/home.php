<?php include('./navbar.php'); ?>

    <h1 class="text-center fw-bold">Student Details Dashboard</h1>

    <table class="table table-stripped m-4">
        <a class="btn btn-success m-2" href="create.php"> Add New Students </a>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Reg No</th>
                <th>City</th>
                <th>Action</th>
            </tr> 
        </thead>

            <tbody>
                <?php
                $sql="SELECT * FROM student";
                $res=mysqli_query($conn,$sql);

                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                       $id=$row['ID'];
                        echo "<tr>";
                        echo "<td>".$row['ID']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['regno']."</td>";
                        echo "<td>".$row['city']."</td>";
                        echo "<td>";
                        echo "<a class='btn btn-primary btn-sm' href='./update.php?id=$id'>Update</a> ";
                        echo "<a class='btn btn-danger btn-sm' href='./delete.php?id=$id'>Delete</a> ";

                        
                    }
                } 
                ?>

            </tbody>
                


<?php include('./footer.php'); ?>