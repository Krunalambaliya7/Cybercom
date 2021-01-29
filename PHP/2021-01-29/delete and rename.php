<?php 

if(unlink('delete.txt'))
{
	echo "File deleted";
}
else
{
	echo "File nt deleted";
}

rename('rename.txt', 'new.txt');
?>