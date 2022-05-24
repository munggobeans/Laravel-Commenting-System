@extends('layout')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Comments list div -->
            <div class="container">
                <h3 class="text-center text-primary">Comments</h3>
                <hr />
                <br/>
                <div class="container col-sm-6" style="overflow-y: scroll; height: 400px">
                    <div class="row text-left">
                        @foreach($comments as $comment)
                        <div class="card" style="border-bottom: dotted .5px black">
                            <div class="card-body">
                              <label class="card-title">{{$comment->com_name}}</label> &nbsp; <small class="date-lbl"> {{$comment->com_date}}</small>
                              <p class="card-text">{{$comment->com_comments}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Form div -->
                <div class="container col-sm-6">
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('comments.store')}}">
                        @csrf
                        <!-- Validation Error message -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Name Input -->
                        <div class="col-sm-8">
                            <div class="form-group col-sm-5">
                                <label for="com_name">Name:</label>
                                <input type="text" class="form-control" name="com_name" value="{{old('com_name')}}"/>
                            </div>
                        <div>
                        <!-- Comment Input -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="com_name">Comment:</label>
                                <textarea class="form-control" name="com_comments"></textarea>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-success">Enter comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
