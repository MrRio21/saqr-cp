
@extends('admin.sidebar')
@section('sidebar')



<style>
    body{
        /* direction: rtl; */
    }
</style>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main id='home' class='home'>
			<h1 class="title"> الرئيسية</h1>

			<div class="info-data">
				<div class="card">
					<div class="head">
						<div>
							<h2>عدد المستخدمين</h2>
							<h5> {{ $count }}</h5>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
				</div>
            </div>
            <div class="projects p-20 bg-white rad-10 mt-20">
                <div class="d-flex justify-content-between">
                  <h2 class="mt-0 mb-20">المستخدمين</h2>
        </div>

              <div class="responsive-table">
                <table class="fs-15 w-full table table-striped">
                  <thead>
                    <tr>
                        <th scope="col">الاسم</th>
                        <th scope="col">الايميل</th>
                        <th scope="col">رقم الجوال</th>
                        {{-- <td>تعديل</td> --}}
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                        {{-- @dd($allUsers) --}}
                    @foreach ($allUsers as $user)
                    <tr>
                        {{-- @dd($user) --}}
                        <td>{{$user['f_name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>{{$user['phone']}}</td>
                            {{-- <td><button class="label btn-shape bg-green c-white">تعديل</button> --}}
                        </td>
                        <form method="POST" action="{{route('deleteUser',['id'=>$user->id])}}" accept-charset="UTF-8">
                            @csrf @method('delete')
                            </td>
                                <td><button title='حذف' onclick="return confirm('هل انت متاكد انك تريد الحذف')"‏
                                    class="label btn-shape bg-red c-white"><i class='bx bx-trash'></i></button>
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
