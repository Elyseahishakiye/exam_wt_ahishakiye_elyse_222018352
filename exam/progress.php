<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>progress report</title>
</head>
<body>


<div class="section" id="progress_report">
    <h2>Progress Report</h2>
    <p>Check your progress here...</p>

    <!-- Additional content for Advanced and Awesome pages -->
    <h2>Advanced Counseling</h2>
    <p>Our advanced counseling techniques include cognitive behavioral therapy, mindfulness practices, and more to help you achieve optimal mental health.</p>

    <h2>Awesome Counseling Programs</h2>
    <p>Discover our awesome programs that are designed to support your personal growth, enhance your well-being, and empower you to achieve your life goals.</p>

    <!-- Additional content and images -->
    <h2>Personalized Approach</h2>
    <p>We understand that each individual is unique, and our counseling sessions are tailored to meet your specific needs and goals. Whether you're facing challenges in your personal life or seeking professional development, we're here to support you every step of the way.</p>
    <img src="personalized_approach.jpg" alt="Personalized Approach" width="300">

    <h2>Client Success Stories</h2>
    <p>Read inspiring stories from our clients who have transformed their lives with the help of our counseling services.</p>
    <img src="success_stories.jpg" alt="Client Success Stories" width="300">


  <h2>Report</h2>
    <p>Submit your report here...</p>

    <form action="/submit_report" method="post">
        <label for="reporter_name">Reporter's Name:</label><br>
        <input type="text" id="reporter_name" name="reporter_name" required><br>

        <label for="issue">Issue:</label><br>
        <input type="text" id="issue" name="issue" required><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" required></textarea><br>
        <label for="reporter_email">Reporter's Email:</label><br>
<input type="email" id="reporter_email" name="reporter_email" required><br>

<label for="report_date">Report Date:</label><br>
<input type="date" id="report_date" name="report_date" required><br>

<label for="report_subject">Report Subject:</label><br>
<input type="text" id="report_subject" name="report_subject" required><br>

<label for="severity_level">Severity Level:</label><br>
<select id="severity_level" name="severity_level" required>
    <option value="" disabled selected>Select severity level</option>
    <option value="Low">Low</option>
    <option value="Medium">Medium</option>
    <option value="High">High</option>
</select><br>

<label for="report_location">Report Location:</label><br>
<input type="text" id="report_location" name="report_location" required><br>


        <input type="submit" value="Submit">
    </form>
</body>
</html>