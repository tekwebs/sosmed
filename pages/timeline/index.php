<?php 
session_start();
include '../../koneksi.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/style.css">

        <title>SOSMED PETRA</title>
    </head>

    <body>
        <?php 
            include '../../include/navbar.php'
        ?>
        <!-- timeline -->
        <div class="body-timeline">
            <div class="posting-timeline">
                <?php
                    $query1 = "SELECT * FROM posting";
                    $result1 = mysqli_query($koneksi, $query1);
                    while($row1 = mysqli_fetch_array($result1)  )  
                    {  
                ?>

                <div class="profil-timeline">
                    <div class="foto-friend">
                        <img src="https://image.shutterstock.com/image-vector/people-icon-isolated-flat-design-260nw-401277397.jpg" />
                        <p>Michael W</p>
                    </div>
                </div>
                <div class="status">
                    <p>
                        <?php echo $row1['tweet'] ?>
                    </p>
                </div>
                <div class="love">
                    <img src="data:image/png;base64,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" style="width: 20px;height: 20px;
                        border-radius: 20px;"/>
                    <p style="margin-right: 15px"><?php echo $row1['suka'] ?></p>
                    <img src="data:image/png;base64,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" style="width: 20px;height: 20px;
                        border-radius: 20px;"/>
                    <p style="margin-right: 35px"><?php echo $row1['nosuka'] ?></p>
                    <p><?php echo $row1['waktu'] ?></p>
                    <p><?php echo $row1['tanggal'] ?></p>
                </div>
                <div class="komentar">
                    <input type="text" placeholder="Tulis Komentar">
                </div>
            </div>
            <?php 
                }  
            ?> 
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>

</html>
