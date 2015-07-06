function Quiz(questionNumber,question, answer1, answer2, answer3, correct) 
{
    var html_pre = '<div><input type="radio" value="wrong" name="quizAnswer" id="quizAnswer' + questionNumber + '"/><label for="quizAnswer' + questionNumber + '">';
    var html_post = '</label></div>';
    this.question = '<p>'+ question + '</p>';
    this.answer1 =  html_pre + answer1 + html_post;
    this.answer2 =  html_pre + answer2 + html_post;
    this.answer3 =  html_pre + answer3 + html_post;
    this.correct = '<div><input type="radio" value="right" name="quizAnswer" id="answer' + questionNumber + '"/><label for="quizAnswer' + questionNumber + '">' + correct + '</label></div>';
}

/*var question = 'What is a good way to know if others see you?';
var answer1 = 'Ascertain what direction their LIDAR array is pointing.';
var answer2 = 'You\'re in a large pink GMC Yukon, of course they see you.';
var answer3 = 'Rely on your peripheral vision.';
var correct = 'Always confirm eye contact, no eye contact means assume they don\'t see you';

var communicate1 = new Quiz(1, question, answer1, answer2, answer3, correct);

console.log(communicate1.question);
console.log(communicate1.answer1); 
console.log(communicate1.correct);*/

var question = 'Hands-free functionality in mobile devices is...';
var answer1 = '...not a distraction.';
var answer2 = '...a good way to find out what to pick up for dinner on the way'
              ' home';
var answer3 = '...legal in all states provided the ear bud or bluetooth is only'
              ' in <em>one</em> ear.';
var correct = '...a <em>cognitive</em> distraction.';

var distraction1 = new Quiz(1, question, answer1, answer2, answer3, correct);

for (var obj in distraction1)
{
    console.log(distraction1[obj]);
}



/*          <p>Communication quiz question?</p>
            <div>
            <input type="radio" value="wrong" name="com" id="com1"/>
            <label for="com1">Wrong option #1</label>
            </div>
            <div>
            <input type="radio" value="wrong" name="com" id="com2"/>
            <label for="com2">Wrong option #2</label>
            </div>
            <div>
            <input type="radio" value="right" name="com" id="com3"/>
            <label for="com3">Correct option</label>
            </div> 
            <div>
            <input type="radio" value="wrong" name="com" id="com4"/>
            <label for="com4">Wrong option #3</label>
            </div>
            <div id="button">
            <input type="submit" value="Guess" class="button"/>
            </div>

*/
