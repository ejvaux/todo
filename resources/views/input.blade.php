@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                        <form id='todo-form' method="POST" action="{{url('todo/validate')}}">
                            @csrf
                            <div class="row form-group">
                                <div class="col-md-2">
                                    <label for="date" class="col-form-label font-weight-bold">Date</label>
                                </div>
                                <div class="col-md-2">
                                    <label class="col-form-label text-danger">
                                        <small class="font-weight-bold">required</small>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input name='date' id='date' class='form-control @error('date') is-invalid @enderror' type="date" value="{{ old('date') }}">                                    
                                </div>
                                <div class="col-md-4 ">
                                    @error('date')
                                        <label class="col-form-label text-danger">
                                            <small class="font-weight-bold">{{ $message }}</small>
                                        </label>
                                    @enderror                                 
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-2">
                                    <label for="date" class="col-form-label font-weight-bold">Title</label>                  
                                </div>
                                <div class="col-md-2">
                                    <label class="col-form-label font-weight-bold text-danger">
                                        <small class="font-weight-bold">required</small>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <input name='title' id='title' class='form-control @error('title') is-invalid @enderror' type="text" value='{{ old('title') }}'>                                    
                                </div>
                                <div class="col-md-4">
                                    @error('title')
                                        <label class="col-form-label text-danger">
                                            <small class="font-weight-bold">{{ $message }}</small>
                                        </label>
                                    @enderror                                    
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md">
                                            <label for="date" class="col-form-label font-weight-bold">Description:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <label class="col-form-label font-weight-bold text-danger">
                                                <small class="font-weight-bold">required</small>
                                            </label>
                                        </div>
                                    </div>             
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md">
                                            <textarea class='w-100 form-control @error('description') is-invalid @enderror' name="description" id="description1" cols="30" rows="10">{{ old('description') }}</textarea>                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md text-center">
                                            @error('description')
                                                <label class="col-form-label text-danger">
                                                    <small class="font-weight-bold">{{ $message }}</small>
                                                </label>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md text-center">
                                    <div class="btn-group" role="group">
                                        <a id='back-btn' class="btn btn-secondary" href='{{url('home')}}'>Back</a>
                                        <button id='clear-btn' type="button" class="btn btn-secondary">Clear</button>
                                        <button id='next-btn' type="submit" class="btn btn-secondary">Next</button>
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
