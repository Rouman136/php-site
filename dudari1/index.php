<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <?php
            require_once "blocks/header.php";
        ?>
        <div class="hero container">
            <div class="hero__info">
                <h2>3D Game Dev</h2>
                <h1>Work that we produce for our clients</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, numquam. Vero impedit nesciunt maiores. Minima, quae. Ad, officia perspiciatis.</p>
                <button class="btn">Get more details</button>
            </div>
            <img src="img/joystick.svg" alt="">
        </div>
        <div class="container trending">
            <a href="/dudari1/trending.php" class="see-all">SEE ALL</a>
            <h3>Currently Trending Games</h3>

            <div class="games">
                <?php
                    require_once "lib/db.php";

                    $sql = 'SELECT * FROM trending ORDER BY id DESC LIMIT 4';
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $games = $query->fetchAll(PDO::FETCH_OBJ);
                    foreach($games as $el)
                        echo '
                    <div class="block_g">
                        <img src="img/'.$el->image.'" alt="">
                        <span><img src="img/fire 1.svg" alt=""> '.$el->followers.' Followers</span>
                    </div>';
                ?>

                
                
                
            </div>
        </div>
        <div class="container big_text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi vero tempora ad.</p>
        </div>
        <div class="container banner">
            <h3>Lorem ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <img src="img/Rectangle 4.png" alt="">
        </div>
    </div>
    <div class="features">
        <div class="container">
            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
            <p class="label">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <div class="info">
                <div class="block">
                    <img src="img/features/Group 48.png" alt="">
                    <p>Mobile Game Development</p>
                    <img src="img/features/arrow 1.png" alt="">
                </div>
                <div class="block">
                    <img src="img/features/Group 49.png" alt="">
                    <p>PC Game Development</p>
                    <img src="img/features/arrow 1.png" alt="">
                </div>
                <div class="block">
                    <img src="img/features/Group 50.png" alt="">
                    <p>PS4 Game Development</p>
                    <img src="img/features/arrow 1.png" alt="">
                </div>
                <div class="block">
                    <img src="img/features/Group 51.png" alt="">
                    <p>AR/VR Solutions</p>
                    <img src="img/features/arrow 1.png" alt="">
                </div>
                <div class="block">
                    <img src="img/features/Group 52.png" alt="">
                    <p>AR/VR Design</p>
                    <img src="img/features/arrow 1.png" alt="">
                </div>
                <div class="block">
                    <img src="img/features/Group 53.png" alt="">
                    <p>3D Modelings</p>
                    <img src="img/features/arrow 1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="container projects">
            <h3>Our Recent Projects</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, unde animi.</p>
            <div class="images">
                <img src="img/proj/Rectangle 15.png" alt="">
                <img src="img/proj/Rectangle 16.png" alt="">
                <img src="img/proj/Rectangle 17.png" alt="">
            </div>
            <div class="images">
                <img src="img/proj/Rectangle 19.png" alt="">
                <img src="img/proj/Rectangle 18.png" alt="">
                <img src="img/proj/Rectangle 20.png" alt="">
            </div>
            <a href="#" class="see-all">SEE ALL</a>
        </div>

        <div class="container email">
            <div class="text_down">
                <h3>Lorem ipsum</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
             <div class="block">
                <div>
                    <h4>Stay in the loop</h4>
                    <p>Subscribe to receive the latest news and updates about TDA.
                        We promise not to spam you! 
                    </p>
                </div>
                <div>
                    <input type="email" id="emailField" placeholder="Enter email adress">
                    <button onclick="checkEmail()">Continue</button>
                </div>
            </div>
        </div>
    </div>
        <?php
            require_once "blocks/footer.php";
        ?>
    
   
    <script>
        function checkEmail(){
            let email = document.querySelector('#emailField').value;
            if(!email.includes('@')) alert('Where is @?');
            else if(!email.includes('.')) alert('Where is .?');
            else alert ('All is good!');
        }
    </script>
</body>
</html>