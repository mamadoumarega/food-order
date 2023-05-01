<?php require "../includes/header.php"; ?>
<?php require "../config/config.env.php"; ?>
<?php

    if(isset($_SESSION['username'])) {
        echo "<script>window.location.href = '".APPURL."';</script>";
    }

    if (isset($_POST['submit'])) {

        if (
            empty($_POST['fullname'])
            OR empty($_POST['email'])
            OR empty($_POST['username'])
            OR empty( $_POST['password'])
        ) {
            echo "<script>alert('un ou plusieurs champs sont vides')</script>";
        } else {

            if ($_POST['password'] == $_POST['confirmpassword']) {
                $fullName = $_POST['fullname'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $image = "user.png";

                $insert = $conn->prepare(
                        "INSERT INTO users(fullname, email, username, mypassword, image) VALUES(:fullname, :email, :username, :mypassword, :image)"
                );

                $insert->execute([
                    ":fullname" => $fullName,
                    ":email" => $email,
                    ":username" => $username,
                    ":mypassword" => password_hash($password, PASSWORD_DEFAULT),
                    ":image" => $image,
                ]);

//                header("Location: login.php");
                echo "<script>window.location.href = 'login.php';</script>";

            } else {
                echo "<script>alert('Les mots de passes ne sont pas identiques')</script>";
            }
        }
    }



?>
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('<?php echo APPURL; ?>/assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Register Page
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>

                    <div class="card card-login mb-5">
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= APPURL ?>/auth/register.php">
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <label>
                                            <input class="form-control" name="fullname" type="text" required="" placeholder="Full Name">
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <label>
                                            <input class="form-control" name="email" type="email" required="" placeholder="Email">
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <label>
                                            <input class="form-control" name="username" type="text" required="" placeholder="Username">
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label>
                                            <input class="form-control" name="password" type="password" required="" placeholder="Password">
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label>
                                            <input class="form-control" name="confirmpassword" type="password" required="" placeholder="Confirm Password">
                                        </label>
                                    </div>
                                </div>
<!--                                <div class="form-group row">-->
<!--                                    <div class="col-md-12">-->
<!--                                        <div class="checkbox">-->
<!--                                            <input id="checkbox0" type="checkbox" name="terms">-->
<!--                                            <label for="checkbox0" class="mb-0">I Agree with <a href="../terms.html" class="text-light">Terms & Conditions</a> </label>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="form-group row text-center mt-4">
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" class="btn btn-primary btn-block text-uppercase">Register</button>
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
