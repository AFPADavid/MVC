<?php
    function accueil() {
        //echo "test";
        $scriptJS = "$(document).ready(function() {
            $('.btn').each(function() {
                $(this).removeClass('btn-info');
                $(this).removeClass('btn-secondary');
                if ($(this).attr('id') == 'btnHome') {
                    $(this).addClass('btn-secondary');
                } else {
                    $(this).addClass('btn-info');
                }
            });
        })";


        require 'templates/accueil.php';
    }

    function test() {
        //echo "test";
        $scriptJS = "$(document).ready(function() {
            $('.btn').each(function() {
                $(this).removeClass('btn-info');
                $(this).removeClass('btn-secondary');
                if ($(this).attr('id') == 'btnTest') {
                    $(this).addClass('btn-secondary');
                } else {
                    $(this).addClass('btn-info');
                }
            });
        })";

        require 'templates/test.php';
    }

    function demo() {
        //echo "test";
        $scriptJS = "$(document).ready(function() {
            $('.btn').each(function() {
                $(this).removeClass('btn-info');
                $(this).removeClass('btn-secondary');
                if ($(this).attr('id') == 'btnDemo') {
                    $(this).addClass('btn-secondary');
                } else {
                    $(this).addClass('btn-info');
                }
            });
        })";

        require 'templates/demo.php';
    }

    // function demo_dwwm22031() {

    //     require 'templates/demo_dwwm22031.php';
    // }

?>