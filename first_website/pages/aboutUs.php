<div class="aboutUs__container">
    <h2>About us</h2>
    <hr>

    <div id="London" class="tabcontent">
  <h1>London</h1>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h1>Paris</h1>
  <p>Paris is the capital of France.</p>
</div>

<div id="Tokyo" class="tabcontent">
  <h1>Tokyo</h1>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Oslo" class="tabcontent">
  <h1>Oslo</h1>
  <p>Oslo is the capital of Norway.</p>
</div>

<button class="tablink" onclick="openCity('London', this, 'red')" id="defaultOpen">London</button>
<button class="tablink" onclick="openCity('Paris', this, 'green')">Paris</button>
<button class="tablink" onclick="openCity('Tokyo', this, 'blue')">Tokyo</button>
<button class="tablink" onclick="openCity('Oslo', this, 'orange')">Oslo</button> 

    <h2>Contacts</h2>
    <hr>

    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=br%C4%ABv%C4%ABbas%20piemineklis&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>


    <div class="aboutUs__contacts">
        <li><h4>Address</h4></li>
        <li>Brīvības iela, Rīga</li>
        <li style="height: 10vh;"></li>
        <li><h4>Tel.nr.</h4></li>
        <li>+371 29999999</li>
        <li style="height: 10vh;"></li>
        <li><h4>Email</h4></li>
        <li><a href="">cats@awesomecats.com</a></li>
    </div>
</div>