<!DOCTYPE html>
<html>
    <head>
        <?php include "head.php" ?>
    </head>
    <body>
        <div class="container">
            <div class="row mt-2">
                <?php include "logo.php" ?>
            </div>
            <div class="row">
                <!-- right col -->
                <div class="col-2"></div>
                <!-- center col -->
                <div class="col-8">
                    <br>
                    <div class="close">
                        <a class="closeBtn" href="http://ocad.ckprototype.com/public/wardragonGO/" class="btn mt-2">X</a>
                    </div>
                    <!-- A dropdown menu with action options -->
                    <form action="handler.php" method="get" class="mt-2">
                        <div class="form-group">
                            <label class="golabel" for="actionLst">GO</label>
                            <select class="form-control" id="actionLst" name="aopt" onchange="updateGoLabel(this)">
                                <option>Read</option>
                                <option>Watch</option>
                                <option>Search</option>
                                <option>See</option>
                                <option>Eat</option>
                                <option>Try</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <textarea class="form-control" id="actionNote" name="anote" rows="3"></textarea>
                            <label class="golabel mt-3" for="actionNote" id="actionNoteLabel">save something to go do...</label>
                        </div>
                        <button id="done" type="submit" class="btn mt-2">save</button>
                    </form>
                </div>
                <!-- left col -->
                <div class="col-2"></div>
            </div>
        </div>
        <div class="footer"><?php include "footer.php" ?></div>
    </body>
</html>