
let process_status = (element_id, status, message) => {
    $("#" + element_id).removeClass("alert alert-success")
        .removeClass("alert alert-danger")
        .removeClass("alert alert-warning");
    $("#" + element_id).addClass("alert alert-" + status).html(message);
};




$("#btn_add_category").click(() => {

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
            process_status("process_status", response['process'], response['message']);

        })
    });

});


$(".btn_delete_category").click((e) => {
    let cat_id = $(e.target).data('deger');
    $("#process_status").hide();
    let bilgi = {};
    bilgi["deleted_kategori_id"] = cat_id;
    $.ajax({
        type: "post",
        url: "process.php",
        data: bilgi,
        dataType: "json",
        success: ((response) => {
            process_status("process_status" +
                "process_status",
                response['process'],
                response['message']);



        })
    });


});


