@extends('admin.sidebar')
@section('sidebar')
@include('sweetalert::alert')


<section class="section">
 <div class="projects p-20 bg-white rad-10 m-20">
          <div class="d-flex justify-content-between">
          <h2 class="mt-0 mb-20">الشرائح </h2>
            <a href="{{route('storeSlide')}}"  style="height: 40px" class="btn btn-primary ">اضافة شريحة +</a>
        </div>
          <div class="responsive-table">
            <table class="fs-15 w-full ">
              <thead>
                <tr>
                    <td>الشريحة</td>
                    <td> اسم الشريحة</td>
                    <td>المضمون</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($slide as $item)
                <tr>

                    <td>{{$item['title']}}</td>
                    <td>{{$item['heading']}}</td>
                    <td>{{$item['description']}}</td>
                    <td style='display:flex;justify-content: center;align-items: center;gap:1rem'>
                        <button class="label btn-shape bg-green c-white" style='border-radius: 9999px;width:2rem;height: 2rem;display:flex;justify-content:center;align-items:center' title='تعديل'><i class='bx bx-edit' style='font-size:1.1rem'></i></button>
                        <form method="POST" action="{{route('deleteSlide',['id'=>$item->id])}}" accept-charset="UTF-8">
                            @csrf @method('delete')
                        <button class="label btn-shape bg-red c-white "
                        style='border-radius: 9999px;width:2rem;height: 2rem;display:flex;justify-content:center;align-items:center'
                        title='حذف'
                        onclick="return confirm('هل انت متاكد انك تريد الحذف ؟')"‏
                        ><i class='bx bxs-trash' style='font-size:1.1rem'></i></button>
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

