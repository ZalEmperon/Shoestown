<!--Header = CSS/Font-->
@include('.partials.header')

<!--Navbar = Home/Catalog/About-->
@include('partials.navbar')

<!--Isi Konten-->
@yield('container')

<!--Footer = Tentang/Sosmed/Kontak-->
@include('partials.footer')

<!--JS/End-->
@include('partials.foot')