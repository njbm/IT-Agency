<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @include('Frontend.layouts.layout_parts.css')
  </head>
  <body>
    <!-- ========== haader  ======== -->
    @include('Frontend.layouts.layout_parts.header')
    <!-- ========= Header End ======= -->

    <!-- ======== Main  ======== -->
@yield('main')
    <!-- ========= Main  ======== -->
    <!-- ========== Footer  ======== -->

    @include('Frontend.layouts.layout_parts.footer')

    <!-- ============Footer End  ========= -->

    @include('Frontend.layouts.layout_parts.scripts')
  </body>
</html>
