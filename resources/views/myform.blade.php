<form method="POST" action="/set_profile">
{{ csrf_field() }}
<input type="text" name="txt_name" value="">
<input type="hidden" name="flag" value="WEB">

<button type="submit">Send !</button>
</form>