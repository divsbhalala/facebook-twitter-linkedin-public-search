<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Starter Template - Materialize</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/flaticon.css">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
            </div>
        </nav>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <div class="row margin-top-5p">
                    <div class="col s12 m4">
                        <div class="icon-block center">


                            <?php
                            if (isset($_SESSION["fb_responce"])) {
                                ?>
                                <div class="col s12 center">
                                    <div class="preloader-wrapper  active fb_img_loader">
                                        <div class="spinner-layer spinner-blue-only">
                                            <div class="circle-clipper left">
                                                <div class="circle"></div>
                                            </div><div class="gap-patch">
                                                <div class="circle"></div>
                                            </div><div class="circle-clipper right">
                                                <div class="circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="" id="fbuserProfile">
                                </div>
                                <div class="col s12 center">

                                    WelCome <?php echo $_SESSION["fb_responce"]['name'] ?><br>
                                    <?php
                                    if($_SESSION["fb_responce"]['name'] !='')
                                    {
                                        ?>
                                    <a href="javascript:void(0);" class="fb_signout">Logout</a>
                                    <?php
                                    }
                                    ?>
                                </div>

                                <?php
                               // echo '<pre>';
                                // print_r($_SESSION["fb_responce"]);
                                 // echo '</pre>';
                            } else {
                                ?>
                                <button class="btn waves-effect waves-light  light-blue darken-4 btn_fb_login">
                                    <div class="glyph-icon flaticon-facebook31 "> Connect with Facebook</div>
                                </button>
                                <?php
                            }
                            ?>



                        </div>
                    </div>

                    <div class="col s12 m4 center">
                        <div class="icon-block">
                            <button class="btn waves-effect waves-light  light-blue  ">
                                <div class="glyph-icon flaticon-twitter21"> Connect with Twitter</div>
                            </button>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block center">
                            <button class="btn waves-effect waves-light  light-blue darken-2 ">
                                <div class="glyph-icon flaticon-linkedin12"> Connect with LinkdIn</div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row  ">
                    <div class="center">
                        <div class="col s12">
                            <div class="input-field  offset-s2   col s6">
                                <i class="material-icons prefix">search</i>
                                <input id="input_text" type="text"  class="input-border whichuser">
                                <label for="input_text" class="input-label-pad ">Search Users</label>

                            </div> 
                            <div class="col s3 center-btn">
                                <button class="btn searchUsers">Search</button>
                            </div>
                        </div>


                    </div>

                </div>
                <br><br>

            </div>
        </div>


        <div class="container">
            <div class="section">

                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <div class="center light-blue-text">
                                <div class="glyph-icon flaticon-facebook31 font-30  glyph"></div>
                            </div>
                            <h5 class="center">Facebook user List</h5>

                            <div class="light center">
                                <div class="preloader-wrapper   fb_user_loader ">
                                    <div class="spinner-layer spinner-blue-only">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div><div class="gap-patch">
                                            <div class="circle"></div>
                                        </div><div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fb_user_list">
                                
                            </div>
                            
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">User Experience Focused</h5>

                            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                            <h5 class="center">Easy to work with</h5>

                            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
                        </div>
                    </div>
                </div>

            </div>
            <br><br>

            <div class="section">

            </div>
        </div>



        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script>
           fbuserid='<?php echo @$_SESSION["fb_responce"]['id'] ?>';

        </script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script src="js/fbscript.js"></script>
        

    </body>
</html>
