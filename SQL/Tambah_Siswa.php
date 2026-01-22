<?php
$Nama = $_POST['nama'];
$Kelas = $_POST['kelas'];
$Jurusan = $_POST['jurusan'];
$Alamat = $_POST['alamat'];

$stmt = $conn->prepare("INSERT INTO Students (Nama, Kelas, Jurusan, Alamat) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $Nama, $Kelas, $Jurusan, $Alamat);

if ($stmt->execute()) {
  echo "Data sudah ditambahkan.";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$connection->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card-shadow" style="width: 30%; padding: 20px;">
       <div class="card-body">
        <div class="container mt-5">
            <button type="button" class="btn btn-secondary" onclick="window.location.href='index.php'">Kembali</button>
        <h2 class="text-center">Tambah Siswa</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Siswa</button>
        </form>
    </div>
       </div> 
    </div>
    
</body>
</html>