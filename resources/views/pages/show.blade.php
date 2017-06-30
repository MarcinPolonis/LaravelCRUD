@extends('layout')

@section('content')

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>CONTENT</th>
            
        </tr>
        
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->title  }}</td>
                <td>{{ $page->content  }}</td>
                
                <td>
                    {!! Form::model($page, ['route' => ['pages.show', $page], 'method' => 'GET']) !!}
                    {!! Form::close() !!}
                    
                </td>
            </tr>
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-danger']) !!}
    </table>
@endsection