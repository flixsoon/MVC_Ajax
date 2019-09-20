$(function() {
	$( ".delClient" ).click( function( e ) {
		el = $(this);
		
		e.preventDefault();
		
		// Suppression avec Ajax
		$.ajax({
			type: 'POST',
			url: 'ajax.php?idClient=' + el.attr( 'idClient' ),
			success: function(data) {
				el.parents( "tr" ).remove();
			},
			error: function() {
				alert('La requête n\'a pas abouti'); 
			}
		});
		
		return false;
	} );
});

updateClientsList();

function updateClientsList() {
	lastClientID = $( 'table tr:last td:first' ).text();
	
	$.ajax({
		type: 'GET',
		url: 'ajax.php?action=update&lastClientID=' + lastClientID,
		success: function( data ) {
			if ( ! $.isEmptyObject( data ) )
			{
				$.each(data, function( i, item ) {
					
	    			html = "<tr>" +
	    					"<td>" + item.id + "</td>" +
	    					"<td>" + item.nom + "</td>" +
	    					"<td>" + item.prenom + "</td>" +
	    					"<td>" + item.tel + "</td>" +
	    					"<td>" + item.email + "</td>" +
	    					"<td><a href='controller.php?page=delete&clientID="+ item.id +"' idClient='" + item.id + "' class='delClient'>Supprimer</a></td>";
	    					"</tr>";

	    			$( 'table' ).append( html );
				});
			}
		},
		error: function() {
			alert('La requête n\'a pas abouti'); 
		}
	});

	setTimeout( function() { updateClientsList(); }, 1000 );
}



