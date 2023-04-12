@extends('admin.sidebar')
@section('sidebar')
@include('sweetalert::alert')




 <div class="projects p-20 bg-white rad-10 m-20">
          <div class="d-flex justify-content-between">
          <h2 class="mt-0 mb-20">الاسئلة الشائعة</h2>
            <a href="{{route('storeQuestions')}}"  style="height: 40px" class="btn btn-primary ">اضافة سؤال   +</a>
        </div>
          <div class="responsive-table">
            <table class="fs-15 w-full ">
              <thead>
                <tr>
                    <td>السؤال</td>
                    <td>الجواب </td>
                    <td>تعديل</td>
                    <td>حذف</td>
                </tr>
            </thead>
            <tbody>
                    {{-- @dd($allUsers) --}}
                @foreach ($commonQuestions as $item)
                <tr>
                    {{-- @dd($user) --}}
                    <td>{{$item['question']}}</td>
                    <td>{{$item['answer']}}</td>
                        <td><a href="{{route('editQuestions',$item->id)}}" class="label btn-shape bg-green c-white">Edit</a>
                    </td>
                    <form method="POST" action="{{route('deleteQuestions',['id'=>$item->id])}}" accept-charset="UTF-8">
                        @csrf @method('delete')
                        </td>
                            <td><button class="label btn-shape bg-red c-white "
                                onclick="return confirm('Are you sure you want to delete this category?')"‏
                                >Delete</button>
                        </td>
                    </form>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>



@endsection

