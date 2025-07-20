@extends('layouts.app')

@section('content')
    <h1>قائمة المدارس</h1>

    <a href="{{ route('admin.schools.create') }}" class="btn btn-primary">إضافة مدرسة جديدة</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>الاسم</th>
                <th>العنوان</th>
                <th>الإحداثيات</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($schools as $school)
            <tr>
                <td>{{ $school->name }}</td>
                <td>{{ $school->address }}</td>
                <td>{{ $school->latitude }}, {{ $school->longitude }}</td>
                <td>
                    <a href="{{ route('admin.schools.edit', $school) }}" class="btn btn-sm btn-warning">تعديل</a>

                    <form action="{{ route('admin.schools.destroy', $school) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('هل أنت متأكد من حذف هذه المدرسة؟')" class="btn btn-sm btn-danger">حذف</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
