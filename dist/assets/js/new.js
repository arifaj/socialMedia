console.log("NovoJs");

// FUNCTIONS

function previewImage (input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#previewImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#mainImage").change(function(){
    previewImage(this);
});

// DRAG IMAGE
$("#previewImage").draggable({
  drag: function(){
    var imageX = $(this).css("left");
    var imageY = $(this).css("top");
    $("#imageX").val(imageX);
    $("#imageY").val(imageY);
  }
});

// Select Template
$('input[name="template"]').change(function(){
  var template = $(this).next("label").find("img").attr("src");
  $("#mainTemplate").attr("src", template);
});

// CHAMADA
$("#mainTextContent").keyup(function(){
  var mainContent = $(this).text();
  $("#mainText").val(mainContent);
});

// Drag text
$("#mainTextContent").draggable({
  drag: function(){
    var textX = $(this).css("left");
    var textY = $(this).css("top");
  }
});
