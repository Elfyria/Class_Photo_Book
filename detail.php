<?php
echo $_GET['index'];

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
    echo 'ASE 230 - ' . $students[$_GET['index']]['name'];
    ?>
</title>

<div class="container text-center mb-5">

    <h1>
        <?php
        echo 'This is ASE 230 - ' . $students[$_GET['index']]['name'];
        ?>
    </h1>

</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-6">
            <div class="mb-2">
                <img class="w-100" src="<?php echo $students[$_GET['index']]['photo']; ?>" alt="">
            </div>
            <div class="mb-2 d-flex">

                <h4 class="font-weight-normal"><?php echo $students[$_GET['index']]['name']; ?></h4>

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
                            echo $students[$_GET['index']]['profession'];
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
                            echo $students[$_GET['index']]['company'];
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
                            echo $students[$_GET['index']]['email'];
                            ?>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 pl-xl-3">
            <h5 class="font-weight-normal">Short intro</h5>


            <p><?php
                echo $students[$_GET['index']]['bio'];
                ?>
            </p>
            <div class="my-2 bg-light p-2">

                <p class="font-italic mb-0">
                    <?php
                    echo $students[$_GET['index']]['quote'];
                    ?>
                </p>

            </div>
            <div class="mb-2 mt-2 pt-1">

                <h5 class="font-weight-normal">
                    <?php echo 'Top skills'; ?>
                </h5>
            </div>
            <?php
            for ($i = 0; $i < count($students); $i++) {
                ?>
                <div class="py-1">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width:<?php echo $students[$_GET['index']]['skills'][$i]['level']; ?>%"
                             aria-valuenow="<?php echo $students[$_GET['index']]['skills'][$i]['level']; ?>"
                             aria-valuemin="0"
                             aria-valuemax="100">
                            <div class="progress-bar-title"><?php echo $students[$_GET['index']]['skills'][$i]['name']; ?></div>
                            <span class="progress-bar-number"><?php echo $students[$_GET['index']]['skills'][$i]['level']."%"; ?></span>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            <h5 class="font-weight-normal"><?php echo 'Fun fact'; ?></h5>
            <p>
                <?php
                echo $students[$_GET['index']]['fact'];
                ?>
            </p>
        </div>
        <a href="index.php">Click Here to Go Back</a>
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