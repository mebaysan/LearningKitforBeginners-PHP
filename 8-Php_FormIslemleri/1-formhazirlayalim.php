<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>

<body>
    <form action="2-postiledegeralmak.php" method="post" enctype="multipart/form-data">
        <!-- file seçtirdiğimiz zaman enctype kullanmamız zorunludur. -->
        <!--
            input
            textarea
            file
            select
            radio
            checkbox
            multipleselect
            buton
        -->
        <label>Ad:</label>
        <br>
        <input type="text" name="ad">
        <hr>
        <label>Hakkımda:</label>
        <br>
        <textarea name="hakkımda" cols="50" rows="5"></textarea>
        <hr>
        <label>Meslek:</label>
        <br>
        <select name="meslek">
            <option>-- seç --</option>
            <option value="full-stack-developer">FUll Stack Developer</option>
            <option value="front-end-developer">Front-end Developer</option>
            <option value="back-end-developer">Back-end Developer</option>
        </select>
        <hr>
        <label>Cinsiyet:</label>
        <br>
        <label><input type="radio" name="cinsiyet" value="erkek">
            erkek</label>
        <label><input type="radio" name="cinsiyet" value="kadın">
            kadın</label>
        <hr>
        <label>İlgi Alanları:</label>
        <br>
        <label>
            <input type="checkbox" name="ilgi_alani[]" value="php">PHP
            <!-- php tarafında dizi olarak alabilmek için value kısmına dizi olduğunu belirten [] gelmelidir. -->
        </label>
        <label>
            <input type="checkbox" name="ilgi_alani[]" value="python">Python
        </label>
        <label>
            <input type="checkbox" name="ilgi_alani[]" value="c#">C#
        </label>
        <hr>
        <label>Fotoğraf:</label>
        <br>
        <input type="file" name="fotograf">
        <hr>
        <button type="submit">Gönder</button>
    </form>

</body>

</html>