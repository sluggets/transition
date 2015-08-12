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
        <div class="keeptogether">
        <img src="img/carvenn5.png" alt="car venn diagram"/>
        </div>
      </div>
      <div class="transition">
        <h2>The Challenge</h2>
        <p>It is no longer speculative fiction, it seems certain that transit 
           will be fully autonomous within the near future. The transition
           between the techonolgy we have now, and that certain future
           presents a challenge. 
        </p>
        <p>
           For humans, lack of an overriding algorithm that forces our hands
           with strict protocol means that we need to be always taking
           inventory of preventative and defensive actions while driving.
           This has traditionally been the sole responsibility of the driver,
           the captain of the vehicle. Now there are opportunities for
           the ball to be dropped, the responsibility to be muddied. 
        </p>
        <p>As the various parts of these technologies are 
           developed and implemented at different stages, we 
           still need to know how to safely and defensively pilot our
           own vehicles. The challenge will be to adapt to changing and
           unexpected human 
           behavior due to the effect of these new technologies, and adapt to 
           unexpected behaviors of a computer algorithm or failing sensors.
           <ul>
               <li>Stage 1: Our Current State of Vehicle Technology</li>
               <li>Stage 2: The Transition</li>
               <li>Stage 3: Autonomous Vehicle Utopia</li>
           </ul>
        </p> 
      </div>
    </article>
      <div class="bquote">
        <h2>The Car Will Stop Me...Right?</h2> 
        <p>
            This driver thinks their car has "Pedestrian Detection" 
            functionality.
        </p>
        <p>
            Turns out it doesn't. 
        </p>
        <p>
            It also turns out that even if it did, in this case, it
            wouldn't have prevented the pedestrians from getting hit.
        </p>
        <p><cite><a href="http://www.dailymail.co.uk/sciencetech/article-3098231/Would-stand-self-driving-car-Video-reveals-Volvo-crashing-onlookers.html">-Would You Stand In Front of a Moving Car?..., Ellie Zolfagharifard, Daily Mail</a></p>
        <iframe width="853" height="480" src="https://www.youtube.com/embed/_8nnhUCtcO8?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>
    <div class = "center">
      <h1>Sensors and Soup</h1>
      <p>Like much of technology, descriptions and summaries often end up in
         a kind of acronym soup, and this is no different when it comes to
         the sensors and various assisted driver technologies involved with 
         modern vehicles and autonomous vehicles.
      </p>
      <h2>Vehicle Sensors and Technology</h2>
      <ul class="tech_list">
        <li>RADAR (Radio Detection and Ranging): A sensor that uses reflected
           radio waves to detect things.
        </li>
        <li>
            SONAR (Sound Navigation and Ranging): Also applies to ultrasonic
            sensors that either passively listen to noises to detect things, 
            or actively emit pulses of sound to monitor the echoes.
        </li>
        <li>
            Camera (Computer Vision): Either relayed to a display in the
            vehicle's console or processed by a perception algorithm.
        </li>
        <li>
            LIDAR (Light Detection and Ranging): A sensor that uses reflected 
            light from lasers.
        </li>
        <li>
            IR (Infrared): Technology used to enhance visibility in dark 
            conditions.
        </li>
        <li>
            GPS (Global Positioning System): A signal receiver for 
            transmissions from orbiting 
            satellites, used for identifying location of the vehicle. 
        </li>
        <li>
            INS (Inertial Navigation System): Utilizes accelerometers and 
            gyroscopes to aid in detecting position, orientation, and velocity.
        </li>
        <li>
            DSRC (Dedicated Short Range Communication): Proposed licensed
            wireless frequency band to be utilized by V2V and V2I
            communications.
        </li>
        <li>
            V2V, V2I (Vehicle to Vehicle, Vehicle to Infrastructure): Allows 
            communication and coordination between vehicles, and communication
            of important information from surrounding environment. 
        </li>
        <li>
            Processor, Memory, Algorithm : Processes all the above and acts
            upon it.
        </li>
      </ul>
      <h2>Assisted Driver Technology</h2>
      <ul class="tech_list">
        <li>
             FCW (Forward Collision Warning): Anticipates collisions based on 
             current speed and proximity of obstacles ahead on the road.
             Offers either a visual/audible warning in case of potential 
             collision and/or altering/engaging the braking action.
        </li>
        <li>
             ACC (Adaptive Cruise Control): Adjust the speed of the 
             vehicle in relation 
             to vehicles ahead on the road to maintain safe distance.
        </li>
        <li>
             Adaptive Headlights: Motor driven headlights that adjust
             the direction of their beam to improve illumination 
             of either curves or of hills.
        </li>
        <li>
            LDW (Lane Departure Warning): Utilizes sensors to warn a driver
            when the vehicle is leaving its current lane without a turn
            signal.
        </li>
        <li>
            Blind Spot Assist: Monitors areas around the vehicle that would
            be blind to driver making a lane change without turning their head.
            Will use an alarm, corrective steering or both.      
        </li>
        <li>
            Backing Assist: Camera transmits view of blind area behind
            the vehicle to driver for backing. May also include sonar to trigger
            a visual/audible warning of obstacles in path.
        </li>

      </ul>
      <h2>Selected Human Sensors and Technology</h2>
      <ul class="tech_list">
        <li>
            Vision: A sensor that recieves information from reflected light.
        </li>
        <li>
            Hearing: Perceptions based off of vibrations in the inner ear.
        </li>
        <li>
            Touch: Sensors that are sensitive to stretching or pressure on
            the skin.
        </li>
        <li>
            Smell: Receptors that react differently to different molecules.
        </li>
        <li>
            Vestibular: System that provides sense of motion, equilibrium,
            and spatial orientation.
        </li>
        <li>
            Brain: Processes all the above and acts upon it.
        </li>
      </ul>
    </div>
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
        <h3>Stage 1: We Don't Have Antennas</h3>
        <p>
           Responsible communication not only includes
           properly using the lights and signals of our vehicles, but
           utilizing eye contact, hand signals, and visibility techniques
           for low profile motorcycles, mopeds, and bicycles. The horn
           is probably the most misused communication device in our
           current vehicles. Often it is an after-the-fact, long,
           punitive honk; an expression of road rage. It is more
           valuable as a preventative tool. Covering the horn with
           our hand, and using short attention-grabbing honks when
           you really think someone <em>needs</em> to see you is a
           polite and valid way to say "Hey, look at me, I'm right
           here!". Never assume that someone sees you.
         </p>
         <p>
           A good source for reviewing this skill is here: <cite>"<a href="http://www.imakenews.com/kengarffinternal/e_article001731514.cfm?x=b11,0,w">"Key 5: Make Sure They See You" - The Garff Gazette</a></cite>
        </p>
        <h3>Stage 2: Not Quite There</h3>
        <p>
           Lane departure warnings (LDW) will potentially enhance our 
           "Communicate" defensive key. Changing lanes without using
           a turn signal would activate this technology to either give
           the driver some kind of warning signal, or even activate
           some corrective steering. More people communicating with 
           turn signals is a good thing. Although there is a possibility
           of drivers growing used to and ignoring such warnings, or
           simply turning off those features. 
        </p>
        <p>
           Adaptive headlights are another helpful feature that will help
           us communicate our presence without blinding oncoming traffic 
           by angling the beam to aim high or low.
        </p>
        <p>
           Different sensors have different capabilities. Some see certain
           materials better than others, and some have much shorter ranges
           than others. The ability for AVs to see low-profile vehicles
           and pedestrians on the roadway depends on just the right sensor
           suite and the learning process of gradually increasing sizes
           of databases containing sensor patterns that the AV knows to 
           associate with them. Figuring out the best way to communicate 
           your presence as a cyclist, motorcyclist, or pedestrian 
           will not necessarily be that same way that we communicate these
           things to a human eye. 
        </p>
        <h3>Stage 3: Legacy Vehicles</h3>
        <p>
           From Microsoft operating systems to video game consoles, the
           march of technology has introduced "legacy software" or 
           "legacy systems". Backwards compatibility with software or
           hardware is sometimes maintained at the cost of progress. 
        </p>
        <p>
           The distant AV utopia offers a sophisticated communications
           solution (of unknown security) that may no longer even need
           turn signals <em>or</em> brake lights, if it wasn't for the
           need to be backwards-compatible with those pesky vehicles
           with the meat-based operating systems. "Grandfathered-in"
           vehicles will still require AVs to offer traditional lighting
           systems to communicate with legacy vehicles 
           despite promising concepts of wireless communication
           between AVs(V2V technology) and between vehicles and the 
           surrounding infrastructure (V2I technology).
        </p>
        <p>
           Possibly even more importantly, those new AVs will need to 
           maintain their backwards-compatibility in recognizing
           and properly interpreting the old-fashioned blinking lights
           of the legacy vehicles in inclement weather or blinding
           direct sunlight.
        </p>
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
        <h3>Stage 1: Cell Phones, Cell Phones, Cell Phones and Other
            Traditional Distractions</h3>
        <p>
           The goal with distractions <em>must</em> always be to not
           make excuses for allowing them into the driver's seat. It
           would be a very unusually disciplined driver that didn't 
           have room for improvement here. If we honestly apply three
           standards to potential behaviors, we will have our answer 
           as to whether or not it is a distraction.
           <ul class="dist_list">
               <li><strong>Visual</strong><span class="dist"><i class="fa fa-eye fa-2x"></i></span></li>
               <li><strong>Manual</strong><span class="dist"><i class="fa fa-hand-paper-o fa-2x"></i></span></li>
               <li><strong>Cognitive</strong><span class="dist"><i class="fa fa-cogs fa-2x"></i></span></li>
           </ul>
           Cell phones obviously are the primary culprit here, and 
           usually will be all three types of distraction. Behaviors
           need not be all three to be dangerous distractions however.
           Any one in and of itself can be unsafe. An LED state highway
           sign warning you not to use your cell phone while driving
           could be a visual distraction and steal focus. If the 
           temptation is too strong, put the cell phone somewhere you
           cannot reach it easily, such as the glove box, or throw it
           in the back seat! 
        </p>
        <p>
           A good source for reviewing room for improvement is here: <cite><a href="http://ia.zerofatalities.com/prevention/focus-on-the-road/">Focus on the Road, It Can Wait - Zero Fatalities</a></cite>
        </p>
        <p>
           An interesting blog post on AVs and Distraction is here: <cite><a href="https://medium.com/@chris_urmson/the-view-from-the-front-seat-of-the-google-self-driving-car-chapter-2-8d5e2990101b">"The View From the Front Seat of the Google Self-Driving Car, Chapter 2"-Chris Urmson</a></cite>
        </p>
        <h3>Stage 2: Increased Complexity Does Not Necessarily Mean Increased Safety</h3>
        <p>
           The road to completely autonomous vehicles will be paved with
           more complicated and densely packed instrumentation, lights,
           and dash buttons. Feature creep presents a problem to be 
           solved. How successfully will the human driver monitor or keep 
           track of new technologies? Whether it is nested menus on an 
           LCD screen, 
           vibrating steering wheels, added warning indicators, or clustered
           button and dial controls that require repeated scrutiny to 
           operate, the driver's eyes will be increasingly drawn away from
           more important matters.
        </p>
        <p>
           Even if not guilty of such offenses, most of us have seen the
           consequences of distracted driving. Vehicles have been 
           rear-ended, sideswiped, or otherwise endangered by oblivious
           drivers engaged in distracted driving. Assisted driver systems
           such as FCW(Forward Collision Warning), ACC(Adaptive Cruise
           Control), and LDW(Lane Departure Warning) while being safety
           features may enable bad behaviors. A driver who
           regularly endulges in distracting behaviors, will be
           reassured by these safety mechanisms. Although, in the event
           of their catastrophic failure or the driver simply being
           in a different vehicle without these features, the 
           safety may be worse than if these technologies were never
           even introduced to the driver. 
        </p>
        <p>
           In the intermediary stages, vehicles billed as "autonomous
           vehicles" may not truly be autonomous. However gracefully the 
           vehicle may fail in it's autonomous duties, this
           intermediary AV will still require the human driver to 
           suddenly assume control in a matter of seconds in certain
           special-case scenarios. Sitting in
           the driver's seat of an AV, distracting activites will be 
           irresistable. This will certainly complicate the handover from 
           AV to human. 
        </p>
        <h3>Stage 3: Oblivious Safety</h3>
        <p>
           In the AV utopia, all of the various assisted driver
           technologies will no longer have to be monitored by the
           human passenger. The AV and it's algorithms will have
           completely incorporated all of those early technologies.
           The focus and attentiveness of the AV will be such that
           would never have been attainable by a human, and we will
           be better off for it. We will bask in oblivious safety
           while our AV takes us to what we hope is our expected
           destination. 
        </p>
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
        <h3>Stage 1: Humans Need Help With This One</h3>
        <p>
           One does not have to travel far in a car to notice that
           proper following distance is something that humans really
           need help with. Googling <a href="https://www.google.com/search?hl=en&gl=us&tbm=nws&authuser=0&q=car+pileup&oq=car+pileup&gs_l=news">"car pile up"</a> shows what might be the result of poor following distance.
        </p>
        <p>
           I remember in my driver's education class, 
           the teacher had a braking reaction time simulator.
           We all took turns testing our reaction time. It was a fun
           game, but about as useful as those punching bag arcade games
           that test how powerful your punch is. Guiding a vehicle
           weighing 4,000 lbs or more around town is not a game, although
           it seems many if not most vehicles consider it to be so given
           the tightly-bound car packs you will see traveling around town or 
           on the highways. 
        </p>
        <p>
           Braking reaction time is not the only
           consideration when it comes to calculating following distance.
           Although, even that calculation is often incorrect because of
           drivers failing to take into consideration poor road
           conditions. However confident a driver is that he can stop
           in enough time given a small following distance, that does
           not dispense with the need for generous following distances.
           The smaller the following distance, the more closely the
           driver has to scrutinize the actions of the vehicle directly
           in front, to the point of focusing exclusively on the red
           brake lights on the vehicle ahead. Even if not a flagrantly
           aggressive tailgater, poor following distance <em>does</em>
           have the effect of reducing your ability to monitor the
           situation ahead of or around you. 
           The closer you are to the vehicle ahead of you, the more of 
           that vehicle is blocking your view over and around it. This
           effect is even more pronounced when behind a tall or wide
           vehicle such as a bus or truck.
           You may be thinking, "Oh,
           I have snow tires, all-wheel drive, and a Northerner's knack
           for handling winter roads...", and then <a href="https://youtu.be/pmUue_krVDY?t=4m44s">--this happens--.</a>
        </p>
           A good source for reviewing following distance is
