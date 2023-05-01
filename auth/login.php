<?php require "../includes/header.php"; ?>
<?php require "../config/config.env.php"; ?>
<?php

    if(isset($_SESSION['username'])) {
        echo "<script>window.location.href = '".APPURL."';</script>";
    }

    if (isset($_POST['submit'])) {

        if (empty($_POST['email']) OR empty($_POST['password'])) {
            echo "<script>alert('un ou plusieurs champs sont vides')</script>";
        } else {
            $email = htmlspecialchars($_POST['email']);
            $password = $_POST['password'];

            $query = $conn->prepare("SELECT * FROM users WHERE email='$email'");
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);

           //validate email
            if ($query->rowCount() > 0) {

               //validate password
                if (password_verify($password, $result['mypassword'])) {

                    $_SESSION['username'] = $result['username'];
                    $_SESSION['email'] = $result['email'];
                    $_SESSION['user_id'] = $result['id'];
                    $_SESSION['image'] = $result['image'];
                    echo "<script>window.location.href = '".APPURL."';</script>";

                } else {
                    echo "<script>alert('L\'email ou le mot de passe est incorrect')</script>";
                }
            } else {
                echo "<script>alert('L\'email ou le mot de passe est vide')</script>";
            }
        }
    }



?>
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('<?php echo APPURL; ?>/assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Login Page
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>

                    <div class="card card-login mb-5">
                        <div class="card-body">
                            <form autocomplete="off" class="form-horizontal" method="post" action="login.php">
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <label>
                                            <input class="form-control" name="email" type="email" required="" placeholder="email"/>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label>
                                            <input class="form-control" name="password" required="" type="password"  placeholder="Password"/>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                                        <!-- <div class="checkbox">
                                            <input id="checkbox0" type="checkbox" name="remember">
                                            <label for="checkbox0" class="mb-0"> Remember Me? </label>
                                        </div> -->
                                        <!-- <a href="login.php" class="text-light"><i class="fa fa-bell"></i> Forgot password?</a> -->
                                    </div>
                                </div>
                                <div class="form-group row text-center mt-4">
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" class="btn btn-primary btn-block text-uppercase">Log In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require "../includes/footer.php"; ?>
