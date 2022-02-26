<?php 
    // اتصال به پایگاه داده
    $connection = mysqli_connect("localhost", "root", "", "contacts");
    
    mysqli_query($connection," SET CHARACTER SET utf8");

    //تست اتصال
    if(mysqli_connect_errno() == 0)
    {
       // print(" همه چی آرومه ما چقد");
    }

    else
    {
        print("خطایی رخ داده");
        print(mysqli_connect_error());
    }

?>