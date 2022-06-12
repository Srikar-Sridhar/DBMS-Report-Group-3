<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BUY-Real Estate </title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2o0BY362qM31on1gyExkL0" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/fa/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <header class="header">
            <br>
            <h1 id="logo">Find Your Home</h1>
            <nav class="toplinks">
            <a href="index.html" class="nlinks">Home</a>
            <a href="buy.html" class="nlinks">Buy</a>
            <a href="sell.html" class="nlinks">Sell</a>
            <a href="feedback.html" class="nlinks">Feedback</a>
            </nav>

    </header>
<hr>
    <h2><center>Property Details</center></h2><br>
        <div class="center-div">
            <div class="table-responsive">
                    <?php
                    $servername="localhost";
                    $username="root";
                    $password="";
                    $dbname="feedback_wtdbms";
                                    $con= mysqli_connect($servername,$username,$password,$dbname);
                                    if (!$con)
                                    {
                                        die('could not connect:'.mysqli_error());
                                    }
                                    mysqli_select_db($con,"feedback_wtdbms");
                                    $selectquery="SELECT * FROM `assests` WHERE `property_id`='$_GET[id]'";
                                    $query=mysqli_query($con,$selectquery);
                                    $res=mysqli_fetch_array($query)
                                    ?>
                                <section align="center">
                            
                                <section>
                                    <img src="<?php echo $res['image_name']; ?>" height ="80%" width="80%"><br>
                                </section>
                                <section align="center">
                                <table>
                                <tr><td><b>Property ID</b></td>
                                    <td><?php echo $res['property_id']; ?></td>
                                </tr>
                                <tr><td>Description</td>
                                    <td><?php echo $res['description']; ?></td>>
                                </tr>
                                <tr>
                                <td>City</td>
                                    <td><?php echo $res['city']; ?></td>
                                </tr>
                                <tr>
                                <td>Address</td>
                                    <td><?php echo $res['address']; ?></td>
                                </tr>
                                <tr>
                                <td>Area(sq. ft)</td>
                                    <td><?php echo $res['area']; ?></td>
                                </tr>
                                <tr>
                                    <td>BHK</td>
                                    <td><?php echo $res['bhk']; ?></td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td><?php echo $res['price']; ?><br></td>
                                </tr>
                                <tr>
                                <td>Seller Name</td>
                                    <td><?php echo $res['name']; ?></td>
                                </tr>
                                <tr>
                                <td>Contact Number</td>
                                    <td><?php echo $res['contact_number']; ?></td>
                                </tr>
                                <tr>
                                <td>Mail ID</td>
                                    <td><?php echo $res['mail']; ?></td>
                                </tr>
                                </table>
                                <?php
                                    ?>
                                </div>
                                </section>
                                </section>
            </div>
        </div>
</body>
</html>
