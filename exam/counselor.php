<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>counselor</title>
</head>
<body>


   <div class="section" id="counselor">
    <h2>Counselor</h2>
    <p>Meet our expert counselor, who is here to help you with personalized advice and support.</p>
    <h3>John Doe</h3>
    <p>John is a licensed counselor with over 10 years of experience in providing mental health support and guidance. He specializes in family therapy, stress management, and career counseling.</p>

    <!-- Additional content for Advanced and Awesome pages -->
    <h2>Advanced Counseling</h2>
    <p>Our advanced counseling techniques include cognitive behavioral therapy, mindfulness practices, and more to help you achieve optimal mental health.</p>

    <h2>Awesome Counseling Programs</h2>
    <p>Discover our awesome programs that are designed to support your personal growth, enhance your well-being, and empower you to achieve your life goals.</p>

   
    <h2>Personalized Approach</h2>
    <p>We understand that each individual is unique, and our counseling sessions are tailored to meet your specific needs and goals. Whether you're facing challenges in your personal life or seeking professional development, we're here to support you every step of the way.</p>
    <img src="personalized_approach.jpg" alt="Personalized Approach" width="300">

    <h2>Client Success Stories</h2>
    <p>Read inspiring stories from our clients who have transformed their lives with the help of our counseling services.</p>
    <img src="success_stories.jpg" alt="Client Success Stories" width="300">

    <h2>Register a New Counselor</h2>
    <form action="/submit_new_counselor" method="post">
        <label for="counselor_name">Counselor's Name:</label><br>
        <input type="text" id="counselor_name" name="counselor_name" required><br>

        <label for="specialization">Specialization:</label><br>
<select id="specialization" name="specialization" required>
    <option value="" disabled selected>Select specialization</option>
    <option value="Family Therapy">Family Therapy</option>
    <option value="Stress Management">Stress Management</option>
    <option value="Career Counseling">Career Counseling</option>
    <option value="Marriage Counseling">Marriage Counseling</option>
<option value="Substance Abuse">Substance Abuse Counseling</option>
<option value="Child and Adolescent Counseling">Child and Adolescent Counseling</option>
<option value="Anger Management">Anger Management Counseling</option>
<option value="Decision-Making Skills">Decision-Making Skills Counseling</option>
<option value="Emotional Regulation">Emotional Regulation Counseling</option>
<option value="Conflict Resolution">Conflict Resolution Counseling</option>
<option value="Self-Control Improvement">Self-Control Improvement Counseling</option>


    <!-- Add more options as needed -->
</select><br>


        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Phone:</label><br>
        <input type="tel" id="phone" name="phone" required><br>

        <input type="submit" value="Submit">
    </form>
</div>
</body>


<style type="text/css">
	

 label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
 input[type="tel"] 
 {
    width: 50%;
    padding: 18px;
    margin-bottom: 10px;
    border: 3px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type="submit"]:hover {
    background-color: #45a049;
}

select {
    width: 50%;
    padding: 18px;
    margin-bottom: 10px;
    border: 3px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    appearance: none; 
    background-repeat: no-repeat;
    background-position: right 8px top 50%;
    background-size: 16px 16px;
}

</style>
</html>