<head><meta charset="euc-kr">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    
  <title>Contact</title>
  <link rel="stylesheet" href="style.css">
  <style>
* {
  font-style: normal;
  font-family: inherit;
  font-variant: normal;
  font-size: 20px;
  color: white;
}
h1,h2,h3,h4,h5,h6{
  font-family: sans-serif;
  font-style: normal;
  font-variant: normal;
  font-size: 20px;
  color: darkgrey;
}

ul h3{
  font-family: sans-serif;
  font-style: normal;
  font-variant: normal;
  font-size: 20px;
}
.bd-md-1{
  background-image: linear-gradient(180deg, rgba(44, 88, 122, 0.8), rgba(122, 88, 44, 0.8));
}
.grids{
  margin: 0 auto;
  /*margin-left: 99px;*/
  display: grid;
  /*grid: repeat(3, auto) / auto-flow;*/
}
.extra-width{
  width:650px;
}

.full-width{
  width:auto;
  margin: 0 auto;
}

.extra-margin{
  margin-left: 99px;
}
.col-1{
  grid-column-start: 1 ;
}

.col-2{
  grid-column-start: 2;
}

.col-3{
  grid-column-start: 3;
}

.row-1{
  grid-row: 1;
}

.row-2{
  grid-row: 2;
}

.row-3{
  grid-row: 3;
}

.col-end{
  grid-column-end: 2;
}
.row-end{
  grid-row-end: 2;
}
/*
.col-1, .col-2, .col-3, .col-4{

  width: 240px;
  margin-left: 10px;
}

.col-1, .col-2, .col-3, .col-4{
  margin: 0 auto;
  display: block;
}

.col-2, .col-3, .col-4{
  display: inline-block;
}
*/

.clear-left{
  clear:left;
}

.clear-right{
  clear:right;
}

.clear-both{
  clear: both;
}

.float-left{
  float: left;
}

.float-right{
  float: right;
}

.float-none{
  float: none;
}
.xl{
  font-size: 20px;
  font-weight: 400;
  font-style: expanded;
  font-family: verdana, sans-serif;
  text-align: center;
  /*background-color: rgb(222, 111, 32);*/
  /*background-image: linear-gradient(90deg, rgb(111, 222, 255), rgb(0, 222, 111));*/
}
.clr-3{
  color: rgb(99, 99, 99);
  /*border: 1px solid rgb(99, 99, 99);*/
}
ul li.sm-lt-2::before{
  content: counter(list1);
  color: rgb(255, 100, 55);
  background-image: linear-gradient(45deg, rgb(0, 100, 100), rgb(100, 100, 0));
  display: inline-block;
  border-radius: 50px/50px;
  font-size: 20px;
  text-align: center;
  line-height: 70px;
  width: 75px;
  height: 75px;
}
.it-tt-1{
  width: 150px;
  height: 20px;
  border-radius: 1px / 5px;
}
.md{
  font-size: 12px;
  font-weight:500;
  font-stretch: expanded;
  text-align: center;
  width: auto;
}
.clr-2{
  color: rgb(45, 199, 33);
  /*border: 1px solid rgb(45, 199, 33);*/
}
.btn-de-md{
  border: none;
  padding: 5px;
  width: -webkit-fill-available;
  background-image: linear-gradient(80deg, rgba(155, 55, 255, 0.9), rgba(100, 155, 255, 0.9));
  border-radius: 10px / 20px;
  color: rgba(190, 190, 155, 0.9);
  margin: 5px auto;
  height: auto;
}
ul li.sm-lt-2::before{
  content: counter(list1);
  color: rgb(255, 100, 55);
  background-image: linear-gradient(45deg, rgb(0, 100, 100), rgb(100, 100, 0));
  display: inline-block;
  border-radius: 50px/50px;
  font-size: 20px;
  text-align: center;
  line-height: 70px;
  width: 75px;
  height: 75px;
  margin-top:5px;
}
.lt-1, .lt-2, .lt-3{
  list-style: none;
  margin: 0 auto;
}
ul li.lt-1, ul li.lt-2, ul li.lt-3{
  counter-increment: list1;
  content: counter(list1);
}
.clr-lb-si{
  color: rgb(255, 132, 32);
}
dialog{width:-webkit-fill-available;margin-left:10px;margin-right:10px;height:-webkit-fill-available}
textarea{width:-webkit-fill-available;color:darkgrey}
#map{width:-webkit-fill-available;height:100%;}
input{color:black;}
</style>
</head>
<body class="bd-md-1">
    <div id="load">Menu</div>
  <div class="grids">
    <h5 class="xl">Fill in the form. We will get back to you within 24 hours.</h5>
    <form method="get" action="contact_get.php">
    <label class="xl clr-3">Surname<input class="it-tt-1 md clr-2" type="text" name="surname" value="<?php echo $_POST['surname']; ?>"/>
    <label class="xl clr-3">Lastname<input class="it-tt-1 md clr-2" type="text" name="lastname" value="<?php echo $_POST['lastname']; ?>"/>
    <label class="xl clr-3">Telephone<input class="it-tt-1 md clr-2" type="text" name="telephone" value="<?php echo $_POST['telephone']; ?>"/>
    <label class="xl clr-3">Additional<input class="it-tt-1 md clr-2" type="" name="additional" value="<?php echo $_POST['additional']; ?>"/>
    <br/>
    <!--<label class="xl clr-3" style="text-align:left;">Description</label>-->
    <br/>
    <input height="70px" type="text" name="meddelande" value="<?php echo $_POST['meddelande'];?>" cols="50" rows="10" placeholder="Skriv ditt meddelande.."></input>
    <br/>
    <input class="btn-de-md" type="submit" name="" value="Submit" width="100"/>
    </form>
  </div>
