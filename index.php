
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A small app for Calculating difference between any two dates ">
    <meta name="author" content=" Radhe Shyam">
    <title>DayCal · Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .container{
        box-shadow: 1px 1px 10px black;
        margin: 0 30% 0 30% ;
        padding: 4% 0;
        border-radius: 1%;
      }
      .title{
        font-family: Quicksand;
        text-shadow: 1px 1px 5px grey;
        color: #de6b54;
      }

@media (max-width: 768px ){
  .container{
    margin: 0 20% 0 20% ;
  }
}
    </style>
    <link href="style.css" rel="stylesheet">
  </head>
  <body class="text-center">
      <div class="container" >
        <h1 class="title" ><b>DayCal</b></h1>
        <form action="result" method="get" class="form-date">
  <h1 class="h3 mb-3 font-weight-normal">Please select any two dates</h1>
  <label for="date1" class="sr-only">Date 1</label>
  <input type="date" id="date1"  name="date1" class="form-control" placeholder="First Date" required >
  <label for="date2" class="sr-only">Date 2</label>
  <input type="date" id="date2"  name="date2" class="form-control" placeholder="Second Date" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Calculate</button>
</form>
</div>
</body>
</html>
