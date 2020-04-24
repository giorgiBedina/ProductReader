function displayForm(){
	switch (document.getElementById('selectBox').value) {
		case 'disc':
		document.getElementById('size').style.display = 'block' ;
		document.getElementById('dimentions').style.display = 'none' ;
		document.getElementById('weight').style.display = 'none' ;
		document.getElementById('none').style.display = 'none' ;	break;
		case 'furniture':
		document.getElementById('dimentions').style.display = 'block' ;
		document.getElementById('size').style.display = 'none' ;
		document.getElementById('weight').style.display = 'none' ;
		document.getElementById('none').style.display = 'none' ;	break;
		case 'book':
		document.getElementById('weight').style.display = 'block' ;
		document.getElementById('dimentions').style.display = 'none' ;
		document.getElementById('size').style.display = 'none' ;
		document.getElementById('none').style.display = 'none' ;	break;
		default:
		document.getElementById('none').style.display = 'block' ;	break;
		document.getElementById('dimentions').style.display = 'none' ;
		document.getElementById('size').style.display = 'none' ;
		document.getElementById('weight').style.display = 'none' ;
	}
}
