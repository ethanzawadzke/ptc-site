<?php
    /*
    Template Name: Contact Us
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Plot Twist Consulting</title>
</head>

<?php get_header(); ?>

<body>


<div class="width" id="contact-width">
    <div class="info-card-main-contact-us">
        <div class="info-card-about-us-text">
            <div class="info-card-about-us-text-title">
                <h1>Contact Us</h1>
                <span class="info-card-about-us-text-title-underline"></span>
            </div>
        </div>

        <form action="/action_page.php" id="contact-us-form">
            <div class="category-container">
                <div class="category-header">
                    <h1>About you</h1>
                </div>
                <div class="category-forms">
                    <div>
                        <label for="first-name">First Name:<span class="required">*</span></label><br>
                        <input type="text" id="first-name" name="first-name"><br>
                    </div>
                    
                    <div>
                        <label for="last-name">Last Name:<span class="required">*</span></label><br>
                        <input type="text" id="last-name" name="last-name"><br>
                    </div>

                    <div>
                        <label for="email">Email:<span class="required">*</span></label><br>
                        <input type="email" id="email" name="email"><br>                
                    </div>

                    <div>
                        <label for="phone">Phone Number:<span class="required">*</span></label><br>
                        <input type="text" id="phone" name="phone"><br>               
                    </div>      
                    
                    <div>
                        <label for="job-title">Job Title:</label><br>
                        <input type="text" id="job-title" name="job-title"><br>
                    </div>
                </div>
            </div>

            <div class="category-container">
                <div class="category-header">
                    <h1>About your business</h1>
                </div>
                <div class="category-forms">
                    <div>
                        <label for="company-name">Company Name:</label><br>
                        <input type="text" id="company-name" name="company-name"><br>                
                    </div>
                </div>
            </div>


            <div class="category-container">
                <div class="category-header">
                    <h1>How can we help?</h1>
                </div>

                <div class="category-forms">
                    <div>
                        <label for="message">Message:<span class="required">*</span></label><br>
                        <textarea id="message" name="message" rows="5" style="resize: none;"></textarea><br>                  
                    </div>
                </div>
            </div>

            <button type="submit">Submit</button>
        </form> 
    </div>
</div>

    <?php get_footer(); ?>
    
</body>
</html>