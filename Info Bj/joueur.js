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
  
}


/**
 * 
 */
Blackjack.prototype.stand = function ()
{
  
}


/**
 * 
 */
Blackjack.prototype.doubler = function ()
{
  
}


/**
 * 
 */
Blackjack.prototype.split = function ()
{
  
}


/**
 * 
 * @param player
    *      
 */
Blackjack.prototype.hitplayer = function (player)
{
  
}

/**
  * class Joueur
  * 
  */

Joueur = function ()
{
  this._init ();
}


/**
 * _init sets all Joueur attributes to their default value. Make sure to call this
 * method within your class constructor
 */
Joueur.prototype._init = function ()
{
  /**
   * 
   */
  this.m_balance = "";
  /**
   * 
   */
  this.m_NomJoueur = "";
  /**
   * 
   */
  this.m_handJoueur = "";

  /**Aggregations: */

  /**Compositions: */

}

/**
 * 
 * @param balance
    *      
 * @param NomJoueur
    *      
 * @param handJoueur
    *      
 */
Joueur.prototype.__init__ = function (balance, NomJoueur, handJoueur)
{
  self.balance = balance
  self.NomJoueur = NomJoueur
  self.handJoueur= handJoueur
  
}


/**
 * 
 */
Joueur.prototype.bet = function ()
{
  
}


/**
 * 
 */
Joueur.prototype.joueur = function ()
{
  
}


/**
 * 
 * @param NomJoueur
    *      
 */
Joueur.prototype.setNomJoueur = function (NomJoueur)
{
  
}


/**
 * 
 */
Joueur.prototype.getNomJoueur = function ()
{
  NomJoueur = self.NomJoueur
  return
}


/**
 * 
 */
Joueur.prototype.getBalance = function ()
{
  
}


/**
 * 
 * @param money
    *      
 */
Joueur.prototype.updateBalance = function (money)
{
  
}



