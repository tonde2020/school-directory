<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>عنوان الموقع</title>
    <!-- أضف ملفات CSS هنا -->
</head>
<body>

    @yield('content')
<form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger">تسجيل الخروج</button>
</form>

</body>
</html>
