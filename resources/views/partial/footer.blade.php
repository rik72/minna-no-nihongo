        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-10 p-0 footer-left">
                <p class="mb-0">Copyright {{date('Y')}} © riccardo mazzei at gmail</p>
              </div>
              <div class="col-2 p-0 footer-right">     <i class="fa fa-heart font-danger">               </i></div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/config.js"></script>
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/prism/prism.min.js"></script>
    <script src="assets/js/clipboard/clipboard.min.js"></script>
    <script src="assets/js/custom-card/custom-card.js"></script>
    <script src="assets/js/typeahead/handlebars.js"></script>
    <script src="assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="assets/js/typeahead/typeahead.custom.js"></script>
    <script src="assets/js/typeahead-search/handlebars.js"></script>
    <script src="assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="assets/js/tooltip-init.js"></script>
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <!-- <script src="assets/js/theme-customizer/customizer.js"></script> -->
    <script>
      $(document).ready(function () {
        if ($("body").hasClass("box-layout")) {
          $(".sidebar-wrapper").addClass("close_icon");
          $(".page-header").addClass("close_icon");
        }
      });

      //  responsive sidebar
      var $window = $(window);
      var widthwindow = $window.width();
      var $nav = $(".sidebar-wrapper");
      var $header = $(".page-header");
      var $toggle_nav_top = $(".toggle-sidebar");

      (function ($) {
        "use strict";
        if (widthwindow <= 1400) {
          $toggle_nav_top.attr("checked", false);
          $nav.addClass("close_icon");
          $header.addClass("close_icon");
        }
      })(jQuery);
      $(window).resize(function () {
        var widthwindaw = $window.width();
        if (widthwindaw <= 1400) {
          $toggle_nav_top.attr("checked", false);
          $nav.addClass("close_icon");
          $header.addClass("close_icon");
        } 
        else if (widthwindaw => 1400) {
          $toggle_nav_top.attr("checked", true);
          $nav.removeClass("close_icon");
          $header.removeClass("close_icon");
        }
      });
    </script>
  </body>
</html>