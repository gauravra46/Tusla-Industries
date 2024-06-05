

<?php
    $serverName ="localhost";
    $userName ="root";
    $password ="";
    $dbName="Tulsa";

    //create connection

    $con =mysqli_connect($serverName , $userName , $password , $dbName);

    if(mysqli_connect_errno()){
        echo "Failed";
        exit();
    }
    // echo "connection sucess";


$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Description = $_POST['Description'];

$sql="INSERT INTO `Tulsa`.`Contact` (`Name`, `Email`, `Phone`, `Description`, `DT`) VALUES ('$Name', '$Email', '$Phone', '$Description', current_timestamp());";
// echo $sql;
if($con->query($sql) == true){
    // echo"Successfully inserted";

}
else{
    echo "Error: $sql <br> $con->error";
}
$con->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TulsaIndustry</title>
    <link rel="stylesheet" href="style_contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section id="header">
        <a href="index.html"><div id="logo"><img src="img/logo.jpg"><h2>Tulsa<span>Industry</span></h2></div></a>
         <div >
             <ul id="navbar">
               <li><a  href="index.html">Home</a></li>
               <li><a  href="product.html">Products</a></li>
               <li><a href="service.html">Services</a></li>
               <li><a href="about.html">About us</a></li>
               <li><a class="active" href="contact.php">Contact us</a></li>
               <a href="#" id="close"><i class="fa fa-close"> </i> </a>
             </ul>  
         </div>
         <div id="mobile">
             <i id="bar" class="fa fa-bars" ></i>
         </div>
     </section>

    <section id="hero">
        <div id="form">
                <h2>Get in <span>Touch!</span></h2>

            <div id="content">
                <div id="contact_form">
                    <form id="form_layout" action="contact.php" method="post">
                        <div id="input_1">
                            <input type="text" name="Name" id="Name" placeholder="Enter your Name">
                        </div>
                        <div id="input_2">
                            <input type="text" name="Email" id="Email" placeholder="Enter your email">
                        </div>
                        <div id="input_3">
                            <input type="Phone" name="Phone" id="Phone" placeholder="Enter your phone number here">
                        </div>
                        <div id="textarea_1">
                        <textarea name="Description" id="Description" cols="30" rows="10" placeholder="Enter any other text here."></textarea>

                    </div>
                    <div id="button">
                        <button class="btn">Submit</buttons>
                    </div>        

                    </form>
                </div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15083.250684139186!2d73.0811091!3d19.0719722!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xda7ccfe5b262ff3d!2sTulsa%20Industry!5e0!3m2!1sen!2sin!4v1665337843010!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         
        </div>

        <section id="info">
            <div id="address">
                <h1>Address</h1>
                <h2>Tulsa <span>Industry</span></h2>
                <p>Sector 35D , Sector 36, Kharghar, Navi Mumbai . Maharashtra , 410210</p>
            </div>

            <div id="contact">
                <h1>Contact us</h1>
                <h2>Email<span> Address</span></h2>
                <p>tulsaindustry@gmail.com</p>
            </div>

        </section>

    </section>

    
    <section id="footer">
        <div id="right">
            <a><h2>Tulsa<span>Industry</span></h2></a>
            <h6>We are a Data Science Company committed to providing Software Services and 
                Solutions at the intersection of Business Intelligence, Artificial Intelligence and Machine Learning.
            </h6>

            <div>
            <p >Copyright © 2022 CompanyName Inc</p>
               <p> All Rights Reserved</p>
            </div>
        </div>

        <div id="left">
            <h2>Refrences</h2>
            <ul id="refrence">
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="product.html">Product</a></li>
                <li><a href="service.html">Service</a></li>
                <li><a href="case_studies.html">Case Studies</a></li>
            </ul>
        </div>
    </section>
    <script src="script.js "></script>
</body>
</html>    