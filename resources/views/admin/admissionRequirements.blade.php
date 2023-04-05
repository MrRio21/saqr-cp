@extends('admin.sidebar')
@section('sidebar')



 <div class="projects p-20 bg-white rad-10 m-20">
          <div class="d-flex justify-content-between">
          <h2 class="mt-0 mb-20">اضافة شرط قبول</h2>
            <a href="{{route('storeRequirements')}}"  style="height: 40px" class="btn btn-primary ">+</a>
        </div>
          <div class="responsive-table">
            <table class="fs-15 w-full ">
              <thead>
                <tr>
                    <td>الرقم</td>
                    <td>شروط القبول</td>
                    <td>تعديل</td>
                    <td>حذف</td>
                </tr>
            </thead>
            <tbody>
                    {{-- @dd($allUsers) --}}
                @foreach ($admissionRequirements as $item)
                <tr>
                    {{-- @dd($user) --}}
                    <td>{{$item['id']}}</td>
                    <td>{{$item['requirement']}}</td>
                        <td><button class="label btn-shape bg-green c-white">Edit</button>
                    </td>
                    <form method="POST" action="{{route('deleteRequirement',['id'=>$item->id])}}" accept-charset="UTF-8">
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

