/**
 * sortHTMLTable - POO
 * adaptation: lx barjon (12/10/2005)
 * version: 1.0
 
 * Evolution: vb1 ( 09/01/2005 ) version: 1.51
 *      - Fonctionne sous IE (testé sous IE6) et FireFox
 *      - Possibilité de tri sur plusieurs colonnes  : dans l'ordre naturel
 *        ( + importante en 1er ) avec affichage de l'index de chaque colonne.
 *      - Possibilité de modifier l'ordre d'affichage des colonne en fonction de leur ordre de tri
 *      - Il est possible de désactiver le tri d'une colonne en re-cliquant sur un bouton déjà actif.
 *      - Recherche automatique du type de données dans les lignes suivantes si la 1ere est vide
 *      - Remplacement des balises (&nbsp;...) par la fonction unescapeHTML de prototype.js
 *      - Remplacement des accents pour ne pas géner l'ordre de tri ( ils restent à l'affichage )
 *      - Corrigé : double appel à la fct sortTable sur les colonnes >1 sous IE
 *      07/04/2006 : Correction : meilleur gestion des cellules totalement vides sous FireFox
 *
 * adaptation d'un code libre de droit :
 *		auteur: LARION
 *		URL : http://www.javascriptfr.com/code.aspx?id=29926
 *
 * utilise la très bonne librairie protoype.js (http://prototype.conio.net/)
 *
 * utilisation : apres vos tableau ajouter :
	<script type="text/javascript">
		// Mettre le chemin vers les images qui seront ajoutees dans les entetes pour permettre le tri
		var options = {
            reorderCol: true ou false ( change l'ordre d'affichage des colonnes en fct de l'ordre de tri )
			pathToImgUp: chemin_vers_votre_image,
			pathToImgDown: chemin_vers_votre_image
			pathToImgUpActive: chemin_vers_votre_image,
			pathToImgDownActive: chemin_vers_votre_image
		}
		new sortHTMLTable( tableId, options );
	</script>
	*
	* tableId = id du tableau à gérer
	*
	* Pour gerer plusieurs tableaux sur la meme page, reiterer l'operation...
*/

// index de la cellule qui engendre le tri (variable globale)
var cellIndex;

// ajout vb1 : propriete trim sur les string
String.prototype.trim = function(str) {
    str = this != window? this : str;
    // vb1 : modif de la regexp : remplacé  \s par [\s\xA0]
    // car replace de \s ( espace ) ne fonctionne pas sous IE quand la chaine comporte des espaces créés
    // par conversion de &nbsp; par la méthode unescapeHTML() car le code de ce caractere est 160( A0 ) au lieu de 32
    return str.replace(/^[\s\xA0]+/g, '').replace(/[\s\xA0]+$/g, ''); 
};

// ajout vb1 : propriete removeaccent sur les string
String.prototype.removeaccent = function(str) {
    str = this != window? this : str;
    return str.replace(/[àáâãäå]/g, 'a').replace(/[èéêë]/g, 'e').replace(/[ìíîï]/g, 'i').
        replace(/[òóôõö]/g, 'o').replace(/ñ/g, 'n').replace(/[ùúûü]/g, 'u').replace(/[ýÿ]/g, 'y').
            replace(/ç/g, 'c').replace(/œ/g, 'oe');
};

// ajout vb1 : propriete is member sur array
Array.prototype.ismember = function(search) {
    for ( var elem in this ) if (this[elem] == search) return elem;
    return -1;
};

