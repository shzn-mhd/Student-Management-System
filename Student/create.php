<?php include('./navbar.php'); ?>
    <div class="m-5 p-2">
        <h1 class="display-1">Add New Students</h1>
        <form class="m-4 p-2" method="post" action="./script.php">
            <label class="form-label fw-bold">Name: </label>
            <input type="text" name="name" class="form-control" placeholder="name" required>
            
            <label class="form-label fw-bold">Reg No: </label>
            <input type="text" name="regno"class="form-control"placeholder="regno" required>

            <label class="form-label fw-bold">City : </label>
            <input type="text" name="city"class="form-control"placeholder="city" required>

            <input type="submit" value="Add Student" class="btn btn-success mt-3" name="create">
            
        </form>
            

<?php include('./footer.php'); ?>