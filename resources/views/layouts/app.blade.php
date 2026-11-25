<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>
    @yield('title')
    </title>
</head>
<body>
    <header>
        <a href="{{ route('books.index') }}" class="link-biasa"><h1>Library System</h1></a>

        <style>
            .link-biasa {
                color: inherit;          /* ikut warna teks di sekitarnya */
                text-decoration: none;   /* hilangkan garis bawah */ 
            }
        </style>

        <nav>
            <a href="/dashboard">Dashboard</a>
            <a href="/books">Books</a>
            <a href="/categories">Categories</a>
            <a href="/members">Members</a>
            @can('manage-users')
            <a href="/users">
                Kelola Pengguna
            </a>
            @endcan
        </nav>

        <br>

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit">Logout</button>
        </form>

        <hr>

    </header>

    <main>@yield('content')</main>

    <footer>
        <hr>
        <p>Library System</p>
    </footer>
</body>
</html>