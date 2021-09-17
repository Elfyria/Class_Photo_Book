<?php
require('data.php'); // importing array and functions
require('functions.php');

?>

<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
      integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous"/>


<body>

<link rel="stylesheet" href="assets/css/detail.css"/>

<title>
    <?php
    echo 'ASE 230 - ' . $studentArray[$_GET['index']]['name']; //Title for student name
    ?>
</title>

<div class="container text-center mb-5">

    <h1>
        <?php
        echo 'This is ASE 230 - ' . $studentArray[$_GET['index']]['name']; //gets the name of the student
        ?>
    </h1>

</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-6">
            <div class="mb-2">
                <img class="w-100" src="<?php echo $studentArray[$_GET['index']]['img']; ?>" alt=""> <!-- displays the student image-->
            </div>
            <div class="mb-2 d-flex">

                <h4 class="font-weight-normal"><?php echo $studentArray[$_GET['index']]['name']; ?></h4> <!-- displays the student's name in the description-->

                <div class="social d-flex ml-auto">
                    <p class="pr-2 font-weight-normal">Follow on:</p>
                    <a href="#" class="text-muted mr-1">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-muted mr-1">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-muted mr-1">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-muted">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="mb-2">
                <ul class="list-unstyled">
                    <li class="media">
              <span class="w-25 text-black font-weight-normal">
                  <?php
                  echo 'Dream profession:';
                  ?>
              </span>
                        <label class="media-body">
                            <?php
                            echo $studentArray[$_GET['index']]['dProfession']; //gets the dream profession from the studentArray at the current student
                            ?>
                        </label>
                    </li>
                    <li class="media">
              <span class="w-25 text-black font-weight-normal">
                  <?php
                  echo 'Dream company: ';
                  ?>
              </span>
                        <label class="media-body">
                            <?php
                            echo $studentArray[$_GET['index']]['dCompany']; //gets the dream company from the studentArray at the current student
                            ?>
                        </label>
                    </li>
                    <li class="media">
              <span class="w-25 text-black font-weight-normal">
                  <?php
                  echo 'Email: '
                  ?>
              </span>
                        <label class="media-body">
                            <?php
                            echo $studentArray[$_GET['index']]['email']; //gets the email from the studentArray at the current student
                            ?>
                        </label>
                    <li class="media">
              <span class="w-25 text-black font-weight-normal">
                  <?php
                  echo 'Birthday: ';
                  ?>
              </span>
                        <label class="media-body">
                            <?php
                            $birthdate = explode("-", $studentArray[$_GET["index"]]["DOB"]);
                            echo date("Y-m-d"), -$birthdate[0];
                            ?> <!-- This section displays the birthday. It formats the date retrieved from the array and displays it at the current index using the format "Year"-"Month"-"Day" -->
                        </label>
                    </li>
                    <li class="media">
              <span class="w-25 text-black font-weight-normal">
                  <?php
                  echo 'Days since birth: ';
                  ?>
              </span>
                        <label class="media-body">
                            <?php

                            echo days_ago($studentArray["DOB"], 'd'); //calls the days_ago function to calculate and display the days since birth
                            ?>
                        </label>

                </ul>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 pl-xl-3">
            <h5 class="font-weight-normal">Short intro</h5>


            <p><?php
                echo $studentArray[$_GET['index']]['intro']; //displays the introduction
                ?>
            </p>
            <div class="my-2 bg-light p-2">

                <p class="font-italic mb-0">
                    <?php
                    echo $studentArray[$_GET['index']]['quote']; //displays a quote a student chose
                    ?>
                </p>

            </div>
            <div class="mb-2 mt-2 pt-1">

                <h5 class="font-weight-normal">
                    <?php echo 'Top skills'; ?>
                </h5>
            </div>
            <?php
            for ($i = 0; $i < count($studentArray[$_GET["index"]]["skills"]); $i++) {
                ?> <!-- this for loop loops through the studentArray to display the skills and their respective values for each skill. The name of the skill is displayed with a bar showing on a
                scale of 0 to 100 how proficient they are in it each skill-->
                <div class="py-1">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                             style="width:<?php echo $studentArray[$_GET['index']]['skills'][$i]['value']; ?>%"
                             aria-valuenow="<?php echo $studentArray[$_GET['index']]['skills'][$i]['value']; ?>"
                             aria-valuemin="0"
                             aria-valuemax="100">
                            <div class="progress-bar-title"><?php echo $studentArray[$_GET['index']]['skills'][$i]['name']; ?></div>
                            <span class="progress-bar-number"><?php echo $studentArray[$_GET['index']]['skills'][$i]['value'] . "%"; ?></span>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            <h5 class="font-weight-normal"><?php echo 'Fun fact'; ?></h5>
            <p>
                <?php
                echo $studentArray[$_GET['index']]['funfact']; //displays a fun fact about each student
                ?>
            </p>
        </div>
        <a href="index.php">Click Here to Go Back</a> <!-- takes the user back to the homepage with each student display card -->
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
?>
</body>