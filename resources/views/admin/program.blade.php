    @extends('admin.sidebar')
    @section('sidebar')


    <section class="m-20 pt-20 ">
    <div class="d-flex justify-content-between">
                <h2 class="p-10 ">البرامج</h2>
                <a href="{{route('storeProgram')}}"  style="height: 40px" class="btn btn-primary ">+</a>
            </div>

    <div class="responsive-table">
    <table class="fs-15 w-full">
                <thead>
                    <tr>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                        {{-- @dd($program) --}}
                    @foreach ($program as $item)
                    <tr>
                        {{-- @dd($item) --}}
                        <td>{{$item['title']}}</td>
                        <td>{{$item['description']}}</td>

                        {{-- @foreach ($program as $table) --}}
                        {{-- <tr> --}}
                            {{-- <td>{{ $table->title }}</td>
                            <td>{{ $table->description }}</td> --}}
                            <td><a class="label btn-shape bg-green c-white" href="{{ route('editProgram', $item->id) }}">Edit</a></td>
                        {{-- </tr> --}}
                        {{-- @endforeach --}}

                        <form method="POST" action="{{route('deleteProgram',['id'=>$item->id])}}" accept-charset="UTF-8">
                            @csrf @method('delete')
                            </td>
                                <td><button class="label btn-shape bg-red c-white"
                                    onclick="return confirm('Are you sure you want to delete this category?')"‏
                                    >حذف</button>
                            </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
                </table>


    </section>
    @endsection
