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

                                    <form method="post" name="contact_form" action="contactprocess.php">
                                        
                                        First Name <input type = "text" name = "first_name">

                                        Last Name <input type = "text" name = "last_name">

                                        Email Address <input type = "text" name = "email_add">

                                        <br />

                                        Message
                                        <br /> <textarea rows="5" name="message" cols="30"></textarea>

                                        <input type="submit" name="submit" value="Submit">

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
        



    <!--Footer-->
	<?php include('footer.php'); ?>

    </body>

</html>