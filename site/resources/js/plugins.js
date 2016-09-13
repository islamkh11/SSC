/*global $*/
$(document).ready(function () {
    
    "use strict";
    
    // Stop Carousel
    $('.courses').each(function () {
        $(this).carousel({
            interval: false
        });
    });
    

    // Make Intro To Center
    $(".intro").each(function () {
        $(this).css("paddingTop", ($(window).height() - $(".intro").height()) / 2);
    });
    
    
    // Nice Scroll
    $("html").niceScroll();

    
    // Nice Scroll For Footer
    $(".messages").niceScroll();
    $(".chat").niceScroll();
    $(".setting").niceScroll();
    $(".post-content").niceScroll();
    
    
    // Add New Note
    $("footer .dropdown .setting").on("click", ".add", function () {
        $("footer .dropdown .setting li").last().after("<li><form role='note'><div class='form-group'><textarea type='text' class='form-control' placeholder='YOUR NOTE'></textarea><span class='close'><i class='fa fa-close'></i></span></div></form></li>");
    });
    
    // Remove Note
    $("footer .dropdown .setting").on("click", ".close", function () {
        $(this).parentsUntil("ol").remove();
    });
    
    
    // Show Color Option Div When Click On The Gear
    $(".gear-check").click(function () {
        $(".color-option").fadeToggle();
    });
    

    // Show Scroll Top When Hover On The Scroll
    $(".scroll-top .fa-chevron-up").hover(function () {
        $(".fade-scroll").fadeToggle();
    });

    
    // Show Comments Box
    $(".write-comment").click(function () {
        $(".comments").fadeToggle();
    });
    
    
    // Remove Active Class 
    $(function () {
        $('.our-courses .carousel-indicators li').hover(function () {
            $(this).addClass('active').siblings().removeClass('active');
        });
    });

    
    // Remove Active Class 
    $(function () {
        $('.favourites .carousel-indicators li').hover(function () {
            $(this).addClass('active').siblings().removeClass('active');
        });
    });
    
    
    // Show Footer 
    $('.show-footer').on('click', function () {
        $(this).toggleClass('active');
    });
    
        
    // Change Theme Color On Click //
    var colorLi = $(".color-option ul li");
    colorLi
        .eq(0).css("background", "#E41B17").end()
        .eq(1).css("background", "#996F55").end()
        .eq(2).css("background", "#E426D5").end()
        .eq(3).css("background", "#FF0553").end()
        .eq(4).css("background", "#F6FF00").end()
        .eq(5).css("background", "#FFD500").end()
        .eq(6).css("background", "#00FF5A").end()
        .eq(7).css("background", "#3E6E14").end()
        .eq(8).css("background", "#81CCFF").end()
        .eq(9).css("background", "#009AFF");
    colorLi.click(function () {
        $("link[href*='theme']").attr("href", $(this).attr("data-value"));
    });
    
    
    // Caching The Scroll Top Element
    var scrollButton = $(".scroll-top");
    $(window).scroll(function () {
        $(this).scrollTop() >= 700 ? scrollButton.show() : scrollButton.hide();
    });
    
    
    // Click On Button To Scroll Top
    scrollButton.click(function () {
        $("html,body").animate({ scrollTop : 0 }, 600);
    });
    
    // Width of Rating 
    $('.bar span').hide();
    $('#bar-five').animate({
        width: '75%'
    }, 1000);
    $('#bar-four').animate({
        width: '35%'
    }, 1000);
    $('#bar-three').animate({
        width: '20%'
    }, 1000);
    $('#bar-two').animate({
        width: '15%'
    }, 1000);
    $('#bar-one').animate({
        width: '30%'
    }, 1000);
    
    setTimeout(function () {
        $('.bar span').fadeIn('slow');
    }, 1000);
  
  
    $(".js-example-basic-multiple").select2();
    $(".js-example-basic-single").select2();
    $(".js-example-placeholder-single").select2({
        placeholder: "Click To Select",
        allowClear: true
    });
    $(".register .Branch").select2({
        placeholder: "Branch",
        allowClear: true
    });
    $(".register .القسم").select2({
        placeholder: "القسم",
        allowClear: true
    });
    $(".register .Major").select2({
        placeholder: "Major",
        allowClear: true
    });
    $(".register .الرئيسى").select2({
        placeholder: "الرئيسى",
        allowClear: true
    });
    $(".register .Minor").select2({
        placeholder: "Minor",
        allowClear: true
    });
    $(".register .الفرعى").select2({
        placeholder: "الفرعى",
        allowClear: true
    });
    $(".register .Day").select2({
        placeholder: "Day",
        allowClear: true
    });
    $(".register .اليوم").select2({
        placeholder: "اليوم",
        allowClear: true
    });
    $(".register .Month").select2({
        placeholder: "Month",
        allowClear: true
    });
    $(".register .الشهر").select2({
        placeholder: "الشهر",
        allowClear: true
    });
    $(".register .Year").select2({
        placeholder: "Year",
        allowClear: true
    });
    $(".register .السنة").select2({
        placeholder: "السنة",
        allowClear: true
    });
    $(".register .Gender").select2({
        placeholder: "Gender",
        allowClear: true
    });
    $(".register .النوع").select2({
        placeholder: "النوع",
        allowClear: true
    });

    
    //Start Accordion Slider
    $(".accordion .item").first().addClass("active");
    $(".accordion .info").first().show().animate({ width: "40%" });
    
    $(".accordion .item").on("click", function () {
        $(this)
            .addClass("active").siblings(this).removeClass("active").end()
            .next().show().animate({ width: "40%" })
            .siblings(".info").animate({ width: 0 }, function () { $(this).hide(); });
    });
    
    
    //Make Dynamic Tabs
    $(".infograph .level div").first().addClass("active");
    $(".infograph .level div").click(function () {
        $(".infograph .level div").removeClass("active");
        $(this).addClass("active");
        var tabId= $(this).attr("id");
        $(".infograph .contents div").hide();
        $("#" + tabId + "-content").fadeIn(1000);
    });
});


// Loading Screen
$(window).load(function () {
    
    "use strict";
    // Loading Elements
    $(".loading-overlay .sk-cube-grid").fadeOut(2000, function () {
        
    // Show The Scroll
        $("body").css("overflow", "auto");
        $(this).parent().fadeOut(2000, function () {
            $(this).remove();
        });
    });
});