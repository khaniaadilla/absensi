<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" type="text/css" href="{!! asset('../assets/css/login.css') !!}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="./css/menu.css" />
    <title>Dashboard</title>
  </head>
  <style>
    html, body {
    position: relative;
    /* text-align: center; */
    /* display: flex; */
    justify-content: center;
    align-items: center; 
    /* min-height: 100%; */
    background:url(../assets/css/nyoba2.png) no-repeat;
    background-size: 100%;
}

  </style>
  <!DOCTYPE html>

  <body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
      <a class="navbar-brand" href="">Absensi</a>
      @if (Auth::user()->id_level == 1)
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="rombels">Rombel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rayons">Rayon</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="senbuds">Senbud</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upds">UPD</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="siswas">Siswa</a>
                </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
    @elseif (Auth::user()->id_level == 2)
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        </li>
        <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rayons">Rayon</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
        </li>
      </ul>
      @elseif (Auth::user()->id_level == 3)
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="siswas">siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
     
      @elseif (Auth::user()->id_level == 4)
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="absensis">absensi</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="schedule">Schedule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="material">Materi</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
      @endif
      
    </nav>
    <div class="container-fluid" style="margin-top: 80px;">
      <div style="padding-top: 10px;">
        @yield('content')
      </div>
    </div>


  </body>
  <script type="text/javascript">
    document.getElementById("keluar").onclick = function () {
      location.href = "login.html";
    };
  </script>
  <script type="text/javascript">
    function stay() {
      document.getElementById("card").hidden = true;
    }
  </script>
  <script type="text/javascript">
    function logout() {
      document.getElementById("card").hidden = false;
    }
  </script>
</html>

