jQuery(document).ready(function ($) {

    /* $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
     });*/

    var button = $(".buttons").find(".button");

    var actual = $(".nasze-produkty a").length;

    var appItem = $(".nasze-produkty .col-group .col-group");

    button.on("click", function (event) {

        event.preventDefault();

        $.ajax({
            type: "GET",
            url: "/api/getproducts/" + actual,
            dataType: "html",
            success: function (data) {
                data = JSON.parse(data);
                console.log(data);

                actual += 10;
                appItem.append(data.html);

                if (data.show_button == false) {
                    button.remove();
                }

            }, error: function () {
                alert("error");
            }

        });
    });

});
