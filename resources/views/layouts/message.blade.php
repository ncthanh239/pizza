@if(Session::has('success'))
<div id="ms">
	<div class="alert alert-success ui-message" role="alert">
		<strong>Success</strong>{{ session::get('success') }}
	</div>
</div>
@endif
@if( Session::has('errorMess'))
<div id="ms" class="panel panel-default">
	<div class="alert alert-danger ui-message" role="alert" style="color:red">
		<strong>Errors:</strong>
		{{ Session::get('errorMess') }}
	</div>
</div>
@endif
<script src="../module/backend/js/jquery.min.js"></script>