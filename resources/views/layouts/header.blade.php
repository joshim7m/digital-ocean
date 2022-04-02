 <nav class="p-6 bg-white flex justify-between mb-6">
    <ul class="flex items-center">
      <li><a class="p-3" href="/">Home</a></li>
      @auth
      <li><a class="p-3" href="{{ route('dashboard') }}">Dashboard</a></li>
      <li><a class="p-3" href="{{ route('post.index') }}">Post</a></li>
      @endauth
    </ul>

     <ul class="flex items-center">
      @auth
      <li><a class="p-3" href="">{{ auth()->user()->name }}</a></li>
      <li>
        <form action="{{ route('logout') }}" method="post" class="inline">
          @csrf

          <button type="submit" class="p-3">Logout</button>
        </form>
      </li>
      @endauth

      @guest
      <li><a class="p-3" href="{{ route('register') }}">Register</a></li>
      <li><a class="p-3" href="{{ route('login') }}">Login</a></li>
      @endguest
    </ul>
  </nav>