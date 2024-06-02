<!DOCTYPE html>
<html>

<head>
  @include('includes.head')
</head>

<body>

    <!-- header section strats -->
    <header class="header_section">
    @include('includes.headerSection')
    </header>
    <!-- end header section -->

  @yield('content')

    
    <!-- footer section -->
    @include('includes.footer')
    <!-- footer section -->

    @include('includes.footerJS')

</body>

</html>