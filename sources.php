<?php
    include 'header.php';
    function attribute($url, $title) 
    {
        echo '<p><cite><a href="', $url, '">', $title, '</a></cite></p>';
    }

    /* studies */
    $studies_url = array(
        'http://www.rand.org/content/dam/rand/pubs/research_reports/RR400/RR443-1/RAND_RR443-1.pdf',
        'http://deepblue.lib.umich.edu/bitstream/handle/2027.42/111747/103189.pdf?sequence=1&isAllowed=y',
        'http://www.trl.co.uk/umbraco/custom/report_files/PPR374.pdf',
        'https://books.google.com/books?id=hjEqGfVXzJoC&printsec=frontcover#v=onepage&q&f=false',
        'https://www.lloyds.com/~/media/lloyds/reports/emerging%20risk%20reports/autonomous%20vehicles%20final.pdf',
        'http://static.googleusercontent.com/media/research.google.com/en//pubs/archive/43850.pdf');

    $studies_byline = array(
        '"Autonomous Vehicle Technology: A Guide For Policymakers"-The Rand Corporation',
        '"Motion Sickness in Self-Driving Vehicles"-Michael Sivak, Brandon Schoettle, University of Michigan',
        '"Study On Lane Departure Warning and Lane Change Assistant Systems"-C Visvikis, T L Smith, M Pitcher and R Smith, Transport Research Laboratory',
        '"Human Factors of Visual and Cognitive Performance in Driving"-Candida Castro, Google Books',
        '"Autonomous Vehicles,Handing Over Control:Opportunities and Risks for Insurance"-Gillian Yeomans, Lloyd\'s Exposure Management',
        '"Real-Time Pedestrian Detection With Deep Network Cascades"-Anelia Angelova, Alex Krizhevsky, Vincent Vanhoucke, Abhijit Ogale, Dave Ferguson');

    
    /* general AV technology articles */
    $general_url = array(
        'http://readwrite.com/2014/08/20/traffic-light-smart-cars-networked-roads',
        'http://www.its.dot.gov/DSRC/',
        'http://www.wsj.com/articles/tesla-electric-cars-soon-to-sport-autopilot-functions-such-as-passing-other-vehicles-1431532720', 
        'http://www.consumerreports.org/cro/magazine/2014/04/the-road-to-self-driving-cars/index.htm', 
        'http://www.iihs.org/iihs/topics/t/crash-avoidance-technologies/topicoverview', 
        'http://www.safercar.gov/', 
        'http://www.consumerreports.org/cro/magazine/2012/04/vehicle-to-vehicle-communication-can-prevent-crashes/index.htm', 
        'http://www.trw.com/integrated_systems/driver_assist_systems/forward_collision_warning', 
        'http://beranek.agrrmag.com/2013/06/some-lane-departure-systems/', 
        'http://brainonboard.ca/safety_features/driver_assistance_technology_adaptive_headlights.php', 
        'http://usnews.rankingsandreviews.com/cars-trucks/Backup_Cameras_Automatic_Braking_Parking_Assist_Is_Car_Tech_Really_Worth_the_Money/', 
        'http://www.extremetech.com/extreme/157172-what-is-adaptive-cruise-control-and-how-does-it-work', 
        'http://www.automotive-fleet.com/news/story/2014/06/chrysler-expands-availability-of-crash-prevention-tech.aspx', 
        'http://www.dailymail.co.uk/sciencetech/article-3098231/Would-stand-self-driving-car-Video-reveals-Volvo-crashing-onlookers.html',
        'http://www.daimler.com/dccom/0-5-1210218-1-1210314-1-0-0-1210228-0-0-135-0-0-0-0-0-0-0-0.html', 
        'https://www.aaafoundation.org/back-cameras', 
                     'https://medium.com/@alexrubalcava/a-roadmap-for-a-world-without-drivers-573aede0c968');

    $general_byline = array(
        '"Get Ready To Say Goodbye to the Traffic Light"-Bradley Berman,readwrite.com',
        '"Overview of Dedicated Short Range Communications Technology"-United States Department of Transportation',
        '"Who\'s Responsible When a Driverless Car Crashes? Tesla\'s Got an Idea"-Mike Ramsey, Wall Street Journal',
        '"Avoiding Crashes with Self-Driving Cars"-Consumer Reports',
        '"Crash Avoidance Technologies"-Insurance Institute For Highway Safety',
        'Safercar.org-NHTSA',
        '"Vehicle-to-Vehicle Communication Can Prevent Crashes"-Consumer Reports',
        '"Forward Collision Warning"-TRW Automotive',
        '"Re-Calibration Is Needed for Some Lane Departure Systems"-Technically Speaking',
        '"Adaptive Headlights"-Brain on Board',
        '"Backup Cameras, Automatic Braking, Parking Assist:Is Car Tech Really Worth the Money?"-Keith Griffin, US News & World Report',
        '"What Is Adaptive Cruise Control and How Does It Work?"-Bill Howard, Extreme Tech',
        '"Chrysler Expands Availability of Crash-Warning Tech"-Automotive Tech',
        '"Video Shows Volvo XC60 Crashing Into Onlookers"-Ellie Zolfagharifard, Daily Mail',
        '"Active Blind Spot Assist:The Electronic Shoulder Check"-Daimler',
        '"Back-Up Cameras"-AAA Foundation for Traffic Safety',
        '"A Roadmap for a World Without Drivers"-Alex Rubalcava');

