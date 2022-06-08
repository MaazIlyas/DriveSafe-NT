<section class="banner mb-5">
    <div class="container">
        <div class="banner__content">
            @if(str_contains(Request::path(), "instructors"))
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <span>Home</span>
                </li>
                <li class="breadcrumb-item">
                    <a style="text-decoration:none;" href="{{ route('learning.index') }}">Learning</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a style="text-decoration:none;" href="{{ route('instructors.index') }}">Instructors</a>
                </li>
            </ol>
            <h1>Instructors</h1>
            @elseif(str_contains(Request::path(), "classes"))
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <span>Home</span>
                </li>
                <li class="breadcrumb-item">
                    <a style="text-decoration:none;" href="{{ route('learning.index') }}">Learning</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a style="text-decoration:none;" href="{{ route('learning.classes') }}">Classes</a>
                </li>
            </ol>
            <h1>Classes</h1>
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