// class sortHTMLTable
var sortHTMLTable = {};
sortHTMLTable = Class.create();
sortHTMLTable.prototype = {

	initialize: function( tableId, options ) {
		// image par defaut qui seront ajoutees dans les entetes pour permettre le tri
		this.options = {
            reorderCol: false,
			pathToImgUp: 'fleche_haut.png',
			pathToImgDown: 'fleche_bas.png',
			pathToImgUpActive: 'fleche_haut_active.png', // ajout vb1 : pour garder le dernier sens de tri activé
			pathToImgDownActive: 'fleche_bas_active.png' // ajout vb1
		}.extend( options || {} );
		if ( !document.getElementById ) return;
		if ( typeof tableId == 'undefined' ) {
			alert("Veuillez fournir l'ID du tableau à trier.");
			return;
		}
		this.tableId = tableId;
		// recup l'objet tableau correspondant a l'id fourni
		this.tableToSort = $(tableId);

		if ( !this.tableToSort ) {
			alert("Le tableau ayant pour ID " + tableId + " est introuvable.");
			return;
		}

		// prepare le tableau javascript qui sera utilise pour le tri
		this.jsTable = new Array();
		for ( var rowCpt = 1; rowCpt < this.tableToSort.rows.length; rowCpt++ ) {
			this.jsTable[rowCpt-1] = new Array();
		}
        //ajout vb : tableau pour stoquer les cellule d'entete pour pouvoir les déplacer
        this.headerTable = new Array();
        
		// initialisation des variables
		// ici on va stocker la fonction de tri correspondante au type de la cellule (sortNumber, sortString)
		this.sortFunction = new Array();
		// ici on stockera le type de donnee (date, number, string)
		var dataType = 'none';
		// contenu de la cellule
		var cellContent = '';
		// nombre total de colonne
		var totalCells = this.tableToSort.rows[0].cells.length;
		// on recup toutes les lignes dans jsTable sauf la ligne d'entete
		// Pour chaque cellule d'entete
		for ( var cellCpt = 0; cellCpt < this.tableToSort.rows[0].cells.length; cellCpt++ ) {
            // ajout vb1 : si la cellule est vide essaye les suivantes pour déterminer le type de données
            for ( var rowCpt = 1; rowCpt < this.tableToSort.rows.length; rowCpt++ ) {
                // ajout vb1 : evite de planter si une cellule est completement vide
                if ((!this.tableToSort.rows[rowCpt].cells[cellCpt].innerHTML) | (this.tableToSort.rows[rowCpt].cells[cellCpt].innerHTML == '') ){
                    cellContent = '';
                }
                else cellContent = this.tableToSort.rows[rowCpt].cells[cellCpt].innerHTML.unescapeHTML().trim();
                if ( (cellContent != '') ) break;
            }
            // recup le contenu de la cellule (je sais pas trop ce que fait cette regexp... si qq sait merci de me communiquer l'info ! ;) )
            // vb1 réponse :
            //removes tags and comments based on a regular expression (/<\/?[^>]+>/gi); and returns a copy of the string sans tags. Useful in many situations, such as where the text of a HTML string needs to be displayed as an alert.
			// modif vb1 : plus necessaire car déjà fait par unescapeHTML() :
            //cellContent = cellContent.replace( /<\/?[^>]+>/gi, "" );
            
            // ajout vb1
            this.sortFunction[cellCpt] = new Array();
			// check le type de donnee
			// date (ajouter les date EN AAAA-MM-JJ)
 			if ( cellContent.match(/^\d\d[\/-]\d\d[\/-]\d\d\d\d$/) ) {
				this.sortFunction[cellCpt]["ASC"] = this._sortStringASC;  // Modif vb1 : Ajout du suffix ASC
				this.sortFunction[cellCpt]["DESC"] = this._sortStringDESC; // Modif vb1 : Ajout du suffix DESC
				dataType = 'date';
			// nombre ou monnaie
			} else if ( cellContent.match(/^[0-9$£fF\.\s-]+$/) ) {
                this.sortFunction[cellCpt]["ASC"] = this._sortNumberASC; // Modif vb1 : Ajout du suffix ASC
				this.sortFunction[cellCpt]["DESC"] = this._sortNumberDESC; // Modif vb1 : Ajout du suffix DESC  
                dataType = 'number';
			// texte (string)
			} else {
				this.sortFunction[cellCpt]["ASC"] = this._sortStringASC; // Modif vb1 : Ajout du suffix ASC
				this.sortFunction[cellCpt]["DESC"] = this._sortStringDESC; // Modif vb1 : Ajout du suffix DESC
                dataType = 'string';
			}
            this.sortFunction[cellCpt]["LAST"] = false; // Modif vb1 : dernier utilisé
            this.sortFunction[cellCpt]["INDEX"] = 0; // Modif vb1 : Ordre des colonne trié

			// pour chaque ligne
			for ( var rowCpt = 1; rowCpt < this.tableToSort.rows.length; rowCpt++ ) {
				// recup contenu cellule
                // modif vb1 : remplacement de replace( /<\/?[^>]+>/gi, "" ) par unescapeHTML()
				//cellContent = this.tableToSort.rows[rowCpt].cells[cellCpt].innerHTML.replace( /<\/?[^>]+>/gi, "" );
                if ( (!this.tableToSort.rows[rowCpt].cells[cellCpt].innerHTML) | (this.tableToSort.rows[rowCpt].cells[cellCpt].innerHTML == '') ){ // ajout vb1 : evite de planter si une cellule est completement vide
                    cellContent = ' ';
                }
                else cellContent = this.tableToSort.rows[rowCpt].cells[cellCpt].innerHTML.unescapeHTML();
				// en fonction du type de donnee on rempli le tableau javascript qui servira au tri avec les donnees adequates
				switch (dataType) {
					case 'date':
					{
						// date ? -> on cree un objet date
                        // correction vb1 : les mois vont de 0 à 11 donc il faut retirer 1
                        // ( normalement cela n'avais pas d'influence sur le tri car toute les dates étaient décalées )
						this.jsTable[rowCpt-1][cellCpt] = new Date(cellContent.substring(6),cellContent.substring(3,5)-1,cellContent.substring(0,2));
						break;
					}
					case 'number':
					{
						// nombre? -> on transfomre en nombre
						this.jsTable[rowCpt-1][cellCpt] = parseFloat(cellContent.replace(/[^0-9.-]/g,''));
                        if ( isNaN(this.jsTable[rowCpt-1][cellCpt] ) ) this.jsTable[rowCpt-1][cellCpt] = 0; //Ajout vb1
						break;
					}
					case 'string':
					{
						// texte ? -> on met en minuscule car la methode sort et sensible a la casse (case sensitive)
						this.jsTable[rowCpt-1][cellCpt] = cellContent.toLowerCase().removeaccent();
						break;
					}
				}
				// on stocke la valeur d'origine de la cellule pour pouvoir la restituer au bon moment (this.sortTable)
				this.jsTable[rowCpt-1][cellCpt+totalCells] = this.tableToSort.rows[rowCpt].cells[cellCpt].innerHTML;
			}
		}

		// ajoute les 'images boutons' (img up et down) et y accroche des event onclick
		// on crée les objets images (up et down) et on les stocke dans un tableau pour pouvoir les cloner
		var imgUp = new Array();
		var imgDown = new Array();
		// creation img up
		imgUp[0] = document.createElement('img');
		imgUp[0].src = this.options.pathToImgUp;
		imgUp[0].style.cursor = 'pointer';
		imgUp[0].style.marginLeft = '5px';
		imgUp[0].id = this.tableId + 'up0';
		// creation img down
		imgDown[0] = document.createElement('img');
		imgDown[0].src = this.options.pathToImgDown;
		imgDown[0].style.cursor = 'pointer';
		imgDown[0].id = this.tableId + 'down0';
        // Ajout vb1 : Ajout d'un index aprés les boutons de tri afficher l'ordre des colonne triées ( colonne de tri N°1 puis N°2 ... )
        var spanIndex = new Array();
        spanIndex[0] = document.createElement('span');
        spanIndex[0].id = this.tableId + 'span0';
        spanIndex[0].innerHTML = ''; 
        spanIndex[0].style.fontSize = '10pt';
        spanIndex[0].style.marginLeft = '3px';
        spanIndex[0].style.color = '#F01A00';
        spanIndex[0].style.border = '0px solid #AAAAAA';
		// pour chaque cellule
		for ( var cellCpt = 0; cellCpt < this.tableToSort.rows[0].cells.length; cellCpt++ ) {
			// si les premieres images ont ete ajouter dans la page (DOM TREE), on clone pour l'ajout suivant (cellule suivante)
			// on modifie l'id pour avoir un code HTML valide et pour recup l'index de la cellule qui lance l'event
			if ( cellCpt > 0 ) {
				imgUp[cellCpt] = imgUp[0].cloneNode(true);
				imgUp[cellCpt].id = this.tableId + 'up' + cellCpt;
				imgDown[cellCpt] = imgDown[0].cloneNode(true);
				imgDown[cellCpt].id = this.tableId + 'down' + cellCpt;
                spanIndex[cellCpt] = spanIndex[0].cloneNode(true); // Ajout vb1
                spanIndex[cellCpt].id = this.tableId + 'span' + cellCpt; // Ajout vb1
			}
			// on ajoute les images dans les cellules d'entete
			this.tableToSort.rows[0].cells[cellCpt].appendChild(imgUp[cellCpt]);
			this.tableToSort.rows[0].cells[cellCpt].appendChild(imgDown[cellCpt]);
            this.tableToSort.rows[0].cells[cellCpt].appendChild(spanIndex[cellCpt]); // Ajout vb1
		}
        // Modif vb1 : l'ajout des event se fait dans une 2eme passe car sur IE6 les events sont dupliqués avec cloneNode
        // cela créais 2 appel successif à la methode sortTable pour les colonnes > 1  ( les event ne se duplique pas sur Firefox )
        for ( var cellCpt = 0; cellCpt < this.tableToSort.rows[0].cells.length; cellCpt++ ) {
        			// on recup les objets pour y ajouter les event
			var elementUp = $(imgUp[cellCpt].id);
			var elementDown = $(imgDown[cellCpt].id);
 			// ajout des event 
            Event.observe( elementUp, 'click', this.sortTable.bindAsEventListener(this), false );
            Event.observe( elementDown, 'click', this.sortTable.bindAsEventListener(this), false );
            
            this.headerTable[cellCpt] = this.tableToSort.rows[0].cells[cellCpt]; //sauvegarde l'entete
		}

	},

	sortTable: function(e) {
		// recup l'element qui a declanche l'evenement (imgUp ou imgDown)
		var element = window.event ? window.event.srcElement : e ? e.target : null;
		if ( !element ) return;
		// on verifie l'id de l'element pour etablir l'ordre de tri et on recup l'index correspondant
		if ( element.id.indexOf('up') != -1 ) {
			var sortOrder = 'ASC';
			cellIndex = parseInt( element.id.substr(this.tableId.length + 2) );
            element.src = this.options.pathToImgUpActive; // ajout vb1
            element.nextSibling.src = this.options.pathToImgDown; // ajout vb1
            var annul = this.sortFunction[cellIndex]['LAST'] == this.sortFunction[cellIndex][sortOrder];
            if (annul) element.src = this.options.pathToImgUp;// ajout vb1
		} else {
			var sortOrder = 'DESC';
			cellIndex = parseInt( element.id.substr(this.tableId.length + 4) );
            element.src = this.options.pathToImgDownActive; // ajout vb1
            element.previousSibling.src = this.options.pathToImgUp; // ajout vb1
            var annul = this.sortFunction[cellIndex]['LAST'] == this.sortFunction[cellIndex][sortOrder];
            if (annul) element.src = this.options.pathToImgDown;// ajout vb1
		}
        // Début ajout vb1 : Mise à jour de l'index affiché dans la colonne
        // Determine le précédent index de la colonne à trier car il faut décrementer l'index des colonnes ayant un indice supérieur
        var prevIndex = this.sortFunction[cellIndex]['INDEX']; // Derniere index de la colonne à trier
        if ( (prevIndex == 0) || (annul) ) { // on ne change l'index de la colonne que si elle était déja triée
        var nmax = 0;
     	for ( var cellCpt = 0; cellCpt < this.tableToSort.rows[0].cells.length; cellCpt++ ) {
            var n = this.sortFunction[cellCpt]['INDEX'];
            var nmax = n > nmax ? n : nmax;
            if ( (n > 0) && (n > prevIndex) &&  (prevIndex != 0) ){
                n--;
                this.sortFunction[cellCpt]['INDEX'] = n;
            }
        }
        
        if ( prevIndex == 0 ) nmax++;
        this.sortFunction[cellIndex]['INDEX'] = nmax; // La colonne actuellement triée prend la valeur max
        }

        // ajout vb1 : si on re-click  sur le même ordre de tri, des-active le tri pour la colonne
        if (this.sortFunction[cellIndex]['LAST'] == this.sortFunction[cellIndex][sortOrder] ){
            this.sortFunction[cellIndex]['LAST'] = false;
            this.sortFunction[cellIndex]['INDEX'] = 0;
            this.tableToSort.rows[0].cells[cellIndex].lastChild.innerHTML = '';
            this.tableToSort.rows[0].cells[cellIndex].lastChild.style.border = '0px solid #AAAAAA';
        }
        // ajout vb1 : mémorise l'ordre des colonnes dans un tableau pour le tri
        // utile pour Firefox qui perd l'ordre des autres colonnes lors de l'appel à array.sort
        // permet de faire un tri recursif sur les colonnes
        else this.sortFunction[cellIndex]['LAST'] = this.sortFunction[cellIndex][sortOrder];

        sortedCol = new Array(); //Ajout vb1
        var sortedColreorder = new Array(); 
   	    for ( var cellCpt = 0; cellCpt < this.tableToSort.rows[0].cells.length; cellCpt++ ) {
            var n = this.sortFunction[cellCpt]['INDEX'];
            if (n > 0){
                sortedCol[n-1] = new Array(); 
                sortedCol[n-1][0] = cellCpt; // N° de la colonne
                sortedCol[n-1][1] = this.sortFunction[cellCpt]['LAST']; //Fonction de tri
                sortedColreorder[n-1] = cellCpt;
            }
        }
        // Fin ajout vb1

		var totalCells = this.tableToSort.rows[0].cells.length;
        //Modif vb1:
        if ( sortedCol.length > 0 ) { // Modif vb1 : Si au moins 1 colonne a trier
            cellIndex1 = sortedCol[0][0]; // Variable global car utilisé dans les fct de tri auxquels on ne peux ajouter de parametres
		    // on tri le tableau js
		    this.jsTable.sort(this.sortFunction[cellIndex1]['LAST']); // Modif vb1 : ajout de l'index sortOrder
		    // on inverse l'ordre si necessaire (en fonction de l'element qui declenche le tri)
		    // Modif vb1 : if ( sortOrder == 'DESC' ) this.jsTable.reverse();
        } else if ( !this.options.reorderCol ) return true; // Rien à faire

        //for ( x in this.tableToSort.rows[0].cells[0].parentNode.childNodes )
        //var st = st + ', ' + this.tableToSort.rows[0].cells[0].parentNode.childNodes[x].nodeName ;
        //alert (st);
        // on remplace le tableau actuel;
        var nbcell = this.tableToSort.rows[0].cells.length; //modif vb1 : necessaire car le nombre de cellule change dans la boucle 
		for ( var cellCpt = 0; cellCpt < nbcell; cellCpt++ ) {
        
            if ( this.options.reorderCol ){ // Ajout vb1 : changement de l'ordre des colonnes
                if (sortedColreorder.length < nbcell) // Ajoute les N° de colonne non triées à la suite
                        if ( sortedColreorder.ismember(cellCpt) == -1 ) sortedColreorder.push( cellCpt );
                        
                var destcellCpt = sortedColreorder[cellCpt];
                // déplace les cellules de la ligne de titre     
                if (this.tableToSort.rows[0].cells[cellCpt])
                this.tableToSort.rows[0].cells[cellCpt].parentNode.replaceChild( this.headerTable[destcellCpt], this.tableToSort.rows[0].cells[cellCpt] );
                else this.tableToSort.rows[0].cells[0].parentNode.appendChild( this.headerTable[destcellCpt] );
            }
            else var destcellCpt = cellCpt; //pas de changement de l'ordre des colonnes
            
            //Ajout vb1 : N° de la colonne dans l'ordre de tri:
            var nbstr = this.sortFunction[destcellCpt]['INDEX'] || '';
            this.tableToSort.rows[0].cells[cellCpt].lastChild.style.border = (nbstr=='')?'0px solid #AAAAAA':'1px solid #AAAAAA';
            this.tableToSort.rows[0].cells[cellCpt].lastChild.innerHTML = nbstr;
            
			for ( var rowCpt = 1; rowCpt < this.tableToSort.rows.length; rowCpt++ ) {
				this.tableToSort.rows[rowCpt].cells[cellCpt].innerHTML = this.jsTable[rowCpt-1][destcellCpt+totalCells];
			}
		}
        
	},

	_sortNumberASC: function( a, b, colIndex, n ) { // modif vb1: tri récursif
        colIndex = typeof(colIndex)=='number' ? colIndex : cellIndex1;
        n = n || 0;
        var test = ( a[colIndex] - b[colIndex] );
        if ( (test==0) && (n < sortedCol.length) ){
             return ( sortedCol[n][1]( a, b, sortedCol[n][0], n+1 ) ) } // Si les 2 valeurs sont identiques, appelle la fct de tri de la colonne suivante
        else return test;
	},

	_sortStringASC: function( a, b, colIndex, n ) { // modif vb1: tri récursif
        colIndex = typeof(colIndex)=='number' ? colIndex : cellIndex1;
        n = n || 0;
		if ( a[colIndex] < b[colIndex] ) return -1;
		else if ( a[colIndex] > b[colIndex] ) return 1;
		else if (n < sortedCol.length) return ( sortedCol[n][1]( a, b, sortedCol[n][0], n+1 ) );// Si les 2 valeurs sont identiques, appelle la fct de tri de la colonne suivante
        else return 0;
	},
    // Modif vb1 : fonction de tri inversé pour éviter d'utiliser this.jsTable.reverse(); qui inverse aussi l'ordre des autres colonnes
    _sortNumberDESC: function( a, b, colIndex, n ) { // modif vb1: tri récursif
        colIndex = typeof(colIndex)=='number' ? colIndex : cellIndex1;
        n = n || 0;
		var test = ( b[colIndex] - a[colIndex] );
        if ( (test==0) && (n < sortedCol.length) ){
             return ( sortedCol[n][1]( a, b, sortedCol[n][0], n+1 ) ) } // Si les 2 valeurs sont identiques, appelle la fct de tri de la colonne suivante
        else return test;
	},
    // Modif vb1 : fonction de tri inversé
	_sortStringDESC: function( a, b, colIndex, n ) { // modif vb1: tri récursif
        colIndex = typeof(colIndex)=='number' ? colIndex : cellIndex1;
        n = n || 0;
		if ( a[colIndex] < b[colIndex] ) return 1;
		else if ( a[colIndex] > b[colIndex] ) return -1;
		else if (n < sortedCol.length) return ( sortedCol[n][1]( a, b, sortedCol[n][0], n+1 ) );
        else return 0;    
	}
	
}