<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index() {
        $schools = School::all();
        return view('admin.schools.index', compact('schools'));
    }

    public function create() {
        return view('admin.schools.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);
        School::create($request->all());
        return redirect()->route('admin.schools.index')->with('success', 'تمت إضافة المدرسة بنجاح');
    }

    public function edit(School $school) {
        return view('admin.schools.edit', compact('school'));
    }

    public function update(Request $request, School $school) {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);
        $school->update($request->all());
        return redirect()->route('admin.schools.index')->with('success', 'تم تحديث بيانات المدرسة');
    }

    public function destroy(School $school) {
        $school->delete();
        return redirect()->route('admin.schools.index')->with('success', 'تم حذف المدرسة');
    }
}
