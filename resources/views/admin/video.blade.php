@extends('admin.sidebar')
@section('sidebar')
@include('sweetalert::alert')


<section class="m-20 pt-20 ">
        <div class="d-flex justify-content-between">
            <h2 class="p-10 "> الفيديوهات</h2>
            @error('video')
            {{$message}}
            @enderror
            {{-- <button href="{{route('storeImage')}}"   class="btn btn-primary ">+</button> --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" style="height: 40px" data-target="#exampleModal">اضافة فيديو +</button>
        </div>


<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">اضافة فيديو </h5>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('storeVideo')}}" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <input type="file" name="video" class="form-control">
            @error('video')
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

    @foreach ($video as $item)
            {{-- @dd($teamWork) --}}
            <div class="card col" style="width: 18rem;">
                <video width="640" height="360" controls>
                    <source src="{{url('http://localhost:8000/storage/videos/'.$item->video)}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>                <div class="card-body">
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
