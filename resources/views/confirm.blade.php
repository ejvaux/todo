@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                        <form id='todo-insert-form' method="POST" action="{{url('todo/insert')}}">
                            @csrf
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="date" class="col-form-label font-weight-bold">Date</label>
                                </div>
                                <div class="col-md-8">
                                    <span>{{$validated['date']}}</span>
                                    <input name='date' type="hidden" value="{{$validated['date']}}">                                    
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="date" class="col-form-label font-weight-bold">Title</label>                  
                                </div>
                                <div class="col-md-8">
                                    <span>{{$validated['title']}}</span>
                                    <input name='title' type="hidden" value="{{$validated['title']}}">                                    
                                </div>
                            </div>
                            <div class="row form-group" style='height: 200px'>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="date" class="col-form-label font-weight-bold">Description</label>
                                        </div>
                                    </div>            
                                </div>
                                <div class="col-md-8">
                                    <span>{{$validated['description']}}</span>           
                                    <input type="hidden" name="description" value="{{$validated['description']}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md text-center">
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-secondary" href="{{URL::previous()}}">Back</a>                                        
                                        <button id='create-btn' type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
