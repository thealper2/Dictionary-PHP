<html>
    <head>
        <title>eLearn</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <style>
            .nav-links li a::after{
                background-color: cornflowerblue;
            }    
        </style>
    </head>
    <body>
        <div class="header">
            
            <video autoplay loop class="back-video" muted plays-inline>
                <source src="media/glitch.mp4" type="video/mp4">
            </video>

            <nav>
                <img src="media/logo.png" class="logo">
                <ul class="nav-links">
                    <li> <a href="index.html">ARA</a> </li>
                    <li> <a href="hakkinda.html">HAKKINDA</a> </li>
                    <li> <a href="database.php">DATABASE</a> </li>
                    <li> <a href="">ILETISIM</a> </li>
                    <li class="btn" style="background-color: cornflowerblue;">KAYIT OL</li>
                </ul>
            </nav>

            <div class="about" style="overflow: scroll; overflow-y: auto; background: cornflowerblue;">
                <table id="table1">
                    <tr>
                        <th>Kelime</th>
                        <th>Açılımı</th>
                        <th>Anlamı</th>
                    </tr>
                    <?php
                        include 'db.php';
                        $sql = "SELECT * from dictionary";
                        $query = mysqli_query($conn, $sql);
                        while($info=mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?php echo $info['kelime']; ?></td>
                                <td><?php echo $info['acilim']; ?></td>
                                <td><?php echo $info['anlam']; ?></td>
                            </tr>

                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>