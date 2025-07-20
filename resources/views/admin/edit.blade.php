@extends('layouts.app')

@section('content')
    <h1>تعديل بيانات المدرسة</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.schools.update', $school) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>اسم المدرسة</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $school->name) }}" required>
        </div>

        <div class="form-group">
            <label>العنوان</label>
            <textarea name="address" class="form-control" required>{{ old('address', $school->address) }}</textarea>
        </div>

        <div class="form-group">
            <label>خط العرض (Latitude)</label>
            <input type="text" name="latitude" class="form-control" value="{{ old('latitude', $school->latitude) }}">
        </div>

        <div class="form-group">
            <label>خط الطول (Longitude)</label>
            <input type="text" name="longitude" class="form-control" value="{{ old('longitude', $school->longitude) }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">تحديث</button>
    </form>
@endsection
