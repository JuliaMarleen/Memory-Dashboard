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