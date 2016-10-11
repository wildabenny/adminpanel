jQuery(document).ready(function ($) {

    var button = $(".buttons").find(".button");

    var actual = $(".nasze-produkty a").length;

    var appItem = $(".nasze-produkty");

    button.on("click", function (event) {

        event.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "GET",
            url: "/api/getproducts/" + actual,
            dataType: "json",
            data: {},
            success: function (response) {
                //var obj = $.parseJSON(data);
                //console.log(response);
                if (response.length != 0) {
                    $.each(response, function (index, row) {
                        var url = row.image;
                        //appItem.empty();
                        /* appItem.append(
                         $('<div />').addClass('col-3')
                         .append('<figure />')
                         .append('<a />', {href:url, html: url}).val('data-lightbox = 0')                              .append('<img />', {src: url})
                         .append('<div />').addClass('overlay')
                         .append('<div />').addClass('title').html('kielbasa')
                         );*/
                        var div1 = document.createElement("div");
                        $(div1).addClass("col-3");
                        appItem.append(div1);
                        var figure = document.createElement("figure");
                        appItem.append(figure);
                        var link = document.createElement("a");
                        link.data("href", "url");
                        link.data("html", "url");
                        link.data("lightbox", "0");
                        appItem.append(link);

                    });
                }

            }, error: function () {
                alert("error");
            }
        });
    });

});
