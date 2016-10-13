/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
//import React , { Component } from 'react';
//import { render } from 'react-dom';
//import Home from './components/Home'

$(document).ready(function () {

    //render(<Home />, document.getElementById('app'));
    $(document).ready(function () {
        $('.sections').on('click', function () {
            console.log('sections clicked');
            $('#pdfEelement').css('display', 'none');
        });
        $('#sectionB').on('click', function () {
            console.log('sectionC clicked');
            $('#pdfEelement').css('display', 'inline');
        });
        var activeSection = $('.activeSection').length;
        if (activeSection > 0) {
            $('#pdfEelement').css('display', 'inline');
            console.log('is active');
            console.log(activeSection);
        }
    });
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

//Vue.component('example', require('./components/Example.vue'));
//
//const app = new Vue({
//    el: 'body'
//});


