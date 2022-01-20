var carte; 

function getCartes(){
	carte = [
			{	
			"couleur":"trèfle" ,
			"rang":"2",
			"valeur": 2,
			"src":"Clubs-2.png"

			},
			{
			"couleur":"trèfle" ,
			"rang":"3",
			"valeur":3,
			"src":"Clubs-3.png"
		
			},
			{
			"couleur":"trèfle" ,
			"rang":"4",
			"valeur":4,
			"src":"Clubs-4.png"
			
			},
			{
			"couleur":"trèfle" ,
			"rang":"5",
			"valeur":5,
			"src":"Clubs-5.png"
			
			},
			{
			"couleur":"trèfle" ,
			"rang":"6",
			"valeur":6,
			"src":"Clubs-6.png"
				
			},
			{
			"couleur":"trèfle" ,
			"rang":"7",
			"valeur":7,
			"src":"Clubs-7.png"
		
			},
			{
			"couleur":"trèfle" ,
			"rang":"8",
			"valeur":8,
			"src":"Clubs-8.png"
			
			},
			{
			"couleur":"trèfle" ,
			"rang":"9",
			"valeur":9,
			"src":"Clubs-9.png"
			
			},
			{
			"couleur":"trèfle" ,
			"rang":"10",
			"valeur":10,
			"src":"Clubs-10.png"
			},
			{
			"couleur":"trèfle" ,
			"rang":"as",
			"valeur":11,
			"src":"Clubs-Ace.png"
				
			},
			{
			"couleur":"trèfle" ,
			"rang":"valet",
			"valeur":10,
			"src":"Clubs-Jack.png"
			
			},
			{
			"couleur":"trèfle" ,
			"rang":"Roi",
			"valeur":10,
			"src":"Clubs-King.png"
			
			},
			{
			"couleur":"trèfle" ,
			"rang":"Reine",
			"valeur":10,
			"src":"Clubs-Queen.png"
			
			},
			{
			"couleur":"carreau" ,
			"rang":"2",
			"valeur":2,
			"src":"Diamond-2.png"
			
			},
			{
			"couleur":"carreau" ,
			"rang":"3",
			"valeur":3,
			"src":"Diamond-3.png"
				
			},
			{
			"couleur":"carreau" ,
			"rang":"4",
			"valeur":4,
			"src":"Diamond-4.png"
				
			},
			{
			"couleur":"carreau" ,
			"rang":"5",
			"valeur":5,
			"src":"Diamond-5.png"
					
			},
			{
			"couleur":"carreau" ,
			"rang":"6",
			"valeur":6,
			"src":"Diamond-6.png"
				
			},
			{
			"couleur":"carreau" ,
			"rang":"7",
			"valeur":7,
			"src":"Diamond-7.png"
			
			},
			{
			"couleur":"carreau" ,
			"rang":"8",
			"valeur":8,
			"src":"Diamond-8.png"
				
			},
			{
			"couleur":"carreau" ,
			"rang":"9",
			"valeur":9,
			"src":"Diamond-9.png"
				
			},
			{
			"couleur":"carreau" ,
			"rang":"10",
			"valeur":10,
			"src":"Diamond-10.png"
				
			},
			{
			"couleur":"carreau" ,
			"rang":"as",
			"valeur":11,
			"src":"Diamond-Ace.png"
					
			},
			{
			"couleur":"carreau" ,
			"rang":"valet",
			"valeur":10,
			"src":"Diamond-Jack.png"
				
			},
			{
			"couleur":"carreau" ,
			"rang":"Roi",
			"valeur":10,
			"src":"Diamond-King.png"
				
			},
			{
			"couleur":"carreau" ,
			"rang":"Reine",
			"valeur":10,
			"src":"Diamond-Queen.png"
				
			},
			{
			"couleur":"coeur" ,
			"rang":"2",
			"valeur":2,
			"src":"Heart-2.png"
			
			},
			{
			"couleur":"coeur" ,
			"rang":"3",
			"valeur":3,
			"src":"Heart-3.png"
				
			},
			{
			"couleur":"coeur" ,
			"rang":"4",
			"valeur":4,
			"src":"Heart-4.png"
				
			},
			{
			"couleur":"coeur" ,
			"rang":"5",
			"valeur":5,
			"src":"Heart-5.png"
					
			},
			{
			"couleur":"coeur" ,
			"rang":"6",
			"valeur":6,
			"src":"Heart-6.png"
					
			},
			{
			"couleur":"coeur" ,
			"rang":"7",
			"valeur":7,
			"src":"Heart-7.png"
			
			},
			{
			"couleur":"coeur" ,
			"rang":"8",
			"valeur":8,
			"src":"Heart-8.png"
				
			},
			{
			"couleur":"coeur" ,
			"rang":"9",
			"valeur":9,
			"src":"Heart-9.png"
				
			},
			{
			"couleur":"coeur" ,
			"rang":"10",
			"valeur":10,
			"src":"Heart-10.png"
				
			},
			{
			"couleur":"coeur" ,
			"rang":"as",
			"valeur":11,
			"src":"Heart-Ace.png"
					
			},
			{
			"couleur":"coeur" ,
			"rang":"valet",
			"valeur":10,
			"src":"Heart-Jack.png"
				
			},
			{
			"couleur":"coeur" ,
			"rang":"Roi",
			"valeur":10,
			"src":"Heart-King.png"
				
			},
			{
			"couleur":"coeur" ,
			"rang":"Reine",
			"valeur":10,
			"src":"Heart-Queen.png"
				
			},
			{
			"couleur":"pique" ,
			"rang":"2",
			"valeur":2,
			"src":"Spade-2.png"
			
			},
			{
			"couleur":"pique" ,
			"rang":"3",
			"valeur":3,
			"src":"Spade-3.png"
				
			},
			{
			"couleur":"pique" ,
			"rang":"4",
			"valeur":4,
			"src":"Spade-4.png"
				
			},
			{
			"couleur":"pique" ,
			"rang":"5",
			"valeur":5,
			"src":"Spade-5.png"
					
			},
			{
			"couleur":"pique" ,
			"rang":"6",
			"valeur":6,
			"src":"Spade-6.png"
					
			},
			{
			"couleur":"pique" ,
			"rang":"7",
			"valeur":7,
			"src":"Spade-7.png"
			
			},
			
		]
		}