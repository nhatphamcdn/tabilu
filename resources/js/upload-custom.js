function initLoaderImage() {
  var preloaded = [];

  $('.input-images').imageUploader({
      preloaded: preloaded,
      imagesInputName: 'images',
      preloadedInputName: 'edit_images'
  });
}

$(document).ready(function() {
  initLoaderImage();
});