<!doctype html>
<html lang="en">

  <head>
    <title>Message from craftyant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-sm-12 m-auto">
          <h3> Dear Concern,</h3>
          <p>I am {{ $data['name'] }} and here is my query</p>
          <br />
          <br />
          <p> {{ $data['message'] }}</p>
          <br />
          <br />
          <p> Best Regards</p>
          <p> {{ $data['name'] }}</p>
          <p> {{ $data['phone'] }}</p>
          <p> {{ $data['email'] }}</p>
        </div>
      </div>
    </div>
  </body>

</html>