here: <cite><a href="http://www.imakenews.com/kengarffinternal/e_article001647613.cfm">"Key 2: Get The Big Picture" - The Garff Gazette</a></cite>
        </p>
        <h3>Stage 2: Help Arrives</h3>
        <p>
           Technologies such as ACC(Adaptive Cruise Control) and
           FCW(Forward Collision Warning) while potentially introducing
           unexpected behaviors as suggested in the "Distraction" segment
           above, promise to reinforce our following distance discipline.
           Warnings and/or subtle braking will activate if our following
           distance shrinks to unsafe margins. Drivers may be presented
           with choices as to exactly how much following distance they
           want. While allowing that choice may just result in 
           the driver always selecting the shortest following distance, 
           that is still likely better than the following distance
           that would otherwise be used. In 
           addition, if only one extremely generous following distance
           was offered, it might dramatically reduce the use
           of the safety feature. The driver may simply choose to turn
           it off. 
        </p>
        <p>
           An interesting discussion by drivers fitting ACC into their
           driving habits and following distance considerations is 
           here:  <cite><a href="http://www.teslamotorsclub.com/showthread.php/49732-Drivers-who-can-t-discern-between-safe-following-distance-and-going-slowly">"Drivers who can't discern between safe following distance and going slowly"-Tesla Motor Club Forums</a></cite>
        </p>
        <h3>Stage 3: Less Following Distance?</h3>
        <p>Take all the factors that go into following distance: road
           conditions, braking reaction time, and ability to monitor
           important things <em>other</em> than the car in front us.
           Looking at truly autonomous vehicles we may see the 
           following distance actually shrink between vehicles.
           An AV could have a faster braking reaction time than
           a human. 
        </p>
        <p>
           The AV also would not have to worry about concentrating
           focus on the car directly in front for a couple reasons.
           Firstly, it will likely have LIDAR and/or other sensors
           mounted at such a height, that even with a minimal following
           distance it will still be able to see around and above the
           vehicle in front. The AV will be perfectly capable of splitting
           its attention between many inputs.
           Secondly, AVs could utilize V2V(Vehicle to Vehicle) communication 
           to share it's traveling speed, braking, or other information
           with vehicles around them, updating it in matters of milliseconds.
        </p>
        <p>
           Road condition could be propagated through the same means as
           well as through V2I(Vehicle to Infrastructure) communication.
        </p> 
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
        <h3>Stage 1: The Driver is Mission Critical</h3>
        <p>
           Being in an altered state is being in any condition
           that reasonably detracts from your ability to safely
           operate a moving vehicle. In some instances, like
           alcohol there are
           well defined metrics as to exactly what that means.
           In the U.S, that is 0.08% blood alcohol content
           or greater, or 0.04% for those holding a commercial
           drivers license. In Colorado, that is more than 5
           nanograms of THC(psychoactive ingredient in marijuana)
           in the bloodstream.
        </p>
        <p>
           At a more basic level, <em>any</em> amount of <em>any</em> 
           substance(over-the-counter, prescription, illegal, or 
           legal) that impairs your ability to drive can bring
           civil or criminal penalties.
        </p>
        <p>
           You can find yourself in an altered state even without
           being under the influence of an external substance.
           Sleep deprivation is often compared to 
           alcohol intoxication. How many of us who could honestly
           and adamantly assert that we have <strong>never</strong>
           slipped in and out of consciousness from being drunk
           behind the wheel can also claim that we have never nodded
           off due to pushing our limits of alertness? There is no
           blood, breath, or urine test that will betray how much sleep
           we've gotten in the past 24 hours. And most of us aren't
           required to maintain log books on the subject.
        </p>
        <p>
           Emotional states such as anger or sadness can also impair 
           your ability to drive as can medical conditions, whether 
           they be the flu or the common cold.
        </p>
        <p>
           Good sources for reviewing impairment are here: <cite><a href="http://ia.zerofatalities.com/prevention/drive-sober/">"Drive Sober"-Zero Fatalities</a>,
           <cite><a href="http://ia.zerofatalities.com/prevention/stay-alert/">"Stay Alert"-Zero Fatalities</a></cite>
        </p>
        <h3>Stage 2: Do Robots Have Altered States?</h3> 
        <p>
           With assisted driving technologies, we still have primary
           control of the vehicle, so we cannot be impaired. However
           good of a job the autonomous features seem to be doing,
           the vehicle could be impaired as well. Any one sensor
           or systems relating to these sensors could be impaired.
           What is the fail-safe for when this happens? You the 
           human are. Whatever job the assisted technologies fail
           at, the human takes over for. Heavy rain, deep canyons,
           blizzards, hail, mud, direct sunlight or any number of 
           conditions could render all or part of these systems
           impaired.  
        </p>
        <p>
           Vehicle communication used to be relegated to blinking
           lights and arm or hand signals. AM/FM radios introduced
           another means for communication. In the 1980s, car phones
           were actually a thing people used. At this point the car
           itself was not yet responsible for acting on incoming
           communication. Then comes GPS, mobile broadband,
           and the multiple sensors
           utilized in assisted driving. Every new avenue of input
           brings with it not just opportunity for failure, but 
           also potential for security compromises. Add in the 
           DSRC(Dedicated Short-Range Communication) for V2V and
           V2I, and there are even more vectors for malicious attack.
           Zero-day security exploits may present an altered state
           for the vehicle that cannot be planned for.
        </p>
        <p>
           Also of concern are false positives that may startle
           drivers and eventually result in the system being 
           turned off or ignored. Redundant sensors and systems
           will over time increase their reliability and reduce false
           alerts and failures. For now we are still the ultimate
           redundant system, and we cannot be in an altered state!
        </p>
        <h3>Stage 3: Graceful Failure</h3>
        <p>
           One of the benefits promised by autonomous vehicles is the 
           ability for mentally or physically disabled individuals 
           to experience the freedom that having access to a personal
           vehicle allows. Imagine a blind person being able to get in
           a car and go anywhere! For this to happen the graceful failure
           of any or all of the systems will have to include a method 
           or means of self-guidance to a safe stop in a safe location.
        </p>
        <p>
           One <em>might</em> think that these failure modes will allow
           any number of altered states as well. Teetering out of a bar
           and tipping over into our AV is not something we will be 
           able to do anytime soon though. Disabled individuals and hardcore
           partiers may have a long time to wait for this feature even 
           though sufficiently robust technology for exactly this sort of 
           capability may come much faster than anyone thinks.
        </p>
        <p>
           The reason for this has to do with liability. Liability is 
           going to lengthen this transitionary period greatly. Currently,
           if there is a manufacturing defect or unsafe design that results 
           in injury or loss of life, car or parts manufacturers are often
           found liable. However if a driver decides to drive through a
           red light into a busy intersection, that obviously is the 
           responsibility of the driver. 
        </p>
        <p>
           In the case of a fully autonomous vehicle, if the
           design or implementation of the autonomous features causes
           the vehicle to pilot itself through a red light into a busy
           intersection, the manufacture now has a new liability. That is,
           unless the manufacturer stipulates that the systems are still
           secondary to the ultimate responsibility of the driver. 
           In this case full autonomy doesn't exist and the driver
           still can't be prohibitively disabled or unsafely impaired.
        </p>
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
        <h3>Stage 1:No Zombies!!</h3>
        <p>
           Fatigue, impairment, or even a wandering mind as a result of
           boredom can render us into zombie mode. We can all agree that
           a typical shuffle-and-moan zombie would make a horrible driver.
           What helps me to avoid this syndrome is to actively go over
           defensive driving techniques in my mind when I find my
           thoughts straying too deeply.
        </p>
        <p>
           We should always keep looking, not letting our focus settle in
           any one place for more than two seconds. Intersections are the
           single location that have the most accidents, so it is 
           especially important to keep looking here. Scanning before 
           entering an intersection left, right, and then left again is
           crucial, whether from a stopped start or as we roll toward
           one.
        </p>
        <p>
           Green does not mean go! Green lights mean left-right-left,
           scan the intersection, <em>then</em> proceed. Even  Google's
           self-driving cars will pause when the light turns green and 
           scan before proceeding, and those cars have sophisticated
           roof-mounted laser scanning capabilities! 
        </p>
        <p>
           A couple good sources for reviewing your "Keep Looking" skill
           are here: <cite><a href="http://www.imakenews.com/kengarffinternal/e_article001677618.cfm?x=b11,0,w">"KEY 3: Keep Your Eyes Moving"-The Garff Gazette</a></cite>, <cite><a href="http://www.imakenews.com/kengarffinternal/e_article001627274.cfm?x=b11,0,w">"KEY 1: Aim High in Steering"-The Garff Gazette</a></cite>
        </p>
        <h3>Stage 2:Don't Take The Robot's Word For It!</h3>
        <p>
           In those instances where assisted driving technologies
           are looking around for us, we still need to follow that
           up with our own assessment.  
           We should treat those sensors as reassurance
           of our decisions rather than a substitution for our
           own decision-making. 
        </p>
        <p>
           Blind Spot Assist systems will monitor if there is a vehicle
           in the lane next to you and display an indicator if so.
           If the driver indicates a turn, it will increase the
           visibility of that warning, possibly including an alarm
           and braking actions. We still need to do our 
           over-the-shoulder check to manually see that it is clear
           to make a lane change. The habit is not worth breaking.
           The system may malfunction or fail, and we also may
           need to drive a vehicle without that system at some point.
        </p>
        <blockquote cite="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0CB8QFjAAahUKEwiSkc2Vp6THAhULD5IKHd_TAto&url=http%3A%2F%2Fwww.wsj.com%2Farticles%2Ftesla-electric-cars-soon-to-sport-autopilot-functions-such-as-passing-other-vehicles-1431532720&ei=IaLLVdL8PIueyATfp4vQDQ&usg=AFQjCNE06EvMp8Dp0Vgact984w4L5QzugQ&sig2=_unGjjrWN8X2-OaNf8TuQA">
          <p>
             By hitting a turn-signal stalk, a driver theoretically
             acknowledges road conditions are appropriate for a 
             passing maneuver and therefore takes responsibility for
             the consequences.
          </p>
          <cite><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0CB8QFjAAahUKEwiSkc2Vp6THAhULD5IKHd_TAto&url=http%3A%2F%2Fwww.wsj.com%2Farticles%2Ftesla-electric-cars-soon-to-sport-autopilot-functions-such-as-passing-other-vehicles-1431532720&ei=IaLLVdL8PIueyATfp4vQDQ&usg=AFQjCNE06EvMp8Dp0Vgact984w4L5QzugQ&sig2=_unGjjrWN8X2-OaNf8TuQA">"Who's Responsible When a Driverless Car Crashes? Tesla's Got An Idea"-Mike Ramsey, Wall Street Journal</a></cite>
          
        </blockquote>
        <p>
           Backing Assist may consist of a camera in addition to sonar.
           Image quality can vary greatly, as can the actual condition
           of the lens surface of the camera(dirt, moisture). 
           A bike rack on the rear
           of the vehicle may trigger an alarm even though you know it
           is just the bike rack...or is it really just the bike rack? 
           Drivers must resist the
           focus stealing effect of having an in-dash monitor to gaze
           at. That image is only showing you a very small portion of
           what you need to be aware of. It is true, you now are seeing 
           something you otherwise would have been blind to, but it
           shouldn't be at the expense of the rear and side view mirrors
           <em>or</em> your over-the-shoulder check.
        </p>
        <p>
           ACC(Adaptive Cruise Control) and FCW(Forward Collision Warning)
           are also two assisted systems that could lull the driver into
           a false sense of security. The potential exists for vigilant
           awareness of what is coming up ahead on the road to be relaxed.
           To truly "Keep Looking", shoulder checks, mirror checks, and 
           intersection scanning have to include looking into the future!
           One of the more challenging defensive techniques for me
           personally is lifting my eyesight up and consistently looking
           ahead at least a minimum of fifteen seconds into the future of
           where I am going to be. Granted, ACC and FCW are
           <em>assisting</em> with this, but we are personally responsible
           for ensuring that we have this critical information.
        </p>
        <h3>Stage 3: All-Seeing and All-Knowing</h3>
        <p>
           When automakers actually begin marketing and selling a
           truly 100% autonomous self-driving vehicle, we will know
           that the redundancies, calibrations, and fail-safes have
           been worked out. The liability of not having these systems
           relatively hardened would prevent them from putting the
           autonomous stamp of approval on it. AVs will be able to
           "Keep Looking" in ways we humans will never be able to.
           They will be bristling with infrared, SONAR, LIDAR, RADAR,
           and other sensors in varying combinations at key vantage 
           points on the vehicle. Instead of shifting focus like we 
           have to, these inputs will be simultaneously processed by
           powerful CPUs drawing on vast databases of stored data.
        </p>
    </div>
