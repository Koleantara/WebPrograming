
<?php
$hasil = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $berat = $_POST['Berat'];
    $Tinggi = $_POST['Tinggi'];
}
if($Tinggi != 0){
    $Hasil = $berat / (($Tinggi/100) * ($Tinggi/100));
}
if ($Hasil <+ 18.49){
    $hasil = "Underweigh";
} elseif ($Hasil >= 18.5 && $hasil <= 24.9){
    $hasil = "Normal weight";
} elseif ($Hasil >= 25 && $hasil <= 27){
    $hasil = "Overweight";
} elseif ($Hasil >= 27){
    $hasil = "Obesitas";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card-shadow" style="width: 30%; padding: 20px;">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">berat Badan</h3>
            </div>
        </div>
        <form method="POST">
            <div class="mb-3">
                <input class="form-control"type="number" name="Berat" id="" placeholder="Berat" value="<?php echo $bilangan1?>">
            </div>
            <div class="mb-3">
                <input class="form-control" type="number" name="Tinggi" id="" placeholder="Tinggi" value="<?php echo $bilangan2?>">
            </div>
            <button class="btn btn-primary w-100">Hitung</button>
        </form>
        <div class="alert alert-success text-center mt-5">
            hasil: <?php echo $hasil; ?>
        </div>
        </div>
    </div>
</body>
</html>