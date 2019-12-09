/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('trumbowyg');
require('selectize');

// Loading Indicator Start
const actionLoader = () => {
  $('.preloader').hide();
  $('.body-content').css('opacity', 1);
};

// Apply Tags Input
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
// End Apply Tags Input

window.onload = function () {
  $('.preloader').fadeOut(100, function(){
    actionLoader();
  });
};
// End Loading Indicator


// Apply Trumbowyg Editor
$('.editor').trumbowyg({
  svgPath: '/img/icons/trumbowyg/icons.svg'
});
// End Apply Trumbowyg Editor

// Instant click handle
InstantClick.on('change', function() {
  actionLoader();
});