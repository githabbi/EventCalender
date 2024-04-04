
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sup'Com Junior Entreprise</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@500&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* 
        #222831
        #393E46
        #00ADB5
        #EEEEEE */
        *{

            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Montserrat", sans-serif;
        }
        body{
            min-height: 100vh;
            font-size: 16px;
            background-color: #eeeeee;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card{
            position: relative;
            width: 450px;
            height: 550px;
            background: url(https://raw.githubusercontent.com/githabbi/EventCalender/boj/images/CITD.jpg) no-repeat center -80px;
            background-size: cover;
            border-radius: 40px;
            overflow: hidden;
            box-shadow: 0 0 30px 2px rgba(0, 0, 0, 0.6);
            display: grid;
            grid-template-rows: 60% 40%;
        }
        .event-info{
            position: relative;
            display: grid;
            grid-template-areas: 
            "empty title title"
            "des des des"
            "info info action";
            justify-items: center;
            align-items: center;
            grid-gap: 16px;
            padding: 20px;
        }
        .event-info * {
            position: relative;
        }
        .description{
            grid-area: des;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;

        }
        .title{
           grid-area: title;
           font-size: 1.4em;
           font-weight: bold;
           letter-spacing: 1.5px;
        }
        .additional-info{
            grid-area: info;

        }
        .additional-info p{
            font-size: 0.9em;
            margin-top: 8px;
            letter-spacing: 0.7px;
        }
        .action{
            grid-area: action;
        }
        .event-info::before{
            content:"";
            position: absolute;
            top:0;
            left:0; 
            width:110%; 
            height: 300%; 
            background:linear-gradient(to bottom, #00ADB5 0%,#222831 51%,#EEEEEE 100%) ;   
            border-top-right-radius: 100px;
            transform: rotate(-6deg);
        }
        .action{
            border: 1px solid;
            outline: none;
            background-color: transparent;
            border-radius: 4px;
            cursor: pointer;
            padding: 12px;
            text-transform: uppercase;
            font-size: 1.1em;
            font-weight: bold;
            letter-spacing: 1.5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .action:hover{
            background-color: #eeeeee;
            color: #00ADB5;
            box-shadow: 0 0 20px #00ADB5;
        }
    </style>
</head>
<body>
    <div class="card">
        <section class="top"></section>
        <div class="event-info">
            <p class="title">Code In The Dark</p>
            <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque ipsa, ab molestias laboriosam nulla temporibus architecto earum cumque provident enim </p>
            <div class="additional-info">
                <p class="info">
                    <i class="fas fa-map-marked-alt"></i>
                    Sup'Com
                </p>
                <p class="info">
                    <i class="fas fa-calendar-alt"></i>
                    Sat, Avr 27, 2:00 PM
                </p>
            </div> 
            <button class="action">Participate</button>
        </div>
    </div>
    <script>
        const desc = document.querySelector('.description');

        desc.addEventListener('mouseenter', () => {
            desc.style.WebkitLineClamp = 'none';
            desc.style.overflow = 'visible';
        });

        desc.addEventListener('mouseleave', () => {
            desc.style.WebkitLineClamp = '3';
            desc.style.overflow = 'hidden';
        });
    </script>
     
</body>
</html>