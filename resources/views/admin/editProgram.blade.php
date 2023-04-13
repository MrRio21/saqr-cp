@extends('admin.sidebar')
@section('sidebar')



<section class="section mb-20 p-20">
    <h2 class="p-20">تعديل برنامج</h2>
    <form class="home_form" action="{{ route('updateProgram', ['id'=>$editProgram->id]) }}"  enctype="multipart/form-data"   method="POST">
        @csrf
        @method('PUT')
        <label for="title">اسم البرنامج</label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" name="title" value="{{ $editProgram->title }}" />
        @error('title')
        {{ $message }}
        @enderror
        <label for="description"> البرنامج</label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" name="description" value="{{ $editProgram->description }}" />
        @error('description')
        {{ $message }}
        @enderror
        <input class="save btn btn-primary w-fit" name="submit" type="submit" value="تعديل" />
        </form>
    </section>

@endsection
