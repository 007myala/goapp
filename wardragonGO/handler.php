<!DOCTYPE html>
<html>
    <body>
        <!-- Get the form data -->
        <?php 
            $aopt = $_GET["aopt"];
            $anote = $_GET["anote"];
        ?>
        <p>Go : <?php echo $aopt ?> &nbsp; <?php echo $anote ?></p>
        <!-- Pass the form data to list page -->
        <?php
            $indicator = "";
            if ($aopt == "Read") {
                $indicator = "R";
            } else if($aopt == "Watch"){
                $indicator = "W";
            } else if($aopt == "Search"){
                $indicator = "G";
            } else if($aopt == "See"){
                $indicator = "S";
            } else if($aopt == "Eat"){
                $indicator = "E";
            } else if($aopt == "Try"){
                $indicator = "T";
            }
            // Set the session arguments to pass to the listing page
            // Start the session
            session_start();
            $_SESSION['i'] = $indicator;
            $_SESSION['o'] = $aopt;
            $_SESSION['n'] = $anote;
            $_SESSION['t'] = time();

            // Redirect the user
            header("Location:list.php?");
            exit();
        ?>
    </body>
</html>