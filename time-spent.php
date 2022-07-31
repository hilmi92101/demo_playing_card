<?php require 'requires/mysqli.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tyrellsys: Demo</title>

        <?php require 'requires/font.php'; ?>
        <?php require 'requires/css-bootstrap.php'; ?>
        
    </head>
    <body>
        <?php include 'includes/landing/navbar.php'; ?>

        <div class="container">
            <div class="main">
                <div class="row mt-3 mb-4">
                    <h1>Time Spent:</h1>
                </div>

                <table class="table">
                    <tbody>
                        <tr>
                            <th>Programming Test</th>
                            <td>2 hours 53 mins</td>
                        </tr>
                        <tr>
                            <th>SQL Improvement Logic Test</th>
                            <td>Roughly 2 hours</td>
                        </tr>
                    </tbody>
                </table>
                

            </div>

        </div>

        <?php require 'requires/js-bootstrap.php'; ?>
        <?php require 'requires/js-scripts.php'; ?>
    </body>
</html>
<?php require 'requires/mysqli-close.php'; ?>
