@extends('admin.sidebar')
@section('sidebar')
@include('sweetalert::alert')


    <form class="home_form" method="POST" action="{{ route('updateAbout', ['id'=>isset($about->id)? $about->id : 0]) }}">
        @csrf @method('PUT')
        <h2>عن الاكاديمية</h2>
        {{-- <input class="w-full p-10 b-none rad-6" type="text" placeholder="Title" /> --}}
        <textarea id="about" name="about"  class=" p-20 h-20 b-none rad-6" placeholder="عن الاكاديمية">{{ $about->about ?? '' }}</textarea>
        <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit" value="حفظ" />
    </form>


@endsection
