@extends('admin.sidebar')
@section('sidebar')


  <section class="mb-20 p-20">
        <h2 class="p-20">اضافة  شريحة</h2>

<form class="home_form" method="POST"  action="{{ route('storeSlide') }}">
    @csrf

    <div class="form-group">
        <input type="text" class="w-full p-10 b-none rad-6" id="input" placeholder="اسم الشريحة"  name="title" class="form-control" required>
    </div>

    <div class="form-group">
        <input type="text" class="w-full p-10 b-none rad-6" id="input"  name="heading" class="form-control" placeholder="لشريحة" required>
    </div>

        <textarea name="description"  class=" form-control p-20 h-20 b-none rad-6" id="about-slide" placeholder="المضمون"  required></textarea>


    <div>
        <button type="button" class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape mb-2 " onclick="showInput()">Add Item</button>
        <div id="inputs" class="d-flex flex-wrap">
            {{-- <label for="items">Items</label><br> --}}
        <input type="text" name="items[]" class=" p-10 b-none rad-6 mb-15" id="input" placeholder="item" required>
    </div>
</div>
<input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit" value="حفظ" />
</form>

  </section>



<script>
  function showInput() {
    var inputs = document.getElementById("inputs");
    var count = inputs.getElementsByTagName("input").length + 1;
    var newInput = document.createElement("input");
    newInput.type = "text";
    newInput.name = "items[]";
    newInput.className = " p-10 b-none rad-6 me-1";
    newInput.placeholder = "Item " + count;
    newInput.required = true;
    inputs.appendChild(newInput);
  }
</script>


@endsection
