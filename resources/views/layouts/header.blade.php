<body>
    <nav class="menu">
        <h1>CALLE Co.</h1>
        
        <button class="mobile-menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="nav-links">
            <a href="{{ url('/') }}">Home</a>
            
            <div class="dropdown">
                <a href="#" class="dropdown-toggle">About Us</a>
                <div class="dropdown-content">
                    <a href="#">Option 1</a>
                    <a href="#">Option 2</a>
                    <a href="#">Option 3</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="#" class="dropdown-toggle">Franchises</a>
                <div class="dropdown-content">
                    <a href="#">Option A</a>
                    <a href="#">Option B</a>
                </div>
            </div>
            <a href="{{ url('our_branches') }}">Branches</a>
            <a href="#">Blogs</a>
            <a href="#">Gallery</a>
        </div>
    </nav>