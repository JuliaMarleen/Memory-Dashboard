
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
                
                <label>New:</label>
                <input type="text" name="name" value=""><br> <!-- new to do item -->
                
                <label>Priority:</label>
                <input type="radio" name="priority" value="1" checked> High <!-- which priority -->
                <input type="radio" name="priority" value="2"> Medium
                <input type="radio" name="priority" value="3"> Low <br>

                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
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
                <select name="filtervalue">
                <label>Filter:</label>
                    <option value="0">All</option>
                    <option value="1">High</option>
                    <option value="2">Medium</option>
                    <option value="3">Low</option>
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
                    <img style="height: 20px; width: 20px;" src="{{ asset('images/done').$todo->done.'.png' }}" alt="{{ ($todo->done) ? 'Undo' : 'Done' }}"></li>
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

        </div>
