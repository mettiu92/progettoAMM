<h1>Benvenuto!</h1>
				<p>In questo sito potrai comprare le tue t-shirt. </p>
				<p>Clicca qui per accedere all'area acquisti</p>
				<a href="index.php?page=utente&com=acquisti" target="_blank"> <b>Acquisti</b> </a>

<div class="gallery">
                  <p align="center">
    <a href="javascript:indietro()">INDIETRO</a> |
    <a href="javascript:avanti()">AVANTI</a>
    <br><br>
    <img src="immagini/t-shirt-1.jpeg" name="immagine">
</p>

 
	</div>
 		<div id="clear" "clear: both; width: 0px; height: 0px;"></div>

<script>
var foto = new Array();

foto[0] = "immagini/t-shirt-1.jpeg"
foto[1] = "immagini/t-shirt-2.jpeg"
foto[2] = "immagini/t-shirt-3.jpeg"
foto[3] = "immagini/t-shirt-4.jpeg"


var i = 0;

function indietro()
{
    if (i == 0)
    {
        i = foto.length - 1;
    }
    else
    {
        i--;
    }
    document.immagine.src = foto[i];
}

function avanti()
{
    if (i < foto.length - 1)
    {
        i++;
    }
    else
    {
        i=0;
    }
    document.immagine.src = foto[i];
}
</script>
