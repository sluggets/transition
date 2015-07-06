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

$(document).ready(function() {

    var question = 'What is a good way to know if others see you?';
    var answer1 = 'Ascertain what direction their LIDAR array is pointing.';
    var answer2 = 'You\'re in a large pink GMC Yukon, of course they see you.';
    var answer3 = 'Rely on your peripheral vision.';
    var correct = 'Always confirm eye contact, otherwise assume they don\'t see you';

    var button = '<div id="button"><input type="submit" value="Guess" class="button"/></div>';

    var communicate1 = new Quiz(1, question, answer1, answer2, answer3, correct);

    $('#communicate').click(function() {
       $('#communicate_link').css("visibility", "visible");
       $('#safety_quiz').append(communicate1.question + communicate1.answer1 + communicate1.answer2 + communicate1.answer3 + communicate1.correct + button); 
       $('#safety_quiz').css("visibility", "visible");
       $('#com_quiz').css("visibility", "visible");

    });
    
});
