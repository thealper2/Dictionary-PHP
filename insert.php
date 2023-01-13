<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Kelime Ekleme</title>
  </head>
  <body>
    <form class="" action="insert.php" method="post">
      <h1>Kelime Ekle</h1>
      <label for="">Kelime</label><br>
      <input type="text" name="word" value="" placeholder="Kelime: " required><br><br>
      <label for="">Anlami</label><br>
      <input type="text" name="meaning" value="" placeholder="Anlami: " required><br><br>
      <input type="submit" name="insert" value="Ekle">
    </form>
    <table>
      <tr>
        <th>Word</th>
        <th>Meaning</th>
      </tr>
    <?php
        include 'db.php';
        if (isset($_POST['insert'])) {
          $word=$_POST['kelime'];
          $meaning=$_POST['anlami'];

          $sql="INSERT INTO dictionary(kelime,anlami) values('$kelime','$anlami')";
          $query=mysqli_query($conn,$sql);

        }
        $sql1="SELECT * from dictionary";
        $query1=mysqli_query($conn,$sql1);
        while ($info=mysqli_fetch_array($query1)) {
          ?>
          <tr>
            <td><?php echo $info['kelime']; ?></td>
            <td><?php echo $info['anlami']; ?></td>
          </tr>


          <?php
        }
     ?>
     </table>

  </body>
</html>