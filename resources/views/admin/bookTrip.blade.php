@extends('admin.sidebar')
@section('sidebar')



 <div class="projects p-20 bg-white rad-10 m-20">
          {{-- <div class="d-flex justify-content-between"> --}}
          <h2 class="mt-0 mb-20">اضافة شرط قبول</h2>
        
          <div class="responsive-table">
            <table class="fs-15 w-full ">
              <thead>
                <tr>
                    <td>الاسم</td>
                    <td>البريد الالكتروني</td>
                    <td>رقم الجوال</td>
                    <td>التاريخ</td>
                    <td>حذف</td>
                </tr>
            </thead>
            <tbody>
                    {{-- @dd($allUsers) --}}
                @foreach ($bookTrip as $item)
                <tr>
                    {{-- @dd($user) --}}
                    <td>{{$item['name']}}</td>
                    <td>{{$item['email']}}</td>
                    <td>{{$item['phone']}}</td>
                    <td>{{$item['date']}}</td>
                    <form method="POST" action="{{route('deleteReservation',['id'=>$item->id])}}" accept-charset="UTF-8">
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

