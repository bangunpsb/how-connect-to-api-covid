$(document).ready(function () {
    $(".myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();

        if (value === false)
            alert("Barang tidak ada");
        else {
            $(".myData .card").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        }
    });
});