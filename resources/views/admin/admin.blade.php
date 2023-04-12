
@extends('admin.sidebar')
@section('sidebar')



<style>
    body{
        /* direction: rtl; */
    }
</style>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main class='section'>
			<h1 class="title"> الرئيسية</h1>

            <div class="projects p-20 bg-white rad-10 m-20">
             <div class="d-flex justify-content-between">
              <h2 class="mt-0 mb-20">المسئولين</h2>
                <a href="{{route('storeAdmin')}}"  style="height: 40px" class="btn btn-primary "> اضافة مسئول  +</a>
            </div>
            <div class="responsive-table">
                <table class="fs-15 w-full">
                  <thead>
                    <tr>
                        <td>الاسم</td>
                        <td>الايميل</td>
                        <td>رقم الجوال</td>
                        {{-- <td>تعديل</td> --}}
                        <td>حذف</td>
                    </tr>
                </thead>
                <tbody>
                        {{-- @dd($allUsers) --}}
                    @foreach ($admin as $item)
                    <tr>
                        {{-- @dd($user) --}}
                        <td>{{$item['f_name']}}</td>
                        <td>{{$item['email']}}</td>
                        <td>{{$item['phone']}}</td>
                            {{-- <td><button class="label btn-shape bg-green c-white">تعديل</button> --}}
                        </td>
                        <form method="POST" action="{{route('deleteUser',['id'=>$item->id])}}" accept-charset="UTF-8">
                            @csrf @method('delete')
                            </td>

                                <td><button onclick="return confirm('هل انت متاكد انك تريد الحذف')"‏
                                    class="label btn-shape bg-red c-white" style='border-radius: 9999px;width:2rem;height: 2rem;display:flex;justify-content:center;align-items:center'
                        title='حذف'><i class='bx bxs-trash' style='font-size:1.1rem'></i></button>
                            </td>
                        </form>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
@endsection
