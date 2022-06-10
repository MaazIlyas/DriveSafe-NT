<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex align-items-center justify-content-between" style="border-bottom: 1px solid grey;">
      <nav class="main-nav">
        <ul>
          <li>
            <a href="#" class="inactive">Home</a>
          </li>
          <li>
            <a href="{{ route('learning.index') }}">Learning</a>
            <ul>
              <li>
                <a href="#" class="inactive">Classes</a>
              </li>
              <li>
                <a href="{{ route('instructors.index') }}">Instructors</a>
              </li>  
            </ul>  
          </li>
        </ul>
      </nav>

      <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form> -->

      @auth
        {{auth()->user()->first_name}} {{auth()->user()->last_name}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>