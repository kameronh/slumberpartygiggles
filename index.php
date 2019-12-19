<?php
  if(mail("_mainaccount@garretthartley.a2hosted.com","Slumber Party Giggles Email",htmlspecialchars($_GET["myString"])))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
	echo("test");
?>
