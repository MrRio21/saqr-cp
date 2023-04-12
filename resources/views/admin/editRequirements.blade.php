@extends('admin.sidebar')
@section('sidebar')



<section class="section mb-20 p-20">
    <h2 class="p-20">تعديل شرط القبول</h2>
    <form class="home_form" action="{{ route('updateRequirements', ['id'=>$editRequirements->id]) }}"  enctype="multipart/form-data"   method="POST">
        @csrf
        @method('PUT')
        <label for="title"> شرط القبول</label>
        <input class="w-full p-10 b-none rad-6" id="input" type="text" name="requirement" value="{{ $editRequirements->requirement }}" />
        @error('requirements')
        {{ $message }}
        @enderror
        <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" name="submit" type="submit" value="تعديل" />
        </form>
    </section>

@endsection
