<?php
if (isset($_FILES['dosya']['name'])) {
    print_r($_POST);
    print_r[$_FILES];
}else{
    echo "Hata dosya yüklenemedi";
}

?>

<form action="" method="post" enctype="multipart/form-data">
    <label>Ad-Soyad:</label>
    <br><br>
    <input type="text" name="adsoyad">
    <br><br><br><br>
    <label>CV:</label>
    <br><br>
    <input type="file" name="dosya">
    <br><br>
    <button type="submit">Yükle</button>

</form>