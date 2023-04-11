
@extends('admin.sidebar')
@section('sidebar')




		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
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
		</main>
        <div class="projects p-20 bg-white rad-10 m-20">
          <h2 class="mt-0 mb-20">المستخدمين</h2>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                    <td>الاسم</td>
                    <td>الايميل</td>
                    <td>رقم الجوال</td>
                    <td>تعديل</td>
                    <td>حذف</td>
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
                        <td><button class="label btn-shape bg-green c-white">تعديل</button>
                    </td>
                    <form method="POST" action="{{route('deleteUser',['id'=>$user->id])}}" accept-charset="UTF-8">
                        @csrf @method('delete')
                        </td>

                            <td><button onclick="return confirm('هل انت متاكد انك تريد الحذف')"‏
                                class="label btn-shape bg-red c-white">حذف</button>
                        </td>
                    </form>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
@endsection
