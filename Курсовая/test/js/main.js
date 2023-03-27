function check_answers() {
  var score = 0;
  var questions = document.querySelectorAll(".question");

  const labelRed = document.querySelectorAll('.red__label')
  const inputRed = document.querySelectorAll('.red__input')
  const inputGreen = document.querySelectorAll('.green__input')
  const labelGreen = document.querySelectorAll('.green__label')
  
  for (let i = 0; i < inputGreen.length; i++) {
    if (inputGreen[i]) {
      labelGreen[i].style.color = 'green'
    }
  } 
  
  for (let i = 0; i < inputRed.length; i++) {
    if (inputRed[i].checked) {
      labelRed[i].style.color = 'red' 
    }
  } 

  for (var i = 0; i < questions.length; i++) {
    
    var answer = questions[i].querySelector("input[type='radio']:checked");
    if (answer)
      score += +answer.value;
  }
  
  
  
  document.getElementById('score').textContent = 
    "Тест пройден! Правильных ответов " + score + " из " + questions.length + ".";
}



