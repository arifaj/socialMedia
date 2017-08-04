<?php

include('connect.php');

  $mainTitle = $_POST['mainTitle'];
  $mainImage = $_POST['mainImage'];
  $maintemplate = $_POST['mainTemplate'];
  $mainText = $_POST['mainText'];
  $imageX = $_POST['imageX'];
  $imageY = $_POST['imageY'];
  $textX = $_POST['textX'];
  $textY = $_POST['textY'];
  $imageScaleVal = $_POST['imageScaleVal'];
  $imageRotateVal = $_POST['imageRotateVal'];
  $data = $_POST['data'];

$sql = "INSERT INTO pecas (mainTitle,
                          mainImage,
                          mainTemplate,
                          mainText,
                          imageX,
                          imageY,
                          textX,
                          textY,
                          imageScaleVal,
                          imageRotateVal,
                          data
                          )
VALUES ('$mainTitle',
        '$mainImage',
        '$maintemplate',
        '$mainText',
        '$imageX',
        '$imageY',
        '$textX',
        '$textY',
        '$imageScaleVal',
        '$imageRotateVal',
        '$data'
      )";

if ($conn->query($sql) === TRUE) {
    echo "E-mail criado com sucesso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// header('Location: nextpage.php');

?>
