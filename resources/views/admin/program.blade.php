    @extends('admin.sidebar')
    @section('sidebar')
@include('sweetalert::alert')

<section class="section">
 <div class="projects m-20 p-20 bg-white rad-10">
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
                    <td></td>
                </tr>
            </thead>
            <tbody>
                    {{-- @dd($allUsers) --}}
                @foreach ($program as $item)
                <tr>
                    {{-- @dd($user) --}}
                    <td>{{$item['title']}}</td>
                    <td>{{$item['description']}}</td>
                    <td style='display:flex;align-items: center;gap:1rem'>
                        <a href="{{route('editProgram',$item->id)}}" class="label btn-shape bg-green c-white" style='border-radius: 9999px;width:2.5rem;height: 2.5rem;display:flex;justify-content:center;align-items:center'><i class='bx bx-edit' style='font-size:1.3rem'></i></a>
                    <form method="POST" action="{{route('deleteProgram',['id'=>$item->id])}}" accept-charset="UTF-8">
                        @csrf @method('delete')
                            <button class="label btn-shape bg-red c-white"
                            style='border-radius: 9999px;width:2.5rem;height: 2.5rem;display:flex;justify-content:center;align-items:center'
                                onclick="return confirm('هل انت متاكد انك تريد الحذف ؟')"‏
                                ><i class='bx bxs-trash' style='font-size:1.3rem'></i></button>
                    </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

</section>

    @endsection
