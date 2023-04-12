@extends('admin.sidebar')
@section('sidebar')
@include('sweetalert::alert')


<style>
    #ima{
/* "width: 287px"  */
    }
</style>


<section class="section p-20 ">
        <div class="d-flex justify-content-between">
            <h2 class="p-10 "> الصور</h2>
            @error('image')
            {{$message}}
            @enderror
            {{-- <button href="{{route('storeImage')}}"   class="btn btn-primary ">+</button> --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" style="height: 40px" data-target="#exampleModal">اضافة صورة +</button>
        </div>


<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">اضافة صورة </h5>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('storeImage')}}" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <input type="file" name="image" class="form-control">
            @error('image')
            {{$message}}
            @enderror
          </div>

          <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-primary" >حفظ</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
      </div>
        </form>
      </div>

    </div>
  </div>
</div>





    <div class="container pt-20">
        <div class="row row-cols-3 gap-4">

    @foreach ($image as $item)
            {{-- @dd($teamWork) --}}
    <div class="card text-white p-0" style='height: 250px'>
<img class="card-img" src="{{url('http://localhost:8000/storage/imgs/'.$item->image)}}" id="ima" style='overflow: hidden; object-fit: cover;height: 100%' alt="Card image" >
<div class="card-img-overlay" style='overflow: hidden;' data-toggle="modal" data-target="#exampleModal2">
<form method="POST" action="{{route('deleteImage',['id'=>$item->id])}}" accept-charset="UTF-8">
@csrf @method('delete')
<button class="border-none btn-shape bg-red c-white delete-btn">
    <i class='bx bx-trash'></i>
                </button>
            </form>
</div>
</div>
            @endforeach
        </div>
    </div>


</section>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">عرض الصورة </h5>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{url('http://localhost:8000/storage/imgs/'.$item->image)}}" alt="show" style='width: 100%'>
      </div>

    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


@endsection
