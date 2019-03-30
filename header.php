<!DOCTYPE html>
<html>

  <head>

    <title>iToucan</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="script/js.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">

    //meni za mobilni
      $(document).ready(function(){
        $('.mn').click(function(){
          $('.linijaMenija').toggleClass('active');
        });
      });

      //pomeranje anchor sadrzaja ispod nivoa header-a
      (function(document, history, location) {
  var HISTORY_SUPPORT = !!(history && history.pushState);

  var anchorScrolls = {
    ANCHOR_REGEX: /^#[^ ]+$/,
    OFFSET_HEIGHT_PX: 100,

    /**
     * Establish events, and fix initial scroll position if a hash is provided.
     */
    init: function() {
      this.scrollToCurrent();
      window.addEventListener('hashchange', this.scrollToCurrent.bind(this));
      document.body.addEventListener('click', this.delegateAnchors.bind(this));
    },

    /**
     * Return the offset amount to deduct from the normal scroll position.
     * Modify as appropriate to allow for dynamic calculations
     */
    getFixedOffset: function() {
      return this.OFFSET_HEIGHT_PX;
    },

    /**
     * If the provided href is an anchor which resolves to an element on the
     * page, scroll to it.
     * @param  {String} href
     * @return {Boolean} - Was the href an anchor.
     */
    scrollIfAnchor: function(href, pushToHistory) {
      var match, rect, anchorOffset;

      if(!this.ANCHOR_REGEX.test(href)) {
        return false;
      }

      match = document.getElementById(href.slice(1));

      if(match) {
        rect = match.getBoundingClientRect();
        anchorOffset = window.pageYOffset + rect.top - this.getFixedOffset();
        window.scrollTo(window.pageXOffset, anchorOffset);

        // Add the state to history as-per normal anchor links
        if(HISTORY_SUPPORT && pushToHistory) {
          history.pushState({}, document.title, location.pathname + href);
        }
      }

      return !!match;
    },

    /**
     * Attempt to scroll to the current location's hash.
     */
    scrollToCurrent: function() {
      this.scrollIfAnchor(window.location.hash);
    },

    /**
     * If the click event's target was an anchor, fix the scroll position.
     */
    delegateAnchors: function(e) {
      var elem = e.target;

      if(
        elem.nodeName === 'A' &&
        this.scrollIfAnchor(elem.getAttribute('href'), true)
      ) {
        e.preventDefault();
      }
    }
  };

  window.addEventListener(
    'DOMContentLoaded', anchorScrolls.init.bind(anchorScrolls)
  );
})(window.document, window.history, window.location);
    </script>
  </head>

  <body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <header>
      <div class="meni">
          <div class = "logo">
            <a href="index.php"><img src="slike/tkn.png"></a>
          </div>
          <div class="toggle">
            <i class="fa fa-bars mn" aria-hidden="true"></i>
          </div>
          <ul class="linijaMenija">
            <li class="active"><a href= "index.php">Home</a></li>
            <li><a href="index.php#tekstOKompaniji">Company</a></li>
            <li><a href="index.php#proizvodi">Products</a></li>
            <li><a href="index.php#zaposleniUKompaniji">About us</a></li>
            <li><a href="index.php#karijera">Careers</a></li>
            <li><a href="index.php#contct">Contact</a></li>
            <li><a href="index.php#blog">Blog</a></li>
          </ul>
       </div>
       <script type="text/javascript">

       </script>
     </header>
     <div class="natpis">
         <img src="slike/natpis.png">
     </div>