/* google-specific AV articles */
    $google_url = array(
        'http://patft.uspto.gov/netacgi/nph-Parser?Sect1=PTO1&Sect2=HITOFF&d=PALL&p=1&u=%2Fnetahtml%2FPTO%2Fsrchnum.htm&r=1&f=G&l=50&s1=9014905.PN.&OS=PN/9014905&RS=PN/9014905',
        'http://www.ted.com/talks/chris_urmson_how_a_driverless_car_sees_the_road?language=en',
        'http://www.google.com/selfdrivingcar/reports/',
        'https://medium.com/@chris_urmson/the-view-from-the-front-seat-of-the-google-self-driving-car-chapter-2-8d5e2990101b',
        'http://www.engadget.com/2015/08/30/google-self-driving-cars-confused-by-bike-stand/?utm_medium=feed&utm_source=Feed_Classic&utm_campaign=Engadget&ncid=rss_semi',
        'http://www.nytimes.com/2015/09/02/technology/personaltech/google-says-its-not-the-driverless-cars-fault-its-other-drivers.html?partner=rss&emc=rss&_r=0');

    $google_byline = array(
        '"Cyclist Hand Signal Detection by an Autonomous Vehicle"-Henrik Kretzschmar, United States Patent and Trademark Office',
        '"How a Driverless Car Sees the Road"-Chris Urmson, TED(video)',
        '"Monthly Reports"-Google Self-Driving Car Project',
        '"The View From the Front Seat of the Google Self-Driving Car, Chapter 2"-Chris Urmson',
        '"Google\'s Self-Driving Cars Can\'t Handle Bicycle Track Stands"-Jon Fingas, Engadget',
        '"Google\'s Driverless Cars Run Into Problem:Cars With Drivers"-Matt Richtel and Conor Dougherty, The New York Times'); 

