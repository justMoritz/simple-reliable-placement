var srpjs = (function(){

  /**
   * Calculates the Aspect ratio,
   * saves it in a data-attribute on the element,
   * and also returns it
   */
  var _calculateAspectRatio = function( $elem ){

    var width = $elem.getAttribute('data-srp-width');
    var height = $elem.getAttribute('data-srp-height');
    var aspectratio = height / width;

    $elem.setAttribute('data-srp-aspectratio', aspectratio);

    $elem.style.paddingBottom = aspectratio * 100 + '%';

    return aspectratio;
  };


  var _recalcFontSizes = function( $parentelem ){

    var $allElementsWithFontSizes = $parentelem.querySelectorAll('[data-srp-fontsize]');
    var parentInchWidth = $parentelem.getAttribute('data-srp-width');
    var parentRenderWidth = $parentelem.offsetWidth;

    // loops through all elements with a font-size
    for (var f = 0; f < $allElementsWithFontSizes.length; f++) {
      var $this = $allElementsWithFontSizes[f];
      var desiredFontSize = $this.getAttribute('data-srp-fontsize');

      // There are 0.013888888888889 inches in 1 point.
      // To convert from points to inches, multiply your figure by 0.013888888888889 (or divide by 72) .
      var desiredFontSizeInInches = desiredFontSize / 72;

      // this callcularion is rough, and mainly a proof of concept
      // It's the ratio of the actual rendered width of the parent/brochure vs its desired inch width,
      // that ratio multiplied times the desiredPixelSize of the font
      var requiredFontSize = (parentRenderWidth / parentInchWidth) * desiredFontSizeInInches;

      $this.style.fontSize = requiredFontSize + 'px';
    }
  };



  var _updateElements = function( $childelem, $parentelem ){
    var parentHeight      = $parentelem.getAttribute('data-srp-height');
    var parentWidth       = $parentelem.getAttribute('data-srp-width');
    var parentAspectratio = $parentelem.getAttribute('data-srp-aspectratio');

    var width         = $childelem.getAttribute('data-srp-width');
    var height        = $childelem.getAttribute('data-srp-height');
    var left          = $childelem.getAttribute('data-srp-left');
    var top           = $childelem.getAttribute('data-srp-top');
    var iscenter      = $childelem.getAttribute('data-srp-iscenter');
    var fontsize      = $childelem.getAttribute('data-srp-fontsize');
    var text          = $childelem.getAttribute('data-srp-text');
    var textcolor     = $childelem.getAttribute('data-srp-textcolor');
    var bgimg         = $childelem.getAttribute('data-srp-bgimg');
    var letterspacing = $childelem.getAttribute('data-srp-letterspacing');


    // applies element styles
    if( width )
      $childelem.style.width = (width/parentWidth*100)+ '%';

    if( height )
      $childelem.style.height = (height/parentHeight*100)+ '%';

    if( left )
      $childelem.style.left = (left/parentWidth*100)+ '%';

    if( top )
      $childelem.style.top = (top/parentHeight*100)+ '%';

    if( textcolor )
      $childelem.style.color = textcolor;

    if( text )
      $childelem.innerHTML = text;

    if( letterspacing )
      $childelem.style.letterSpacing = letterspacing + 'em';

    if( bgimg )
      $childelem.style.backgroundImage = 'url("'+bgimg+'")';

    if( fontsize ){
      _recalcFontSizes( $parentelem );
    }

    if( iscenter ){
      $childelem.style.left = "50%";
      $childelem.classList.add('this--iscenter');
    }


  };


  // for each parent element...
  var _initElements = function( $parentelem ){

    // finds all child  `.srp__element`  elements
    var $childNodes = $parentelem.querySelectorAll('.srp__element');

    // runs the placement for each
    for (var x = 0; x < $childNodes.length; x++) {
      _updateElements( $childNodes[x], $parentelem );
    }

  };




  var init = function(){

    var $allSrts = document.querySelectorAll(".srp");

    for (var i = 0; i < $allSrts.length; i++) {
      _calculateAspectRatio( $allSrts[i] );
      _initElements( $allSrts[i] );
    }


    // on resize
    window.addEventListener("resize", function(){
      for (var j = 0; j < $allSrts.length; j++) {
        _recalcFontSizes( $allSrts[j] );
      }
    });


  };



 /**
  * Any JavaScript needed outside this object
  * is returned as a public method
  */
  return{
    init: init,
  };

})();