<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php if(isset($page_title)) {echo "$page_title";} ?> - Logo Name
    </title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
</head>
<body>
    
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Registration Form</h5>
                    </div>
                    <div class="card-body">
                        
                        <form action="includes/signup.inc.php" method="POST">
                            <div class="form-group">
                                <label for=""> First Name</label>
                                <input type="text" name="first" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="last" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="uid" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="pwd" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn-primary" >Signup Now</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</body>
</html>