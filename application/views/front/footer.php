		<script src="<?php echo site_url() ?>/js/jquery-3.1.1.min.js"></script>
		<script src="<?php echo site_url() ?>/js/tether.min.js"></script>
		<script src="<?php echo site_url() ?>/js/bootstrap.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.1/js/select2.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
			    $('#example').DataTable();
			} );
		</script>
		<script type="text/javascript">
			$("#exampleSelect2").select2({
			  tags: true
			});

			$("select").on("select2:select", function (evt) {
			  var element = evt.params.data.element;
			  var $element = $(element);

			  $element.detach();
			  $(this).append($element);
			  $(this).trigger("change");
			});

			$('#combineForm').submit(function(e){
			    var selections = ($("#exampleSelect2").val());
			    $("#formGroupExampleInput").val(selections);
			    return true;
			});
		</script>
	</body>
</html>