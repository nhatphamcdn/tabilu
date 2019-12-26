function initLoaderImage(productImages) {
  const preloaded = productImages.map((v) => {
    return {
      id: v.id,
      src: v.path
    }
  });

  $('.input-images').imageUploader({
      preloaded: preloaded,
      imagesInputName: 'images',
      preloadedInputName: 'edit_images'
  });
}

$(document).ready(function() {
  initLoaderImage(productImages);
});