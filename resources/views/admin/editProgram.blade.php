@extends('admin.sidebar')
@section('sidebar')


{{-- <form method="POST" action="{{ route('updateProgram', $editProgram->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $editProgram->title }}">
    <br>
    <textarea name="description">{{ $editProgram->description }}</textarea>
    <br>
    <input type="submit" value="Update">
</form> --}}


<section class="mb-20 p-20">
    <h2 class="p-20">تعديل برنامج</h2>
    <form class="home_form" action="{{ route('updateProgram', ['id'=>$editProgram->id]) }}"  enctype="multipart/form-data"   method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" name="title" value="{{ $editProgram->title }}" />
        @error('title')
        {{ $message }}
        @enderror
        <label for="description">Description</label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" name="description" value="{{ $editProgram->description }}" />
        @error('description')
        {{ $message }}
        @enderror
        <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" name="submit" type="submit" value="تعديل" />
        </form>
    </section>

@endsection
