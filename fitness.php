<html>
<head>
    <title> Fitness </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="meditation.css">
</head>
<?php include('./includes/header.php'); ?>
<body>
    <div class="content-container">
        <div class="content">
            <h1>Meditation Exercise</h1>
            <table id="ex-options">
                <tr>
                  <td><div class="button non_select" onclick="toggle(this)">Breathing</div></td>
                  <td><div class="button non_select" onclick="toggle(this)">Bent Pose</div></td>
                  <td><div class="button non_select" onclick="toggle(this)">Boat Pose</div></td>
                </tr>
                <tr>
                  <td><div class="button non_select" onclick="toggle(this)">Bow Pose</div></td>
                  <td><div class="button non_select" onclick="toggle(this)">Cobra Stretch</div></td>
                  <td><div class="button non_select" onclick="toggle(this)">Crow Pose</div></td>
                </tr>
            </table> 
            <div class="btn" onclick="disp()">
                <svg width="277" height="62">
                    <defs>
                        <linearGradient id="grad1">
                            <stop offset="0%" stop-color="#FF8282"/>
                            <stop offset="100%" stop-color="#E178ED" />
                        </linearGradient>
                    </defs>
                    <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
                </svg>
                <span>READY</span>
            </div> 
        </div>
        <div id="med">
            <div class="base-timer">
                <span id="base-timer-label" class="base-timer__label"><img src="img/meditation.jpg" height="300" width="500" style="border-radius:50%;"></span>
            </div>
        </div>
    </div>
    
    <script>
        const contents = {
            "breathing": `
                    <h1> Breathing Excercise </h1>
                    <ol class='steps'>
                        <li>Sit in a comfortable position</li>
                        <li>Close your eyes</li>
                        <li>Breathe in from your left nostril while closing your right nostril from your thumb</li>
                        <li>Breathe out from your right nostril while closing your left nostril with your middle and ring finger</li>
                        <li>out from your left nostril while closing your right nostril with your thumb.</li> 
                        <li>Repeat the complete process 20-30 times</li>
                    </ol>
                    <iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/ysv7YJD247A?start=68" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <a class="btn btn-danger" href="fitness.php">Back</a>
            `,
            "bent pose": `
                    <h1>Setu Bandhasana or Bend pose</h1>
                    <ol class='steps'>
                        <li>Lie down flat on your back on a hard surface, preferably on a mat.Bend your knees and make sure to place your legs hip-width apart.</li>
                        <li>Put your hands beside you with the palm facing downwards.Putting the pressure on the floor through your hands, lift your back.</li>
                        <li>Lift such that your chin is touching your chest, without any movement or effort.Inhale and lift your torso is little up.</li>
                        <li>Make sure your knees and ankles are aligned in a straight line. Your thighs should be parallel to the floor</li>
                        <li>Hold on to your breath for a few seconds and release. Repeat the process a few times. </li>
                    </ol>
                    <iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/EZyBkVBUlG4?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <a class="btn btn-danger" href="fitness.php">Back</a>    
            `,
            "boat pose": `
                    <h1> Naukasan or Boat pose</h1>
                    <ol class='steps'>
                        <li>Begin in a seated position with your knees bent and your feet flat on the floor. Lift your feet off the floor. Keep your knees bent at first. Bring your shins parallel to the floor. This is half boat pose.  </li>
                        <li>Your torso will naturally fall back, but do not let the spine round.Straighten your legs to a 45degree angle if you can do so without losing the integrity of your upper body. You want to keep your torso as upright as possible so that it makes a V shape with the legs.</li>
                        <li>Roll your shoulders back and straighten your arms roughly parallel to the floor with your palms turned up. Do your best to balance on the sit bones, but it's normal if you are resting slightly behind them. Focus on lifting your chest to support the balance. </li>
                        <li>Stay for at least five breaths. Release your legs on an exhale. Then inhale and sit up. </li>
                    </ol>
                    <iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/I1w5juwW1d8?start=5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <a class="btn btn-danger" href="fitness.php">Back</a>
            `,
            "bow pose": `
                <h1>Dhanurasana or Bow Pose</h1>
                <ol class='steps'>
                    <li>Lie down on your stomach with your feet slightly apart, almost parallel to your hips, and place your arms on the side of your body.</li>
                    <li>Slowly, fold your knees up and hold your ankles with your hands. Breathe in and lift your chest off the ground and pull your legs up and stretch it out. You should feel the stretch on your arms and thighs.</li>
                    <li>Hold the pose for 12-15 seconds, paying attention to your breath as you take long, deep ones.</li>
                    <li>Slowly bring your chest and legs back to the ground, release your hold on the ankles, and relax with your hands on the side. Repeat for a few sets</li>
                    <li>As you breathe in, take the left leg back and bring the whole body in a straight line and keep your arms perpendicular to the floor.</li>
                </ol>
                <iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/m24yVj3fuCY?start=2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <a class="btn btn-danger" href="fitness.php">Back</a>
            `,
            "cobra stretch": `
                <h1>Bhujangasana Or Cobra Strech </h1>
                <ol class='steps'>
                    <li>Place your palms flat on the ground directly under your shoulders. Bend your elbows straight back and hug them into your sides.</li>
                    <li>Pause for a moment looking straight down at your mat with your neck in a neutral position. Anchor your pubic bone to the floor.</li>
                    <li>Inhale to lift your chest off the floor. Roll your shoulders back and keep your low ribs on the floor. Make sure your elbows continue hugging your sides. Don't let them wing out to either side.Keep your neck neutral. Don’t crank it up. Your gaze should stay on the floor.</li>
                </ol>
                <iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/75eZwVHIL-U?start=5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <a class="btn btn-danger" href="fitness.php">Back</a>
            `,
            "crow pose": `
                <h1>Kakasana or Crow Pose</h1>
                <ol class='steps'>
                    <li>Bend your knees slightly so that you can bring your palms flat on the floor about shoulder's distance apart.Plant your palms firmly on the mat about a foot in front of your feet. Spread your fingers wide and press into the top joint of each finger.</li>
                    <li>Bend your elbows straight back. Don't bend them into full Chaturanga arms, but head in that direction.Come up onto the balls of your feet and open your knees so that they line up with your upper arms.</li>
                    <li>Place your knees on the backs of your upper arms.Begin to bring your weight forward into your hands, lifting your head as you go.</li> 
                    <li>Come up onto your tiptoes, then lift one foot and then the other off the floor.Engage the inner thighs for support while keeping the knees on the arms.</li>
                    <li>Hug your feet toward your butt.Focus on the feeling of the body lifting. Avoid sinking into the pose, which can dump weight into the shoulders.</li> 
                    <li>To come out, exhale and transfer your weight back until your feet come back to the floor.</li>
                </ol>
                <iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/BiYyOx9x7ls?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 <a class="btn btn-danger" href="fitness.php">Back</a>
            `,
        }
        function toggle(ele) {
            if (ele.getAttribute("class") === "button non_select") {
                ele.setAttribute("class", "button select");
            } else {
                ele.setAttribute("class", "button non_select");
            } 
        }
        function disp() {
            const ding = "https://cdn.discordapp.com/attachments/835173072851566603/835842758219530281/The_Price_is_Right_Ding_-_Gaming_Sound_Effect_HD.mp3";
            const bgAudio = new Audio("https://cdn.pixabay.com/download/audio/2020/11/10/audio_547ebbf828.mp3");
            bgAudio.loop = true;
            const ex_count = document.getElementsByClassName("button select");
            let have = [];
            for (let i = 0; i < ex_count.length; ++ i)
                have.push(ex_count[i].innerHTML.toLowerCase());
            console.log(have);
            if (have.length === 0) return;
            let prev = 0;
            console.log(have[prev]);
            let data = contents[have[prev]];
            document.getElementsByClassName("content")[0].innerHTML = data; 
        }
    </script>
</body>
<?php include('./includes/footer.php'); ?>
</html>