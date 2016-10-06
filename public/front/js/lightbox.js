jQuery(document).ready(function ($) {

    function create(htmlStr) {
        var frag = document.createDocumentFragment(),
            temp = document.createElement('div');
        temp.innerHTML = htmlStr;
        while (temp.firstChild) {
            frag.appendChild(temp.firstChild);
        }
        return frag;
    }

    var fragment = create(
        '<div class="lightbox-background"></div>' +
        '<div class="lightbox-content">' +
        '<div class="lightbox-close"><img src="front/images/close.png"></div>' +
        '<span class="borders"></span>' +
        '<div class="text-block">' +
        '<h3 id="lightbox-title"></h3>' +
        '<p id="lightbox-text"></p>' +
        '<div class="navigation buttons">' +
        '<a href="#" class="prev button" data-lightbox="">POPRZEDNI PRODUKT</a>' +
        '<a href="#" class="next button" data-lightbox="">następny PRODUKT</a>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div class="dark-overlay"><div class="loader"><img src="front/images/loading.gif"><img/></div></div>'
    );

    document.body.insertBefore(fragment, document.body.nextSibling);

    var gallery = [];
    $("a.lightbox-trigger").each(function (index) {
        var lightbox = $(this);
        var text = lightbox.data('description');
        var title = lightbox.data('title');
        var image = lightbox.attr('href');
        var gallery_item = [index, image, title, text];
        gallery.push(gallery_item);

    });

    $('body').find('a.lightbox-trigger, a.prev.button, a.next.button').on('click', function (event) {
        event.preventDefault();
        var i = $(this).data('lightbox');
        load_lightbox(i, gallery);
    });


    $('.lightbox-close').on('click', function (event) {
        $('.lightbox-background, .lightbox-content').removeClass('active');
    });

});

function load_lightbox(i, gallery) {
    var l_image = gallery[i][1];
    var l_title = gallery[i][2];
    var l_text = gallery[i][3];
    $('.lightbox-background').css('background-image', 'url(' + l_image + ')');

    $('<img/>').attr('src', l_image).load(function () {
        $('.loader, .dark-overlay').fadeOut();
        $(this).remove();
        $('#lightbox-title').html(l_title);
        $('#lightbox-text').html(l_text);
        if (i === 0) {
            $('a.prev.button').hide();
            $('a.next.button').data('lightbox', parseInt(i + 1)).show();
        }
        if (i > 0 && i < parseInt(gallery.length - 1)) {
            $('a.prev.button').data('lightbox', parseInt(i - 1)).show();
            $('a.next.button').data('lightbox', parseInt(i + 1)).show();
        }
        if (i === parseInt(gallery.length - 1)) {
            $('a.next.button').hide();
            $('a.prev.button').data('lightbox', parseInt(i - 1)).show();
        }

        setTimeout(function () {
            $('.lightbox-background, .lightbox-content').addClass('active');
        }, 100);

    });
}
