<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="pretty.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#menu").menu();
        });
    </script>
    <style>
        .ui-menu {
            width: 200px;
        }
        .popup{
            position: fixed;
            display: none;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            z-index: 999999;
            background: rgba(0,0,0,.9);
            text-align: center;
        }
        .popup .image,.popup video{
            width: 250px;
            height: 250px;
            display: inline-block;
        }
        .popup .close{
            top: 10px;
            right: 10px;
            position: absolute;
        }
    </style>
</head>
<html>
<body>
<div class="popup">
</div>
<ul id="menu">

    <li>
        <div>About Me</div>
        <ul>
            <li>
                <div class="img" data-img="military.mov"> Military</div>
            </li>
            <li>
                <div class="img" data-img="HM.jpeg,spencers1.jpeg,FullSizeRender 4.jpeg,FullSizeRender 6.jpeg"> Modeling</div>
            </li>
            <li>
                <div class="img" data-img="friends.jpeg,austin.mov"> Friends</div>
            </li>
            <li>
                <div class="img" data-img="kj1.jpeg,kj2.jpeg"> Dog</div>
            </li>
            <li>
                <div> Interests</div>
            </li>
        </ul>

    </li>

    <li>
        <div>Tv Shows</div>
        <ul>
            <li>
            <div class="img" data-img="orphanblack.jpeg"> Orphan Black</div>
            </li>
            <li>
            <div class="img" data-img="survivor.png"> Survivor </div>
            </li>
            <li>
            <div class="img" data-img="BB.jpeg"> BB </div>
            </li>
            <li>
            <div class="img" data-img="alwaysunny.jpeg"> Always Sunny</div>
            </li>
        </ul>
    </li>
    <li>
        <div>Music</div>
        <ul>
            <li>
                <div>Artists I like</div>
                <ul>

                    <li>
                        <div class="music" data-music="MGMT - Little Dark Age.mp3">MGMT</div>
                    </li>
                    <li>
                        <div class="music" data-music="01 Tigers Jaw - The Sun.mp3">Tigers Jaw</div>
                    </li>
                    <li>
                        <div class="music" data-music="Kodak Black - Roll In Peace ft XXXTENTACION.mp3">Kodak Black</div>
                    </li>
                    <li>
                        <div class="music" data-music="Turnstile - Death Grip.mp3">Turnstile</div>
                    </li>
                    <li>
                        <div class="music" data-music="Turnover - Cutting My Fingers Off.mp3">Turnover</div>
                    <li>
                </ul>
            </li>

            
            <li>
                <div>Heres some bops</div>
                <ul>
                    <li>
                    <div class="music" data-music="Duran DuranRio.mp3">Rio</div>
                    </li>
                    <li>
                    <div class="music" data-music="Matt and Kim - Block After Block.mp3">Matt & Kim</div>
                    </li>
                    
        
                    <li>
                    <div class="music" data-music="Saweetie - Tap In (Lyrics).mp3">Tap In</div>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
<script>
    audio = null;
    $(".music").click((e)=>{
        if (audio !== null){
            audio.pause();
        }
        target = e.target;
        music = $(target).data('music');
        audio = new Audio("music/"+music);
        audio.play();
    });
    $(document).on('click','.close',()=>{$('.popup').fadeOut();});
    $(".img").click((e)=>{
        target = e.target;
        assets = $(target).data('img').split(",");
        $('.popup').html(`<button class="close">close</button>`);
        for(asset in assets){
            if(assets[asset].indexOf('mov') > -1){
                $('.popup').append(`<video controls src="pictures/${assets[asset]}"></video>`)
            }else{
                $('.popup').append(`<img class="image" src="pictures/${assets[asset]}" />`)
            }
        }
        $('.popup').fadeIn();
    });
</script>
</body>
</html>