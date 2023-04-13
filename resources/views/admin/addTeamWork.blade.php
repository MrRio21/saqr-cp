@extends('admin.sidebar')
@section('sidebar')

    <section class="section mb-20 p-20">
        <h2 class="p-20">اضافة فريق عمل</h2>
        <form class="home_form" method="POST" action="{{route('storeTeamWork')}}"  enctype="multipart/form-data">
            @csrf
            <input class="w-full p-10 b-none rad-6" id="input" type="text" name="name" placeholder="الاسم" />
            @error('name')
            {{ $message }}
            @enderror
            <input class="w-full p-10 b-none rad-6" id="input" type="text" name="title" placeholder="اللقب" />
            @error('title')
            {{ $message }}
            @enderror
            <input class="w-full p-10 b-none rad-6" id="input" type="text" name="flyingHour" placeholder="ساعات الطيران" />
            @error('flyingHour')
            {{ $message }}
            @enderror
            <!-- <input class="w-full p-10 b-none rad-6" id="input" type="file" name="image" /> -->
            <input type="file" name="image" id='input' class="form-control h-auto">
            @error('image')
            {{ $message }}
            @enderror
            <input class="save btn btn-primary w-fit" name="submit" type="submit" value="حفظ" />
        </form>
    </section>

@endsection
