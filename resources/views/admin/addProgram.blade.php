@extends('admin.sidebar')
@section('sidebar')


    <section class="mb-20 p-20">
        <h2 class="p-20">اضافة برنامج</h2>
        <form class="home_form" method="POST" action="{{route('storeProgram')}}"  enctype="multipart/form-data">
            @csrf
            <input class="w-full p-10 b-none rad-6" id="input" type="text" name="title" placeholder="اسم البرنامج" />
            @error('title')
            {{ $message }}
            @enderror
            <textarea class=" form-control p-20 h-20 b-none rad-6" id="about-slide" type="text" name="description" placeholder="التفاصيل" ></textarea>
            @error('description')
            {{ $message }}
            @enderror
            <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" name="submit" type="submit" value="حفظ" />
        </form>
    </section>

@endsection
