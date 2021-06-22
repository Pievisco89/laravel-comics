<header>

  <div class="logo">
    <img src=" {{ asset('img/dc-logo.png') }} " alt="logo">
  </div>

  <nav>
    <ul>

      <li>
        <a class="{{ (request()->is('/characters')) ? 'active' : '' }}" 
          href="{{ route('characters') }}">Characters</a>
      </li>
      <li>
        <a 
        class="{{ (request()->is('/')) ? 'active' : '' }}"
        href="{{ route('comics') }}">Comics</a>
      </li>
      <li>
        <a class="{{ (request()->is('/movies')) ? 'active' : '' }}" 
          href="{{ route('movies') }}">Movies</a>
      </li>
      <li>
        <a 
        class="{{ (request()->is('/tv')) ? 'active' : '' }}"
        href="{{ route('tv') }}">TV</a>
      </li>
      <li>
        <a class="{{ (request()->is('/games')) ? 'active' : '' }}"
        href="{{ route('games') }}"
        >Games</a>
      </li>
      <li>
        <a 
          class="{{ (request()->is('/collectibles')) ? 'active' : '' }}"
          href="{{ route('collectibles') }}">Collectibles</a>
      </li>
      <li>
        <a 
        class="{{ (request()->is('/videos')) ? 'active' : '' }}"
          href="{{ route('videos') }}"
        >Videos</a>
      </li>
      <li>
        <a 
        class="{{ (request()->is('/fans')) ? 'active' : '' }}"
          href="{{ route('fans') }}"
        >Fans</a>
      </li>
      <li>
        <a 
        class="{{ (request()->is('/news')) ? 'active' : '' }}"
          href="{{ route('news') }}"
        >News</a>
      </li>
      <li>
        <a 
        class="{{ (request()->is('/shops')) ? 'active' : '' }}"
          href="{{ route('shops') }}"
        >Shop</a>
      </li>

    </ul>
  </nav>

</header>