<!DOCTYPE html>
<html>
  <head>
    <title>St.Mary's Basilica Church Donation</title>
    <link rel="icon" type="image/x-icon" href="images/bg-01.PNG">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin:0;
      font-size: 70px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      top:30px;
      }
      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #1c87c9;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 150px;
      background-image: url("images/b.jpg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .checkbox input[type=checkbox] {
      display:inline-block;
      height:15px;
      width:15px;
      margin-right:5px;
      vertical-align:text-top;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #1c87c9;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #0692e8;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
    <form method="post" action="request.php">
      <div class="banner">
        <!-- <img src="images/bg-01.PNG" style="" alt="Paris"  height="100px" width="100px" margin="-5px";> -->
        <h1>St.Mary's Basilica Church Donation</h1>
      </div>
      <br/>
      <fieldset>
        <legend>Donation Form</legend>
        <div class="colums">
          <div class="item">
            <label for="fname">Name:<span>*</span></label>
            <input id="fname" type="text" name="name" required="Enter your name" />
          </div>

          <div class="item">
            <label for="address">Email Address:<span>*</span></label>
            <input id="address" type="email"   name="email" required="Enter your email"/>
          </div>


          <div class="item">
            <label for="phone">Phone Number:<span>*</span></label>
            <input id="phone" type="tel"   name="mobile" required="Enter your phone number"/>
          </div>

           

      <div class="item">
      <label for="amount">Amount:<span>*</span></label>
      <input id="amount" type="number"   name="amount" required="Enter your amount"/>
      </div>
<div class="item">
            <label for="phone">Address:<span>*</span></label>
            <textarea id="phone" type="tel" rows="3"  name="address" required="Enter your phone number"></textarea>
          </div>

      <div class="item">
      <label for="donation">Description:</label>
      <textarea id="donation" name="comments" rows="3"></textarea>
      </div>
      </fieldset>
      <br/>
      <!-- <fieldset> -->
      <!-- <legend>Donation Details</legend> -->
      <div class="colums">
      </div>
<!--       <div class="checkbox">
      <p>May we thank you publicly?</p>
      <label><input type="checkbox"/>No, please keep my information anonymous
      </label>
      </div> -->
      <!-- <div class="item">
      <label for="amount">Donation Amount:<span>*</span></label>
      <input id="amount" type="number"   name="amount" required="Enter your amount"/>
      </div>
      <div class="item">
      <label for="donation">Donation Comments:</label>
      <textarea id="donation" rows="3"></textarea>
      </div> -->
      <!-- </fieldset> -->
      <div class="btn-block">
      <button type="order" name="save">Paynow</button>
      </div>
    </form>
    <!-- </div> -->
  </body>
</html>