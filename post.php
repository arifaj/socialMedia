<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Social Media Generator</title>
  </head>
  <link rel="stylesheet" href="assets/semantic/semantic.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <body>

    <?php include('connect.php'); ?>
    <?php $id = $_GET['ID']; ?>

    <?php   $query = "SELECT * from pecas WHERE mainTitle=$id";
                 if ($result = mysqli_query($conn, $query)){
                         //data
                          while ($row = mysqli_fetch_array($result))  { ?>


                                  <?php echo ($row['mainTitle']);?>

  <?php
}
}

mysqli_free_result($result);
mysqli_close($conn);

?>


    <script src="assets/js/vendors/vendors.js"></script>
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="assets/js/new.js"></script>
    <script src="assets/semantic/semantic.js"></script>
  </body>
</html>
