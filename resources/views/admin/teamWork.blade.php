@extends('admin.sidebar')
@section('sidebar')
@include('sweetalert::alert')




<section class="m-20 pt-20 ">
        <div class="d-flex justify-content-between">
            <h2 class="p-10 ">فريق العمل</h2>
            <a href="{{route('addTeamWork')}}"  style="height: 40px" class="btn btn-primary ">اضافة عضو +</a>
        </div>

    <div class=" container pt-20">
        <div class="row row-cols-3 gap-4">

    @foreach ($teamWork as $item)
            {{-- @dd($teamWork) --}}
            <div class="card col px-0" style="width: 18rem;">
              <img src="{{url('http://localhost:8000/storage/imgs/'.$item->image)}}"  class="card-img-top" style="width: 287px" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$item['title']}}</h5>
                <h5 class="card-title">{{$item['name']}}</h5>
                <h5 class="card-title">{{$item['flyingHour']}}</h5>
               <form method="POST" action="{{route('deleteTeamWork',['id'=>$item->id])}}" accept-charset="UTF-8">
                        @csrf @method('delete')
                        </td>
                            <td><button class="btn btn-danger"
                                onclick="return confirm('هل انت متاكد انك تريد الحذف?')"‏
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
