<!DOCTYPE html>
<html>
  <head>
    <title>Robots Don't Drive...Yet</title>
    <link rel="stylesheet"  href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/jquery.scrollme.js"></script>
    <script src="js/jquery.script.js"></script>
  </head>
  <body>
    <header>
      <div class="scrollme">
      <div
        class="animateme"
        data-when="exit"
        data-from="0"
        data-to="1"
        data-easing="linear"
        data-opacity="0.2"
      >
      <div class="header_text">
          <h1>Robots Don't Drive...Yet</h1>
          <h3>Defensive Driving During A Crucial Transition</h3>
      </div>
      </div>
    </header>
      <nav>
        <ul>
          <li><a id="communicate" href="javascript:void(0)">Communicate</a></li>
          <li><a id="distraction" href="javascript:void(0)">Distraction</a></li>
          <li><a id="following_distance" href="javascript:void(0)">Following Distance</a></li>
          <li><a id="altered_state" href="javascript:void(0)">Altered State</a></li>
          <li><a id="keep_looking" href="javascript:void(0)">Keep Looking</a></li>
        </ul>
      </nav>
      <div id="pointer">
      </div>

      <div id="quiz">
      </div>
    <article>
      <blockquote cite="http://on.wsj.com/1GrBNaP">
        <p>Automatic braking systems, a relatively new safety feature
           in some vehicles and a critical part of autonomous cars of 
           the future, are facing complaints from drivers who say
           some are activating for no apparent reason.
        </p>
        <cite><a href="http://on.wsj.com/1GrBNaP">-Car Regulator Probes Complaints on Brakes, Mike Ramsey,
         Wall Street Journal</a>
        </cite>
      </blockquote> 
      <blockquote cite="http://bits.blogs.nytimes.com/2015/06/10/tipping-point-in-transit/">
        <p>He added that automakers would have to spend years fine-tuning
           the design of their autonomous and semiautonomous systems so it
           became clear to drivers what the capabilities and shortcomings
           of the technologies were and to push drivers away from risky
           behavior.
        <p>
        <cite><a href="http://bits.blogs.nytimes.com/2015/06/10/tipping-point-in-transit/">-Tipping Point in Transit, Farhad Manjoo, NY Times Bits Blog</a>
        </cite>
      </blockquote>
      <blockquote style="display: inline-block;" cite="http://www.rand.org/content/dam/rand/pubs/research_reports/RR400/RR443-1/RAND_RR443-1.pdf">
        <p> One key challenge will be human driver reengagement. To experience
            most of the benefits of the technology, human drivers will need
            to be able to engage in other tasks while the vehicle is
            autonomously driving. For safety, however, they will need to 
            quickly reengage at the request of the vehicle. Such context 
            switching may need to occur fully and in a matter of seconds 
            or less. Cognitive science research on distracted driving suggests
            this may be a significant safety challenge.
        <p>
        <cite><a href="http://www.rand.org/content/dam/rand/pubs/research_reports/RR400/RR443-1/RAND_RR443-1.pdf">-Autonomous Vehicle Technology, A Guide for Policymakers, Rand Corporation</a>
        </cite>
      </blockquote>
      <div id="ven">
        <img src="img/carvenn5.png" alt="car venn diagram"/>
      </div>
      <div class="transition">
        <h2>The Challenge</h2>
        <p>It is no longer speculative fiction, it seems certain that transit 
           will be fully autonomous within the near future. The transition
           between the techonolgy we have now, and that certain future
           presents a challenge. 
        </p>
        <p>As the various parts of these technologies are 
           developed and implemented at different stages, we 
           still need to know how to safely and defensively pilot our
           own vehicles. The challenge will be to adapt to changing human 
           behavior due to the effect of these new technologies, and adapt to 
           unexpected behaviors of a computer or a human.
        </p> 
      </div>
    </article>
    <div class="left">
      <h1 id="com_article">Communicate</h1>
      <p class="to_top"><a href="#top"><em>To top</em><span><i class="fa fa-arrow-circle-o-up fa-2x"></i></span></a></p>
      <div class="feedback">
        <?php
           //$answer = $_POST['quizAnswer'];
           //echo $answer;
        
            if (isset($_POST['quizAnswer']))
            {
                $answer = $_POST['quizAnswer'];
                $val_array = str_getcsv($answer, '-');
                $num = (int)$val_array[1];
                if ($num <= 3 && $val_array[0] == 'right')
                {
                    echo '<div class="correct"><i class="fa fa-check fa-2x"></i><span>Good job, that is CORRECT!</span></div>';
                }
                elseif ($num <= 3)
                {
                    include 'retort.php';
                }
            }
        ?>        
        </div>
      <p>Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff</p>
    </div>
    <div class="right">
      <h1 id="dist_article">Distraction</h1>
      <p class="to_top"><a href="#top"><em>To top</em><span><i class="fa fa-arrow-circle-o-up fa-2x"></i></span></a></p>
        <div class="feedback">
        <?php
        
            if (isset($_POST['quizAnswer']))
            {
                $answer = $_POST['quizAnswer'];
                $val_array = str_getcsv($answer, '-');
                $num = (int)$val_array[1];
                if ($num <= 6 && $num >= 4  && $val_array[0] == 'right')
                {
                    echo '<div class="correct"><i class="fa fa-check fa-2x"></i><span>Good job, that is CORRECT!</span></div>';
                }
                elseif ($num > 3 && $num < 7)
                {
                    include 'retort.php';
                }
            }
        ?>        
        </div>
      <p>Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff</p> 
    </div>
    <div class="left">
      <h1 id="foll_article">Following Distance</h1>
      <p class="to_top"><a href="#top"><em>To top</em><span><i class="fa fa-arrow-circle-o-up fa-2x"></i></span></a></p>
        <div class="feedback">
        <?php
        
            if (isset($_POST['quizAnswer']))
            {
                $answer = $_POST['quizAnswer'];
                $val_array = str_getcsv($answer, '-');
                $num = (int)$val_array[1];
                if ($num <= 9 && $num >= 7  && $val_array[0] == 'right')
                {
                    echo '<div class="correct"><i class="fa fa-check fa-2x"></i><span>Good job, that is CORRECT!</span></div>';
                }
                elseif ($num > 6 && $num < 10)
                {
                    include 'retort.php';
                }
            }
        ?>        
        </div>
      <p>Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff</p> 
    </div>
    <div class="right">
      <h1 id="alt_article">Altered State</h1>
      <p class="to_top"><a href="#top"><em>To top</em><span><i class="fa fa-arrow-circle-o-up fa-2x"></i></span></a></p>
        <div class="feedback">
        <?php
        
            if (isset($_POST['quizAnswer']))
            {
                $answer = $_POST['quizAnswer'];
                $val_array = str_getcsv($answer, '-');
                $num = (int)$val_array[1];
                if ($num >= 10 && $num <= 12  && $val_array[0] == 'right')
                {
                    echo '<div class="correct"><i class="fa fa-check fa-2x"></i><span>Good job, that is CORRECT!</span></div>';
                }
                elseif ($num > 9 && $num < 13)
                {
                    include 'retort.php';
                }
            }
        ?>        
        </div>
      <p>Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff</p> 
    </div>
    <div class="left">
      <h1 id="keep_article">Keep Looking</h1>
      <p class="to_top"><a href="#top"><em>To top</em><span><i class="fa fa-arrow-circle-o-up fa-2x"></i></span></a></p>
        <div class="feedback">
        <?php
        
            if (isset($_POST['quizAnswer']))
            {
                $answer = $_POST['quizAnswer'];
                $val_array = str_getcsv($answer, '-');
                $num = (int)$val_array[1];
                if ($num >= 13 && $num <= 15  && $val_array[0] == 'right')
                {
                    echo '<div class="correct"><i class="fa fa-check fa-2x"></i><span>Good job, that is CORRECT!</span></div>';
                }
                elseif ($num >= 13 && $num <= 15)
                {
                    include 'retort.php';
                }
            }
        ?>        
        </div>
      <p>Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff
      Stuff stuff stuff</p> 
    </div>
