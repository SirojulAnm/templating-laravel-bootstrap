<!DOCTYPE html>
<html>
    <head>
        <title>Tutorial Laravel 8 #6 : Template Blade Laravel</title>
    </head>
    
    <body>


        <header>
            <h2>Blog Pertamaku</h2>
            <nav>
                <a href="{{ url('/blog')}}">HOME</a>
                |
                <a href="{{ url('/blog/tentang')}}">TENTANG</a>
                |
                <a href="{{ url('/blog/kontak')}}">KONTAK</a>
            </nav>
        </header>
        <hr/>
        <br/>
        <br/>

        <!-- bagian judul halaman blog -->
        <h3> @yield('judul_halaman') </h3>

        <!-- bagian konten blog -->
        @yield('konten')

        <br/>
        <br/>
        <hr/>
        <footer>
            <p>&copy; 2020</p>
        </footer>
    </body>
</html>