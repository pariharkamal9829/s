// Get all product images
var images = document.querySelectorAll('.product img');

// Add mouseover event listener to each image
images.forEach(function(image) {
    image.addEventListener('mouseover', function() {
        // Save the original image source
        var originalSrc = this.src;
        // Set the new image source to the 'back' image
        this.src = this.dataset.backImage;
        // Add a mouseout event listener to switch back to the original image
        this.addEventListener('mouseout', function() {
            this.src = originalSrc;
        });
    });
});