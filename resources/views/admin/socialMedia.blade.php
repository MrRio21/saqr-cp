@extends('admin.sidebar')
@section('sidebar')
@include('sweetalert::alert')


    <form class="home_form section" method="POST" action="{{ route('updateSocial', ['id'=>isset($socialMedia->id)? $socialMedia->id : 0]) }}">
        @csrf @method('PUT')
        <h2>مواقع التواصل </h2>
        <input class="w-full p-10 b-none rad-6" type="text" placeholder="موقع" name="location" value="{{$socialMedia->location ?? ''}}"/>
        <input class="w-full p-10 b-none rad-6" type="text" placeholder="رقم الجوال" name="phone" value="{{$socialMedia->phone ?? ''}}"/>
        <input class="w-full p-10 b-none rad-6" type="text" placeholder="ابريد الايكتروني" name="email" value="{{$socialMedia->email ?? ''}}"/>
        <input class="w-full p-10 b-none rad-6" type="text" placeholder="انستا" name="instagram" value="{{$socialMedia->instagram ?? ''}}"/>
        <input class="w-full p-10 b-none rad-6" type="text" placeholder="فيس بوك" name="facebook" value="{{$socialMedia->facebook ?? ''}}"/>
        <input class="w-full p-10 b-none rad-6" type="text" placeholder="تويتر" name="twitter" value="{{$socialMedia->twitter ?? ''}}"/>
        <input class="w-full p-10 b-none rad-6" type="text" placeholder="سناب" name="snap" value="{{$socialMedia->snap ?? ''}}"/>
        {{-- <textarea id="about" name="about"  class=" p-20 h-20 b-none rad-6" placeholder="عن الاكاديمية">{{ $about->about ?? '' }}</textarea> --}}
        <input class="save btn btn-primary" type="submit" value="حفظ" />
    </form>


@endsection
