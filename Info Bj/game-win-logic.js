// Permet d'introduire une logic d'après round pour dire si c'est ifni

function gameOver() {
	isGameOver = true;
	setTimeout(function(){
		flipHiddenCard();
	},750);
	disableButton(standButton);
	disableButton(hitButton);
	disableButton(splitButton);
	disableButton(doubleDownButton);
	if (dealerHandtotal === 21) {
		if(playerHandTotal === 21 || playerSplitHandTotal === 21){
			gameWinner = 'tie';
		} else {
			gameWinner = "dealer";
		}
	} else if (dealerHandTotal > 21) {
		if (playerHandTotal <= 21) {
			gameWinner = "player";
		} else if (splitGame === true && playerSplitHandTotal <= 21) {
			gameWinner = "player";
		} else {
			gameWinner = "tie";
		}
	} else if (dealerHandTotal < 21) {
		if (playerHandTotal === 21  || playerSplitHandTotal === 21) {
			gameWinner = "player";
		} else if (playerHandTotal < 21 && playerHandTotal > dealerHandTotal) {
			gameWinner = "player";
		} else if (playerSplitHandTotal < 21 && playerSplitHandTotal > dealerHandTotal) {
			gameWinner = "player";
		} else if (playerSplitHandTotal < 21 && playerSplitHandTotal === dealerHandTotal ||
			playerHandTotal < 21 && playerHandTotal === dealerHandTotal) {
			gameWinner = "tie";
		} else {
			gameWinner = "dealer";
		}
	}
	updateChipBalance ();
	setTimeout(announceWinner , 2500); //Délai pour voir la dernière carte joué
}

function updateChipBalance() {
	if (gameWinner === 'player') {

		if (splitGame === false && playerHasAce === true &&
		playerHandTotal === 21 && playerHand.length === 2) {
			currentChipBalance += currentWager*(3/2) + currentWager;
		}else{
			currentChipBalance += currentWager*2;
		}
		// si égalité, rend l'agent initiale
	}else if (gameWinner === 'tie') {
		currentChipBalance += currentWager
	}
	// Note: Si le croupier gagne, rine ne se passe pour le chip balance du joueur. La mise est retirer de celui-ci
	updateVisibleChipBalances();
}

function announceWinner() {
	updateVisibleHandTotals();
	currentWager = 0;
	updateVisibleChipBalances();
	$("#game-board").hide();
	enlargeDeck(playerSplitGameBoard, playerSplitHandTotalDisplay);
	enlargeDeck(playerGameBoard, playerHandTotalDisplay);

	// Move betting options from welcome screen to game over screen to play again
	$("#wager-options").appendTo($("#game-over")); 
	$(playAgainButton).appendTo($("#wager-options")); // to move to bottom of container
	$(startButton).hide(); 
	$("#game-over").show("drop", 500);

	if (gameWinner === "player") {
		$("#game-outcome").text("You won");
	} else if (gameWinner === "dealer") {
		$("#game-outcome").text("Dealer won");
	} else if (gameWinner === "tie") {
		$("#game-outcome").text("You tied");
	}
}