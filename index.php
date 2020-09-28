
<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
    </head>
        
    <body>

               

        <div class="body">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn"  onclick="login()">Log in</button>
                    <button type="button" class="toggle-btn" onclick="register()">Sign up</button>
                </div>
                <div class="social-icons">
                    <img src="fb.png">
                    <img src="tw.png">
                    <img src="ins.png">
                    <img src="gp.png">
                </div>
                <form id="login" class="input-group" method="post">
                    <input name="user" type="text" class="input-field" placeholder="User Id" required>
                    <input name="ps" type="text" class="input-field" placeholder="Enter Password" required>
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <button name="login" type="submit" class="submit-btn">Log in</button>
                </form>

                <form id="register" class="input-group" method="post">
                    <input name="userid" type="text" class="input-field" placeholder="User Id" required>
                    <input name="Password" type="Password" class="input-field" placeholder="Password" required>
                    <input name="email" type="email" class="input-field" placeholder="Email Id" required>
                    <input name="aadhar" type="aadhar" class="input-field" placeholder="Aadhar Id" required>
                    <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
                    <button name="reg" type="submit" class="submit-btn">Register</button>
                </form>
            </div>
        </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }

            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }

        </script>
             

    </body>

            <?php 
                $con=mysqli_connect("localhost","root","","crms");

                if (isset($_POST['reg'])) {
                   $userid=$_POST['userid'];
                   $Password=$_POST['Password'];
                   $email=$_POST['email'];
                   $aadhar=$_POST['aadhar'];
    $query="INSERT INTO `register`(user_id,password,email_id,aadhar_id) VALUES ('$userid','$Password','$email','$aadhar')";
                   $res=mysqli_query($con,$query);
                                         }


                if(isset($_POST['login']))
                {
                    $user=$_POST['user'];
                    $ps=$_POST['ps'];
                    $query2="select * from register where user_id='$user' and password='$ps'";
                    $res2=mysqli_query($con,$query2);
                    $row=mysqli_fetch_assoc($res2);
                    if($row)
                    {
                        $_SESSION['status']="1";
                        header("location:homepage.php"); 
                   }
                   else
                   {
                    echo "<script>alert('user not found')</script>";
                   }
                }
            ?>






    <style type="text/css">

    @font-face {
        font-family: sans-serif;
        src: url(sans-serif);
    }
    html{
        height: 100%;
        width: 100%;
        font-family: sans-serif;
    }

    body{
        /*background-image: linear-gradient(rgba(56, 15, 206, 0.4),rgba(20, 23, 211, 0.4)), url(bgimg.jpg);*/
        background-image: linear-gradient(#060252,#16abf0);

        background-size: cover;
        background-position: center;
        /*position: relative;*/
		background-repeat: no-repeat;
    }

    .form-box{
        width: 380px;
        height: 500px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background: #fff;
        padding: 5px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 10px 10px  10px 000;
    }

    .button-box{
        width: 220px;
        margin: 35px auto;
        position: relative;
        box-shadow: 0 0 20px 9px #ff61241f;
        border-radius: 30px;
    }
        
    .toggle-btn{
        padding: 10px 30px;
        cursor: pointer;
        background: transparent;
        border: 0;
        outline: none;
        position: relative;
    }

    #btn{
        top: 0;
        left: 0;
        position: absolute;
        width: 110px;
        height: 100%;
        background: linear-gradient(to right, #ff105f, #ffad06);
        border-radius: 30px;
        transition: .5s;
    }

    .social-icons{
        margin: 30px;
        text-align: center;
    }

    .social-icons img{
        width: 30px;
        margin: 0 12px;
        box-shadow: 0 0 20px 0 #7f7f7f3d;
        cursor: pointer;
        border-radius: 50%;
    }

    .input-group{
        top: 180px;
        position: absolute;
        width: 280px;
        transition: .5s
    }

    .input-field{
        width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        outline: none;
        background: transparent;
    }

    .submit-btn{
        width: 85%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin: auto;
        background: linear-gradient(to right, #ff105f, #ffad06);
        border: 0;
        outline: none;
        border-radius: 30px;
    }

    .check-box{
        margin: 30px 10px 30px 0;
    }

    .span{
        color: #777;
        font-size: 8px;
        bottom: 68px;
        position: absolute;
    }

    #login{
        left: 50px;
    }

    #register{
        left: 450px;
    }
    </style>
</html>