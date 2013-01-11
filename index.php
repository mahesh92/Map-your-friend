<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Map Your Friend</title>
        <meta charset="utf-8">
        <title>Map Your Friend</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <META NAME="KEYWORDS" CONTENT="mapyourfriend,myf,how to locate my friend">
        <META NAME="DESCRIPTION" CONTENT="This app lets you locate your friends online and communicate to each other.">
        <META HTTP-EQUIV="CONTENT-LANGUAGE" CONTENT="EN">
        <META NAME="revisit-after" CONTENT="14 days">
        <META NAME="Generator" CONTENT="http://websitesubmit.hypermart.net/">
        <META NAME="robots" CONTENT="all">
        <META NAME="Author" CONTENT="Abhiram">
        <META NAME="Author" CONTENT="Bharath">
        <META NAME="Copyright" CONTENT="copyright">
        <!-- MetaTags http://websitesubmit.hypermart.net/ -->
        <!-- This app lets you locate your friends online and communicate to each other. -->
 
        <link href="src/css/bootstrap.css" rel="stylesheet">
        <link href="src/css/style.css" rel="stylesheet">
        <link href="src/css/bootstrap-responsive.css" rel="stylesheet">
        <link rel="shortcut icon" href="res/ico/new_logo_favicon_2.ico">
        <link rel="shortcut icon" href="res/ico/new_logo_favicon_2.png">

    </head>

    <body>
        <div class="container-narrow">
            <div class="masthead">
                <a href="" ><img src="res/img/Black_and_white_223x75.png" class="img-rounded"></a>
                <ul class="nav nav-pills pull-right">
                    <li class=""><a href="">Home</a></li>
                    <li><a href="">About app</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Get Involved <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Feature request</a></li>
                            <li><a href="#">Donate</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

 
            <div id="dialogBox" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="dialogBoxLabel" aria-hidden="true">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="dialogBoxLabel">Modal header</h3>
                </div>
                <div class="modal-body">
                    <form method="POST">
		        <label for="username1">Username:</label><input type="text" id="username1" name="username1" placeholder="Enter the username" />
		        <label for="email1">Email:</label><input type="email" id="email1" name="email1" placeholder="Enter the Email ID" />
			<label for="username2">Username:</label><input type="text" id="username2" name="username2" placeholder="Enter the username" />
		        <label for="email2">Email:</label><input type="email" id="email2" name="email2" placeholder="Enter the Email ID" />
			<label for="username2">Username:</label><input type="text" id="username2" name="username2" placeholder="Enter the username" />
		        <label for="email3">Email:</label><input type="email" id="email3" name="email3" placeholder="Enter the Email ID" />
			<label for="username4">Username:</label><input type="text" id="username4" name="username4" placeholder="Enter the username" />
		        <label for="email4">Email:</label><input type="email" id="email4" name="email4" placeholder="Enter the Email ID" />
		    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-primary">Save changes</button>
                </div>
            </div>

            <div id="slideShow" class="carousel slide">
            <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item"><img src="res/img/bootstrap-mdo-sfmoma-01.jpg"></div>
                    <div class="item"><img src="res/img/bootstrap-mdo-sfmoma-01.jpg"></div>
                    <div class="item"><img src="res/img/bootstrap-mdo-sfmoma-02.jpg"></div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#slideShow" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#slideShow" data-slide="next">&rsaquo;</a>
            </div>
            <div class="jumbotron">
                <button class="btn btn-large btn-success" data-toggle="modal" data-target="#dialogBox">Create a group</button>
                <button class="btn-large btn">Join a Group</button>
            </div>
            <div class="footer">
                <center> <p>&copy; Company 2012</p> </center>
            </div> 
        </div> <!-- /container -->
        <script src="src/js/jquery.js"></script>
        <script src="src/js/bootstrap-dropdown.js"></script>
        <script src="src/js/bootstrap-carousel.js"></script>
        <script src="src/js/bootstrap-transition.js"></script>
        <script src="src/js/script.js"></script>
        <script src="src/js/bootstrap-modal.js"></script>

    </body>
</html>
