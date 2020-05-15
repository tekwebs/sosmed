   <?php 
session_start()
?>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../timeline">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../darboard">dasboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../search">Search</a>
                        </li>
                    </ul>
                </div>
                <div style="margin-right: 10px;">
                    <?php
                        $sapa = date('H');
                        if($sapa <= '12'){
                            echo "pagi ";
                        }else if($sapa <= '17'){
                             echo "Sore ";
                        }else{
                            echo "Malem ";
                        }
                        echo $_SESSION['username']; 
                    ?>
                </div>
            </div>
              <button> <a href="../../logout.php" >LOGOUT</a></button>
        </nav>