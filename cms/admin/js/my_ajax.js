$(document).ready(function () {

    $("#btn_add_category").click(function () {
        $("#process_status").hide();
        let kategori_adi = $("#add_category_title").val();

        let bilgi = {};
        bilgi["kategori"] = kategori_adi;

        $.ajax({
            type: "post",
            url: "process.php",
            data: bilgi,
            dataType: "json",
            success: ((response) => {
                islem_durum(response['process'], response['message']);
                /*if (response['process'] == "success")
                    listeyi_getir();*/
            })
        });
    });


    function islem_durum(sinif, mesaj) {
        $("#process_status").removeClass("alert alert-success")
            .removeClass("alert alert-danger")
            .removeClass("alert alert-warning");
        $("#process_status").addClass("alert alert-" + sinif).html(mesaj);
        $("#process_status").show();
    }

    function listeyi_getir() {
        $.ajax({
            type: "POST",
            url: "list.php",
            dataType: "json",
            success: function (response) {
                jQuery.each(name, function (i, response) {
                    $("#tablefriendsname").append("<tr><td>" + data + "</td></tr>");
                });
            }
        });
    }

    //listeyi_getir();


});
