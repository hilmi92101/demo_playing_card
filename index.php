<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Programming Test</title>

        <?php require 'requires/font.php'; ?>
        <?php require 'requires/css-bootstrap.php'; ?>
        
    </head>
    <body>
        <?php include 'includes/landing/navbar.php'; ?>

        <div class="container">
            <div class="main">
                <div class="row mt-3">
                    <h1>Programming Test</h1>
                </div>

                <div class="row mt-3 mb-3">
                    <div class="col-md-5">
                        <label for="numOfPlayer" class="form-label">No. of Player:</label>
                        <input type="number" class="form-control number__of__player" id="numOfPlayer">
                        <div class="invalid-feedback number__of__player__error">
                        </div>
                    </div>
                </div>
                
                <div class="row mt-3 mb-3">
                    <div class="col-md-3">
                        <button class="btn btn-primary play__card">Play</button>
                    </div>
                </div>

                <div class="row mt-3 mb-3 is__loading d-none">
                    <div class="col-md-5">
                        <h5>Loading...</h5>
                    </div>
                </div>


                <div class="row mt-3 mb-3">
                    <div class="col-md-12">
                        <div class="total__players">
                        </div>
                    </div>
                </div>

                <div class="row mt-3 mb-3">
                    <div class="col-md-12">
                        <div class="players__wrapper">
                            <div class="player__hand">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <?php require 'requires/js-bootstrap.php'; ?>
        <?php require 'requires/js-scripts.php'; ?>
    </body>
</html>
