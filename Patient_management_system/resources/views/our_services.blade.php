<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
</head>
<body style="
    margin: 0 ;
    padding: 400px 0 400px 0;
    font-family: Arial, sans-serif;
    background: url('images/hospital-hallway.jpg') no-repeat center center fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
">

    <!-- Our Services Section -->
    <div style="
        background: rgba(255, 255, 255, 0.9);
        padding: 50px 40px;
        border-radius: 15px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        width: 700px;
        text-align: center;
    ">
    @include('layouts.navbar')
        <h1 style="color: #542e2c; font-size: 2.5rem; margin-bottom: 30px;">Our Medical Services</h1>
        
        <p style="font-size: 1.1rem; line-height: 1.6; color: #333; margin-bottom: 30px;">
            We provide a wide range of healthcare services to meet your needs. Our experienced medical staff and state-of-the-art facilities ensure that you receive the best care possible.
        </p>

        <!-- Service List -->
        <div style="display: flex; flex-wrap: wrap; justify-content: space-around; gap: 30px;">
            <!-- Service 1 -->
            <div style="width: 250px; background: #f0f8ff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" onmouseover="this.style.background='#bcf7d5'" 
                 onmouseout="this.style.background='initial'">
                <h3 style="color: #542e2c; font-size: 1.6rem; margin-bottom: 15px;">General Checkups</h3>
                <p style="font-size: 1rem; color: #333; margin-bottom: 15px;">
                    Our comprehensive checkups help detect early signs of illnesses, keeping you healthy and preventing long-term health issues.
                </p>
                <a href="#" style="color: #0044cc; font-weight: bold; text-decoration: none;">Learn More</a>
            </div>

            <!-- Service 2 -->
            <div style="width: 250px; background: #f0f8ff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" onmouseover="this.style.background='#bcf7d5'" 
                 onmouseout="this.style.background='initial'">
                <h3 style="color: #542e2c; font-size: 1.6rem; margin-bottom: 15px;">Emergency Services</h3>
                <p style="font-size: 1rem; color: #333; margin-bottom: 15px;">
                    We offer 24/7 emergency services to provide immediate care for critical situations, ensuring fast and efficient treatment.
                </p>
                <a href="#" style="color: #0044cc; font-weight: bold; text-decoration: none;">Learn More</a>
            </div>

            <!-- Service 3 -->
            <div style="width: 250px; background: #f0f8ff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" onmouseover="this.style.background='#bcf7d5'" 
                 onmouseout="this.style.background='initial'">
                <h3 style="color: #542e2c; font-size: 1.6rem; margin-bottom: 15px;">Maternity Care</h3>
                <p style="font-size: 1rem; color: #333; margin-bottom: 15px;">
                    We provide expert care for mothers during pregnancy, delivery, and postpartum, ensuring the health and safety of both mother and baby.
                </p>
                <a href="#" style="color: #0044cc; font-weight: bold; text-decoration: none;">Learn More</a>
            </div>

            <!-- Service 4 -->
            <div style="width: 250px; background: #f0f8ff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" onmouseover="this.style.background='#bcf7d5'" 
                 onmouseout="this.style.background='initial'">
                <h3 style="color: #542e2c; font-size: 1.6rem; margin-bottom: 15px;">Surgical Services</h3>
                <p style="font-size: 1rem; color: #333; margin-bottom: 15px;">
                    Our highly skilled surgeons offer a wide range of elective and emergency surgeries, ensuring the highest standards of care and recovery.
                </p>
                <a href="#" style="color: #0044cc; font-weight: bold; text-decoration: none;">Learn More</a>
            </div>

            <!-- Service 5 -->
            <div style="width: 250px; background: #f0f8ff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" onmouseover="this.style.background='#bcf7d5'" 
                 onmouseout="this.style.background='initial'">
                <h3 style="color: #542e2c; font-size: 1.6rem; margin-bottom: 15px;">Pediatric Care</h3>
                <p style="font-size: 1rem; color: #333; margin-bottom: 15px;">
                    Our pediatric services are dedicated to caring for children’s health, from routine checkups to specialized treatments.
                </p>
                <a href="#" style="color: #0044cc; font-weight: bold; text-decoration: none;">Learn More</a>
            </div>

            <!-- Service 6 -->
            <div style="width: 250px; background: #f0f8ff; border-radius: 10px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" onmouseover="this.style.background='#bcf7d5'" 
                 onmouseout="this.style.background='initial'">
                <h3 style="color: #542e2c; font-size: 1.6rem; margin-bottom: 15px;">Dental Services</h3>
                <p style="font-size: 1rem; color: #333; margin-bottom: 15px;">
                    Our dental team offers a variety of services, from routine cleanings to advanced dental procedures, ensuring the best oral health for all ages.
                </p>
                <a href="#" style="color: #0044cc; font-weight: bold; text-decoration: none;">Learn More</a>
            </div>
        </div>

    </div>
    
</body>
</html>
