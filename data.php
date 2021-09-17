<?php
/* $students = [
//    [
//        'name' => 'Elise Stromberg',
//        'year' => 3,
//        'profession' => 'Cyber analyst',
//        'company' => 'Cincinnati Insurance Companies',
//        'email' => 'stromberge1@nku.edu',
//        'age' => 21,
//        'birthdate' => '2000-09-03',
//        'skills' => [
//            [
//                'name' => 'Java',
//                'level' => 0
//            ],
//            [
//                'name' => 'Information Technologies',
//                'level' => 80
//            ],
//            [
//                'name' => 'Splunk',
//                'level' => 70
//            ],
//
//        ],
//        'photo' => 'picture_for_class.jpg',
//        'bio' => 'I am a junior at Northern Kentucky University. I am majoring in Cybersecurity with a minor in Japanese. I am from the Cincinnati region and have been born and raised in Ohio. I chose to go into cybersecurity because it seemed like a good profession for someone interested in technology. I also want to help protect people from scammers.',
//        'quote' => 'Success is not final, failure is not fatal: it is the courage to continue that counts. - Winston Churchill',
//        'fact' => 'The farthest place I have traveled to is Mongolia. It took 5 flights and around 2 days to reach it. I also am a cosplayer and like to sew outfits and plushes.'
//
//    ],
//    [
//        'name' => 'Alex Lisa',
//        'year' => 3,
//        'profession' => 'Dungeons and Dragons DM',
//        'company' => 'Dungeons and Dragons',
//        'email' => 'lisaa1@nku.edu',
//        'age' => 20,
//        'birthdate' => '2001-03-10',
//        'skills' => [
//            [
//                'name' => 'Dungeons and Dragons DM',
//                'level' => 100
//            ],
//            [
//                'name' => 'Technology',
//                'level' => 100
//            ],
//            [
//                'name' => 'Speech Skills',
//                'level' => 100
//            ],
//
//        ],
//        'photo' => 'picture2.jpg',
//        'bio' => 'Duis pretium et purus at vehicula. Proin bibendum tempor vestibulum. Quisque sodales volutpat dui id rhoncus. In nec erat nisl. Vestibulum vel mattis massa, nec mollis nibh. Nullam sed tempor sem. Proin nulla augue, iaculis nec quam id, imperdiet rutrum nunc. Cras eget tincidunt nunc. Maecenas eget sagittis ligula, sed iaculis felis. Praesent imperdiet est eu risus venenatis dapibus. Phasellus laoreet quam erat, et consequat tellus laoreet iaculis. Cras ultrices, mi non fringilla lacinia, mauris tortor mattis nisi, id consequat lectus mauris sed sapien. Etiam nec odio at est tincidunt elementum sit amet non est. Integer feugiat sem turpis, sed ultricies nulla imperdiet cursus. Vestibulum consequat mattis turpis, et fringilla neque cursus vel.',
//        'quote' => 'My name is Inigo Montoya. You killed my father. Prepare to die. - Inigo Montoya',
//        'fact' => 'Nunc elementum suscipit augue, eu porta orci pretium quis. Integer a tortor at odio facilisis ultrices.'
//    ],
//    [
//        'name' => 'Dylan Gaines',
//        'year' => 2,
//        'profession' => 'Professional ice cream taster',
//        'company' => 'Freelancer',
//        'email' => 'gainesd2@nku.edu',
//        'age' => 21,
//        'birthdate' => '2000-08-24',
//        'skills' => [
//            [
//                'name' => 'Tasting ice cream',
//                'level' => 60
//            ],
//            [
//                'name' => 'Making everyone laugh',
//                'level' => 100
//            ],
//            [
//                'name' => 'Giving me hope',
//                'level' => 100
//            ],
//
//        ],
//        'photo' => 'picture.jpg',
//        'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis finibus ex. Nulla facilisi. Nunc dictum viverra justo. Integer eleifend diam at consequat varius. Mauris ac dictum nisl. Donec suscipit efficitur lacus, vitae ultrices magna iaculis id. Etiam lobortis at felis eu lobortis. Phasellus ut diam cursus, pulvinar nisi gravida, sodales risus. Maecenas id pellentesque tortor. Vivamus aliquet quam in enim semper, faucibus feugiat mauris dictum. Nunc nibh lorem, ultrices sed luctus non, auctor sed orci. Proin id tellus felis. Duis blandit volutpat libero, et commodo lectus condimentum lacinia. Nunc congue magna metus. Vestibulum aliquet gravida finibus.',
//        'quote' => 'Ooga Booga- Some caveman',
//        'fact' => 'Fusce luctus nibh lacinia aliquam venenatis.'
//    ],
//];
//
*/

