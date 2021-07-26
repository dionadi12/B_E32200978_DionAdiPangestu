<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Wisata di Banyuwangi</title>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 300px;
}
 
div.gallery:hover {
  border: 1px solid #777;
}
 
div.gallery img {
  width: 100%;
  height: auto;
}
 
div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body>
<h1>Wisata di banyuwangi</h1>
<div class="gallery">
  <a target="_blank" href="d.jpg">
  <img src="{{ ('img/pm.jpg') }}"borde="4px"margin="20px"padding="10px"width="300px"height="200px">
  </a>
  <div class="desc">Pantai Pulau Merah</div>
</div>
<div class="gallery">
  <a target="_blank" href="d.jpg">
  <img src="{{ ('img/ijen.jpg') }}"borde="4px"margin="20px"padding="10px"width="300px"height="200px">
  </a>
  <div class="desc">Gunung Ijen</div>
</div>
<div class="gallery">
  <a target="_blank" href="d.jpg">
  <img src="{{ ('img/air.jpg') }}"borde="4px"margin="20px"padding="10px"width="300px"height="200px">
  </a>
  <div class="desc">Air Terjun Telujuk Raung</div>
</div>
</body>
</html>