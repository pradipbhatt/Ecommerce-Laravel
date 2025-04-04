<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
  </head>
  <body>
     @include('admin.sidebar');
      <!-- partial -->
       @include('admin.navbar');
        <!-- partial -->
        @include('admin.body');

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
            </div>
          </footer>
          <!-- partial -->
       @include('admin.script');
  </body>
</html>