/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('trumbowyg');
require('selectize');

// Define selectize
const constant = {
  _initSelectize: function() {
    $('#select-hashtag').selectize({
      plugins: ['remove_button'],
      persist: false,
      maxItems: null,
      valueField: 'name',
      labelField: 'name',
      searchField: ['name'],
      items: ['Shoe', 'Box'],
      options: [
        {name: 'Shoe'},
        {name: 'Box'},
        {name: 'Tist'}
      ],
      create: function(input) {
        return {
          name: input
        };
      }
    });
  },
  _initTrumbowyg: function() {
    $('.editor').trumbowyg({
      svgPath: '/img/icons/trumbowyg/icons.svg'
    });
  }
}
// End Define selectize

// Loading Indicator Start
const actionLoader = () => {
  $('.preloader').hide();
  $('.body-content').css('opacity', 1);
};

window.onload = function () {
  $('.preloader').fadeOut(100, function(){
    actionLoader();
  });
};
// End Loading Indicator


// Document is ready
$(document).ready(function() {
  // Init Trumbowyg Editor
  constant._initTrumbowyg();
  // Init selectize
  constant._initSelectize();
});

// Instant click handle
InstantClick.on('change', function() {
  actionLoader();
});