<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <!-- FONT-FAMILY -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JQUERY -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <title>My Bio Data - HOME</title>
</head>
<style>
    body{
        font-family:'Poppins', sans-serif;
        color:white;
        
    }
    .parallax img{
        width: 100%;
        height: 35vw;
       
    }
    .parallax{
        position:fixed;
        
    }
    .parallax p{
        position:fixed;
        /* margin-left:20%;
        padding-top:10%; */
        color:white;
        font-size:5vw;
    }
    .main{
        position:absolute;
    }
    .container-fluid{
        background-color:black;
        margin-top: 35%;

    }
    .rounded-circle{
        width: 40%;
        height: 32vw;
        margin-top:-10%;
        box-shadow:0px 3px 5px 0px;
    }
    .intro{
        /* background-color: white; */
        margin-right:20%;
        margin-left:20%;
        margin-top:-10%;
        padding-top:14%; 
    }
    .text-center h2{
        padding-bottom:7%;
    }
    .category{
        background:transparent;
        font-size:150%;
        padding:2%;
    }
    .cat1{
        box-shadow:-20px 2px 0px 0px #ee3ed6;
    }
    .cat2{
        box-shadow:-20px 2px 0px 0px pink;
    }
    .cat3{
        box-shadow:-20px 2px 0px 0px #20b7f7;
    }
    ul{
        list-style-type:none;
        margin:5%;
    }
    .first_ul li{
        font-weight:bold;
    }
    .info{
        text-align:justify;
        padding: 5%;
    }
    h4{
        padding-left:10%;
    }
    .fa {
        padding: 20px;
        font-size: 15px;
        text-align: center;
        text-decoration: none;
        margin: 7px 5px;
        border-radius: 50%;
        margin-top:5px;
    }

    .fa:hover {
        opacity: 0.7;
        text-decoration-line:none;
        color:white;
    }

    .fa-facebook {
        background: #3B5998;
        color: white;
    }

    .fa-twitter {
        background: #55ACEE;
        color: white;
    }

    .fa-google {
        background: #dd4b39;
        color: white;
    }

    .fa-linkedin {
        background: #007bb5;
        color: white;
    }
    footer{
        background:gray;
        margin-top:-6%;
        padding:5%;
    }
</style>
<body>
    <div class="parallax">
        <!-- <p><strong>My Profile</strong></p> -->
        <img src="https://www.ecampusontario.ca/wp-content/uploads/2018/04/photo-1516321497487-e288fb19713f-1600x584-1.jpg">
    </div> 
    <div class="main">    
        <div class="container-fluid text-center">
            <img src="https://wallpapercave.com/wp/wp6286999.png" alt="user-icon" class="rounded-circle"> 
            <div class="text-justify">
                <div class="intro">
                <h1 class="text-center"><strong>JAM</strong></h1>
                <h2 class="text-center">Jonalyn Albesa Mobilla</h2>
                    <div class="data1">
                        <h1 class="category cat1">About Me</h1>
                        <div class="row">
                            <ul class="col-xs first_ul">
                                <li>Date of Birth</li>
                                <li>Age</li>
                                <li>Height</li>
                                <li>Weight</li>
                                <li>Municipality</li>
                                <li>Province</li>
                                <li>Nationality</li>
                                <li>Status</li>
                            </ul>
                            <ul class="col-xs">
                                <li>January 17, 2000</li>
                                <li>20</li>
                                <li>5'3</li>
                                <li>50 kg</li>
                                <li>Capoocan</li>
                                <li>Leyte</li>
                                <li>Filipino</li>
                                <li>Single</li>
                            </ul>
                        </div>
                    </div>
                    <div class="data3 mb-5 pb-5">
                        <h1 class="category cat3">Skills</h1>
                        <h4 class="pt-5">Web Development</h4>
                        <p class="info">Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit. 
                            Etiam semper diam at erat pulvinar, at pulvinar felis blandit. 
                            Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. 
                            Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. 
                            Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, 
                            et sollicitudin felis neque sit amet erat.
                        </p>
                        <h4 class="pt-5">Web Development</h4>
                        <p class="info">Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit. 
                            Etiam semper diam at erat pulvinar, at pulvinar felis blandit. 
                            Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. 
                            Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. 
                            Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, 
                            et sollicitudin felis neque sit amet erat.
                        </p>
                    </div>
                </div>
            </div>
        </div> 
    <footer>
            <p class="float-left">All Rights Reserved | 2020</p>
            <div class="float-right">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
    </footer>
    </div> 
</body>
</html>