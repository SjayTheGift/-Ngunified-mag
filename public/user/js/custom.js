/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $('#owl-demo').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        navText: ["<img src='img/icons/left_arrow.png'>", "<img src='img/icons/right_arrow.png'>"],
        responsive: {
            0: {
                items: 1
            },
            1200: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});