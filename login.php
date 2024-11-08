<?php 

//Guard
require_once '_guards.php';
Guard::guestOnly();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eden Royal Garden Fresh Stock Control And Sales System</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/util.css">
</head>
<body>


    <div class="login card">

        <div class="card-header">
            <div class="card-title">User Login</div>
        </div>

        <div class="card-content">
            <form method="POST" action="controllers/login_controller.php">

                <?php displayFlashMessage('login') ?>

                <div class="form-control">
                    <label>Email</label>
                    <input 
                        type="text" 
                        name="email" 
                        placeholder="Enter your email here" 
                        required="true" 
                    />
                </div>

                <div class="form-control mt-16">
                    <label>Password</label>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Enter your password here" 
                        required="true" 
                    />
                </div>

                <div class="mt-16 flex justify-end">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>


</body>
</html>
