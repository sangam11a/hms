<?php
    if(session_status()==PHP_SESSION_NONE){
        session_start();
    }
    include_once "../includes/init.php";
?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<div class="container login-container">

            <div class="row">
                <div class="col-md-6 m-auto login-form-1">
                    <h3>Login</h3>
                    <form method="POST">
                        <div class="form-group">
                            <input class="form-control" type="text" name="username" class="form-control" placeholder="Username *" required/>
                        </div>
                        <div class="form-group mt-2">
                            <input class="form-control" type="password" name="password" class="form-control" placeholder="Your Password *" value="" required/>
                        </div>
                        <div class="form-group mt-2">
                            <select class="form-control" name="role" id="" required>
                                <option value="">Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="manager">Manager</option>
                                <option value="reception">Reception</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <input class="btn btn-info" type="submit" name="adminlogin" class="btnSubmit" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php  


     if($_SERVER['REQUEST_METHOD'] == "POST"){

        if(isset($_POST['adminlogin'])) {
            $err = "";
            $username = clean($_POST['username']);
            $password = clean($_POST['password']);
            $role = clean($_POST['role']);

            if(empty($username)){
                $err .= "Username required.<br>";
            }
            if(empty($password)){
                $err .= "Password required.<br>";
            }

            if(empty($role)){
                $err .= "Role required.<br>";
            }

            if(empty($err)){
                $admin = new Admin();
                
                if($admin->get($username) > 0){
                    $verify = $admin->get($username);
                    if(password_verify($password, $verify['password']) && $verify['role'] === $role){
                        
                        $_SESSION['logged'] = $verify['username'];
                        $_SESSION['role'] = $verify['role'];

                       if($_SESSION["role"]!="admin") echo "<script>location.href='../rooms/index.php'</script>";
                       else{
                           echo "<script>location.href='../admin';</script>";
                       }
                        
                    }
                    else{
                        echo "
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      <strong>Error:</strong> Invalid password.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                      ";
                    }
                }
                else{
                    echo "
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      <strong>Error:</strong> No such user.
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                      ";
                }
                
            }else{
                echo "
              <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error:</strong> $err
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>
                ";
            }
            
        }
    }     