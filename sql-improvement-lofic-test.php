<?php require 'requires/mysqli.php'; ?>
<?php require 'requires/logics/job-search.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SQL Improvement Logic Test</title>

        <?php require 'requires/font.php'; ?>
        <?php require 'requires/css-bootstrap.php'; ?>
        
    </head>
    <body>
        <?php include 'includes/landing/navbar.php'; ?>

        <div class="container">
            <div class="main">
                <div class="row mt-3 mb-5">
                    <h1>SQL Improvement Logic Test</h1>
                </div>

                <div class="row">
                    <!--
                    <h4>Total Results: <?php //echo $result->num_rows; ?></h4>
                    -->

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                ORIGINAL SQL
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"><code><?php echo "<pre>".$original_sql."</pre>"; ?></code></div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    IMPROVED SQL #1
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <code><?php echo "<pre>".$improved_sql_1."</pre>"; ?></code>

                                    <hr>
                                    <h5>1) Reduce the join statements in the query.</h5>
                                    <h6><code>LEFT JOIN</code> from the following tables are removed:</h6>
                                    <ul>
                                        <li><code>jobspersonalities</code></li>
                                        <li><code>personalities</code></li>
                                        <li><code>jobspracticalskills</code></li>
                                        <li><code>practicalskills</code></li>
                                        <li><code>jobsbasicabilities</code></li>
                                        <li><code>basicabilities</code></li>
                                        <li><code>jobstools</code></li>
                                        <li><code>Tools</code></li>
                                        <li><code>jobscareerpaths</code></li>
                                        <li><code>CareerPaths</code></li>
                                        <li><code>jobsrecqualifications</code></li>
                                        <li><code>RecQualifications</code></li>
                                        <li><code>jobsreqqualifications</code></li>
                                        <li><code>ReqQualifications</code></li>
                                    </ul>

                                    <p>Since we only wanted data from <code>Jobs, JobCategories, JobTypes</code> tables, seems approprite to only join and filter from the 3 tables.</p>
                                    <p>The search query also <code>キャビンアテンダント (Cabin attendant)</code>, means the removed <code>LEFT JOIN</code> are not necessarily required.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <?php 
                    
                        // while ($obj = $result->fetch_object()) {
                        //     echo "<pre>".$json_encode = json_encode($obj, JSON_PRETTY_PRINT)."</pre>";
                        // }
                        // $result->free_result();
                    
                    ?>
                </div>

                

            </div>

        </div>

        <?php require 'requires/js-bootstrap.php'; ?>
        <?php require 'requires/js-scripts.php'; ?>
    </body>
</html>
<?php require 'requires/mysqli-close.php'; ?>
