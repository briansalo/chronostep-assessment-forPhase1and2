<x-app-layout>

    <x-slot name="header">
       
    </x-slot>

    <div class="container">
    	<div class="col-md-12">
	        <div class="card">
	            <div class="card-header">
	                User Add
	            </div>
	            <div class="card-body">
					<form action="{{route('user.update',$user->id)}}" method="post">
						@csrf
			            <div class="row">
			                <div class="col-6 col-md-6" >
	                         	First Name:<input type="text" class="form-control" name="first_name" value="{{$user->first_name}}">
	 							@error('first_name')
									<span class="text-danger">{{$message}}</span>
								@enderror
			                </div>
			                <div class="col-6 col-md-6">
			                    Last Name:<input type="text" class="form-control" name="last_name" value="{{$user->last_name}}">
	 							@error('last_name')
									<span class="text-danger">{{$message}}</span>
								@enderror
			                </div>
			            </div><!--row-->

			            <div class="row">
			                <div class="col-4 col-md-4" >
	                         	Email:<input type="text" class="form-control" name="email" value="{{$user->email}}">
	 							@error('email')
									<span class="text-danger">{{$message}}</span>
								@enderror
			                </div>
			                <div class="col-4 col-md-4">
			                    Birth date:<input type="date" class="form-control" name="birth_date" value="{{$user->birth_date}}">
	 							@error('birth_date')
									<span class="text-danger">{{$message}}</span>
								@enderror
			                </div>
			                <div class="col-4 col-md-4">
			                    Password:<input type="text" class="form-control" name="password">
	 							@error('password')
									<span class="text-danger">{{$message}}</span>
								@enderror
			                </div>
			            </div><!--row-->

		                    <button type="submit" class="btn btn-success mt-3">Save</button>
		                    <a href="{{route('user.list')}}" class="btn btn-primary mt-3">Cancel</a>
		               
					</form>     
	            </div><!--card-body-->
	        </div><!--card-->
        </div><!--col-md-12-->
    </div><!--container-->


</x-app-layout>