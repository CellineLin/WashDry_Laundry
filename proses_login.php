<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role=$_POST['role'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "config.php";
            $qry_login = mysqli_query($conn,"select * from user where username = '".$username."' and password = '".$password."' and role = '".$role."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login = mysqli_fetch_array($qry_login);
                session_start();
                if($dt_login['role']=="admin"){
                    $_SESSION['id_user']             =$dt_login['id_user'];
                    $_SESSION['nama']           =$dt_login['nama'];
                    $_SESSION['username']           =$dt_login['username'];
                    $_SESSION['password']           =$dt_login['password'];
                    $_SESSION['role']                 = "admin";
                    $_SESSION['status_login']         =true;
                    header("location: admin/index.php");

                }else if($dt_login['role']== "kasir"){
                    $_SESSION['id']               =$dt_login['id'];
                    $_SESSION['nama']             =$dt_login['nama'];
                    $_SESSION['username']           =$dt_login['username'];
                    $_SESSION['password']           =$dt_login['password'];
                    $_SESSION['role']                   = "kasir";
                    $_SESSION['status_login']           =true;
                    header("location: kasir/index.php");


                }else if($dt_login['role']== "owner"){
                    $_SESSION['id']               =$dt_login['id'];
                    $_SESSION['nama']             =$dt_login['nama'];
                    $_SESSION['username']           =$dt_login['username'];
                    $_SESSION['password']           =$dt_login['password'];
                    $_SESSION['role']                   = "owner";
                    $_SESSION['status_login']           =true;
                    header("location: owner/index.php");
                }
            } else {
                echo "<script>alert('username dan password salah');location.href='login.php';</script>";
            }
            }
    }
