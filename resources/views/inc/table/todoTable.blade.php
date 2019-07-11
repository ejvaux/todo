<div class="row mb-2">
    <div class="col-md">
        <a class='btn btn-primary' href='{{url('todo/input')}}'>Create todo</a>
    </div>
</div>
<div class='row'>    
    <div class='col-md table-responsive'>
        <table class="table text-center">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @isset ($todos)
                    @if (count($todos)>0)
                        @foreach ($todos as $todo)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$todo->date}}</td>
                                <td>{{$todo->title}}</td>
                                <td>{{$todo->description}}</td>                                
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th colspan="4">
                                <h4>No data to display.</h4>
                            </th>
                        </tr>
                    @endif
                @else
                    <tr>
                        <th colspan="4">
                            <h4>No data to display.</h4>
                        </th>
                    </tr>
                @endisset 
            </tbody>
        </table>
    </div>
</div>
<div class='row'>
    <div class='col-md'>
        @isset($todos)
            {!! $todos->appends(\Request::except('page'))->render() !!}
        @endisset        
    </div>
</div>