/* This array keeps track of all students and their information. In this case, data from the whole class was compiled into a word document
and then copy/pasted into the data.php file. This array is called in detail.php and index.php and is used to display specific student information.
*/
$studentArray =
    array(
        [
            "name" => "Samuel Long",
            "DOB" => "2001-8-15",
            "year" => "3",
            "job" => "Student",
            "img" => "https://i.imgur.com/rqSvE0T.png",
            "instagram" => "https://www.youtube.com/watch?v=dQw4w9WgXcQ",
            "facebook" => "https://www.youtube.com/watch?v=dQw4w9WgXcQ",
            "twitter" => "https://www.youtube.com/watch?v=dQw4w9WgXcQ",
            "linkedIn" => "https://www.youtube.com/watch?v=dQw4w9WgXcQ",
            "dProfession" => "Game Development",
            "dCompany" => "The Boring Company",
            "email" => "longs6@mymail.nku.edu",
            "intro" => "This is my introduction. It is very short. In fact, it just ended.",
            "quote" => "We don’t make mistakes. We just have happy accidents. ~ Bob Ross",
            "funfact" => "Mad Max: Fury Road is a good movie.",
            "skills" => [
                ["name" => "Networking", "value" => "80"],
                ["name" => "Programming", "value" => "70"],
                ["name" => "Crab-walking", "value" => "0"]
            ]],

        [
            "name" => "Quentin Roa",
            "DOB" => "2001-5-16",
            "year" => "3",
            "job" => "Student",
            "img" => "https://scontent-ort2-1.xx.fbcdn.net/v/t31.18172-8/20368904_1595420693835470_8046763886700406545_o.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=n3zqjV6pQbQAX8DxXbG&tn=2zCGEsUY1cjNIJXM&_nc_ht=scontent-ort2-1.xx&oh=4e400df37bf23158f377f4965dd086e3&oe=6166B0B4",
            "instagram" => "",
            "facebook" => "",
            "twitter" => "",
            "linkedIn" => "",
            "dProfession" => "Firmware Developer",
            "dCompany" => "Prusa",
            "email" => "roaq1@mymail.nku.edu",
            "intro" => "As a child I wanted to be an inventor, it led to a large set of possibilities. just before 3d printing hit the hobbyist mainstream I found what I wanted to really do, which is work on 3d printers to make them increadibly user friendly, as I saw the potential in making rapid prototyping and functional printing has for future generations.",
            "quote" => "Value of something can only be weighed by the individual that wants to have
it.",
            "funfact" => "3d printing has been around since the mid 1980s, but because of patents it has just recently become popular as a hobby.",
            "skills" => [
                ["name" => "Finance", "value" => "70"],
                ["name" => "Information Technologies", "value" => "80"],
                ["name" => "Education", "value" => "75"]
            ]],
        [
            "name" => "Dylan Gaines",
            "DOB" => "1999-12-07",
            "year" => "3",
            "job" => "Student",
            "img" => "https://pbs.twimg.com/profile_images/1268660533127008256/UNoc474t_400x400.jpg",
            "instagram" => "https://www.instagram.com/tsc_dg/",
            "facebook" => "https://www.rejectionletters.net/preview/Reject_Follow_Request",
            "twitter" => "https://twitter.com/TSC_dg/",
            "linkedIn" => "https://www.linkedin.com/in/dylanmgaines/",
            "dProfession" => "Full-Stack Application Developer",
            "dCompany" => "Whichever one is reading this",
            "email" => "gainesd2@mymail.nku.edu",
            "intro" => "I\'m a 21 year old applied software engineering major at Northern Kentucky University. I commute from the Lawrenceburg, Indiana area, where I also work as an employee for the Kroger Company on weekends and Mondays. I enjoy learning languages, but haven\'t had the time to commit to one recently. I greatly enjoy working with code, and tend to get hyped up when talking about things I find interesting. I may not be great with my time, but more than make up for it with tenacity, creativity and energy.",
            "quote" => "\"Life is locomotion... if you\'re not moving, you\'re not living. But there comes a time when you\'ve got to stop running away from things... and you\'ve got to start running towards something, you\'ve got to forge ahead. <b>Keep moving.</b> Even if your path isn\'t lit... trust that you\'ll find your way.\"<br> <hr> <cite>The Flash, Vol 4 Issue #1</cite>",
            "funfact" => "Over the summer, I learned multiple books-worth of Dungeons & Dragons lore because my friends wouldn't stop being mad about not being able to play D&D.",
            "skills" => [
                ["name" => "Software Development", "value" => "78"],
                ["name" => "Technical Communication", "value" => "65"],
                ["name" => "Productively Channeling Spite", "value" => "2000"]
            ]],
        [
            "name" => "Elise Stromberg",
            "DOB" => "2000-09-03",
            "year" => "3",
            "job" => "Student",
            "img" => "https://www.telegraph.co.uk/multimedia/archive/03249/archetypal-female-_3249633c.jpg",
            "instagram" => "None",
            "facebook" => "None",
            "twitter" => "None",
            "linkedIn" => "None",
            "dProfession" => "Cybersecurity Analyst",
            "dCompany" => "The Cincinnati Insurance Companies",
            "email" => "stromberge1@nku.edu",
            "intro" => "I am a junior at Northern Kentucky University. I am majoring in Cybersecurity with a minor in Japanese. I am from the Cincinnati region and have been born and raised in Ohio. I chose to go into cybersecurity because it seemed like a good profession for someone interested in technology. I also want to help protect people from scammers.
",
            "quote" => "Success is not final, failure is not fatal: it is the courage to continue that counts. - Winston Churchill",
            "funfact" => "The farthest place I have traveled to is Mongolia. It took 5 flights and around 2 days to reach it. I also am a cosplayer and like to sew outfits and plushes.
",
            "skills" => [
                ["name" => "Splunk", "value" => "80"],
                ["name" => "Information Technologies", "value" => "90"],
                ["name" => "Java", "value" => "0"]
            ]],
        [
            "name" => "Jimmy Barrios",
            "DOB" => "1995-01-29",
            "year" => "1",
            "job" => "Server-side developer",
            "img" => "https://cdn.iconscout.com/icon/free/png-512/batman-1417681-1197293.png",
            "instagram" => "#",
            "facebook" => "https://www.facebook.com/jimmy.barriosgomez",
            "twitter" => "#",
            "linkedIn" => "#",
            "dProfession" => "Server-side developer",
            "dCompany" => "Google",
            "email" => "barriosgoj1@mymail.nku.edu",
            "intro" => "I am Jimmy Barrios from Guatemala. I have been living in Cincinnati for about 3 years now. I started in a program call AELP (American English Language Program) at NKU in the fall of 2018. My native language is Spanish, and I am still on the journey of learning english while  I am starting the CIT program.",
            "quote" => "Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.",
            "funfact" => "I like to learn languages whether is programming languages or human languages, even though I know more programming languages than humans, I am pushing hard torse learning more human languages. Also, I like music and especially play the piano.",
            "skills" => [
                ["name" => "PHP", "value" => "75"],
                ["name" => "JavaScript", "value" => "73"],
                ["name" => "Database Management", "value" => "70"]
            ]]);
