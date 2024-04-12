<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Protest+Revolution&display=swap" rel="stylesheet">
  <link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
" rel="stylesheet">
  <style>
    body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
}

.contact {
  display: flex;
  min-height: 100vh;
}

.contact-image {
  flex: 1;
  display:grid;
  background-color: #00ADB5;
  justify-content: center;
  align-content: center;
  padding-top: 2%;
  width: 50%;
}

.contact-image img {

  height: 100%;
  object-fit:fill;

  
  padding-bottom: 110px;
  
}
@keyframes rotateImage {
      0% {
        transform: rotateY(0deg);
      }
      100% {
        transform: rotateY(360deg);
      }
    }

.rotate-image {
      display: inline-block;
      animation: rotateImage 5s linear ; /* Animation de rotation en boucle */
      width: 60%;
      
    }
  
.contact-form {
  flex: 1;
  padding: 50px;
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #00ADB5;
}

.contact-form h2 {
  font-size: 2em;
  margin-bottom: 20px;
}

.contact-form form {
  width: 100%;
  max-width: 500px;
  display: flex;
  flex-direction: column;
}

.contact-form .icons {
        position: absolute;
        left: 87%;
        top: 30%;
        margin-left: 5%;
        
        
    }

    .contact-form .icons a {
        border: none;
        border-radius: 10px;
        font-size: 40px;
        padding: 20px;
        margin:20px;
        color: white;
        
    }

    .contact-form .icons :hover {
        color:  #393E46;
    }


.contact-form input:active{
    border :none;
}
.contact-form input{
    border-radius: 15px;
     border :none;
        padding: 4.5%;
        margin-top: 5%;
        margin-bottom: 5%;
        width: 100%;
        background: #EEEEEE;
        box-shadow: 0 0 10px 5px white;
        transition: box-shadow 1s ease;
}
.contact-form textarea {
  padding: 10px;
  box-shadow: 0 0 10px 5px white;
  transition: box-shadow 1s ease;
  margin-bottom: 5%;
 
  font-size: 16px;

        margin-top: 3%;
        border-radius: 15px;
        border: none;
        background-color: #EEEEEE;
}

.contact-form textarea {
  height: 200px;
  width:500px;
}


.contact-form button {
  
  padding: 10px 20px;
  font-size: 30px;
    font-weight: 600;
    letter-spacing: 3px;
    width:520px;
    border-radius: 13px;
        border: none;
        font-family: Brush Script MT, Brush Script Std, cursive;
        background-color: white;
        cursor: pointer;
        transition: 0.5s ease;
        margin-top: 5%;
}

.contact-form button:hover {
  background-color: #393E46;
}



  .contact-form h2{
    font-family: "Roboto", sans-serif;
  font-size: 2em;
  font-weight: bold;
  color: #393E46;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
  text-align: center;
  margin: 1em 0;

  }
 
  </style>
</head>
<body>
  <section class="contact">
    <div class="contact-image">
        <img  class="rotate-image"  id="rotatingImage" src="{{ asset('assets/imgs/login2.png') }}" />
    </div>
    <div class="contact-form">
      <h2><i>Your Questions Answered</i></h2>

      <form action="{{ route('send.php.mailer.submit') }}" method="post"> 
        
        @csrf
                    <div class="card shadow">
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $message }}
                            </div>
                        @elseif($message = Session::get('failed'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $message }}
                            </div>
                        @endif
                    </div>

        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" >
      
        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" >
        <input type="text" class="form-control" id="emailSubject" name="emailSubject" placeholder="Enter email subject"><br>
      
        <textarea  class="form-control" id="emailBody" name="emailBody" rows="5" placeholder="Write your message here..." ></textarea>
        <button type="submit">Send Message</button>
      </form>
  
      <div class="icons">
        <a href="#"><i class='bx bxl-facebook-square'></i></a><br>
        <a href="#"><i class='bx bxl-linkedin-square'></i></a><br>
        <a href="#"><i class='bx bxl-instagram-alt' ></i></a><br>
    </div>
    </div>
    
  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>
