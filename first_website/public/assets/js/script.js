$(document).ready(function () {
    $("#carouselExampleIndicators").carousel({ interval: 3000 });

    $(".item1").click(function () {
        $("#carouselExampleIndicators").carousel(0);
    });
    $(".item2").click(function () {
        $("#carouselExampleIndicators").carousel(1);
    });
    $(".item3").click(function () {
        $("#carouselExampleIndicators").carousel(2);
    });
    $(".item4").click(function () {
        $("#carouselExampleIndicators").carousel(3);
    });

    $(".left").click(function () {
        $("#carouselExampleIndicators").carousel("prev");
    });
    $(".right").click(function () {
        $("#carouselExampleIndicators").carousel("next");
    });
});

function openTab(cityName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
    }
  
    // Show the specific tab content
    document.getElementById(cityName).style.display = "block";
  
    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
  };
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click(); 




  // FOr Article Gallery
  // Open the Modal
  function openModal() {
    document.getElementById('myModal').style.display = "block";
  };
  
  // Close the Modal
  function closeModal() {
    document.getElementById('myModal').style.display = "none";
  };
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  };
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  };
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  };


  // $(document).ready(function() {
  //   $("#registerbtn").click(function() {
  //     alert(123);
  //   var name = $("#userName").val();
  //   var email = $("#email").val();
  //   var password = $("#psw").val();
  //   var cpassword = $("#psw-repeat").val();
  //   if (name == '' || email == '' || password == '' || cpassword == '') {
  //   alert("Please fill all fields...!!!!!!");
  //   } else if ((password.length) < 8) {
  //   alert("Password should atleast 8 character in length...!!!!!!");
  //   } else if (!(password).match(cpassword)) {
  //   alert("Your passwords don't match. Try again?");
  //   } else {
  //   $.post("register.php", {
  //   name1: name,
  //   email1: email,
  //   password1: password
  //   }, function(data) {
  //   if (data == 'You have Successfully Registered.....') {
  //   $("form")[0].reset();
  //   }
  //   alert(data);
  //   });
  //   }
  //   });
  //   });