/* Defensive Driving Articles */
    $defensive_url = array(
        'http://www.imakenews.com/kengarffinternal/e_article001627274.cfm?x=b11,0,w',
        'http://www.imakenews.com/kengarffinternal/e_article001647613.cfm',
        'http://www.imakenews.com/kengarffinternal/e_article001677618.cfm?x=b11,0,w',
        'http://www.imakenews.com/kengarffinternal/e_article001701234.cfm?x=b11,0,w',
        'http://www.imakenews.com/kengarffinternal/e_article001731514.cfm?x=b11,0,w',
        'http://ia.zerofatalities.com/prevention/focus-on-the-road/',
        'http://content.time.com/time/magazine/article/0,9171,1174696,00.html',
        'http://www.safercar.gov/parents/InandAroundtheCar/backover.htm',
        'http://www.slashgear.com/car-tech-and-siri-slammed-for-driver-distraction-07349537/',
        'http://www.nytimes.com/2013/07/06/business/designing-dashboards-with-fewer-distractions.html?_r=0',
        'http://www.nytimes.com/2014/03/10/your-money/avoiding-lucky-fool-syndrome.html',
        'http://safety.fhwa.dot.gov/');


    $defensive_byline = array(
        '"Key 1: Aim High in Steering"-The Garff Gazette',
        '"Key 2: Get The Big Picture"-The Garff Gazette',
        '"Key 3: Keep Your Eyes Moving"-The Garff Gazette',
        '"Key 4: Leave Yourself An Out"-The Garff Gazette',
        '"Key 5: Make Sure They See You"-The Garff Gazette',
        '"Prevention"-Zero Fatalities',
        '"The Multitasking Generation"-Claudia Wallis, Time Magazine',
        '"Backover"-Parents Central(safercar.gov)',
        '"Car Tech and Siri Slammed For Driver Distraction"-Chris Davies, SlashGear',
        '"Desigining Dashboards With Fewer Distractions"-Bill Vlasic, The New York Times',
        '"Avoiding \'Lucky Fool Syndrome\'"-Carl Richards, The New York Times',
        'U.S. Department of Transportation, Federal Highway Administration, Road Safety');

/* articles on altered state */
    $altered_url = array(
        'http://sleepcenter.ucla.edu/body.cfm?id=56',
        'http://www.iowadot.gov/roadragestatistics.htm',
        'http://www.cdc.gov/Features/dsDrowsyDriving/',
        'http://www.nytimes.com/2014/02/18/health/driving-under-the-influence-of-marijuana.html?_r=1',
        'https://www.codot.gov/safety/alcohol-and-impaired-driving/druggeddriving/marijuana-and-driving');

    $altered_byline = array(
        '"Drowsy Driving"-UCLA Health',
        '"Road Rage"-Iowa Department of Transportation',
        '"Drowsy Driving:Asleep at the Wheel"-Centers for Disease Control and Prevention',
        '"Driving Under the Influence, of Marijuana"-Maggie Koerth-Baker, The New York Times',
        '"Marijuana & Driving Q & A"-Colorado Department of Transportation',);
?>
<h1>Sources</h1>
  <p>These are some of the sources I read, reviewed, and referenced.</p>
  <h2>Studies</h2>
    <p>These are the more lengthy studies I read/reviewed. I will admit I 
       probably did not read <em>all</em> of any one study, but I did read
       most of the Rand Corporation's Guide for Policymakers. The rest of
       the studies I skimmed and read various paragraphs/chapters.
    </p>
<?php
    for($i = 0; $i < count($studies_url) - 1; $i++)
    {
        attribute($studies_url[$i], $studies_byline[$i]);
    }
?>
         
  <h2>Articles on AV Technology</h2>
    <p>These links are just articles relating to AV technology.</p>
<?php
    for($i = 0; $i < count($general_url) - 1; $i++)
    {
        attribute($general_url[$i], $general_byline[$i]);
    }    
?>

  <h2>Google Autonomous Vehicle Sources</h2>
    <p>These links only pertain to Google AVs</p>
<?php
    for($i = 0; $i < count($google_url) - 1; $i++)
    {
        attribute($google_url[$i], $google_byline[$i]);
    }
?>
  <h2>Defensive Driving Sources</h2>
    <p>Links to further brush up on defensive driving skills</p>
<?php
    for($i = 0; $i < count($defensive_url) - 1; $i++)
    {
        attribute($defensive_url[$i], $defensive_byline[$i]);
    }
?>

  <h2>Driving Under an Influence</h2>
    <p>Links pertaining to altered state driving</p>
<?php
    for($i = 0; $i < count($altered_url) - 1; $i++)
    {
        attribute($altered_url[$i], $altered_byline[$i]);
    }
?>
