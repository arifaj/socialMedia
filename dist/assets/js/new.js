console.log("NovoJs");

// Data de criação
var fullDate = new Date()
console.log(fullDate);
//Thu Otc 15 2014 17:25:38 GMT+1000 {}
//convert month to 2 digits
var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) :(fullDate.getMonth()+1);
var currentDate = fullDate.getDate() + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
$("#data").val(currentDate);

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

$("#imageAjustment").hide();

$("#mainImage").change(function(){
    previewImage(this);
    $("#imageAjustment").slideDown();
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
  $("#mainTemplateImg").attr("src", template);
  $("#mainTemplate").val($(this).val());
});

// CHAMADA
$("#mainText").keyup(function(){
  var mainContent = $(this).val();
  $("#mainTextContent").text(mainContent);
});

// Drag text
$("#mainTextContent").draggable({
  start: function(){
    // $(this).addClass('hold');
  },
  drag: function(){
    var textX = $(this).css("left");
    var textY = $(this).css("top");
    $("#textX").val(textX);
    $("#textY").val(textY);
  },
  stop: function(){
    // $(this).removeClass("hold");
  }
});

// Rotate Image

$(document).on('input', '#imageRotate', function() {
    var deg = $(this).val();
    $("#imageRotateImage").css("transform" , "rotate(" + deg + "deg)");

    $("#imageRotateVal").val(deg);
});


// Scale Image

$(document).on('input', '#imageScale', function() {
    var scale = $(this).val();
    $("#previewImage").css("transform" , "scale(" + scale + ")");

    $("#imageScaleVal").val(scale);
});

// SubmitForm

// $(function () {
//
//         $('form').on('submit', function (e) {
//
//           e.preventDefault();
//
//           $.ajax({
//             type: 'post',
//             url: 'save.php',
//             data: $('form').serialize(),
//             success: function () {
//               alert('form was submitted');
//             }
//           });
//
//         });
//
//       });
