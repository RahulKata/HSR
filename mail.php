 <?php
    
    $con = mysqli_connect('localhost','root','','userregistration');  
    
    $email = $_POST['email'];

    $reg = "insert into mail(mail) values ('$email')";
    $query_run = mysqli_query($con,$reg);

    if($query_run){
            echo'<script type="text/javascript"> alert("Thank You for your response")</script>';
            header('location:index.php');
        }
        else{
            echo'<script type="text/javascript"> alert("FAILED!!")</script>';
        }
?>