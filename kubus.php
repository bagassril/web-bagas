<?php
$hasil = "";
if (isset($_POST['hitung'])) {
    $rusuk = $_POST['rusuk'];
    if (is_numeric($rusuk)) {
        $hasil = "Volume Kubus = " . pow($rusuk, 3) . " cm³";
    } else {
        $hasil = "Input harus berupa angka!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raditya Bagass Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    Bagasszz nigh !!!
</header>

<div class="container">
    <nav>
        <div class="logo"></div>
        <a href="rbagassts.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="medsos.php">Media Sosial</a>
        <a href="kubus.php">Hitung Kubus</a>
    </nav>

    <main>
        <h2>Penyelesaian Kubus</h2>
        <?php
{
                    echo "<h3>Hitung Volume Kubus</h3>";
                    echo "<form method='post'>
                            <label>Masukkan panjang rusuk (cm):</label><br>
                            <input type='text' name='rusuk' required>
                            <button type='submit' name='hitung'>Hitung</button>
                          </form>";
                    if ($hasil != "") {
                        echo "<p><b>$hasil</b></p>";
                    }
                }
        ?>
</div>

<footer>
    Copyright@bagas.com
</footer>
</body>
</html>