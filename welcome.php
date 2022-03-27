<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Welcome</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            padding: 0;
            margin: 0;
        }

        body{
            font-family: 'Poppins', sans-serif;
            background: #131a26;
        }

        .wrapper{
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1{
            padding: 20px;
            font-size: 80px;
            color: #d81e5b;
        }

        .button{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            width: 80px;
            height: 30px;
            background: #03ffdd;
            padding: 5px;
            border-radius: 10px;
            text-decoration: none;
            color: #131a26;
            transition: 0.3s;
        }

        .button:hover{
            background: #85F4FF;
        }

        .user_name{
            color: #03ffdd;
        }

        #particles-js{
		position: absolute;
		z-index: -1;
		width: 100%;
		height: 100vh;
	}

    .header{
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .logout{
        display: flex;
        justify-content: center;
        align-items: center;
        background: #DA1212;
        color: white;
        padding: 5px;
        border-radius: 10px;
        width: 80px;
        height: 30px;
        margin-top: 20px;
        text-align: center;
        text-decoration: none;
        justify-self: end;
        position: absolute;
        margin-left: 90%;
        transition: 0.3s;
    }

    .logout:hover{
        background: #FC4F4F;
    }

    .learn{
        font-size: 28px;
        margin-top: 50px;
        padding: 10px;
        color: #9AD0EC;
    }

    .all-cards{
        display: flex;
        justify-content: center;
        width: 100%;
        height: 50%;
    }

    .card{
        width: 15%;
        height: 98%;
        background-image: linear-gradient(to right top, #ddeaff, #d1f1ff, #c7f7ff, #c5fcf6, #cfffe7);
        border-radius: 10px;
        margin: 30px;
        -webkit-box-shadow: 5px 5px 18px 5px rgba(255,255,255,0.11); 
        box-shadow: 5px 5px 18px 5px rgba(255,255,255,0.11);
        transition: 0.3s;
    }

    .card:hover{
        transform: scale(1.05);
    }

    .card:hover > img {
      opacity: 0.7;
    }

    .card:active{
      transform: scale(0.9)
    }

    .card-img{
        width: 100%;
        height: 130px;
        border-radius: 10px 10px 0 0;
    }

    .card-text{
        padding: 10px;
        word-wrap: break-word;
        font-size: 13px;
    }
    </style>
</head>
<body>
    <div id="particles-js"></div>
    <div class="wrapper">
        <div class="header">
            <?php echo "<h1>Welcome " ,"<span class='user_name'>". $_SESSION['username'] ."</span>" , "</h1>"; ?>
                <a href="logout.php" class="logout"><p>Logout</p></a>
        </div>
        <a href="mainfiles\frontlook.html" class="button">Start <i class="fa fa-arrow-right" aria-hidden="true" style="margin-left: 3px;"></i></a>
        <h3 class="learn">What you will learn</h3>

        <!-- cards -->
        <div class="all-cards">
            <div class="card">
                <img src="html.jpg" class="card-img">
                <p class="card-text">
                    The HyperText Markup Language or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.
                </p>
            </div>

            <div class="card">
                <img src="css.jpg" class="card-img">
                <p class="card-text">
                    Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.
                </p>
            </div>

            <div class="card">
                <img src="js.png" class="card-img">
                <p class="card-text">
                    JavaScript, often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. Over 97% of websites use JavaScript on the client side for web page behavior, often incorporating third-party libraries.
                </p>
            </div>

            <div class="card">
                <img src="c.png" class="card-img">
                <p class="card-text">
                    C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions.
                </p>
            </div>

            <div class="card">
                <img src="c++.jpg" class="card-img">
                <p class="card-text">
                    C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes".
                </p>
            </div>
        </div>
    </div>
<script src="particles.js"></script>
<script>
    /* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

/* Otherwise just put the config content (json): */

particlesJS('particles-js',
  
  {
    "particles": {
      "number": {
        "value": 80,
        "density": {
          "enable": true,
          "value_area": 1200
        }
      },
      "color": {
        "value": "#ffffff"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.1,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 5,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 5,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 6,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": false,
          "mode": "repulse"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true,
    "config_demo": {
      "hide_card": false,
      "background_color": "#b61924",
      "background_image": "",
      "background_position": "50% 50%",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }

);
</script>
</body>
</html>