<!DOCTYPE html>
<html>
  <head>
    <title>SanberBook - Form</title>
  </head>

  <body>
    <!--Membuat Form Baru-->
    <form action="/welcome" method="get">
      @csrf
      <h1>Buat Account Baru!</h1>
      <h3>Sign Up Form</h3>
      <!--First Name-->
          <label for="first_name">First name:</label><br>
          <br>
          <input type="text" name="first_name" value="" placeholder="" id="first_name">
          <br>
          <br>
      <!--Last Name-->
          <label for="last_name">Last name:</label><br>
          <br>
          <input type="text" name="last_name" value="" placeholder="" id="last_name">
          <br>
          <br>
      <!--Gender-->
          <label for="gender">Gender:</label><br>
          <br>
          <input type="radio" name="gender" value="ma" >Male<br>
          <input type="radio" name="gender" value="fe" >Female<br>
          <input type="radio" name="gender" value="ot" >Other<br>
          <br>
      <!--Nationality-->
          <label for="nationality">Nationality:</label><br>
          <br>
          <select>
            <option value="id">Indonesian</option>
            <option value="sg">Singaporean</option>
            <option value="my">Malaysian</option>
            <option value="au">Australian</option>
          </select><br>
          <br>
      <!--Language Spoken-->
          <label for="language">Language Spoken:</label><br><br>
          <input type="checkbox" name="language" value="bi">Bahasa Indonesia<br>
          <input type="checkbox" name="language" value="en">English<br>
          <input type="checkbox" name="language" value="ot">Other<br>
          <br>
      <!--Bio-->
          <label for="bio">Bio:</label><br><br>
          <textarea name="bio" rows="10" cols="30" id="bio"></textarea><br>
      <!--Sign Up-->
        <input type="submit" name="" value="Sign Up">
    </form>

  </body>
</html>
