@extends('admin.sidebar')
@section('sidebar')
@include('sweetalert::alert')



<section class="section">
 <div class="projects p-20 bg-white rad-10 m-20">
          <div class="d-flex justify-content-between">
          <h2 class="mt-0 mb-20">الاسئلة الشائعة</h2>
            <a href="{{route('storeQuestions')}}"  style="height: 40px" class="btn btn-primary ">اضافة سؤال   +</a>
        </div>
          <div class="responsive-table">
            <table class="fs-15 w-full ">
              <thead>
                <tr>
                    <th class='col'>السؤال</th>
                    <th class='col'>الجواب </th>
                    <th class='col'></th>
                </tr>
            </thead>
            <tbody>
                    {{-- @dd($allUsers) --}}
                @foreach ($commonQuestions as $item)
                <tr>
                    {{-- @dd($user) --}}
                    <td>{{$item['question']}}</td>
                    <td>{{$item['answer']}}</td>
                <td style='display: flex;justify-content: center;align-items:center;gap: 1rem'>
                <a href="{{route('editQuestions',$item->id)}}" class="label btn-shape bg-green c-white" style='border-radius: 9999px;width:2rem;height: 2rem;display:flex;justify-content:center;align-items:center' title='تعديل'><i class='bx bx-edit' style='font-size:1.1rem'></i></a>
                <form method="POST" action="{{route('deleteQuestions',['id'=>$item->id])}}" accept-charset="UTF-8">
                    @csrf @method('delete')
                            <button class="label btn-shape bg-red c-white"
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

