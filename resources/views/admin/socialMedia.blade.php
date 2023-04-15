@extends('admin.sidebar')
@section('sidebar')
@include('sweetalert::alert')


    <form class="home_form section" method="POST" action="{{ route('updateSocial', ['id'=>isset($socialMedia->id)? $socialMedia->id : 0]) }}">
        @csrf @method('PUT')
        <h2>مواقع التواصل </h2>
        <label for="title">الموقع </label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" placeholder="موقع" name="location" value="{{$socialMedia->location ?? ''}}"/>
        @error('location')
        {{ $message }}
        @enderror
        <label for="title">رقم الجوال </label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" placeholder="رقم الجوال" name="phone" value="{{$socialMedia->phone ?? ''}}"/>
        @error('phone')
        {{ $message }}
        @enderror
        <label for="title">البريد الالكتروني</label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" placeholder="ابريد الايكتروني" name="email" value="{{$socialMedia->email ?? ''}}"/>
        @error('email')
        {{ $message }}
        @enderror
        <label for="title">انستا</label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" placeholder="انستا" name="instagram" value="{{$socialMedia->instagram ?? ''}}"/>
        @error('instagram')
        {{ $message }}
        @enderror
        <label for="title">فيس بوك </label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" placeholder="فيس بوك" name="facebook" value="{{$socialMedia->facebook ?? ''}}"/>
        @error('facebook')
        {{ $message }}
        @enderror
        <label for="title">تويتر</label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" placeholder="تويتر" name="twitter" value="{{$socialMedia->twitter ?? ''}}"/>
        @error('twitter')
        {{ $message }}
        @enderror
        <label for="title">سناب شات</label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" placeholder="سناب" name="snap" value="{{$socialMedia->snap ?? ''}}"/>
        @error('snap')
        {{ $message }}
        @enderror        <input class="save btn btn-primary w-fit" type="submit" value="حفظ" />
    </form>


@endsection
