@extends('admin.sidebar')
@section('sidebar')


<section class="section">
 <div class="projects p-20 bg-white rad-10 m-20">
          {{-- <div class="d-flex justify-content-between"> --}}
          <h2 class="mt-0 mb-20">الحجوزات</h2>

          <div class="responsive-table">
            <table class="fs-15 w-full ">
              <thead>
                <tr>
                    <th scope='col'>الاسم</td>
                    <th scope='col'>البريد الالكتروني</td>
                    <th scope='col'>رقم الجوال</td>
                    <th scope='col'>التاريخ</td>
                    <th scope='col'></td>
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
                            style='border-radius: 9999px;width:2rem;height: 2rem;display:flex;justify-content:center;align-items:center'
                        title='حذف'
                                onclick="return confirm('Are you sure you want to delete this category?')"‏
                                ><i class='bx bxs-trash' style='font-size:1.1rem'></i></button>
                        </td>
                    </form>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
</section>


@endsection

