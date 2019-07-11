@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-md">
                            <h4>{{$success}}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <a class="btn btn-primary" href="{{url('home')}}">Todo List</a>
                        </div>
                    </div>
                                            
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
