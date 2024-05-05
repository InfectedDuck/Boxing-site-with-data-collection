<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boxing Club</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="header-container">
      <h1>Welcome to Boxing Club</h1>
      <nav>
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#classes">Classes</a></li>
          <li><a href="#schedule">Schedule</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><button onclick="openRegistrationForm()">Register Now</button>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="about" class="section">
    <div class="section-container">
      <h2>About Us</h2>
      <p>Welcome to our boxing club! We provide a supportive environment for individuals of all ages and fitness levels to learn the art of boxing while improving their physical and mental well-being.</p>
      <p>At Boxing Club, we believe that boxing is not just a sport, but a way of life. Our experienced trainers are dedicated to helping you achieve your fitness goals while teaching you the skills and techniques of boxing.</p>
      <p>Whether you're looking to improve your strength, agility, or overall fitness, our club offers a variety of classes to suit your needs. From beginner to advanced levels, we have something for everyone.</p>
      <p>Joining our classes not only improves your physical fitness but also provides a sense of camaraderie as you train alongside fellow members who share your passion for boxing.</p>
      <p>Furthermore, we host regular events such as sparring tournaments, fitness challenges, and community outreach programs to keep our members engaged and motivated.</p>
      <p>Experience the thrill of boxing and join our vibrant community today!</p>
    </div>
  </section>

  <section id="classes" class="section">
    <div class="section-container">
      <h2>Classes</h2>
      <p>Our club offers a variety of classes tailored to meet the needs of our members. Whether you're a beginner or an experienced boxer, we have something for everyone.</p>
      <ul>
        <li>Beginner's Boxing: Perfect for those new to boxing, this class focuses on basic techniques and fundamental movements.</li>
        <li>Advanced Boxing: For experienced boxers looking to refine their skills and take their training to the next level.</li>
        <li>Cardio Boxing: A high-energy workout that combines boxing techniques with cardiovascular exercises to help you burn calories and improve your endurance.</li>
        <li>Strength and Conditioning: Build strength, agility, and endurance with our strength and conditioning classes designed specifically for boxers.</li>
        <li>Sparring Sessions: Put your skills to the test in our supervised sparring sessions, where you can practice your moves in a safe and controlled environment.</li>
      </ul>
      <p>Joining our classes not only improves your physical fitness but also provides a sense of camaraderie as you train alongside fellow members who share your passion for boxing.</p>
      <p>Furthermore, our experienced trainers are dedicated to helping you reach your full potential, providing personalized instruction and guidance every step of the way.</p>
      <p>Take the first step towards achieving your fitness goals and join our classes today!</p>
    </div>
  </section>

  <section id="schedule" class="section">
    <div class="section-container">
      <h2>Schedule</h2>
      <p>Check out our class schedule below:</p>
      <table>
        <tr>
          <th>Day</th>
          <th>Time</th>
          <th>Class</th>
        </tr>
        <tr>
          <td>Monday</td>
          <td>6:00 PM - 7:00 PM</td>
          <td>Beginner's Boxing</td>
        </tr>
        <tr>
          <td>Wednesday</td>
          <td>6:00 PM - 7:00 PM</td>
          <td>Advanced Boxing</td>
        </tr>
        <tr>
          <td>Friday</td>
          <td>6:00 PM - 7:00 PM</td>
          <td>Cardio Boxing</td>
        </tr>
        <tr>
          <td>Saturday</td>
          <td>10:00 AM - 11:00 AM</td>
          <td>Strength and Conditioning</td>
        </tr>
      </table>
      <p>Our schedule may vary, so be sure to check back regularly for updates and additional class offerings.</p>
      <p>Additionally, we offer private training sessions for those seeking personalized instruction and flexibility in their training schedule. Contact us for more information.</p>
      <p>Join us and unleash your full potential!</p>
    </div>
  </section>

  <section id="contact" class="section">
    <div class="section-container">
      <h2>Contact Us</h2>
      <p>Give us a call at: <a href="tel:+1234567890">87077450509</a></p>
      <p>We look forward to hearing from you!</p>
      <p>Join our community and stay connected!</p>
    </div>
  </section>

  <div id="registrationModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <h2>Registration</h2>
      <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Submit</button>
      </form>
    
    </div>
  </div>
</body>
</html>  
<script>
    function openRegistrationForm() {
      window.open("registration.php", "_blank");
    }
</script>