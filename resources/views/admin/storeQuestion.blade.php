@extends('admin.sidebar')
@section('sidebar')


<section class="mb-20 p-20">
        <h2 class="p-20">اضافة سؤال شائع</h2>
        <form class="home_form" method="POST" action="{{route('storeQuestions')}}"  enctype="multipart/form-data">
            @csrf
            <input class="w-full p-10 b-none rad-6" id="input" type="text" name="question" placeholder="السؤال" />
            @error('question')
        {{ $message }}
        @enderror
            <input class="w-full p-10 b-none rad-6" id="input" type="text" name="answer" placeholder=" الجواب" />
            @error('answer')
        {{ $message }}
        @enderror
            <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" name="submit" type="submit" value="حفظ" />
        </form>
    </section>


@endsection
