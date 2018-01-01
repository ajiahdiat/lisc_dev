<!DOCTYPE html>
<html lang="en">
    <head>
	@include('includes.head')
    </head>
    <body>
		<!-- Top menu -->
		@include('includes.header')
        <!-- Top content -->
        @yield('content')
        <!-- Footer -->        
        <footer class="footer-container">
        @include('includes.footer')
        </footer>
        <!-- Javascript -->
        @include('includes.footerjs')
    </body>
</html>