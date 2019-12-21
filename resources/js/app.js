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
      valueField: 'id',
      labelField: 'name',
      searchField: ['name'],
      options: hashtags,
      create: function(input, callback) {
        $('#select-hashtag').closest('.form-group').find('.invalid-feedback').remove();
        
        $.ajax({
          url: tagsLink,
          type: 'POST',
          data: { name: input, slug: input },
          success: function (result) {
            if (result) {
              callback({ id: result.id, name: result.name });
            }
          },
          error: function(response) {
            $('#select-hashtag').closest('.form-group')
              .append('<span class="invalid-feedback d-block" role="alert">' + response.responseJSON.message + '</span>')
            
            callback(hashtags);
          }
        });
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
      }, 300);
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