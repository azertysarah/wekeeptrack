/**
  * class Blackjack
  * 
  */

Blackjack = function ()
{
  this._init ();
}


/**
 * _init sets all Blackjack attributes to their default value. Make sure to call
 * this method within your class constructor
 */
Blackjack.prototype._init = function ()
{
  /**
   * 
   */
  this.m_logicW = "";
  /**
   * 
   */
  this.m_logicGame = "";

  /**Aggregations: */

  /**Compositions: */

}

/**
 * 
 * @param logicW
    *      
 * @param logicGame
    *      
 */
Blackjack.prototype.__init__ = function (logicW, logicGame)
{
  self.logicW = logicW
  self.logicGame = logicGame
  
}


/**
 * 
 */
Blackjack.prototype.hit = function ()
{
  var hit = function() {
	if (currentTurn === "player") {
		playerStatus = "hit";
		dealCard(playerHand, playerGameBoard);
	} else if (currentTurn === "playerSplit") {
		playerSplitStatus = "hit";
		dealCard(playerSplitHand, playerSplitGameBoard);
	}
}
  
}


/**
 * 
 */
Blackjack.prototype.stand = function ()
{
var stand = function() {
  if (currentTurn === "player") {
    changeHand(playerStatus);
  }else if (currentTurn === "playerSplit") {
      changeHand(playerSplitStatus);
    }
  }
}


/**
 * 
 */
Blackjack.prototype.doubler = function ()
{
function doubler () {
  if(currentChipBalance-currentWager<=0) {
    Materialize.toast("chip balance insuffisant" , 1000);
  }
  else {
    currentChipBalance -= currentWager; //soustrait la même valeur encore de la valeur de la balance initiale
    currentWager = currentWager * 2;
    updateChipBalance();
    disableButton(doublerButton);
  }
}
  
}


/**
 * 
 */
Blackjack.prototype.split = function ()
{
var split = function() {
  splitGame = true; 
  playerHandTotal = playerHandTotal - playerHand[1].value;
  playerSplitHandTotal = playerHand[1].value;
  updateVisibleHandTotals();
  $(".split-hand-total").removeClass("inactive").show(); 
  $(playerSplitGameBoard).removeClass("inactive").show();	
  var splitCard = playerHand.pop();
  playerSplitHand.push(splitCard);
    
  var cardImage = $("#player-card-1").attr("id", "playerSplit-card-0");
    
  cardImage.hide(); // Cachez-le d'abord pour permettre la transition
	// Il s'agit de la première carte du paquet. Vous voulez donc annuler le décalage ou l'empilement précédent et le faire passer au point normal initial
	cardImage.appendTo($(playerSplitGameBoard)).offset({left: 60}).css("margin-right", "auto").show();

	currentChipBalance -= currentWager; 
	currentWager = currentWager * 2;
	updateVisibleChipBalances();

	// Then, deal 1 new card for each newly split deck
	currentTurn = "player";
	dealCard(playerHand, playerGameBoard);
	currentTurn = "playerSplit";
	dealCard(playerSplitHand, playerSplitGameBoard);

	// Make split button no longer clickable as in this game you can only split once
	disableButton(splitButton);

	// Shrink the inactive deck to both signal what deck they are playing and to make room on the board
	setTimeout(function(){
		scaleDownDeck(playerSplitGameBoard, playerSplitHandTotalDisplay);
		currentTurn = "player"; 
	}, 1000);

}
}


/**
 * 
 * @param player
    *      
 */
Blackjack.prototype.hitplayer = function (player)
{
  
}
function newGame() {
	getCards();
	cardsInDeck = cards;
	gameWinner = "none";
	dealerHand = [];
	dealerHandTotal = 0;
	dealerStatus = "start";
	playerHand = [];
	playerHandTotal = 0;
	playerStatus = "start";  
	playerHasAce = false;  
	splitGame = false; 
	isGameOver = false;
	playerSplitHand = [];
	playerSplitHandTotal = 0;
	playerSplitStatus = "start";

	if (currentWager === 0) { 
		Materialize.toast("You must select a bet to play", 1000);
	} else {	
		$(playerSplitGameBoard).hide();
		$(".split-hand-total").hide();
		enableButton(standButton, stand);
		enableButton(hitButton, hit);
		enableButton(doublerButton, doubleDown);
		dealerGameBoard.empty();
		playerGameBoard.empty();
		playerSplitGameBoard.empty();
		updateVisibleHandTotals();
		startGame(); 		
	}
}

function resetGame() {
	currentWager = 0;
	currentChipBalance = 500;
	updateVisibleChipBalances();
	location.reload();
}