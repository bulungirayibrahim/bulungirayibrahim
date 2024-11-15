<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form method="post" action="">
    <label for="sayi1">1. Sayı:</label>
    <input type="number" name="sayi1" id="sayi1" required>
    <br>
    <label for="sayi2">2. Sayı:</label>
    <input type="number" name="sayi2" id="sayi2" required>
    <br>
    <label for="secim">Seçim:</label>
    <select name="secim" id="secim">
        <option value="ucebolunme">3'e Bölünen Sayılar</option>
        <!-- Diğer seçenekler eklenebilir -->
    </select>
    <br>
    <input type="submit" name="gonder" value="Gönder">
</form>

</body>

</html>
<?php
if (isset($_POST["gonder"])) {
    // POST ile gelen verileri alıyoruz
    $ksayi1 = $_POST["sayi1"];
    $ksayi2 = $_POST["sayi2"];
    $ksecim = $_POST["secim"];  // Burada doğru yazım şekli kullanılmalı

    switch($ksecim) {
        case "ucebolunme":  // case kısmındaki yazım hatasını düzelttim
            // $ksayi1 ve $ksayi2'yi küçükten büyüğe sıralıyoruz
            if ($ksayi1 > $ksayi2) {
                $enb = $ksayi1;
                $enk = $ksayi2;
            } else {
                $enk = $ksayi1;
                $enb = $ksayi2;
            }

            // $enk ile $enb arasındaki sayıları kontrol ediyoruz
            for ($i = $enk; $i <= $enb; $i++) {
                if ($i % 3 == 0) {
                    echo "3'e bölünen sayılar: " . $i . "<br>";  // 3'e bölünen sayıları ekrana yazdırıyoruz
                }
            }
            break;
    }
}
?>
