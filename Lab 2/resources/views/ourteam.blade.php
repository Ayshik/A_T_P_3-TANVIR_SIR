<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-left: 35%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<center> <h1>This is the Our Team Page</h1></center>
        <a class="btn btn-primary" href="{{route('home')}}">home</a>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://scontent.fdac8-1.fna.fbcdn.net/v/t1.6435-1/p320x320/155523304_3738454526250013_1493644444560966376_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=7206a8&_nc_eui2=AeGxT14U87tlxQm4ObpjChyn_ib4qrtjt7z-Jviqu2O3vKTZOP9IAnr6KoyK3jEyAkkOY231mFoO0u_fc9IIXaJm&_nc_ohc=ABJvnyoyOhUAX86hA5w&_nc_ht=scontent.fdac8-1.fna&oh=8178e6a898a481430320172e11deed21&oe=616D6264" alt="Ayshik" style="width:100%">
      <div class="container">
        <h2>Ayshik Khan</h2>
        <p class="title">CEO & Founder</p>
        <p>Sla la la la la.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

 

</body>
</html>
