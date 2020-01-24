<div style="text-align: center;">

    <div style="padding-top: 2em">
        <h2>{{ $title }}</h2>

    </div>
</div>

<div>

    <div id="filters" class="sixteen columns">
        <ul style=" text-align: center; ">
            <li><a href="">{{-- {{ route('pages') }}--}}
                    <h3>Pages</h3>
                </a>
            </li>

            <li><a href="{{ route('portfolios.index') }}">
                    <h3>Portfolio/Works</h3>
                </a>
            </li>

            <li><a href="{{ route('services.index') }}"> {{-- --}}
                    <h3>Services</h3>
                </a>
            </li>
        </ul>

    </div>

</div>