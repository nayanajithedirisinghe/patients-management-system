<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Hospital</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f7f7; /* Light background */
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 100px auto;
            padding: 20px;
            background-color:#c4c4c2;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
            color: #613835;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
        }

        .section {
            margin: 40px 0;
        }

        .section img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .special-points {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            flex-wrap: wrap;
        }

        .special-point {
            background:#ba9e86;
            color: white;
            padding: 20px;
            border-radius: 8px;
            flex: 1;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease;
        }

        .special-point:hover {
            background: #bcf7d5;;
        }

        .footer {
            background-color: #0044cc;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Navigation bar styling */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 68, 204, 0.7);
            backdrop-filter: blur(15px);
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
    </style>
</head>
<body>

    @include('layouts.navbar')

    <div class="container">
        <h1>Welcome to Our Hospital</h1>
        
        <!-- Section 1: Introduction -->
        <div class="section">
            <h2>About Us</h2>
            <img src="{{URL ('images/welcome1.png')}}" alt="Hospital Image">
            <p>We are a leading healthcare provider committed to offering the best medical services. Our hospital is equipped with the latest technology, skilled medical staff, and compassionate care to ensure your well-being.</p>
        </div>

        <!-- Section 2: Special Points -->
        <div class="section">
            <h2>Why Choose Us</h2>
            <div class="special-points">
                <div class="special-point">
                    <h3>24/7 Emergency</h3>
                    <p>Our emergency department is open 24 hours a day, seven days a week, ensuring immediate care when you need it the most.</p>
                </div>
                <div class="special-point">
                    <h3>Experienced Doctors</h3>
                    <p>Our doctors are highly qualified and experienced in their respective fields, providing the best treatment options for our patients.</p>
                </div>
                <div class="special-point">
                    <h3>State-of-the-Art Facilities</h3>
                    <p>We provide cutting-edge medical facilities and technologies to ensure accurate diagnoses and effective treatments.</p>
                </div>
            </div>
        </div>

        <!-- Section 3: Contact Us -->
        <div class="section">
            <h2>Contact Us</h2>
            <p>If you have any questions or need to make an appointment, please don't hesitate to get in touch with us. Our friendly staff is here to assist you.</p>
            <p><strong>Phone:</strong> 123-456-7890</p>
            <p><strong>Email:</strong> info@ourhospital.com</p>
        </div>

    </div>

    @include('layouts.footer')

</body>
</html>
