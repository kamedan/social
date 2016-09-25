

@if(Session::has('fail'))
    <section class="alert alert-danger">
        {{ Session::get('fail') }}
    </section>
@endif
@if(Session::has('message'))
    <section class="alert alert-success">
        {{ Session::get('message') }}
    </section>
@endif
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif