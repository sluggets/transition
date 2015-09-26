/* shuffles what arrays ya got */
function shuffle(array)
{
  var counter = array.length, temp, index;
   
  while (counter > 0) {
    index = Math.floor(Math.random() * counter);
    counter--;
    temp = array[counter];
    array[counter] = array[index];
    array[index] = temp;
  }
  return array;
}

/* builds the quiz */
function quiz(questionNumber,question, answer1, answer2, answer3, correct) 
{
    var html_pre = '<div><input type="radio" value="wrong-' + questionNumber + '" name="quizAnswer" id="quizAnswer' + questionNumber + '"/><label for="quizAnswer' + questionNumber + '">';
    var html_post = '</label></div>';
    var button = '<div id="button"><input type="submit" value="Guess" class="button"/></div>';
    var questionArray = [];
    question = '<p>'+ question + '</p>';
    answer1 =  html_pre + answer1 + html_post;
    answer2 =  html_pre + answer2 + html_post;
    answer3 =  html_pre + answer3 + html_post;
    correct = '<div><input type="radio" value="right-' + questionNumber + '" name="quizAnswer" id="quizAnswer' + questionNumber + '"/><label for="quizAnswer' + questionNumber + '">' + correct + '</label></div>';

    questionArray.push(answer1, answer2, answer3, correct);
    shuffledArray = shuffle(questionArray);
    counter = shuffledArray.length;
    for (i = 0; i < counter; i++) {
     question += shuffledArray[i]; 
    }
    question += button;
    return question;
}

/* build the communication quizzes */
var question = 'What is a good way to know if others see you?';
var answer1 = 'If I can see their LIDAR, they can see me.';
var answer2 = 'I\'m in a large pink GMC Yukon with sick rims, of course they see me.';
var answer3 = 'I have the right of way, if they don\'t see me it is their problem.';
var correct = 'Always confirm eye contact, otherwise assume they don\'t see you.';

var communicate1 = quiz(1, question, answer1, answer2, answer3, correct);

var question = 'How are the lights on your vehicle best used to communicate?';
var answer1 = 'In unsafely dense fog, pull onto the shoulder as far as possible and make sure all your lights remain on.';
var answer2 = 'Don\'t ever use headlights in the daytime, it reduces contrast of the brake lights to those behind you.';
var answer3 = 'Light sensors turn my head lights on for me. I don\'t ever need to worry about it.';
var correct = 'When wanting to change lanes, let your turn signal blink a few times <em>before</em> beginning to move out of your lane.';

var communicate2 = quiz(2, question, answer1, answer2, answer3, correct);

var question = 'What is the best way to be seen on a low-profile vehicle?';
var answer1 = 'It\'s <em>their</em> job to see us, I even saw a bumper sticker that says "<em>Start Seeing Motorcycles</em>".';
var answer2 = 'RADAR sensors have difficulty with non-metal objects, so a full suit of Italian plate armor is in order.';
var answer3 = 'Even if it isn\'t fashionable, neon green is the most visible, always wear it.';
var correct = 'Depending on weather and season, a specific color may be better than another. Combine with reflectivity and lights.';

var communicate3 = quiz(3, question, answer1, answer2, answer3, correct);
var quizArray1 = [communicate1, communicate2, communicate3];


/* build the distraction quizzes */
var question = 'Does using a hands-free interface solve the problem of driving distracted by phones?';
var answer1 = 'Yes it does, both hands are then on the wheel, and eyes are on the road.';
var answer2 = 'The Lane Departure Warnings and Lane Keeping Systems in new vehicles have made hands-free interfaces unnecessary.';
var answer3 = 'It\'s legal in my state to use them, so it must be fine.';
var correct = 'No. In the best-case scenario you still have a cognitive distraction.';
var distraction1 = quiz(4, question, answer1, answer2, answer3, correct);

var question = 'I have a perfect driving record, aren\'t I skillful enough to make my own judgement call regarding phone use?';
var answer1 = 'State law will specifically spell out what you may or may not do, that is your only consideration.';
var answer2 = 'Distracted driving admonitions are only for young drivers who have no experience on the road.';
var answer3 = 'Only if you have Forward Collision Warning and Lane Departure Warning systems to compensate for lax attention.';
var correct = 'You may be falling into <a href="http://nyti.ms/1qpRM1e">"Lucky Fool Syndrome"</a>, attributing to skill, what in fact probably has been sheer luck.';
var distraction2 = quiz(5, question, answer1, answer2, answer3, correct);

var question = 'What does punctuality have to do with distraction?';
var answer1 = 'People that run late speed, thus endangering everyone else on the road.';
var answer2 = 'Those that run late will <em>always</em> take shortcuts, thus endangering everyone else on the road.';
var answer3 = 'Absolutely nothing. The world needs more lackadaisical types. We\'re people too!';
var correct = 'Tardy folks have a decision to make: eat and apply makeup in the car to try and save time, or simply <strong><em>stay</em></strong> late.';

var distraction3 = quiz(6, question, answer1, answer2, answer3, correct);

var quizArray2 = [distraction1, distraction2, distraction3];

/* build the following distance quizzes */
var question = 'What is a smart thing to do about someone who is not following <strong>you</strong> at a safe distance?';
var answer1 = 'Minimize the space cushion in front of you to prevent the driver from passing and cutting in front of you.';
var answer2 = 'It is a driver\'s responsiblity to always speed up to match the flow of traffic.';
var answer3 = 'Gently tap on the brakes to flash your brake lights at the vehicle behind you.';
var correct = 'Slow down slightly to encourage the person to pass and thereby regaining a space cushion behind you.';

var foll_dist1 = quiz(7, question, answer1, answer2, answer3, correct);

var question = 'Autonomous vehicles are predicted to have short following distances, why do I need to have such a generous following distance?';
var answer1 = 'If your braking reaction time was as fast as a computer\'s, you wouldn\'t need it!';
var answer2 = 'Humans get distracted, computers don\'t.';
var answer3 = 'Stopping power of standard autonomous vehicle braking systems is much more powerful.';
var correct = 'The closer you are following the person in front of you, the more your focus is soley on their behavior and less on what is around you.';
var foll_dist2 = quiz(8, question, answer1, answer2, answer3, correct);

var question = 'What is a good following distance?';
var answer1 = 'Any distance setting on Adaptive Cruise Control will always be fine, otherwise it wouldn\'t be an option.';
var answer2 = '<em>Always</em> 2 seconds, that is even what the DMV Driver\'s Manual says.';
var answer3 = 'One car length if traveling under 45 mph, otherwise 1.5 car lengths.';
var correct = 'Never <em>less</em> than 2 seconds, but usually more depending upon conditions. Try 4 seconds out!';

var foll_dist3 = quiz(9, question, answer1, answer2, answer3, correct);

var quizArray3 = [foll_dist1, foll_dist2, foll_dist3];

/* build the altered state quizzes */

var question = 'How does driving drowsy compare with driving under the influence of alcohol?';
var answer1 = 'It doesn\'t compare; a cup of coffee will adequately wake me up, but, it won\'t sober me up.';
var answer2 = 'Driving drunk shows a criminal lack of judgement, whereas driving sleepy is just a natural consequence of being awake.';
var answer3 = 'I can "power through" a sleepy spell, but I would never try to do that after consuming alcohol.';
var correct = 'After 24 hours of being awake, impairment is similar to a blood-alcohol level of 0.10%, over the legal limit in all states.'; 
var alt_st1 = quiz(10, question, answer1, answer2, answer3, correct);

var question = 'What is the best way to prevent emotional preoccupation while driving?';
var answer1 = 'So long as you aren\'t sobbing, since there are no wipers for your eyes.';
var answer2 = 'It\'s a good thing I\'m such a defensive driver, I know to compensate for everybody else\'s mistakes, including this COMPLETE BONEHEAD CHANGING LANES IN THE MIDDLE OF THE INTERSECTION AAAAAAARRGGGGGGH!';
var answer3 = 'A friendly smiling wave only solves problems, and never antagonizes anyone!';
var correct = 'Take a deep breath, and get perspective, people tend to transform into werewolves behind the wheel.';

var alt_st2 = quiz(11, question, answer1, answer2, answer3, correct);

var question = 'In an autonomous vehicle, can\'t I be in any altered state that I wish?';
var answer1 = 'So long as you are sober enough to input the correct destination in google maps!';
var answer2 = 'The only consideration is that autonomous vehicles may increase chances of motion sickness.';
var answer3 = 'If I\'m <em>really</em> sick, I just need to remember to bring a bucket.';
var correct = 'For a long time yet, you will still need to be capable of assuming control in an emergency.';

var alt_st3 = quiz(12, question, answer1, answer2, answer3, correct);

var quizArray4 = [alt_st1, alt_st2, alt_st3];

/* build the keep looking quizzes */

var question = 'How does proper following distance relate to my "keep looking" skill?';
var answer1 = 'It is unrelated, but still important.';
var answer2 = 'As long as you keep a <em>constant</em> eye on the vehicle directly in front of you, you can decrease following distance.';
var answer3 = 'With my new "Forward Collision Warning" system, I can keep looking and not have to worry about my following distance!'; 
var correct = 'More following distance frees up your attention to look around at other potential hazards.';

var keep_look1 = quiz(13, question, answer1, answer2, answer3, correct);

var question = 'Do backing cameras with in-dash displays mean safer backing maneuvers?';
var answer1 = 'Of course they do, I now see what use to be a blind spot!';
var answer2 = 'Not necessarily, only if paired up with backing sonar.';
var answer3 = 'With proper maintenance and cleaning, backing with cameras beats backing without every time.';
var correct = 'Not always, the display can steal focus and dull senses, always look over your shoulder and use mirrors!';

var keep_look2 = quiz(14, question, answer1, answer2, answer3, correct);

var question = 'What does green mean?';
var answer1 = 'Green means GO!';
var answer2 = 'It means creep up on the driver in front of you, shrinking your space cushion.';
var answer3 = 'Politely honk your horn if the vehicle in front of you does not begin moving when the light turns green.';
var correct = '<em>Especially</em> if in front, it means to pause, scan the intersection, left, right, left.';

var keep_look3 = quiz(15, question, answer1, answer2, answer3, correct);

var quizArray5 = [keep_look1, keep_look2, keep_look3];

$(document).ready(function() {

    $('#communicate').click(function() {
       form = '<form id="safety_quiz" method="post" action="communicate.php"></form>';
       quizArray1 = shuffle(quizArray1);
       quiz1 = quizArray1[0];
       /* handles quizzes */
       $('#safety_quiz').empty();
       $('#quiz').empty();
       $('.feedback').empty();
       $('#pointer').css("margin-left", "0em");
       $('#pointer').css("visibility", "visible");
       $('#quiz').append(form);
       $('#safety_quiz').append(quiz1); 
       $('#safety_quiz').css("visibility", "visible");
       $('#quiz').css("visibility", "visible");
       /* handles sections */
    });
  
    $('#distraction').click(function() {
       form = '<form id="safety_quiz"  method="post" action="distraction.php"></form>';
       quizArray2 = shuffle(quizArray2);
       quiz2 = quizArray2[0];
       $('#safety_quiz').empty();
       $('#quiz').empty();
       $('.feedback').empty();
       $('#pointer').css("margin-left", "10em");
       $('#pointer').css("visibility", "visible");
       $('#quiz').append(form);
       $('#safety_quiz').append(quiz2); 
       $('#safety_quiz').css("visibility", "visible");
       $('#quiz').css("visibility", "visible");
    });
    
    $('#following_distance').click(function() {
       form = '<form id="safety_quiz"  method="post" action="following.php"></form>';
       quizArray3 = shuffle(quizArray3);
       quiz3 = quizArray3[0];
       $('#safety_quiz').empty();
       $('#quiz').empty();
       $('.feedback').empty();
       $('#pointer').css("margin-left", "18em");
       $('#pointer').css("visibility", "visible");
       $('#quiz').append(form);
       $('#safety_quiz').append(quiz3); 
       $('#safety_quiz').css("visibility", "visible");
       $('#quiz').css("visibility", "visible");
    });

    $('#altered_state').click(function() {
       form = '<form id="safety_quiz"  method="post" action="altered.php"></form>';
       quizArray4 = shuffle(quizArray4);
       quiz4 = quizArray4[0];
       $('#safety_quiz').empty();
       $('#quiz').empty();
       $('.feedback').empty();
       $('#pointer').css("margin-left", "31em");
       $('#pointer').css("visibility", "visible");
       $('#quiz').append(form);
       $('#safety_quiz').append(quiz4); 
       $('#safety_quiz').css("visibility", "visible");
       $('#quiz').css("visibility", "visible");
    });

    $('#keep_looking').click(function() {
       form = '<form id="safety_quiz"  method="post" action="keep.php"></form>';
       quizArray5 = shuffle(quizArray5);
       quiz5 = quizArray5[0];
       $('#safety_quiz').empty();
       $('#quiz').empty();
       $('.feedback').empty();
       $('#pointer').css("margin-left", "40em");
       $('#pointer').css("visibility", "visible");
       $('#quiz').append(form);
       $('#safety_quiz').append(quiz5); 
       $('#safety_quiz').css("visibility", "visible");
       $('#quiz').css("visibility", "visible");
    });

    $('#sensor').click(function() {
        $('#sensor_tech').toggle("blind");
        $('#chev_right').toggle();
        $('#chev_down').toggle();
    });

    $('#assisted').click(function() {
        $('#assisted_tech').toggle("blind");
    });

    $('#human').click(function() {
        $('#human_tech').toggle("blind");
    });

});
