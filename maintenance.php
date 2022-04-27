<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web Farid sedang maintenance" />
    <meta name="keywords" content="webfarid, farid karawang, farid back end, farid pwa" />
    <meta name="author" content="Farid" />
    <meta name="robots" content="index, follow" />
    <title>Maintenance - Web Farid</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            overflow: none;
            overflow-x: hidden;
            font-family: 'Rajdhani', sans-serif;
        }

        .bg-animation {
            overflow: hidden;
        }

        .ball {
            position: absolute;
            border-radius: 100%;
            background: none;
            opacity: 0.7;
        }

        .box {
            position: absolute;
            background: none;
            opacity: 0.7;
        }

        div.sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            padding: 50px;
            font-size: 20px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="row">
        <div class="col 12">
            <div id="bg-animation" style="width: 100%; ">

            </div>
            <div class="row">
                <div class="col 12">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ml-3" style="margin-top: 150px; font-weight: bold">
                                    <h2> Mohon Maaf </h2>
                                    <h2> Website sedang Maintenance</h2>
                                </div>
                            </div>
                            <div class="col-sm-12 ml-3">
                                <a href="https://www.linkedin.com/in/webfarid/" role="button" class="btn btn-info">
                                    <i class="fa fa-linkedin"></i> : webfarid
                                </a>
                                <a href="https://www.instagram.com/faridf0x/" role="button" class="btn btn-primary">
                                    <i class="fa fa-instagram"></i> : @faridfox
                                </a>
                                <a href="mailto:webfarid15@gmail.com" role="button" class="btn btn-danger">
                                    <i class="fa fa-envelope"></i> : webfarid15@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        // BG Animation
        const colors = ["#DF0024", " #F3C300", "#00AC9F", " #2E6DB4"];

        const jumlah = 15;
        const balls = [];

        for (let i = 0; i < jumlah; i++) {
            let ball = document.createElement("div");
            ball.classList.add("ball");
            ball.style.border = '2px solid ' + colors[Math.floor(Math.random() * colors.length)];
            ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
            ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
            ball.style.transform = `scale(${Math.random()})`;
            ball.style.width = `${Math.random()}em`;
            ball.style.height = ball.style.width;

            balls.push(ball);
            document.getElementById('bg-animation').appendChild(ball);
        }

        for (let i = 0; i < jumlah; i++) {
            let box = document.createElement("div");
            box.classList.add("box");
            box.style.border = '2px solid ' + colors[Math.floor(Math.random() * colors.length)];
            box.style.left = `${Math.floor(Math.random() * 100)}vw`;
            box.style.top = `${Math.floor(Math.random() * 100)}vh`;
            box.style.transform = `scale(${Math.random()})`;
            box.style.width = `${Math.random()}em`;
            box.style.height = box.style.width;

            balls.push(box);
            document.getElementById('bg-animation').appendChild(box);
        }
        for (let i = 0; i < jumlah; i++) {
            let x = document.createElement("div");
            x.classList.add("box");
            x.innerHTML = "X";
            x.style.color = colors[Math.floor(Math.random() * colors.length)];
            x.style.left = `${Math.floor(Math.random() * 100)}vw`;
            x.style.top = `${Math.floor(Math.random() * 100)}vh`;
            x.style.transform = `scale(${Math.random()})`;
            x.style.width = `${Math.random()}em`;
            x.style.height = x.style.width;
            x.style.fontSuze = `${Math.random()}em`;

            balls.push(x);
            document.getElementById('bg-animation').appendChild(x);
        }


        // Keyframes
        balls.forEach((el, i, ra) => {
            let to = {
                x: Math.random() * (i % 2 === 0 ? -11 : 11),
                y: Math.random() * 12
            };

            let anim = el.animate(
                [{
                        transform: "translate(0, 0)"
                    },
                    {
                        transform: `translate(${to.x}rem, ${to.y}rem)`
                    }
                ], {
                    duration: (Math.random() + 1) * 1800, // random duration
                    direction: "alternate",
                    fill: "both",
                    iterations: Infinity,
                    easing: "ease-in-out"
                }
            );
        });
    </script>
</body>

</html>