var imgPlayer;
var Rock;
var paper;
var scissors;
var Go;
var computerChoice;
var player;

function init(){
	imgPlayer = document.getElementById("imgPlayer");
	Rock = document.getElementById("Rock");
	paper = document.getElementById("paper");
	scissors = document.getElementById("scissors");
	Go = document.getElementById("Go");
	deselectAll();
}
function deselectAll(){
	paper.style.backgroundColor = 'silver';
	scissors.style.backgroundColor = 'silver';
	Rock.style.backgroundColor = 'silver';
}	
function select(choice){
	player = choice;
	imgPlayer.src = 'img/' + choice + '.png';
	deselectAll();
	if(choice=='rock') Rock.style.backgroundColor = 'red';
	if(choice=='paper') paper.style.backgroundColor = 'red';
	if(choice=='scissors') scissors.style.backgroundColor = 'red';
	
	Go.style.display = 'block';
}
function go(){
	var txtEndTitle = document.getElementById('txtEndTitle');
	var txtEndMessage = document.getElementById('txtEndMessage');
	
	var numChoice = Math.floor(Math.random()*3); // 0, 1 or 2
	var imgComputer = document.getElementById('imgComputer');
	
	document.getElementById('lblRock').style.backgroundColor = 'yellow';
	document.getElementById('lblPaper').style.backgroundColor = 'yellow';
	document.getElementById('lblScissors').style.backgroundColor = 'yellow';
	
	if(numChoice == 0){
		computerChoice = 'rock';
		imgComputer.src = 'img/rock.png';
		document.getElementById('lblRock').style.backgroundColor = 'yellow';
		if(player=='rock'){
			txtEndTitle.innerHTML = '';
			txtEndMessage.innerHTML = 'TIE!';			
		}
		else if(player=='paper'){
			txtEndTitle.innerHTML = 'Paper beats rock';
			txtEndMessage.innerHTML = 'You win!';			
		}
		else if(player=='scissors'){
			txtEndTitle.innerHTML = 'Rock beats scissors';
			txtEndMessage.innerHTML = 'You lose!';			
		}
	}
	if(numChoice == 1){
		computerChoice = 'paper';
		imgComputer.src = 'img/paper.png';
		document.getElementById('lblPaper').style.backgroundColor = 'yellow';
		if(player=='rock'){
			txtEndTitle.innerHTML = 'Paper beats rock';
			txtEndMessage.innerHTML = 'You lose!';			
		} 
		else if(player=='paper'){
			txtEndTitle.innerHTML = '';
			txtEndMessage.innerHTML = 'Tie';			
		} 
		else if(player=='scissors'){
			txtEndTitle.innerHTML = 'Scissors beats paper';
			txtEndMessage.innerHTML = 'You win!';			
		} 
	} 
	if(numChoice == 2){
		computerChoice = 'scissors';
		imgComputer.src = 'img/scissors.png';
		document.getElementById('lblScissors').style.backgroundColor = 'yellow';
		if(player=='rock'){
			txtEndTitle.innerHTML = 'Rock beats scissors';
			txtEndMessage.innerHTML = 'You win!';	
		}
		else if(player=='paper'){
			txtEndTitle.innerHTML = 'Scissors beats paper';
			txtEndMessage.innerHTML = 'You lose!';
		}
		else if(player=='scissors'){
			txtEndTitle.innerHTML = '';
			txtEndMessage.innerHTML = 'Tie!';
		} 		
	}
	document.getElementById('endScreen').style.display = 'block';
}
function startGame(){
	document.getElementById('introScreen').style.display = 'none';
}
function replay(){
	document.getElementById('endScreen').style.display = 'none';
}