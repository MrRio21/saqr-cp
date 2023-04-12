@extends('admin.sidebar')
@section('sidebar')



<section class="mb-20 p-20">
    <h2 class="p-20">تعديل سؤال </h2>
    <form class="home_form" action="{{ route('updateQuestions', ['id'=>$editQuestion->id]) }}"  enctype="multipart/form-data"   method="POST">
        @csrf
        @method('PUT')
        <label for="title">السؤال </label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" name="question" value="{{ $editQuestion->question }}" />
        @error('question')
        {{ $message }}
        @enderror
        <label for="title">الاجابة </label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" name="answer" value="{{ $editQuestion->answer }}" />
        @error('answer')
        {{ $message }}
        @enderror
        <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" name="submit" type="submit" value="تعديل" />
        </form>
    </section>

@endsection
