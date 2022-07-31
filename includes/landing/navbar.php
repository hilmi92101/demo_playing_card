<?php $current_file_name = basename($_SERVER['PHP_SELF']); ?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid"> <a class="navbar-brand" href="#">Demo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"> 
                    <a class="nav-link <?php echo ($current_file_name == 'index.php') ? 'active' : '' ?>" aria-current="page" href="index.php">Programming Test</a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link <?php echo ($current_file_name == 'sql-improvement-lofic-test.php') ? 'active' : '' ?>" href="sql-improvement-lofic-test.php">SQL Improvement Logic Test</a> 
                </li>
                <li class="nav-item"> 
                    <a class="nav-link <?php echo ($current_file_name == 'time-spent.php') ? 'active' : '' ?>" href="time-spent.php">Time Spent</a> 
                </li>
                <!--
                <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                -->
            </ul>
        </div>
    </div>
</nav>

