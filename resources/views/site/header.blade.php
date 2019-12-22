<a class="header--logo" href="#0">
    <img src="{{asset('assets/img/logo.png')}}" alt="Global">
    <p>Global</p>
</a>
@if (session('status'))
    <div class="alert alert-success "> {{ session('status') }}</div>
@endif
@if (count($errors)>0)
    <div class="alert alert-danger ">
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
<button class="header--cta cta">Hire Us</button>
<div class="header--nav-toggle">
    <span></span>
</div>


