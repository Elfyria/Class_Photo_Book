<?php

function days_ago($DOB, $format = '%Y') /* calculates the difference between the student's birthday and the current date to find out how many days or years
    have passed since their birth. In this case, the function allows you to specify the format of the date as well as the date itself when called in another file.
 That way, it is more flexible. */
{
    $date = date('Y-m-d', time());
    $datetime1 = date_create($date);
    $datetime2 = date_create($DOB);

// calculates the difference between DateTime objects
    $interval = date_diff($datetime2, $datetime1);

// printing result in days format
    echo $interval->format('%a');
    // echo $interval->format('%R%y years');

    //subtract current date from date of birth

}

function card_display($student, $index) //displays the individual cards in index.php so we don't have to manually code it each time.
{
    ?>
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s"
             style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <!-- Team Thumb-->
            <div class="advisor_thumb"><a href="detail.php?index=<?php echo $index; ?>"><img
                            src="<?php echo $student['img']; ?>" alt=""
                            style='height: auto; width: 100%; object-fit: contain'></a>
                <!-- Social Info-->
                <!-- displays the student's social media(Facebook, Twitter, LinkedIn) -->
                <div class="social-info"><a href="detail.php?index=<?php echo $index; ?>"><i class="fa fa-facebook"></i></a><a
                            href="detail.php?index=<?php echo $index; ?>"><i class="fa fa-twitter"></i></a><a
                            href="detail.php?index=<?php echo $index; ?>"><i
                                class="fa fa-linkedin"></i></a></div>
            </div>
            <!-- Team Details-->

            <div class="single_advisor_details_info">
                <h6><?php echo $student['name']; ?></h6> <!-- displays student's name -->
                <?php days_ago($student['DOB'], '%y'); ?> <!-- displays student's date of birth -->
                <p class="designation"><?php echo $student['job']; ?></p> <!-- displays student's job -->
                <?php
                for ($j = 0; $j < $student['year']; $j++) { //for loop loops through each individual card and displays the student's year in college with a star symbol.
                    //the number of symbols displayed varies by grade level. For example, a junior would have 3 stars while a freshman would have only 1 star.
                    echo '&#9728;';

                }
                ?>
            </div>
        </div>

    </div>
    <?php
}

?>

