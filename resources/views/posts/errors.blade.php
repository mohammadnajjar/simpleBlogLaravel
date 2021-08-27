@if(Session::has('add'))
        <div class="alert alert-success mt-2" role="alert">
            {{Session::get("add")}}
        </div>
    @endif
    @if(Session::has('res'))
        <div class="alert alert-info mt-2" role="alert">
            {{Session::get("res")}}
        </div>
    @endif
    @if(Session::has('msg'))
        <div class="alert alert-warning mt-2" role="alert">
            {{Session::get("msg")}}
        </div>
    @endif
    @if(Session::has('del'))
        <div class="alert alert-danger mt-2" role="alert">
            {{Session::get("del")}}
        </div>
    @endif


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

