$('.film').on('click', function(event) {
	event.preventDefault();
	$('#inserted').remove();
	var destination = $(this);
	destination.before('<span id="loading"><strong>Loading...</strong></span> ');
	var modalBeforeTitle = '<div id="inserted"><div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> <h4 class="modal-title" id="myModalLabel">Coverage of ';
	var modalAfterTitle = '</h4> </div> <div class="modal-body">';
	var modalAfterBody = '</div> <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div> </div><!-- /.modal-content --> </div><!-- /.modal-dialog --> </div><!-- /.modal --></div>';
	$.get(destination.attr('href'), function(data) {
		destination.parent().after( modalBeforeTitle + destination.html() + modalAfterTitle + data + modalAfterBody);
		$('#myModal').modal();
		$('#loading').remove();
	});
});
