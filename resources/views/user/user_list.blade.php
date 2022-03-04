<x-app-layout>

    <x-slot name="header">
       
    </x-slot>

    <div class="container">
        <div class="card">
            <div class="card-header">
                User List
                <a href="{{route('user.add')}}" class="btn btn-success" style="float:right">Add User</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                         <tr>
                            <th>ID Number</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alluser as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->first_name}} {{$user->last_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->userAge()}}</td>
                            <td>
                                <a href="{{ route('user.edit', $user->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('user.delete', $user->id)}}" class="btn btn-danger" id="delete">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex">
                    {!! $alluser->links() !!}
                </div>        
            </div><!--card-body-->
        </div><!--card-->
    </div><!--container-->


</x-app-layout>