@extends('admin.sidebar')
@section('sidebar')
@include('sweetalert::alert')


<section class="m-20 pt-20 ">
        <div class="d-flex justify-content-between">
            <h2 class="p-10 "> الصور</h2>
            {{-- <button href="{{route('storeImage')}}"   class="btn btn-primary ">+</button> --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" style="height: 40px" data-target="#exampleModal">اضافة صورة +</button>
        </div>

        <style>
            #imgg{
                width:270px

            }
        </style>


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





    <div class=" container pt-20">
        <div class="row row-cols-3 gap-4">

    @foreach ($image as $item)
            {{-- @dd($teamWork) --}}
            <div class="card col px-0" style="width: 18rem;">
              <img src="{{url('http://localhost:8000/storage/imgs/'.$item->image)}}"  class="card-img-top"style="width: 287px" alt="...">
                <div class="card-body">
               <form method="POST" action="{{route('deleteImage',['id'=>$item->id])}}" accept-charset="UTF-8">
                        @csrf @method('delete')
                        </td>
                            <td><button class="label btn-shape bg-red c-white"
                                onclick="return confirm('Are you sure you want to delete this ?')"‏
                                >حذف</button>
                        </td>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

@endsection
