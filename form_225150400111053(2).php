<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Formulir Biodata</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .result-box {
            text-align: center;
            width: 400px;
            padding: 50px;
            border: 3px solid black;
            border-radius: 5px;
            background-color: #e6e6fa;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['nama'];
            $gender = $_POST['gender'];
            $tempat = $_POST['tempat'];

            echo "<div class='result-box'>";
            echo "<h2>Hasil Formulir :</h2>";
            echo "<p>Nama : $name</p>";
            echo "<p>Jenis Kelamin : $gender</p>";
            echo "<p>Tempat Tinggal : $tempat</p>";
            echo "</div>";
        } else {
        ?>
        <h2>Formulir Biodata</h2>
        <form action="form_225150400111053(2).php" method="POST">
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama" required><br><br>

            <label>Jenis Kelamin :</label><br>
            <input type="radio" id="lk" name="gender" value="Laki-laki" required>
            <label for="laki-laki">Laki-laki</label><br>
            <input type="radio" id="pr" name="gender" value="Perempuan" required>
            <label for="perempuan">Perempuan</label><br><br>

            <label for="tempat tinggal">Tempat Tinggal :</label>
            <select id="tempat" name="tempat">
                <option value="Rumah">Rumah</option>
                <option value="Kost">Kost</option>
                <option value="Kontrakan">Kontrakan</option>
            </select><br><br>

            <input type="submit" value="Submit">
        </form>
        <?php
        }
        ?>
    </div>
</body>
</html>