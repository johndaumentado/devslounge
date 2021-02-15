<!-- DevsLounge Contact  -->

<!DOCTYPE html>

<html lang = "en">

    <head>

        <title>
            Contact Us | DevsLounge 
        </title>
        
        <meta charset="utf-8">

        <!--Boostrap-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!--Icon-->

        <link rel = "icon" href = "img/logo-icon.png" width = "5" height = "5">  

        <!--Styles-->

        <link href = "style/contact.css" rel = "stylesheet" type = "text/css">

        <style>
        /*Forms*/
        input {

        display: block;
        border: 2px solid #ccc;
        width: 95%;
        padding: 10px;
        margin-right: 10px auto;
        border: 3px solid #b79ced;
        border-radius:20px;
        font-family:'Roboto', sans-serif;
        }

        input:focus {

        background-color: #ffff;
        outline: none;
        }

        /*Forms*/
        textarea {

        display: block;
        border: 2px solid #ccc;
        width: 95%;
        padding: 10px;
        margin-right: 10px auto;
        border: 3px solid #b79ced;
        border-radius:20px;
        font-family:'Roboto', sans-serif;
        }

        textarea:focus {

        background-color: #ffff;
        outline: none;
        }

        /* Button Design */
		input[type=submit] {

        color:#fff;
        background-color: #957fef;
        padding: 10px;
        border-radius: 5px;
        width:95%;
        border: none;
        border-radius:20px;
        float:center;
        font-family:'Roboto', sans-serif;
        font-size:14pt;
        }

        input[type=submit]:hover{
        opacity: .8;
        transition:all .5s;
        }

        </style>




    </head>



	<body>

    <!-- Navbar -->
		<?php include('navbar.php'); ?>

        <br />
        <br />
        <br />
        <br />

        <!-- Contact Contents-->

        <div class="container-fluid">

            <div class = "contact-contents">

                <div class="row">

                    <div class="col-lg-6">

                        <img src="img/contact.png" width="600" height="600" alt="logo">
                    
                    </div>

                    <div class="col-lg-6">

                        <!--Heading-->
                        <div class = "container-fluid">

                            <div class = "contact-heading">

                                <div class = "row"> 
        
                                    Contact Us

                                    </div>
                            </div>

                              
                            <!-- Form -->
                            <div class = "contact-text">

                                We'd love to hear from you!

                                <div class = "contact-forms">

                                    <form method="post" name="contact_form">
                                        
                                        First Name <input type = "text" name = "first_name">  <br />
 
                                        Last Name <input type = "text" name = "last_name">  <br />

                                        Email Address <input type = "text" name = "email_add">  <br />

                                        Message
                                        <br /> <textarea rows="5" name="message" cols="30"></textarea>
                                        <br />

                                        <input type="submit" name="submit" value="Submit"  onclick="showAlert()">

                                    </form>
                                </div>

                            </div>

                        </div>
                        
                    </div>
                    
                </div>
            </div>

        </div>
    

        <br />
        <br />
        <br />
        <br />
        
        



    <!--Footer-->
	<?php include('footer.php'); ?>



        <script>
            function showAlert() {
                var myText = "Thank you for leaving a message! Your response has been received.";
                alert (myText);
            }
        </script>

    </body>

</html>