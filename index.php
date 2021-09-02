<?php

$students = [
    [
        'name' => 'Elise Stromberg',
        'year' => 3,
        'profession' => 'Cyber analyst',
        'company' => 'Cincinnati Insurance Companies',
        'email' => 'stromberge1@nku.edu',
        'skills' => [
            [
                'name' => 'Java',
                'level' => 0
            ],
            [
                'name' => 'Information Technologies',
                'level' => 80
            ],
            [
                'name' => 'Splunk',
                'level' => 70
            ],

        ],
        'photo' => 'picture_for_class.jpg',
        'bio' => 'I am a junior at Northern Kentucky University. I am majoring in Cybersecurity with a minor in Japanese. I am from the Cincinnati region and have been born and raised in Ohio. I chose to go into cybersecurity because it seemed like a good profession for someone interested in technology. I also want to help protect people from scammers.',
        'quote' => 'Success is not final, failure is not fatal: it is the courage to continue that counts. - Winston Churchill',
        'fact' => 'The farthest place I have traveled to is Mongolia. It took 5 flights and around 2 days to reach it. I also am a cosplayer and like to sew outfits and plushes.'

    ],
    [
        'name' => 'Alex Lisa',
        'year' => 3,
        'profession' => 'Dungeons and Dragons DM',
        'company' => 'Dungeons and Dragons',
        'email' => 'lisaa1@nku.edu',
        'skills' => [
            [
                'name' => 'Dungeons and Dragons DM',
                'level' => 100
            ],
            [
                'name' => 'Technology',
                'level' => 100
            ],
            [
                'name' => 'Speech Skills',
                'level' => 100
            ],

        ],
        'photo' => 'picture2.jpg',
        'bio' => 'Duis pretium et purus at vehicula. Proin bibendum tempor vestibulum. Quisque sodales volutpat dui id rhoncus. In nec erat nisl. Vestibulum vel mattis massa, nec mollis nibh. Nullam sed tempor sem. Proin nulla augue, iaculis nec quam id, imperdiet rutrum nunc. Cras eget tincidunt nunc. Maecenas eget sagittis ligula, sed iaculis felis. Praesent imperdiet est eu risus venenatis dapibus. Phasellus laoreet quam erat, et consequat tellus laoreet iaculis. Cras ultrices, mi non fringilla lacinia, mauris tortor mattis nisi, id consequat lectus mauris sed sapien. Etiam nec odio at est tincidunt elementum sit amet non est. Integer feugiat sem turpis, sed ultricies nulla imperdiet cursus. Vestibulum consequat mattis turpis, et fringilla neque cursus vel.',
        'quote' => 'My name is Inigo Montoya. You killed my father. Prepare to die. - Inigo Montoya',
        'fact' => 'Nunc elementum suscipit augue, eu porta orci pretium quis. Integer a tortor at odio facilisis ultrices.'
    ],
    [
        'name' => 'Dylan Gaines',
        'year' => 2,
        'profession' => 'Professional ice cream taster',
        'company' => 'Freelancer',
        'email' => 'gainesd2@nku.edu',
        'skills' => [
            [
                'name' => 'Tasting ice cream',
                'level' => 60
            ],
            [
                'name' => 'Making everyone laugh',
                'level' => 100
            ],
            [
                'name' => 'Giving me hope',
                'level' => 100
            ],

        ],
        'photo' => 'picture.jpg',
        'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis finibus ex. Nulla facilisi. Nunc dictum viverra justo. Integer eleifend diam at consequat varius. Mauris ac dictum nisl. Donec suscipit efficitur lacus, vitae ultrices magna iaculis id. Etiam lobortis at felis eu lobortis. Phasellus ut diam cursus, pulvinar nisi gravida, sodales risus. Maecenas id pellentesque tortor. Vivamus aliquet quam in enim semper, faucibus feugiat mauris dictum. Nunc nibh lorem, ultrices sed luctus non, auctor sed orci. Proin id tellus felis. Duis blandit volutpat libero, et commodo lectus condimentum lacinia. Nunc congue magna metus. Vestibulum aliquet gravida finibus.',
        'quote' => 'Ooga Booga- Some caveman',
        'fact' => 'Fusce luctus nibh lacinia aliquam venenatis.'
    ],
];
?>

<!doctype html>
<html lang="en">
<head>
    <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
    <title>ASE 230 - class of Spring/Fall/Summer 20XX</title>
</head>
<body>

<div class="container text-center">
    <h1>This is ASE 230 - class of Spring/Fall/Summer 20XX</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <h3>Our Creative <span> Team</span></h3>
                <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Single Advisor-->
        <?php
        for($i = 0; $i < count($students); $i++){
            ?>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s"
                     style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Team Thumb-->
                    <div class="advisor_thumb"><a href="detail.php?index=<?php echo $i; ?>"><img src="<?php echo $students[$i]['photo']; ?>" alt=""
                                                                         style='height: auto; width: 100%; object-fit: contain'></a>
                        <!-- Social Info-->
                        <div class="social-info"><a href="detail.php?index=<?php echo $i; ?>"><i class="fa fa-facebook"></i></a><a
                                    href="detail.php?index=<?php echo $i; ?>"><i class="fa fa-twitter"></i></a><a href="detail.php?index=<?php echo $i; ?>"><i
                                        class="fa fa-linkedin"></i></a></div>
                    </div>
                    <!-- Team Details-->

                    <div class="single_advisor_details_info">
                        <h6><?php echo $students[$i]['name']; ?></h6>
                        <p class="designation"><?php echo 'Student at Northern Kentucky University'; ?></p>
                        <?php
                        for($j = 0; $j < $students[$i]['year']; $j++){
                            echo '&#9728;';
                        }
                        ?>
                    </div>
                </div>

            </div>
        <?php
        }

        ?>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>