@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">To Remember</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <li>{{ DB::table('memories')->where('id', '1')->value('priority') }} {{ DB::table('memories')->where('id', '1')->value('name') }} </li>
                    <li>{{ DB::table('memories')->where('id', '2')->value('priority') }} {{ DB::table('memories')->where('id', '2')->value('name') }} </li>
                    <li>{{ DB::table('memories')->where('id', '3')->value('priority') }} {{ DB::table('memories')->where('id', '3')->value('name') }}</li>
                    <li>{{ DB::table('memories')->where('id', '4')->value('priority') }} {{ DB::table('memories')->where('id', '4')->value('name') }}</li>
                    <li>{{ DB::table('memories')->where('id', '1')->value('priority') }} {{ DB::table('memories')->where('id', '1')->value('name') }}</li>
                    <li>{{ DB::table('memories')->where('id', '1')->value('priority') }} {{ DB::table('memories')->where('id', '1')->value('name') }}</li>
                    <li>{{ DB::table('memories')->where('id', '1')->value('priority') }} {{ DB::table('memories')->where('id', '1')->value('name') }}</li>
                
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

                    <?php
                    //print_r($_POST);
                    //var_dump($_FILES);
                    //check of data verstuurd is
                    // if (isset($_POST['submit'])) {

                    //data uit formulier halen
                        // $itemid = $_POST['id'];
                        // $currentuserid = $_POST['userId'];
                        // $name = $_POST['name'];
                        // $priority = $_POST['priority'];
                        // $done = $_POST['done'];
                        
                    // //data naar database versturen
                    //     $query = "INSERT INTO todo (id, userId, name, priority, done) 
                    //         VALUES ('$itemid', '$currentuserid', '$name', '$image', '$done')";

                    // DB::insert('insert into todo (id, userId, name, priority, done) values (?, ?, ?, ?, ?)', [$itemid, $currentuserid, $name, $image, $done]);


                    // heidisql_query($db, $query);
                    //  //database afsluiten
                    // heidisql_close($db);
                    
                    //terugsturen naar zelfde pagina
                    // header('location: app.blade.php');
                    // exit;
                    //}
                    ?>

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
                        
                        <input type="submit" value="Save">
                    
                    </form>
                    
                    <br>

                    <?php $userId = Auth::user()->id ?>

                    @foreach($todos->where('userId', $userId) as $todo) 
                        <li class="priority{{ $todo->priority }}">{{ $todo->priority }} {{ $todo->name }}<img src="images/done{{$todo->done}}.png" alt="done"></li>
                        <img src="images/done1.png" alt="done">
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
