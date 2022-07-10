@extends('Client.Layouts.episodeLayout')

@section('contentEpisode')
<header>
    <a href="#" class="logo"><img src="logo.png" alt=""></a>
<div class="toggle"><a href="../../user.html"><img src="toggle.png" alt=""></a></div>
</header>
<div class="banner">
    <div class="content">
        <h2><span>The Batman</span></h2>
        <p>
            The Batman is an upcoming American superhero film based on the DC Comics character of the same name.
            Produced by DC Films and distributed by Warner Bros. Pictures, it is a reboot of the Batman film franchise.
            The film is directed by Matt Reeves, who wrote the screenplay with Peter Craig. It stars Robert Pattinson as
            Bruce Wayne / Batman, with Zoë Kravitz, Paul Dano, Jeffrey Wright, John Turturro, Peter Sarsgaard, Barry Keoghan,
            Jayme Lawson, Andy Serkis, and Colin Farrell rounding out the ensemble cast. The Batman is set during Batman's
            second year of fighting crime and follows him as he explores Gotham City's corruption and faces the Riddler,
            a riddle-obsessed serial killer.....
        </p>
        <a href="#" class="play" onclick="toggle();"><img src="play.png" alt="">watch trailer</a>
    </div>
</div>
<div class="trailer">
    <video src="TheBatman.mp4" controls="true"></video>
    <img src="close.png" alt="" class="close" onclick="toggle();">
</div>
<script>
    function toggle(){
    var trailer=document.querySelector('.trailer');
    let video=document.querySelector('.video');
    trailer.classList.toggle('active');
    video.currentTime = 0;
    video.pause();
}
</script>

@endsection
