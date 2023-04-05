@extends('admin.sidebar')
@section('sidebar')


<section class="mb-20 p-20">
        <h2 class="p-20">اضافة شرط قبول</h2>
        <form class="home_form" method="POST" action="{{route('storeRequirements')}}"  enctype="multipart/form-data">
            @csrf
            <input class="w-full p-10 b-none rad-6" id="input" type="text" name="requirement" placeholder="شرط قبول" />
            @error('requirement')
        {{ $message }}
        @enderror
            <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" name="submit" type="submit" value="حفظ" />
        </form>
    </section>


@endsection
