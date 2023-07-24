<?php include('./navbar.php'); ?>
    <form class="m-4 p-2" method="post" action="./script.php">
        <h1 class="text-center p-2"> Login </h1>
        <label class="form-label fw-bold"> Username: </label>
        <input type="text" class="form-control" name="username" placeholder="enter username" required> 

        <label class="form-label fw-bold"> Password: </label>
        <input type="password" class="form-control" name="password" placeholder="password" required>
        
        <input type="submit" name="login" value="Login" class="btn btn-success mt-3">

    </form>


<?php include('./footer.php');