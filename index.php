<?php include("includes/header.php"); ?>
    <form class="form" action="includes/login_process.php" method="post">
        <div class="form-group">
            <label for="uname">Username</label>
            <input type="text" name="uname" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Passwort</label>
            <input type="text" name="password" class="form-control">
        </div>
        <div>
            <input type="submit" name="login" value="Login" class="btn btn-success">
        </div>
    </form>
    </div>
</body>
</html>
<?php include("includes/footer.php"); ?>