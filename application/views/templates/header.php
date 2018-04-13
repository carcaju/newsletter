<html>
        <head>
                <title>Listagem de Notícias</title>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script>

function Validate(){
   if(!validateForm()){
       alert("Você deve escolher pelo menos 1 notícia");
       return false;
   }
return true
}
function validateForm()
{
    var c=document.getElementsByTagName('input');
    for (var i = 0; i<c.length; i++){
        if (c[i].type=='checkbox')
        {
            if (c[i].checked){return true}
        }
    }
    return false;
}
</script>

<script>

	function ValidateEmail(inputText) {
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

		if(inputText.value.match(mailformat)){
			document.form1.email.focus();
			return true;
		} else {
			alert("Você precisa informar um email válido");
			document.form1.email.focus();
		return false;
		}
	}
</script>


        </head>
        <body>

