
// -----------------------hair pack image change with cursor javascript------------

function newamala(){
    document.getElementById("img-amala").src="amala 3.jpg";
    }
    function oldamala(){
      document.getElementById("img-amala").src="amala 1.jpg";
      }
      
      function newbringraj(){
        document.getElementById("img-bringraj").src="bringraj 3.jpg";
        }
        function oldbringraj(){
          document.getElementById("img-bringraj").src="bringraj 1.jpg";
          }
    
          function newshikakai(){
            document.getElementById("img-shikakai").src="shikakai 3.jpg";
            }
            function oldshikakai(){
              document.getElementById("img-shikakai").src="shikakai 1.jpg";
              }
    
    // ---------end--------------hair pack image change with cursor javascript------------end
    
    
    
    // -----------------------------face pack image change with cursor javascript----------------
    
    function newricemasoor(){
      document.getElementById("img-ricemasoor").src="rice masoor 3.jpg";
      }
      function oldricemasoor(){
        document.getElementById("img-ricemasoor").src="rice masoor 1.jpg";
        }
    
        function newrice(){
          document.getElementById("img-rice").src="rice 3.jpg";
          }
          function oldrice(){
            document.getElementById("img-rice").src="rice 1.jpg";
            }
    
            function newubtan(){
              document.getElementById("img-ubtan").src="ubtan 3.jpg";
              }
              function oldubtan(){
                document.getElementById("img-ubtan").src="ubtan 1.jpg";
                } 
                
                function newkasturi(){
                  document.getElementById("img-kasturi").src="kasturi 3.jpg";
                  }
                  function oldkasturi(){
                    document.getElementById("img-kasturi").src="kasturi 1.jpg";
                    }  
    
                    function newmasoor(){
                      document.getElementById("img-masoor").src="masoor 4.jpg";
                      }
                      function oldmasoor(){
                        document.getElementById("img-masoor").src="masoor 1.jpg";
                        }
    
                        function newsandel(){
                          document.getElementById("img-sandel").src="sandel 3.jpg";
                          }
                          function oldsandel(){
                            document.getElementById("img-sandel").src="sandel 1.jpg";
                            }
    
                            function newrose(){
                              document.getElementById("img-rose").src="rose 3.jpg";
                              }
                              function oldrose(){
                                document.getElementById("img-rose").src="rose 1.jpg";
                                }
    // -----------------------------------seeds products-----------------------------
    
    function newbasil(){
      document.getElementById("img-basil").src="basil 3.jpg";
      }
      function oldbasil(){
        document.getElementById("img-basil").src="basil 1.jpg";
        }
        function newchia(){
          document.getElementById("img-chia").src="chia 3.jpg";
          }
          function oldchia(){
            document.getElementById("img-chia").src="chia 1.jpg";
            }
            function newflex(){
              document.getElementById("img-flex").src="flex pack of 3.jpg";
              }
              function oldflex(){
                document.getElementById("img-flex").src="flex pack of 2.jpg";
                }
                function newjau(){
                  document.getElementById("img-jau").src="jau 3.jpg";
                  }
                  function oldjau(){
                    document.getElementById("img-jau").src="jau 1.jpg";
                    }
                    function newpumpkin(){
                      document.getElementById("img-pumpkin").src="pumpkin 3.jpg";
                      }
                      function oldpumpkin(){
                        document.getElementById("img-pumpkin").src="pumpkin 1.jpg";
                        }
                        function newshiv(){
                          document.getElementById("img-shiv").src="shiv 3.jpg";
                          }
                          function oldshiv(){
                            document.getElementById("img-shiv").src="shiv 1.jpg";
                            }
                            function newsunflower(){
                              document.getElementById("img-sunflower").src="sunflower 3.jpg";
                              }
                              function oldsunflower(){
                                document.getElementById("img-sunflower").src="sunflower 1.jpg";
                                }
                                function newsouf(){
                                  document.getElementById("img-souf").src="souf 3.jpg";
                                  }
                                  function oldsouf(){
                                    document.getElementById("img-souf").src="souf 1.jpg";
                                    }
                                   
    
          
    
    
                                    
                                    
      // ---------------------------------java script for cart checkout form ---------------------------------                              
      /* Set rates + misc */
    var taxRate = 0.05;
    var shippingRate = 15.00; 
    var fadeTime = 300;
    
    
    /* Assign actions */
    $('.product-quantity input').change( function() {
      updateQuantity(this);
    });
    
    $('.product-removal button').click( function() {
      removeItem(this);
    });
    
    
    /* Recalculate cart */
    function recalculateCart()
    {
      var subtotal = 0;
      
      /* Sum up row totals */
      $('.product').each(function () {
        subtotal += parseFloat($(this).children('.product-line-price').text());
      });
      
      /* Calculate totals */
      var tax = subtotal * taxRate;
      var shipping = (subtotal > 0 ? shippingRate : 0);
      var total = subtotal + tax + shipping;
      
      /* Update totals display */
      $('.totals-value').fadeOut(fadeTime, function() {
        $('#cart-subtotal').html(subtotal.toFixed(2));
        $('#cart-tax').html(tax.toFixed(2));
        $('#cart-shipping').html(shipping.toFixed(2));
        $('#cart-total').html(total.toFixed(2));
        if(total == 0){
          $('.checkout').fadeOut(fadeTime);
        }else{
          $('.checkout').fadeIn(fadeTime);
        }
        $('.totals-value').fadeIn(fadeTime);
      });
    }
    
    
    /* Update quantity */
    function updateQuantity(quantityInput)
    {
      /* Calculate line price */
      var productRow = $(quantityInput).parent().parent();
      var price = parseFloat(productRow.children('.product-price').text());
      var quantity = $(quantityInput).val();
      var linePrice = price * quantity;
      
      /* Update line price display and recalc cart totals */
      productRow.children('.product-line-price').each(function () {
        $(this).fadeOut(fadeTime, function() {
          $(this).text(linePrice.toFixed(2));
          recalculateCart();
          $(this).fadeIn(fadeTime);
        });
      });  
    }
    
    
    /* Remove item from cart */
    function removeItem(removeButton)
    {
      /* Remove row from DOM and recalc cart total */
      var productRow = $(removeButton).parent().parent();
      productRow.slideUp(fadeTime, function() {
        productRow.remove();
        recalculateCart();
      });
    }
    
    
    
    
    
    
    // -----------------------------zomming effcet of thumbline---------------------------------------
    /*!
        Zoom 1.7.21
        license: MIT
        http://www.jacklmoore.com/zoom
    */
    (function ($) {
        var defaults = {
            url: false,
            callback: false,
            target: false,
            duration: 120,
            on: 'mouseover', // other options: grab, click, toggle
            touch: true, // enables a touch fallback
            onZoomIn: false,
            onZoomOut: false,
            magnify: 1
        };
    
        // Core Zoom Logic, independent of event listeners.
        $.zoom = function(target, source, img, magnify) {
            var targetHeight,
                targetWidth,
                sourceHeight,
                sourceWidth,
                xRatio,
                yRatio,
                offset,
                $target = $(target),
                position = $target.css('position'),
                $source = $(source);
    
            // The parent element needs positioning so that the zoomed element can be correctly positioned within.
            target.style.position = /(absolute|fixed)/.test(position) ? position : 'relative';
            target.style.overflow = 'hidden';
            img.style.width = img.style.height = '';
    
            $(img)
                .addClass('zoomImg')
                .css({
                    position: 'absolute',
                    top: 0,
                    left: 0,
                    opacity: 0,
                    width: img.width * magnify,
                    height: img.height * magnify,
                    border: 'none',
                    maxWidth: 'none',
                    maxHeight: 'none'
                })
                .appendTo(target);
    
            return {
                init: function() {
                    targetWidth = $target.outerWidth();
                    targetHeight = $target.outerHeight();
    
                    if (source === target) {
                        sourceWidth = targetWidth;
                        sourceHeight = targetHeight;
                    } else {
                        sourceWidth = $source.outerWidth();
                        sourceHeight = $source.outerHeight();
                    }
    
                    xRatio = (img.width - targetWidth) / sourceWidth;
                    yRatio = (img.height - targetHeight) / sourceHeight;
    
                    offset = $source.offset();
                },
                move: function (e) {
                    var left = (e.pageX - offset.left),
                        top = (e.pageY - offset.top);
    
                    top = Math.max(Math.min(top, sourceHeight), 0);
                    left = Math.max(Math.min(left, sourceWidth), 0);
    
                    img.style.left = (left * -xRatio) + 'px';
                    img.style.top = (top * -yRatio) + 'px';
                }
            };
        };
    
        $.fn.zoom = function (options) {
            return this.each(function () {
                var
                settings = $.extend({}, defaults, options || {}),
                //target will display the zoomed image
                target = settings.target && $(settings.target)[0] || this,
                //source will provide zoom location info (thumbnail)
                source = this,
                $source = $(source),
                img = document.createElement('img'),
                $img = $(img),
                mousemove = 'mousemove.zoom',
                clicked = false,
                touched = false;
    
                // If a url wasn't specified, look for an image element.
                if (!settings.url) {
                    var srcElement = source.querySelector('img');
                    if (srcElement) {
                        settings.url = srcElement.getAttribute('data-src') || srcElement.currentSrc || srcElement.src;
                    }
                    if (!settings.url) {
                        return;
                    }
                }
    
                $source.one('zoom.destroy', function(position, overflow){
                    $source.off(".zoom");
                    target.style.position = position;
                    target.style.overflow = overflow;
                    img.onload = null;
                    $img.remove();
                }.bind(this, target.style.position, target.style.overflow));
    
                img.onload = function () {
                    var zoom = $.zoom(target, source, img, settings.magnify);
    
                    function start(e) {
                        zoom.init();
                        zoom.move(e);
    
                        // Skip the fade-in for IE8 and lower since it chokes on fading-in
                        // and changing position based on mousemovement at the same time.
                        $img.stop()
                        .fadeTo($.support.opacity ? settings.duration : 0, 1, $.isFunction(settings.onZoomIn) ? settings.onZoomIn.call(img) : false);
                    }
    
                    function stop() {
                        $img.stop()
                        .fadeTo(settings.duration, 0, $.isFunction(settings.onZoomOut) ? settings.onZoomOut.call(img) : false);
                    }
    
                    // Mouse events
                    if (settings.on === 'grab') {
                        $source
                            .on('mousedown.zoom',
                                function (e) {
                                    if (e.which === 1) {
                                        $(document).one('mouseup.zoom',
                                            function () {
                                                stop();
    
                                                $(document).off(mousemove, zoom.move);
                                            }
                                        );
    
                                        start(e);
    
                                        $(document).on(mousemove, zoom.move);
    
                                        e.preventDefault();
                                    }
                                }
                            );
                    } else if (settings.on === 'click') {
                        $source.on('click.zoom',
                            function (e) {
                                if (clicked) {
                                    // bubble the event up to the document to trigger the unbind.
                                    return;
                                } else {
                                    clicked = true;
                                    start(e);
                                    $(document).on(mousemove, zoom.move);
                                    $(document).one('click.zoom',
                                        function () {
                                            stop();
                                            clicked = false;
                                            $(document).off(mousemove, zoom.move);
                                        }
                                    );
                                    return false;
                                }
                            }
                        );
                    } else if (settings.on === 'toggle') {
                        $source.on('click.zoom',
                            function (e) {
                                if (clicked) {
                                    stop();
                                } else {
                                    start(e);
                                }
                                clicked = !clicked;
                            }
                        );
                    } else if (settings.on === 'mouseover') {
                        zoom.init(); // Preemptively call init because IE7 will fire the mousemove handler before the hover handler.
    
                        $source
                            .on('mouseenter.zoom', start)
                            .on('mouseleave.zoom', stop)
                            .on(mousemove, zoom.move);
                    }
    
                    // Touch fallback
                    if (settings.touch) {
                        $source
                            .on('touchstart.zoom', function (e) {
                                e.preventDefault();
                                if (touched) {
                                    touched = false;
                                    stop();
                                } else {
                                    touched = true;
                                    start( e.originalEvent.touches[0] || e.originalEvent.changedTouches[0] );
                                }
                            })
                            .on('touchmove.zoom', function (e) {
                                e.preventDefault();
                                zoom.move( e.originalEvent.touches[0] || e.originalEvent.changedTouches[0] );
                            })
                            .on('touchend.zoom', function (e) {
                                e.preventDefault();
                                if (touched) {
                                    touched = false;
                                    stop();
                                }
                            });
                    }
                    
                    if ($.isFunction(settings.callback)) {
                        settings.callback.call(img);
                    }
                };
    
                img.setAttribute('role', 'presentation');
                img.alt = '';
                img.src = settings.url;
            });
        };
    
        $.fn.zoom.defaults = defaults;
    }(window.jQuery));
    
    