<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8" />
    <title>لوحة تحكم المشرف</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="navbar">لوحة تحكم المشرف</div>
    <div class="container">
        <h2>مرحباً، {{ Auth::guard('admin')->user()->name }}</h2>
        <p>هذه هي لوحة التحكم الخاصة بالمشرف.</p>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit">تسجيل خروج</button>
        </form>
    </div>
</body>
</html>
