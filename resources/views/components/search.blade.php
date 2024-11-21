<link rel="stylesheet" href="{{ asset('css/frontend/search.scss') }}">

<div class="search">
    <div class="contain">
        <div class="form">
            <h3>Tìm kiếm</h3>
            {!! Form::open(['url' => 'foo/bar']) !!}
                <div class="search-form">
                    {{  Form::text('search', '', ['class' => 'search-input']) }}
                    <button class='search-button'>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            {!! Form::close() !!}
        </div>
        
    </div>
</div>