$(function () { // sayfa hazır olunca bende hazırım demek
    /*
    $.ajax
    $.post
    $.get
    */
    $.ajax({ // nereye hangi tipte ne yollayacağımızı belirler
        type: "POST",
        url: "ajax.php",
        data: { "adsoyad": "Enes Baysan" },
        success: function (response) { // eğer başarılı olursa ajax.php'den bize dönen cevabı konsola yazar.
            console.log(response);
        }
    });
});