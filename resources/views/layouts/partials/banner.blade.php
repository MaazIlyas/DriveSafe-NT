<section class="banner mb-5">
    <div class="container">
        <div class="banner__content">
            @if(Request::path() != '/')
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <span>Home</span>
                </li>
                <li class="breadcrumb-item">
                    <a style="text-decoration:none;" href="{{ route('learning.index') }}">Learning</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a style="text-decoration:none;" href="">{{str_replace("/", " / ", ucfirst(Request::path()))}}</a>
                </li>
            </ol>
            <h1>{{ucfirst(Request::path())}}</h1>
            @else
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <span>Home</span>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('learning.index') }}">Learning</a>
                </li>
            </ol>
            <h1>Learning</h1>
            @endif
        </div>
    </div>
</section>