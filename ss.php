<!DOCTYPE html>
<html>
    <head>
        <title>Slide Show</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body style="background-color:black">
        <div class="w3-content w3-section" style="width: 500px;">
        <img class="mySlides w3-animate-left" src="https://e0.pxfuel.com/wallpapers/506/185/desktop-wallpaper-full-screen-nature-3d-full-size-3d-water-nature-thumbnail.jpg" style="width: 100%">
        <img class="mySlides w3-animate-left" src="https://images.unsplash.com/photo-1519414442781-fbd745c5b497?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDR8fHxlbnwwfHx8fHw%3D&w=1000&q=80" style="width: 100%">
        <img class="mySlides w3-animate-fading"src="https://us.123rf.com/450wm/lovelypeace/lovelypeace1806/lovelypeace180600001/103685862-fantastic-view-of-sunrise-over-the-clouds-seen-from-airplane-window.jpg?ver=6" style="width: 100%">
        <img class="mySlides w3-animate-fading"src="https://media.istockphoto.com/id/1257813369/photo/yellow-orange-colorful-sunset-with-sun-rays-flare-in-aspen-colorado-usa-with-aerial-view-on.jpg?s=612x612&w=0&k=20&c=N4RxuDKIf7moKi75X7IcRDM0ucgkueHG7HnKlwMX2po=" style="width: 100%">
        </div>
        <script type="text/javascript">
        var a=0;
        carousel();
        function carousel()
        {
            var i;
            var x=document.getElementsByClassName("mySlides");
            for(i=0; i<x.length; i++)
            {
                x[i].style.display="none";
            }
            a++;
            if(a > x.length){a = 1}
            x[a-1].style.display = "block";
            setTimeout(carousel,5000);
        }
        </script>
    </body>
    </html>