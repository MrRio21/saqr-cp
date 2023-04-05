@extends('admin.sidebar')
@section('sidebar')
@include('sweetalert::alert')


<section class="m-20 pt-20 ">
        <div class="d-flex justify-content-between">
            <h2 class="p-10 "> الفيديوهات</h2>
            <button href="{{route('storeVideo')}}"  style="height: 40px" class="btn btn-primary ">+</button>
        </div>

    <div class=" container pt-20">
        <div class="row row-cols-3 gap-4">

    @foreach ($video as $item)
            {{-- @dd($teamWork) --}}
            <div class="card col" style="width: 18rem;">
              <img src="{{url('http://localhost:8000/storage/imgs/'.$item->video)}}"  class="card-img-top" alt="...">
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


@endsection
