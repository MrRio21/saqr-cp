@extends('admin.sidebar')
@section('sidebar')


<section class="section">
 <div class="projects p-20 bg-white rad-10 m-20">
          <div class="d-flex justify-content-between">
          <h2 class="mt-0 mb-20">اضافة شرط قبول</h2>
            <a href="{{route('storeRequirements')}}"  style="height: 40px" class="btn btn-primary ">اضافة شرط قبول +</a>
        </div>
          <div class="responsive-table">
            <table class="fs-15 w-full ">
              <thead>
                <tr>
                    <td>الرقم</td>
                    <td>شروط القبول</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                    {{-- @dd($allUsers) --}}
                @foreach ($admissionRequirements as $item)
                <tr>
                    {{-- @dd($user) --}}
                    <td>{{$item['id']}}</td>
                    <td>{{$item['requirement']}}</td>

                <td  style='display:flex;align-items:center;gap:1rem'>
                    <a href="{{route('editRequirements',$item->id)}}" class="label btn-shape bg-green c-white"style='border-radius: 9999px;width:2rem;height: 2rem;display:flex;justify-content:center;align-items:center' title='تعديل'><i class='bx bx-edit' style='font-size:1.1rem'></i></a>
                    <form method="POST" action="{{route('deleteRequirement',['id'=>$item->id])}}" accept-charset="UTF-8">
                        @csrf @method('delete')
                            <button class="label btn-shape bg-red c-white "
                            style='border-radius: 9999px;width:2rem;height: 2rem;display:flex;justify-content:center;align-items:center'
                        title='حذف'
                                onclick="return confirm('Are you sure you want to delete this category?')"‏
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

