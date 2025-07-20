@extends('layouts.app')

@section('content')
    <h1>إضافة مدرسة جديدة</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.schools.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>اسم المدرسة</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label>العنوان</label>
            <textarea name="address" class="form-control" required>{{ old('address') }}</textarea>
        </div>

        <div class="form-group">
            <label>خط العرض (Latitude)</label>
            <input type="text" name="latitude" class="form-control" value="{{ old('latitude') }}">
        </div>

        <div class="form-group">
            <label>خط الطول (Longitude)</label>
            <input type="text" name="longitude" class="form-control" value="{{ old('longitude') }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">حفظ</button>
    </form>
@endsection
