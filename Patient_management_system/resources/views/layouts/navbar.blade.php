<nav style="
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: rgba(219, 201, 200, 0.7); /* 70% opacity */
    backdrop-filter: blur(15px); /* Enhanced blur effect */
    padding: 20px 30px;
    display: flex;
    align-items: center;
    justify-content: space-between; /* Space Home, Center, and Login properly */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    font-family: 'Arial', sans-serif;
">
    <!-- Left: Home -->
    <div>
        <a href="{{ route('welcome') }}" style="
            text-decoration: none; 
            color: #381f1d; 
            font-size: 1.4rem; 
            font-weight: bold;"
            onmouseover="this.style.color='#ebebeb'"
            onmouseout="this.style.color='#381f1d'"
        >Home</a>
    </div>

    <!-- Center: Other Links -->
    <ul style="
        list-style: none;
        display: flex;
        gap: 40px; /* Space between links */
        margin: 0;
        font-size: 1.2rem;
    ">
        <li><a href="{{ route('doctors.register') }}" style="text-decoration: none; color: #381f1d; font-weight: bold;" onmouseover="this.style.color='#ebebeb'" 
           onmouseout="this.style.color='#381f1d'">Medical History</a></li>
        <li><a href="{{ route('patient.appointment') }}" style="text-decoration: none; color: #381f1d; font-weight: bold;" onmouseover="this.style.color='#ebebeb'" 
           onmouseout="this.style.color='#381f1d'">Appointments</a></li>
        <li><a href="{{ route('our.services') }}" style="text-decoration: none; color: #381f1d; font-weight: bold;" onmouseover="this.style.color='#ebebeb'" 
           onmouseout="this.style.color='#381f1d'">Services</a></li>
        <li><a href="{{ route('about') }}" style="text-decoration: none; color: #381f1d; font-weight: bold;" onmouseover="this.style.color='#ebebeb'" 
           onmouseout="this.style.color='#381f1d'">About</a></li>
    </ul>

    <!-- Right: Login -->
    <div style="position: relative;">
        <a href="#" 
            id="loginButton"
            style="
                text-decoration: none; 
                padding: 0px 100px 0px 30px;
                color:#381f1d;
                font-size: 1.2rem; 
                font-weight: bold; 
                display: inline-block;" 
                onmouseover="this.style.color='#ebebeb'"
                onmouseout="this.style.color='#381f1d'"
        >Login</a>
        <!-- Dropdown Menu -->
        <ul id="dropdown" 
            style="
                position: absolute;
                top: 40px; /* Adjusted for larger navbar */
                right: 0;
                display: none; /* Initially hidden */
                min-width: 150px; /* Ensure minimum width for dropdown */
                background: rgba(255, 255, 255, 0.9); /* Light dropdown background */
                padding: 10px 15px;
                border-radius: 8px;
                list-style: none;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                z-index: 1001;
            ">
            <li><a href="{{ route('system.register') }}" style="
                text-decoration: none; 
                color: #0044cc; 
                font-weight: bold; 
                display: block; 
                margin-bottom: 5px;">Register</a></li>
            <li><a href="{{ route('login') }}" style="
                text-decoration: none; 
                color: #0044cc; 
                font-weight: bold; 
                display: block;">Login</a></li>
        </ul>
    </div>
</nav>

<script>
    // Dropdown toggle
    document.getElementById('loginButton').addEventListener('click', function (e) {
        e.preventDefault(); // Prevent link navigation
        const dropdown = document.getElementById('dropdown');
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Hide dropdown if clicked outside
    document.addEventListener('click', function (e) {
        const dropdown = document.getElementById('dropdown');
        const loginButton = document.getElementById('loginButton');

        if (!dropdown.contains(e.target) && e.target !== loginButton) {
            dropdown.style.display = 'none';
        }
    });
</script>
