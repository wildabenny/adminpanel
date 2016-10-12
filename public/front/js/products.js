jQuery(document).ready(function ($) {

    var button = $(".buttons").find(".button");

    var actual = $(".nasze-produkty a").length;

    var appItem = $(".nasze-produkty .col-group");

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
            dataType: "html",
            data: {},
            success: function (response) {
                //var obj = $.parseJSON(data);
                //console.log(response);
                if (response.length != 0) {
                    $.each(response, function (index, row) {
                        console.log(response);
                        //appItem.append(JSON.stringify(response));
                        var url = row.shortname;
                        var shortname = row.shortname;
                        console.log(url);
                        //appItem.empty();
                        //var div = document.createElement('div');

                        /*appItem.append('<div class = "col-3"</div>');
                         appItem.append('<figure/>');
                         appItem.append('<a />', {
                         href: url,
                         html:shortname
                         });*/

                        appItem.append(
                            $('<div class="col-3"></div>')
                                .append('<figure />')
                                .append('<a />', {
                                    href: url,
                                    html: shortname,

                                })
                                .append('<img />', {src: url})
                                .append('<div class="overlay"> </div>')
                                .append('<div></div>').addClass('title').html(url)
                        );

                        //appItem.append('<div class="col-3" title="test"></div>');

                        /*var div1 = document.createElement("div");
                         $(div1).addClass("col-3");
                         appItem.append(div1);
                         var figure = document.createElement("figure");
                         appItem.append(figure);
                        var link = document.createElement("a");
                         appItem.append(link);*/

                    });
                }

            }, error: function () {
                alert("error");
            }
        });
    });

});
