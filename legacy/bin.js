$("#submitBtn").click(function(e)
{
	e.preventDefault();

	$.post("index.php?page=submit", $("#frmSubmit").serialize(), function(data)
	{
  		document.location.replace('index.php');
		return false;
  	});
});