<div>
<h1 style="opacity:.61">Other Alternatives</h1>
<hr>
<ul>
  <li class="sm-lt-2 lt-2 clr-lb-si" style="opacity:.4"><h3 class="xxl clr-1">Visit Us</h3><hr></li>
  <p>Address: <span>Väderleden</span></p>
  <p>Postal code: <span>97633</span></p>
  <p>Street No.: <span>3C</span></p>
  <li class="sm-lt-2 lt-2 clr-lb-si" style="opacity:.4"><h3 class="xxl clr-1">Mail Us</h3><hr></li>
  <p>P.O BOX</p>
  <p>Street No.</p>
  <p>Street Name</p>
  <li class="sm-lt-2 lt-2 clr-lb-si" style="opacity:.4"><h3 class="xxl clr-1">Call Us</h3><hr></li>
  <p>Telephone(office):<span>+46769349954</span></p>
  <p>Telephone(mobile):</p>
  <p>Telephone(other):</p>
  <li class="sm-lt-2 lt-2 clr-lb-si" style="opacity:.4">
  <h3 class="xxl clr-1">E-mail Us</h3><hr></li>
  <p>zaeta@gatsfield.com</p>
</ul>
</div>
<h1>Find Us</h1>
<hr>
  <ins><!-- Lägg in karta från maps.google.com --><!--<a href="https://maps.google.combak">Google Maps Api</a>--></ins>
  <div id="map"></div>
<!--<h1>Spread</h1>-->
<hr>
  <table>
    <tr>
      <?php /*foreach ($row as $key => $value):*/ ?>
        <td><?php /*echo $key . $value;*/?></td>
    </tr>
      <?php /*endforeach;*/ ?>
  </table>
 </div>
<script>
    $("#load").click(function(){
        $(this).load("menu.html");
    });
</script>
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByMTOjHYNMkCSGMQ1ku9M0Y7KcfwfGDqw&callback=initMap">
</script>
<script>
// Initialize and add the map
function initMap() {
  // The location of nigel
  var nigel = {lat: 59.3735724, lng: 17.9884778};
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: nigel});
  var marker = new google.maps.Marker({position: nigel, map: map});
}
</script>
</body>