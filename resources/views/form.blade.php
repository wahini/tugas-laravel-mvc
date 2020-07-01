<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <form action="/sapa" method="POST">
      @csrf
      <input type="text" name="nama">
      <input type="submit" value="masuk">
    </form>
  </body>
</html>
