<html>
    <head>
        <title>eLearn</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="header">
            
            <video autoplay loop class="back-video" muted plays-inline>
                <source src="media/video.mp4" type="video/mp4">
            </video>

            <nav>
                <img src="media/logo.png" class="logo">
                <ul class="nav-links">
                    <li> <a href="index.html">ARA</a> </li>
                    <li> <a href="hakkinda.html">HAKKINDA</a> </li>
                    <li> <a href="database.php">DATABASE</a> </li>
                    <li> <a href="">ILETISIM</a> </li>
                    <li class="btn">KAYIT OL</li>
                </ul>
            </nav>

            <div class="content">
                <h2>Bilişim Sözlüğü</h1>
                <form class="" action="dictionary.php" method="post">
                    <input type="text" name="word" value="" placeholder="&#x270e; Kisaltma Ara">
                    <button type="submit" name="search" value="Search">ARA</button>
                </form>
            </div>

            <div class="about-section">
                    <?php
                        include 'db.php';
                        if(isset($_POST['search'])) {
                            $word = $_POST['kelime'];

                            $sql1 = "SELECT * from dictionary where Word='$kelime'";
                            $query1 = mysqli_query($conn, $sql1);
                            while($info=mysqli_fetch_array($query1)) {
                                ?>
                                    <img id="win" src="media/pngkey.png">
                                    <div class="headurl"><?php echo 'https://bilisimsozlugu.com/search=?'.$info['kelime']; ?></div>
                                    <div class="tags1"><?php echo 'Kısaltma: '; ?></div>
                                    <div class="kisaltma"><?php echo $info['kelime']; ?></div>
                                    <div class="tags2"><?php echo 'Açılım: '; ?></div>
                                    <div class="anlam"><?php echo $info['acilim'];?></div>
                                    <div class="tags3"><?php echo 'Anlamı: '; ?></div>
                                    <div class="acik"><?php echo $info['anlam']; ?></div>
                                <?php
                            }
                        }
                    ?>
            </div>
        </div>
    </body>
</html>