<!DOCTYPE html>
<html>
    <head>
        <?php include "head.php" ?>
        <title>GO: GO List!</title>
    </head>
    <body>
        <div class="container">
            <div class="row mt-2">
				<?php include "logo.php" ?>
            </div>
            <div class="row">
                <div class="col-6 text-center gform">
                    <a class="gformBtn" href="http://ocad.ckprototype.com/public/wardragonGO/new.php" class="btn mt-2">+</a>
                </div>
                <div class="col-6 text-center close">
                    <a class="closeBtn" href="http://ocad.ckprototype.com/public/wardragonGO/" class="btn mt-2">X</a>
                </div>
            </div>
            <div class="row mb-5">
                <div id="gList" class="col-12">
                    <?php
                        // Get the session variables
                        // Start the session
                        session_start();

                        $i = $_SESSION['i'];
                        $o = $_SESSION['o'];
                        $n = $_SESSION['n'];

                        // Unset the session variables
                        unset($_SESSION['i']);
                        unset($_SESSION['o']);
                        unset($_SESSION['n']);

                        // Arrays to hold file contents
                        $goRead = array();
                        $goWatch = array(); 
                        $goSearch = array();
                        $goSee = array();
                        $goEat = array();
                        $goTry = array();  

                        $myList = fopen("data.txt", "r") or die("Unable to open file!");
                        // Output one line until end-of-file
                        while(!feof($myList)) {
                            $line = fgets($myList);
                            $pieces = explode(":", $line);

                            if($pieces[0] == "R"){
                                array_push($goRead, $pieces[1]);
                            } else if($pieces[0] == "W"){
                                array_push($goWatch, $pieces[1]);
                            } else if($pieces[0] == "G"){
                                array_push($goSearch, $pieces[1]);
                            } else if($pieces[0] == "S"){
                                array_push($goSee, $pieces[1]);
                            } else if($pieces[0] == "E"){
                                array_push($goEat, $pieces[1]);
                            } else if($pieces[0] == "T"){
                                array_push($goTry, $pieces[1]);
                            } 
                        }
                        fclose($myList);

                        // Add new thing to list.
                        if($i == "R"){
                            array_push($goRead, $n);
                        } else if($i == "W"){
                            array_push($goWatch, $n);
                        } else if($i == "G"){
                            array_push($goSearch, $n);
                        } else if($i == "S"){
                            array_push($goSee, $n);
                        } else if($i == "E"){
                            array_push($goEat, $n);
                        } else if($i == "T"){
                            array_push($goTry, $n);
                        }
                    ?>
                    <h5 class="text-center josefin"><i class="fab fa-readme fa-2x"></i></h5>
                    <ul id="gRList" class="goLists text-center">
                    <?php
                        for($i = count($goRead); $i >= 0; $i--){
                    ?>
                            <li><?php echo $goRead[$i]; ?></li>
                    <?php        
                        }
                    ?>
                    </ul>
                    <h5 class="text-center josefin mt-3"><i class="fas fa-tv fa-2x"></i></h5>
                    <ul id="gWList" class="goLists text-center">
                    <?php
                        for($i = count($goWatch); $i >= 0; $i--){
                    ?>
                            <li><?php echo $goWatch[$i]; ?></li>
                    <?php        
                        }
                    ?>
                    </ul>
                    <h5 class="text-center josefin mt-3"><i class="fas fa-info fa-2x"></i></h5>
                    <ul id="gGList" class="goLists text-center">
                    <?php
                        for($i = count($goSearch); $i >= 0; $i--){
                    ?>
                            <li><?php echo $goSearch[$i]; ?></li>
                    <?php        
                        }
                    ?>
                    </ul>
                    <h5 class="text-center josefin mt-3"><i class="far fa-eye fa-2x"></i></h5>
                    <ul id="gSList" class="goLists text-center">
                    <?php
                        for($i = count($goSee); $i >= 0; $i--){
                    ?>
                            <li><?php echo $goSee[$i]; ?></li>
                    <?php        
                        }
                    ?>
                    </ul>
                    <h5 class="text-center josefin mt-3"><i class="fas fa-utensils fa-2x"></i></h5>
                    <ul id="gEList" class="goLists text-center">
                    <?php
                        for($i = count($goEat); $i >= 0; $i--){
                    ?>
                            <li><?php echo $goEat[$i]; ?></li>
                    <?php        
                        }
                    ?>
                    </ul>
                    <h5 class="text-center josefin mt-3"><i class="fas fa-seedling fa-2x"></i></h5>
                    <ul id="gTList" class="goLists text-center">
                    <?php
                        for($i = count($goTry); $i >= 0; $i--){
                    ?>
                            <li><?php echo $goTry[$i]; ?></li>
                    <?php        
                        }
                    ?>
                    </ul>
                </div>
            </div>      
        </div>
        <div>
			<?php include "footer.php" ?>
		</div>
    </body>
</html>