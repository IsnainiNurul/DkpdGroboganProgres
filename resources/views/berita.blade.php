<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/homepage2.css">
<t<link rel="stylesheet" href="css/submenu.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" href="js/home.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
</head>
<body>
<div>
<h2>Berita</h2>

<div>
        <p>Judul Berita</p>
        <p>Isi Berita</p>
  @foreach($berita as $b) 
  {{$b->judul_berita }}
  {{$b->isi_berita}}
@endforeach   
</div>
</div>

<script>
window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbartotal");
var content = document.getElementsByClassName("active")[0].offsetTop;
var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= content) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<script type="text/javascript" src="/js/home.js"></script>
</body>
</html>
