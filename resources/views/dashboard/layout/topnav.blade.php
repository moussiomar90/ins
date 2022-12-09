<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >Insaniyyat_2022</a
        >
 
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        > 
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
        </div>
      </div>
      <div style=" color:#fff; width:30px; position :absolute; left:20%;">
        <i class="fa-solid fa-bars" onclick="openNav()" ></i>

      </div>
         

          <form class="d-flex ms-auto my-3 my-lg-0">
           
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
              
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">{{Auth::user()->name}}  </a></li>
                <li><a class="dropdown-item"  href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

<span>  {{ __('se deconnecter ') }}</span>
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
               </form>


</div></li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
      
    </nav>
    <script>
      function openNav() {
        document.getElementById("main").style.marginLeft = "270px";
        document.getElementById("main").style.transition= "0.5s";
        document.getElementById("demo").style.marginLeft="0" ;
        document.getElementById("demo").style.transition= "0.5s";
       
      }
      
      function closeNav() {
        document.getElementById("main").style.marginLeft= "0";
        document.getElementById("main").style.transition= "0.5s";
        
        document.getElementById("demo").style.marginLeft="-300px" ;
        document.getElementById("demo").style.transition= "0.5s";
      }
      </script>
         