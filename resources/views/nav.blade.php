 <nav class="navigation-bar">
        <div class="logo-container">
            <div>
                <img src="{{URL::to('WEBSITE ELEMENTS/brand-logo.png')}}">
            </div>
            <div class="nav-title-page">
                <p>Online Veterinary Appointment System</p>
            </div>
        </div>
        <div class="nav-links"> 
            <ul>
                <li><a class="active" href="{{url('/')}}">Home</a></li>
                 <!--Dropdown-->
                <li><div class="dropdown">
                <button class="dropbtn" href="Services.html">services
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="{{url('/service')}}">Our Services</a>
                    <a href="{{url('/consultation')}}">Consulation</a>
                    <a href="{{url('/surgery')}}">Surgery</a>
                    <a href="{{url('/grooming')}}">Grooming</a>
                  </div>
                </div>
            </li>
                <li><a id="" href="{{url('/login')}}">login</a></li>
                <li><a id="" href="{{url('/about')}}">about us</a></li>
                <li><a href="{{url('/urgent')}}">urgent care</a></li>
            </ul>  
        </div>    
    </nav>