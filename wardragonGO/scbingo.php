<!DOCTYPE html>
<html>
    <head>
        <?php include "head.php" ?>
        <title>GO: Self-Care Bingo</title>
    </head>
    <body>
        <div class="container mb-5">
            <div class="row mt-2">
				<?php include "logo.php" ?>
			</div>
            <div class="row text-center">
                <div class="col-1"></div>
                <div id="bingoshdr" class="col-10">
                    <span>SELF-CARE</span>
                    <div class="close">
                            <a class="closeBtn" href="http://ocad.ckprototype.com/public/wardragonGO/" class="btn mt-2">X</a>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
            <!-- Bingo Card -->
            <div id="bingohdr" class="row text-center mt-1 mb-2">
                <div class="col-1"></div>
                <div class="col-2">B</div>
                <div class="col-2">I</div>
                <div class="col-2">N</div>
                <div class="col-2">G</div>
                <div class="col-2">O</div>
                <div class="col-1"></div>
            </div>
            <div class="row text-center">
                <div class="col-1"></div>
                <div class="col-2 tile" onclick="colorTile(this)">Call a friend</div>
                <div class="col-2 tile" onclick="colorTile(this)">Ask for help</div>
                <div class="col-2 tile" onclick="colorTile(this)"><i class="fas fa-paint-brush fa-3x"></i></div>
                <div class="col-2 tile" onclick="colorTile(this)"><i class="fas fa-dog fa-3x"></i></div>
                <div class="col-2 tile" onclick="colorTile(this)">Drink water</div>
                <div class="col-1"></div>
            </div>
            <div class="row text-center">
                <div class="col-1"></div>
                <div class="col-2 tile" onclick="colorTile(this)">Watch the clouds</div>
                <div class="col-2 tile" onclick="colorTile(this)"><i class="fas fa-heart fa-3x"></i></div>
                <div class="col-2 tile" onclick="colorTile(this)">Be in nature</div>
                <div class="col-2 tile" onclick="colorTile(this)"><i class="fas fa-music fa-3x"></i></div>
                <div class="col-2 tile" onclick="colorTile(this)">say "NO"</div>
                <div class="col-1"></div>
            </div>
            <div class="row text-center">
                <div class="col-1"></div>
                <div class="col-2 tile" onclick="colorTile(this)"><i class="fas fa-bed fa-3x"></i></div>
                <div class="col-2 tile" onclick="colorTile(this)">Light a candle</div>
                <div class="col-2 tile" onclick="colorTile(this)"><i class="fas fa-star fa-3x"></i></div>
                <div class="col-2 tile" onclick="colorTile(this)">Let it go</div>
                <div class="col-2 tile" onclick="colorTile(this)">Read a book</div>
                <div class="col-1"></div>
            </div>
            <div class="row text-center">
                <div class="col-1"></div>
                <div class="col-2 tile" onclick="colorTile(this)">new hair-do</div>
                <div class="col-2 tile" onclick="colorTile(this)">Spend time alone</div>
                <div class="col-2 tile" onclick="colorTile(this)">Ditch your phone</div>
                <div class="col-2 tile" onclick="colorTile(this)"><i class="far fa-laugh fa-3x"></i></div>
                <div class="col-2 tile" onclick="colorTile(this)">Break a sweat</div>
                <div class="col-1"></div>
            </div>
            <div class="row text-center">
                <div class="col-1"></div>
                <div class="col-2 tile" onclick="colorTile(this)">Try new things</div>
                <div class="col-2 tile" onclick="colorTile(this)"><i class="fas fa-bath fa-3x"></i></div>
                <div class="col-2 tile" onclick="colorTile(this)">Write a poem</div>
                <div class="col-2 tile" onclick="colorTile(this)">Take a trip</div>
                <div class="col-2 tile" onclick="colorTile(this)"><i class="fas fa-pizza-slice fa-3x"></i></div>
                <div class="col-1"></div>
            </div>
        </div>
        <div class="footer"><?php include "footer.php" ?></div>
    </body>
</html>