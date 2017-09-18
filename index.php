<?php
  $quote = ["You can do anything, but not everything.—David Allen",
            "You miss 100 percent of the shots you never take.—Wayne Gretzky",
            "You must be the change you wish to see in the world.—Gandhi"];

  shuffle($quote);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>P1</title>
    <style>
    body
    {
        background-color: #f0f8ff;
        font-size: 24px;
        font-family: "Comic Sans Ms", cursive;
    }
    .header, .info, .quote, .links
    {
      margin: 10px auto 0px auto;
      text-align: center;
    }
    .header
    {
      width: 360px;
      height: 300px;
    }
    img
    {
      width: 360px;
      height: 230px;
    }
    .header h1
    {
      color:#00008b;
      padding-top: 0px;
      margin-top: 0px;
    }
    .info
    {
      margin-top: 20px;
      color: #9999ff;
      width: 750px;
      text-transform: capitalize;
      height: 200px;
      overflow: scroll;

    }
    .quote
    {
      color: #f4a460;
      text-transform: capitalize;
      font-size: 30px;
      text-shadow: 5px 4px 4px  #f7bc88;
      width:750px;
    }
    .links
    {

      width: 400px;
      text-align: center;
    }
    .links h3
    {
      color:#00008b;
      text-transform: capitalize;
    }
    .links ul
    {
      list-style-type: none;
      text-align: center;



    }
    .links a
    {
      text-decoration: none;
      color: #e6e6e6;
    }
    .links a:hover
    {
      color: #696969;
    }
    .links li
    {

      background-color: #696969;
      border: 2px solid #696969;
      margin-top: 5px;
      margin-left: 100px;
      border-radius: 8px;
      padding: 3px 3px;
      width: 30%;
    }
    .links li:hover
    {
      background-color: #e6e6e6;
    }



    </style>
  </head>
  <body>
    <div class="header">
      <img src="image/cat.jpg" alt="cat">
      <h1>That's Me!!!</h1>

    </div>
    <div class="info">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus, mauris eget molestie feugiat, metus lorem cursus turpis, sit amet euismod elit purus quis dui. Curabitur et venenatis sem. Nulla quis ornare augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum interdum maximus lorem quis pharetra. Maecenas enim leo, maximus vitae gravida quis, facilisis sollicitudin tortor. Etiam imperdiet, magna vel dignissim suscipit, erat nulla malesuada enim, sollicitudin dignissim enim urna sed sapien. Mauris vulputate purus tellus, eget porta diam vehicula eleifend. Quisque luctus, augue ut placerat tempor, tellus nulla imperdiet elit, quis venenatis ligula lorem a purus. Proin ut porta metus, vitae malesuada erat. Suspendisse potenti. Nullam et velit dictum, tristique libero ut, mattis sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin et lectus erat. Fusce tortor eros, hendrerit in condimentum id, tincidunt a orci. Etiam sit amet suscipit libero.</p>
    </div>
    <div class="quote">
      <q><?= $quote[0] ?></q>

    </div>
    <div class="links">
      <h3>Projects i have worked on</h3>
      <ul>
        <li><a href="">Project1</a></li>
        <li><a href="#">Project2</a></li>
        <li><a href="#">Project3</a></li>
      </ul>

    </div>

  </body>
  <script type="text/javascript">
    var quotes = ["You can do anything, but not everything.—David Allen",
              "You miss 100 percent of the shots you never take.—Wayne Gretzky",
              "You must be the change you wish to see in the world.—Gandhi"];

    var quote = document.getElementsByTagName('q');
    console.log(quote[0].textContent);

    var counter = 0;

    //setting up a time interval
    window.setInterval(function (){
      quote[0].textContent = quotes[counter];
      counter++;

      if (counter >= quotes.length)
      {
        counter = 0;
      }
    }, 8000);



  </script>
</html>
