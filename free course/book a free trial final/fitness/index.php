<!--Homepage Book a free trial part start -->
<html>

<head>

  <title>Book a free Trial</title>
  <style>
    body {
      background-color: black;
    }

    label {
      color: white;
      text-align: right;
    }

    .home-form {
      display: inline-flex;

    }

    .home-form h2 {
      font-family: Arial, Helvetica, sans-serif;
      color: red;
      font-size: 50px;
      margin-left: 850px;
    }

    .font-colour {
      color: aliceblue;
    }

    .form-des {
      font-family: Arial, Helvetica, sans-serif;
      color: white;
      font-size: 20px;
      margin-left: 800px;
    }

    input[type=text],
    select {
      width: 100%;
      padding: 12px 14px;
      margin: 3.5px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=start] {
      font-size: larger;
      font-family: poppins;
      width: 20%;
      background-color: red;
      color: white;
      padding: 14px 14px;
      margin: 4px 0;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    * {
      margin: 0px;
      padding: 0px;
      font-family: poppins;
      box-sizing: border-box;
    }

    a {
      text-decoration: none;
    }

    .container {
      display: flex0;
      padding: 0%;
      margin: 0;
    }
  </style>

<body>


  <div class="home-form">
    <p style="color: red;">
    <h2><b>Book </b><span class="font-colour">a free trial</span></h2>
    </p>
  </div>
  <div class="form-des">
    <p style="color: white;"></p>Tell us about your goals,and we'll find you a perfect trainer</p>
  </div>

  <div style="display: flex; flex-direction: row;">
    <img src="images\new2.jpeg" style="width:450px;height:550px;" alt="Free trail"></p>

    <div style="width: 30%; margin: 60px; margin-top: 10%;">
      <form action="connection.php" method="post">

        <label for="name">Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name">

        <label for="mnumber">Mobile number</label>
        <input type="text" id="mnumber" name="mobilenumber" placeholder="mobile number">

        <label for="email">E-mail</label>
        <input type="text" id="email" name="Email" placeholder="E-mail">

        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="srilanka">Sri Lanka</option>
          <option value="india">India</option>
          <option value="maldives">Maldives</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="bangladesh">Bangladesh</option>
        </select>

        <label for="comment">Comment</label>
        <input type="text" id="comment" name="cmt" placeholder="Any comments,your fitness goals">

        <input type="submit" value="submit">
      </form>

    </div>
  </div>

</body>

</html>

<!--Homepage Book a free trial part end-->