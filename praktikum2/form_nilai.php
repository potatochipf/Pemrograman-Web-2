<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        background-color: antiquewhite
    }
    h3{
        color: blue;
        display: flex;
        justify-content: center;
    }
    hr{
        color: blue;
    }
    h4{
        color: blue;
    }
</style>
</head>
<body>
    <h3>-- FORM NILAI MAHASISIWA --</h3>
    <hr>
<?php
$ar_matkul =[
    "DDP" => "Dasar-Dasar Pemrograman",
    "WEB1" => "Pemrograman Web 1",
    "WEB2" => "Pemrograman Web 2",
    "SB" => "Statistika dan Probabilitas",
    "BD" => "Basis Data",
    "AI" => "Kecerdasan Buatas",
    "JK" => "Jaringan Komputer",
    "UI/UX" => "UI/UX",
]
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
      <option value="">---Pilih Mata Kuliah---</option>

        <?php
        foreach ($ar_matkul as $kode => $nama) {
           echo "<option value='$kode'>$nama</option>";
        }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas_praktikum" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas_praktikum" name="nilai_tugas_praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<hr>
<h4>Hasil Input Data Nilai Mahasiswa:</h4><br>
<?php
$text = $_POST['text'];
$_matkul = $_POST['matkul'];
$_nilai_uts = $_POST['nilai_uts'];
$_nilai_uas = $_POST['nilai_uas'];
$_nilai_tugas_praktikum = $_POST['nilai_tugas_praktikum'];
$_rata_rata = ($_nilai_uts * 0.3) + ($_nilai_uas *0.3) + ($_nilai_tugas_praktikum *0.4);
$keterangan = keterangan ($_rata_rata); 
$grade = grade ($_rata_rata);


// Menentukan Keterangan LULUS & TIDAK LULUS
function keterangan ($_rata_rata){
 if ($_rata_rata >= 80) {
    return "Lulus";
 }
 else {
    return "Tidak Lulus";
 }
}

// Menentukan Grade
function grade ($_rata_rata){
    if ($_rata_rata >= 85 && $_rata_rata <= 100) {
        return "A (Sangat Baik)";
}
elseif ($_rata_rata >= 60 && $_rata_rata < 84) {
return "B (Baik)";
}
elseif ($_rata_rata >= 40 && $_rata_rata < 59) {
return "C (Cukup)";
}
elseif ($_rata_rata >= 20 && $_rata_rata < 39) {
return "D (Kurang)";
}
elseif ($_rata_rata >= 10 && $_rata_rata < 19) {
return "E (Sangat Kurang)";
}
else{
    return "Tidak Lulus";
}
}
?>
Nama Mahasiswa: <?php echo $text; ?><br>
Mata Kuliah: <?php echo $ar_matkul[$_matkul]; ?><br>
Nilai UTS: <?php echo $_nilai_uts; ?><br>
Nilai UAS: <?php echo $_nilai_uas; ?><br>
Nilai Rata-Rata: <?php echo $_rata_rata; ?><br>
Keterangan: <?php echo $keterangan; ?> <br>
Grade: <?php echo $grade; ?> <br>


</body>
</html>