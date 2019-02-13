<!doctype html>
<html lang='en'>
<head>

    <!-- HTML Required Headers -->
    <title>DWA Project 1</title>
    <meta charset="utf-8" />

    <!-- Stylesheet for this Page -->
    <link rel='stylesheet' href='./styles/index.css'/>

</head>
<body>

    <!-- Double rounded rectangles form a content area -->
    <div id='content_border'>
        <div id='content'>

            <!-- Page Heading/Title -->
            <div id='title'><span class='center-text'>Jeremy C. Southgate</span></div>

            <!-- Personal Portrait -->
            <img id='portrait' src='./images/portrait.jpg' alt='Portrait'/>

            <!-- Personal Description Paragraph -->
            <div id='description'>
                <p class='center-text'>
                    I am a degree candidate for Bachelor of Liberal Arts at Harvard Extension School.
                    To date, I have taken EXPO E-25 Academic Writing and Critical Reading,
                    DGMD E-50 Visual Communication Design, CSCI E-50 Intensive Intro to Computer Science,
                    MATH E-3 Quantitative Reasoning, EXPO E-34 Business Rhetoric. In addition to this course
                    this semester I am taking GOVT E-1045 Justice, CSCI E-31 Javascript with Node.js, and
                    DGMD E-37 Motion Graphics. I enjoy reading in Widener, swimming in Blodgett pool, and
                    rowing on the Charles!
                </p>
            </div>

            <!-- Dynamically-generated quotes -->
            <div id='quotes'>
                <h1 class='center-text'>&ldquo;<?php include "./php/quotes.php"; ?>&rdquo;</h1>
            </div>

        </div>
    </div>

</body>
</html>
