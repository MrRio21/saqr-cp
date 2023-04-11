    @extends('admin.sidebar')
    @section('sidebar')
@include('sweetalert::alert')


 <div class="projects p-20 bg-white rad-10 m-20">
          <div class="d-flex justify-content-between">
          <h2 class="mt-0 mb-20">البرامج</h2>
            <a href="{{route('storeProgram')}}"  style="height: 40px" class="btn btn-primary "> اضافة برنامج  +</a>
        </div>
          <div class="responsive-table">
            <table class="fs-15 w-full ">
              <thead>
                <tr>
                    <td>اسم البرنامج</td>
                    <td>البرنامج </td>
                    <td>تعديل</td>
                    <td>حذف</td>
                </tr>
            </thead>
            <tbody>
                    {{-- @dd($allUsers) --}}
                @foreach ($program as $item)
                <tr>
                    {{-- @dd($user) --}}
                    <td>{{$item['title']}}</td>
                    <td>{{$item['description']}}</td>
                        <td><a href="{{route('editProgram',$item->id)}}" class="label btn-shape bg-green c-white">تعديل</a>
                    </td>
                    <form method="POST" action="{{route('deleteProgram',['id'=>$item->id])}}" accept-charset="UTF-8">
                        @csrf @method('delete')
                        </td>
                            <td><button class="label btn-shape bg-red c-white "
                                onclick="return confirm('هل انت متاكد انك تريد الحذف ؟')"‏
                                >حذف</button>
                        </td>
                    </form>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>



    @endsection
