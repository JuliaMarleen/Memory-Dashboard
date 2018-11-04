@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    @foreach($motivationalslogan as $s) 
                    {{ $s->title }} 
                    <a class="edit{{auth::user()->admin}}" href="edit" style="float: right;">Edit</a>
                    @endforeach
                </div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($motivationalslogan as $s) 
                    <li>{{ $s->slogan }} </li> 
                    <img class="img-fluid" src="images/foto{{$s->image}}.jpg" alt="Zon">
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">To do</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- //print_r($_POST);
                    //var_dump($_FILES); -->


                    <form action="{{ route('todo.save') }}" method="post">
                        <?php //$ids = DB::table('todo')->pluck('id'); //get the last id from database
                        //foreach($ids as $id) {
                        //}?>

                        <!-- <input type="hidden" name="id" value=<?php //echo $id+1; ?>> last id from database + 1 = new id -->
                        <?php //$userId = Auth::user()->id ?>
                        <!-- <input type="hidden" name="userId" value=<?php //$userId; ?>> add the user id -->
                        
                        <label>New:</label>
                        <input type="text" name="name" value=""><br> <!-- new to do item -->
                        
                        <label>Priority:</label>
                        <input type="radio" name="priority" value="1" checked> High <!-- which priority -->
                        <input type="radio" name="priority" value="2"> Medium
                        <input type="radio" name="priority" value="3"> Low <br>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <!-- <input type="hidden" name="done" value="0"> if you make a new item it's never directly done -->
                        <input class="button" type="submit" value="Save">
                    </form>
                    <br>

                    <form action="{{ route('todo.search') }}" method="post">
                        <label>Search:</label>
                        <input type="text" name="searchvalue" value=""><br>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>

                    <form action="{{ route('todo.filter') }}" method="post">
                        <label>Filter:</label>
                        <input type="text" name="filtervalue" value=""><br>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button class="btn btn-primary" type="submit">Filter</button>
                    </form>

                    <form action="{{ route('todo.filter') }}" method="post">
                        <select name="filtervalue">
                        <label>Filter:</label>
                            <option value="0">All</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button class="btn btn-primary" type="submit">Filter</button>
                    </form>

                    <form action="{{ route('todo.all') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button class="btn btn-primary" type="submit">All</button>
                    </form>

                    @foreach($todos as $todo)
                    <div class="d-flex">
                        <div class="name">
                            <li class="priority{{ $todo->priority }} lead">{{ $todo->name }}
                            <img style="height: 20px; width: 20px;" src="images/done{{$todo->done}}.png" alt="{{ ($todo->done) ? 'Undo' : 'Done' }}"></li>
                        </div>
                        <div class="done">
                            <form action="{{ route('todo.update') }}" method="post">
                                <input type="hidden" name="id" value="{{ $todo->id }}" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <button class="btn btn-primary" type="submit">
                                    {{ ($todo->done) ? 'Undo' : 'Done' }}
                                </button>
                            </form>
                        </div>
                        <div class="delete">
                            <form action="{{ route('todo.delete') }}" method="post">
                                <input type="hidden" name="id" value="{{ $todo->id }}" />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </div>
                    </div>
                    @endforeach
                        
                    <?php // $names = DB::table('todo')->where('userId', $userId)->pluck('name');
                    //foreach ($names as $name) {?>
                    <!-- <li><?php //echo $name; ?></li> printing the to do list -->
                    <?php //} ?> 

                </div>
            </div>
        </div>

        @include('home.summer-partial')

    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Het weer</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <li>Zonnig</li>
                    <img class="img-fluid" src="images/zon.jpg" alt="Zon">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Spaanse Woordjes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <?php $word = DB::table('spanish')->inRandomOrder()->value('word') ?>
                <?php $translation = DB::table('spanish')->where('word', $word)->value('translation') ?>
                <li> {{ $word }} = {{ $translation }} </li>
                </div>
            </div>
        </div>

                <div class="col-md-4">
            <div class="card">
                <div class="card-header">People to talk to</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <li>Sarah</li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
