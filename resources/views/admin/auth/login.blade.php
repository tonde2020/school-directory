<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8" />
    <title>تسجيل دخول المشرف</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="text-center">تسجيل دخول المشرف</h1>

        @if($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <label for="email">البريد الإلكتروني</label>
            <input type="email" id="email" name="email" required autofocus>

            <label for="password">كلمة المرور</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="دخول">
        </form>
    </div>
</body>
</html>
