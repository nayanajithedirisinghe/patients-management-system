<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<body style="
    margin: 0;
    padding: 300px 0 300px 0;
    font-family: Arial, sans-serif;
    background: url('images/hospital-hallway.jpg') no-repeat center center fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
">

    <!-- About Us Section -->
    <div style="
        background: rgba(255, 255, 255, 0.9);
        padding: 50px 40px;
        border-radius: 15px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        width: 700px;
        text-align: center;
    ">
    @include('layouts.navbar')
        <h1 style="color: #542e2c; font-size: 2.5rem; margin-bottom: 30px;">About Our Hospital</h1>
        
        <p style="font-size: 1.1rem; line-height: 1.6; color: #333;">
            Welcome to our Hospital. We are committed to providing exceptional healthcare services with compassion and care. Our team of experienced doctors, nurses, and medical staff are dedicated to ensuring the health and well-being of our patients. 
        </p>
        
        <h3 style="color: #542e2c; font-size: 2rem; margin-top: 40px; margin-bottom: 20px;">Our Mission</h3>
        <p style="font-size: 1.1rem; line-height: 1.6; color: #333;">
            Our mission is to provide high-quality, affordable healthcare to our community. We strive to create a safe and nurturing environment for all our patients and to promote health and wellness through preventative care.
        </p>

        <h3 style="color: #542e2c; font-size: 2rem; margin-top: 40px; margin-bottom: 20px;">Why Choose Us?</h3>
        <ul style="
            list-style: none;
            font-size: 1.1rem;
            color: #333;
            padding-left: 0;
            line-height: 1.6;
        ">
            <li>✔ Expert doctors and healthcare professionals</li>
            <li>✔ Modern medical equipment and technology</li>
            <li>✔ Affordable and patient-focused care</li>
            <li>✔ Compassionate and dedicated medical staff</li>
        </ul>

        <h3 style="color: #542e2c; font-size: 2rem; margin-top: 40px; margin-bottom: 20px;">Contact Us</h3>
        <p style="font-size: 1.1rem; color: #333;">
            For more information or to schedule an appointment, please <a href="{{ route('contact') }}" style="color: #0044cc; text-decoration: none;">contact us</a>.
        </p>
    </div>
    <!-- <footer>
        &copy; 2024 Medical Records Inc. | All rights reserved.
    </footer> -->

</body>
</html>
