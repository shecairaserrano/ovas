<nav class="navbar">
    
    <div class="logo-container"><img src="{{URL::to('WEBSITE ELEMENTS/logo2.png')}}"></div>
    <div class="navbar-title">Online Appointment System for Veterinary Services</div>

    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a> 

    <div class="navbar-links">
        <ul>
            <li><a href="{{URL('/admin/')}}">Home</a></li>
            <li><a href="{{route('appointment')}}">Appointments</a></li>
            <li><div class="dropdown">
                <button class="dropbtn">Records
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="{{URL('/admin/clientrecord')}}">Client's Record</a>
                  <a href="{{URL('/admin/petrecord')}}">Pet's Record</a>
                </div>
            </div>
            </li>
            <li><a href="{{route('announcement')}}">Announcement</a></li>
            <li><a href="{{route('concern')}}">Concerns</a></li>
            <li><button class= "button nav-button"><a href="{{route('logout')}}">Logout</a></button></li>
        </ul>  
    </div>   
        
</nav>