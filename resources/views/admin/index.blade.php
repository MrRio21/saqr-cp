
@extends('admin.sidebar')
@section('sidebar')




		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<h1 class="title">Dashboard</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>
			<div class="info-data">
				<div class="card">
					<div class="head">
						<div>
							<h2>1500</h2>
							<p>Traffic</p>
						</div>
						<i class='bx bx-trending-up icon' ></i>
					</div>
					<span class="progress" data-value="40%"></span>
					<span class="label">40%</span>
				</div>
            </div>
		</main>
        <div class="projects p-20 bg-white rad-10 m-20">
          <h2 class="mt-0 mb-20">Users</h2>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Status</td>
                    <td>Edit</td>
                    <td>Delete</td>
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
                    <td>
                    <span class="label btn-shape bg-orange c-white">Pending</span>
                    </td>
                        <td><button class="label btn-shape bg-green c-white">Edit</button>
                    </td>
                    <form method="POST" action="{{route('deleteUser',['id'=>$user->id])}}" accept-charset="UTF-8">
                        @csrf @method('delete')
                        </td>
                            <td><button class="label btn-shape bg-red c-white">Delete</button>
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
