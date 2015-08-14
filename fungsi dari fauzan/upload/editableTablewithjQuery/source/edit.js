$(function() {

	//when a td element within tbody is clicked
	$('tbody').on('click','td',function() {
		//call displayform, passing td jQuery element
		displayForm( $(this) );
	});

});

function displayForm( cell ) {

	var column = cell.attr('class'),//class of td corresponds to database table column
		id = cell.closest('tr').attr('id'),//id of tr corresponds to database primary key
		cellWidth = cell.css('width'),//get width of cell for styling width of input field
		prevContent = cell.text(),//store previous value
		//form action prevents page refresh when enter pressed.  hidden fields pass primary key and column name
		form = '<form action="javascript: this.preventDefault"><input type="text" size="4" name="newValue" value="'+
			   prevContent+'" /><input type="hidden" name="id" value="'+id+'" />'+
			   '<input type="hidden" name="column" value="'+column+'" /></form>';

	//insert form into td and change focus to input field, set width
	cell.html(form).find('input[type=text]')
		.focus()
		.css('width',cellWidth);

	//disable listener on individual cell once clicked
	cell.on('click', function(){return false});

	//on keypress within td
	cell.on('keydown',function(e) {
		if (e.keyCode == 13) {//13 == enter
			changeField(cell, prevContent);//update field
		} else if (e.keyCode == 27) {//27 == escape
			cell.text(prevContent);//revert to original value
			cell.off('click'); //reactivate editing
		}
	});

}

function changeField( cell, prevContent ) {

	//remove keydown listener once action initiated
	cell.off('keydown');

	var url = 'ajax.php?edit&',//relative path to PHP processing script
		input = cell.find('form').serialize();//serialize form for passing via url
		
	//send ajax request
	$.getJSON(url+input, function(data) {//data argument is used to retrieve response from processing script

		//On success, update cell to new value
		if (data.success)
			cell.html(data.value);
		else {
			//On failure, revert to original value and alert
			alert("There was a problem updating the data.  Please try again.");
			cell.html(prevContent);
		}

	});

	//remove click handler to allow tbody handler to make field editable again
	cell.off('click');

}