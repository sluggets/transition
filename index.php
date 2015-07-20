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
          <li><a href="#com_article">Test Link</a></li>
        </ul>
      </nav>
      <div id="distraction_link">
      </div>
      <div id="followingdistance_link">
      </div>
      <div id="alteredstate_link">
      </div>

      <div id="pointer">
      </div>

      <div id="com_quiz">
        <!--form id="safety_quiz"  method="post" action=""
        </form>--> 
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
        <div class="feedback">
        <?php
           //$answer = $_POST['quizAnswer'];
           //echo $answer;
        
            if (isset($_POST['quizAnswer']))
            {
                $answer = $_POST['quizAnswer'];
                $num = (int)substr($answer, -1);
                if ($num <= 3 && $answer[0] == 'r')
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
        <div class="feedback">
        <?php
           /*$answer = $_POST['quizAnswer'];
           $num = (int)substr($answer,-1);
           echo $answer;
           echo '<p>',$num,'</p>';*/
        
            if (isset($_POST['quizAnswer']))
            {
                $answer = $_POST['quizAnswer'];
                $num = (int)substr($answer, -1);
                if ($num <= 6 && $num >= 4  && $answer[0] == 'r')
                {
                    echo '<p>CORRECT!<i class="fa fa-check fa-3x"></i></p>';
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
