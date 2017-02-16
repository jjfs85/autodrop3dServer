@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    @foreach($groups as $group)
    <Div style="width">
        <a href="/g/{!!$group->stub!!}">
            <img src="{!!$group->image!!}" alt="{!!$group->name!!}" >
            {!!$group->name!!}</a>
        <br>{!!$group->about!!}
    </Div>
    @endforeach





    @hasanyrole(['superadmin','admin'])
    <h1>
        Group Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("g")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New group</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>stub</th>
            <th>about</th>
            <th>image</th>
            <th>contactUser</th>
            <th>visibility</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($groups as $group) 
            <tr>
                <td>{!!$group->name!!}</td>
                <td>{!!$group->stub!!}</td>
                <td>{!!$group->about!!}</td>
                <td>{!!$group->image!!}</td>
                <td>{!!$group->contactUser!!}</td>
                <td>{!!$group->visibility!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/g/{!!$group->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/g/{!!$group->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/g/{!!$group->stub!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $groups->render() !!}
    @endhasanyrole


</section>
@endsection