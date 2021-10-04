<!doctype html>
<html lang="en">

<head>
    <?php
    //At some point, I'd like to load these cards dynamically, but for now, I will leave it. I'm very tired.
    //Update: I now HAVE to load them dynamically, so uh
    require_once("functions.php");
    require_once("json_util.php");
    ?>

    <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <style>
        .single_advisor_profile:hover .bi-slash-lg {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            color: #FFFFFF;
        }

        .single_advisor_profile .bi-slash-lg {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        .single_advisor_profile:hover ul {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            color: #FFFFFF;
        }

        .single_advisor_profile ul {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        #createButton {
            right: 5%;
            bottom: 5%;
            width: 3rem;
            height: 3rem;
            z-index: 5;
            transition: all 0.25s ease-in-out;
            -webkit-transition: all 0.25s ease-in-out;
            -moz-transition: all 0.25s ease-in-out;
        }

        #createButton:hover {
            width: 7rem;
            transition: all 0.25s ease-in-out;
            -webkit-transition: all 0.25s ease-in-out;
            -moz-transition: all 0.25s ease-in-out;
        }

        #createButton:hover::after {
            content: "create";
        }



    </style>
    <a href="./index.php" class="bi bi-house-fill text-secondary"></a>
    <title>ASE 230 - class of Spring/Fall/Summer 20XX</title>
</head>

<body>
<div class="container text-center">
    <h1>This is ASE 230 - class of Fall 2021</h1>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s"
                 style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <h3>Our Creative <span>Team</span></h3>
                <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Single Advisor-->
        <!--FIRST card-->
        <?php
        $studentArray = fileFetcher();
        cardLoader($studentArray);
        ?>
    </div>
    <a href="create.php">
    <button class="btn-outline-primary rounded-pill text-center text-nowrap
        position-fixed rounded-circle ratio-1x1 bi-keyboard fs-5 overflow-hidden" id="createButton">
    </button>
    </a>

</div>
</body>

</html>