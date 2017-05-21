// GALLERY 1


// GALLERY 2
jQuery('#gallery2').on('click', function (e) {
    "use strict";
    e.preventDefault();
    jQuery(this).lightGallery({
        // Settings
        dynamic: true,
        mode: 'lg-slide-vertical',
        zoom: false,
        fullScreen: false,
        autoplayControls: false,
        thumbnail: true,
        download: true,
        counter: true,
        // Videos
        dynamicEl: [
            {
                "src": "http://vimeo.com/70301553",
                "subHtml": "Vimeo"
            },
            { // You Tube videos work only on a server.
                "src": "http://www.youtube.com/embed/efVWyPNd3xw",
                "subHtml": "You Tube"
            }
        ]
    });
});

// GALLERY 3
jQuery('#gallery3').on('click', function (e) {
    "use strict";
    e.preventDefault();
    jQuery(this).lightGallery({
        // Settings
        dynamic: true,
        mode: 'lg-slide-vertical',
        zoom: true,
        fullScreen: false,
        autoplay: true,
        pause: 5000,
        thumbnail: false,
        download: false,
        counter: true,
        // Images
        dynamicEl: [{
            'src': 'images/photos/img.webp',
            'thumb': 'images/photos/img.webp',
            'subHtml': 'Quae expetendis'
        }, {
            'src': 'images/photos/img2.webp',
            'thumb': 'images/photos/img2.webp',
            'subHtml': "Lorem ipsum dolor"
        }, {
            'src': 'images/photos/img3.webp',
            'thumb': 'images/photos/img3.webp',
            'subHtml': "Legam a expetendis"
        }, {
            'src': 'images/photos/img4.webp',
            'thumb': 'images/photos/img4.webp',
            'subHtml': "Magna quamquam"
        }]
    })
});

// GALLERY 4
jQuery('#gallery4').on('click', function (e) {
    "use strict";
    e.preventDefault();
    jQuery(this).lightGallery({
        // Settings
        dynamic: true,
        mode: 'lg-slide-vertical',
        zoom: true,
        fullScreen: false,
        autoplay: false,
        thumbnail: true,
        download: false,
        counter: true,
        // Images
        dynamicEl: [{
            'src': 'images/sketches/sketch1.webp',
            'thumb': 'images/sketches/sketch1.webp',
            'subHtml': 'Tamen excepteur'
        }, {
            'src': 'images/sketches/sketch2.webp',
            'thumb': 'images/sketches/sketch2.webp',
            'subHtml': "Iudicem admodum"
        }, {
            'src': 'images/sketches/sketch3.webp',
            'thumb': 'images/sketches/sketch3.webp',
            'subHtml': "Enim pariatur"
        }, {
            'src': 'images/sketches/sketch4.webp',
            'thumb': 'images/sketches/sketch4.webp',
            'subHtml': "Enim pariatur"
        }]
    })
});