
<?php
$hasil = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bilangan1 = $_POST['angka1'];
    $bilangan2 = $_POST['angka2'];
    $operator = $_POST['operator'];
}
if($operator == '+'){
    $hasil = $bilangan1 + $bilangan2;
} elseif($operator == '-'){
    $hasil = $bilangan1 - $bilangan2;
} elseif($operator == '*'){
    $hasil = $bilangan1 * $bilangan2;
} elseif($operator == '/'){
    $hasil = $bilangan1 / $bilangan2;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card-shadow" style="width: 30%; padding: 20px;">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Kalkulator</h3>
            </div>
        </div>
        <form method="POST">
            <div class="mb-3">
                <input class="form-control"type="number" name="angka1" id="" placeholder="Angka Pertama" value="<?php echo $bilangan1?>">
            </div>
            <div class="mb-3">
                <input class="form-control" type="number" name="angka2" id="" placeholder="Angka kedua" value="<?php echo $bilangan2?>">
            </div>
            <button class="btn btn-primary w-100">Hitung</button>
        </form>
        <?php if($hasil !== null): ?>
        <div class="alert alert-success text-center mt-5">
            hasil: <?php echo $hasil; ?>
        </div>
        <?php endif ?>
        <select name="operator" class="form-control">
        <option value="+">Tambah</option>
        <option value="-">Kurang</option>
        <option value="*">Kali</option>
        <option value="/">Bagi</option>
</select>
</div>
    </div>
</body>
</html>