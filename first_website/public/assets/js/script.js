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

function openCity(cityName, elmnt, color) {
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
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click(); 