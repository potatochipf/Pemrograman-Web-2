<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        background-color: aliceblue;
    }
   .kulkas {
    color: blue;
   }
   .mesin {
    color: green;
   }
   .tv {
    color: red;
   }
   .harga {
    color: black;
    font-weight: 600;
    background-color: aqua;
   }
   .daftar {
    background-color: aqua;
   }
   h5{
    color: blue
   }
   h3{
    color: blue;
   }
</style>
</head>
<body>
<h3>BELANJA ONLINE</h3>
    <div style="display: flex; justify-content: space-between;">
    <form method="post" action="belanja.php" style="width: 60%;">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Cutomer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="customer" name="customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="pilih_produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="pilih_produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilih_produk" id="pilih_produk_2" type="radio" class="custom-control-input" value="MESIN"> 
        <label for="pilih_produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<div style="width: 30%;">
<table class="table table-hover table-bordered">
    <tr>
        <th class="daftar">
            Daftar harga
        </th>
    </tr>
    <tr>
        <td class="tv">
            TV : 4.200.000 <br>
        </td>
    </tr>
    <tr>
        <td class="kulkas">
            KULKAS : 3.100.000 <br>
        </td>
    </tr>
    <tr>
        <td class="mesin">
            MESIN CUCI : 3.800.000 <br>
        </td>
    </tr>
    <tr>
        <td class="harga">
            HARGA BISA BERUBAH SETIAP SAAT !!
        </td>
    </tr>
</table>
</div>
</div>
    <h5>DAFTAR CUSTOMER</h5>
<?php
$customer = $_POST ["customer"];
$pilih_produk = $_POST ["pilih_produk"];
$jumlah = $_POST ["jumlah"];

switch ($pilih_produk) {
    case "TV":
        $harga = 4200000;
        break;
    case "KULKAS":
        $harga = 3100000;
        break;
    case "MESIN":
        $harga = 3800000;
        break;
    default:
    $harga = 0;
}
$total = $harga * $jumlah;

echo "Nama Customer : $customer <br>";
echo "Produk Pilihan : $pilih_produk <br>";
echo "Jumlah : $jumlah  <br>";
echo "Total Haga : $total <br>"
?>
</body>
</html>