
<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Pemantauan Covid-19</title>
<meta charset="utf-8">
<meta name="viewport" content ="width=device-width,initial-scale=1">
<link rel="stylesheet" href="style/style.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<h2>Data Pemantauan Covid-19</h2>
<form method ="post" name = "frmpost" action = "">
    <div class="form-group col-md-6">
      <label>Nama Wilayah</label>
      <select name ="wilayah[]" class="form-control">
        <option selected>Choose...</option>
        <option>DKI Jakarta</option>
        <option>Jawa Barat</option>
        <option>Banten</option>
        <option>Jawa Tengah</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputpositif">Jumlah Positif</label>
      <input type="number" class="form-control"  name = "positif[]" placeholder="Jumlah">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label>Jumlah Dirawat</label>
    <input type="number" class="form-control" name ="dirawat[]"  placeholder="Jumlah">
  </div>
  <div class="form-group col-md-6">
    <label>Jumlah Sembuh</label>
    <input type="number" class="form-control" name = "sembuh[]" placeholder="Jumlah">
  </div>
  <div class="form-group col-md-6">
    <label>Jumlah Meninggal</label>
    <input type="number" class="form-control" name="meninggal[]" placeholder="Jumlah">
  </div>
  <div class="form-group col-md-6">
    <label>Nama Operator</label>
    <input type="text" class="form-control" name="nama[]" placeholder="Nama" required>
  </div>
  <div class="form-group col-md-6">
    <label>NIM Mahasiswa</label>
    <input type="text" class="form-control" name="NIM[]" placeholder="NIM" required>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary" name="add">Submit</button>
</form>
</div>
</body>
<center>

<?php
$wilayah = $_POST ['wilayah'];
$positif = $_POST['positif'];
$dirawat = $_POST ['dirawat'];
$sembuh = $_POST ['sembuh'];
$meninggal = $_POST ['meninggal'];
$nama = $_POST ['nama'];
$nim = $_POST ['NIM'];

foreach ($wilayah as $key => $val){
  ?>

  <tr>
    <td align = "center" colspan ="2">
      <?php
      echo  '<b>Data Pemantauan Covid-19 </b>';
      echo '<b>',$wilayah[$key],'</b>';
      ?>
    </td>
      <br>
      <b> Per <span id="tanggalwaktu"></span></b>
      <script>
       var dt = new Date();
         document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleString();
      </script>
      <br>
      <td align = "center" colspan ="2">
        <?php
        echo  '<b>',$nama[$key],'/','</b>';
        echo '<b>',$nim[$key],'</b>';
        ?>
        <table class="table table-white table-striped">
        <thead>
          <tr>
            <th scope="col">Positif</th>
            <th scope="col">Di rawat</th>
            <th scope="col">Sembuh</th>
            <th scope="col">Meninggal</th>
          </tr>
        </thead>
        <tr>
            <th scope="row"><?php echo $positif[$key];?></th>
            <td><b><?php echo $dirawat[$key];?></b></td>
              <td><b><?php echo $sembuh[$key];?><b></td>
              <td><b><?php echo $meninggal[$key];?></b></td>
          </tr>
<?php
}
?>
</table>
</center>
</html>
