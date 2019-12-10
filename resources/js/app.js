/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('trumbowyg');
require('selectize');

// Loading Indicator Start
const actionLoader = (action) => {
  if(action) {
  $('.preloader').hide();
  $('.body-content').css('opacity', 1);

  } else {
    $('.preloader').show();
    $('.body-content').css('opacity', 0);
  }
};

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
  },
  _loadStyle: function() {
    actionLoader(false);

    const $link = $('#yield_css').val();
    if($link && typeof $link !== undefined) {
      $('#yield-link').attr('href', $link);

      setTimeout(() => {
         $('.preloader').fadeOut(100, function(){
          actionLoader(true);
        });
      }, 100);
    } else {
      actionLoader(true);
    }
  }
}
// End Define selectize

window.onload = function () {
  $('.preloader').fadeOut(100, function(){
    actionLoader(true);
  });
};
// End Loading Indicator


// Document is ready
$(document).ready(function() {
  const $link = $('#yield_css').val();
  if($link && typeof $link !== undefined) {
    // Load style
    constant._loadStyle();
  }

  // Init Trumbowyg Editor
  constant._initTrumbowyg();
  // Init selectize
  constant._initSelectize();
});

// Instant click handle
InstantClick.on('change', function() {
  // Load style
  constant._loadStyle();
});