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
        <div class="about">
            <div class="about__us container">
                <div class="info__about">
                    <div class="first__text">
                        <h1>Lorem Ipsum is simply dummy text of the printing and.</h1>
                    </div>
                    <div class="second__text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <button class="btn_a">Get in touch</button>
                </div>
            </div>    
            <img src="img/Rectangle 6.png" alt="">
        </div>

        <div class="container">
            <div class="why_text">
                <h2>Why work with us</h2>
            </div>
            <div class="why_blocks">
                <div class="why_block">
                    <div class="color_1"><p>Lorem ipsum</p></div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="why_block">
                    <div class="color_2"><p>Lorem ipsum</p></div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="why_block">
                    <div class="color_3"><p>Lorem ipsum</p></div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
        </div>
    </div>    
    <div class="infos__block">
        <div class="container">
            <div class="content">
                <div class="image">
                    <img src="img/infos.png" alt="">
                </div>
                <div class="text_content">
                    <p>Lorem ipsum</p>
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h3>
                    <p class="aboba">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">

    </div>


    <?php
        require_once "blocks/footer.php";
    ?>
   
    
</body>
</html>