$(document).ready(function () {
    $("#job-items").owlCarousel({
        items: 1,
        dots: false,
        nav: true,
        margin: 15,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 2
            },
            992: {
                items: 3,
            }
        }
    })
    $("#category-items").owlCarousel({
        items: 1,
        dots: false,
        nav: true,
        margin: 20,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        responsive: {
            0: {
                items: 2
            },
            320: {
                items: 2
            },
            380: {
                items: 3
            },
            992: {
                items: 5,
            }
        }
    })
    AOS.init();
})