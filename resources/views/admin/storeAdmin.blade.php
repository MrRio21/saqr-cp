@extends('admin.sidebar')
@section('sidebar')

    <section class="section mb-20 p-20">
        <h2 class="p-20">اضافة مسئول</h2>
        <form class="home_form" method="POST" action="{{route('storeAdmin')}}"  enctype="multipart/form-data">
            @csrf
            <input class="w-full p-10 b-none rad-6" id="input" type="text" name="f_name" placeholder="الاسم" />
            @error('f_name')
            {{ $message }}
            @enderror
            <input class="w-full p-10 b-none rad-6" id="input" type="email" name="email" placeholder="البريد الالكتروني" />
            @error('email')
            {{ $message }}
            @enderror
            <input class="w-full p-10 b-none rad-6" id="input" type="password" name="password" placeholder=" كلمة المرور" />
            @error('password')
            {{ $message }}
            @enderror
            <input class="w-full p-10 b-none rad-6" id="input" type="text" name="phone" placeholder=" رقم الجوال" />
            @error('phone')
            {{ $message }}
            @enderror
            <input class="save btn btn-primary w-fit" name="submit" type="submit" value="حفظ" />
        </form>
    </section>

@endsection
