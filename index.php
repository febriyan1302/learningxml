<?php

$doc = new DOMDocument();
$doc->load('books.xml');

echo"<table border='1'>
		<tr>
			<td>Title</td>
			<td>Author</td>
			<td>Publisher</td>
		</tr>
";
 
$books = $doc->getElementsByTagName("book");
foreach($books as $book)
{
	$authors = $book->getElementsByTagName("author");
 	$author = $authors->item(0)->nodeValue;
  
 	$titles = $book->getElementsByTagName("title");
 	$title = $titles->item(0)->nodeValue;
  
 	$publishers = $book->getElementsByTagName("publisher");
 	$publisher = $publishers->item(0)->nodeValue;
  
echo"
		<tr>
			<td>$title</td>
			<td>$author</td>
			<td>$publisher</td>
		</tr>
";
}

echo"</table>";

?> 
	<br /><br />
	<table border="1">
		<tr>
			<td>Title</td>
			<td>Author</td>
			<td>Publisher</td>	
		</tr>
		
		<?PHP 
		$books = $doc->getElementsByTagName("book"); 
		foreach($books as $book) {
		?>
		<tr>
			<?PHP  
			$titles = $book->getElementsByTagName("title");
 			$title = $titles->item(0)->nodeValue;
			?>
			<td><?PHP echo "$title"; ?></td>

			<?PHP  
			$authors = $book->getElementsByTagName("author");
 			$author = $authors->item(0)->nodeValue;
			?>
			<td><?PHP echo "$author"; ?></td>

			<?PHP  
			$publishers = $book->getElementsByTagName("publisher");
 			$publisher = $publishers->item(0)->nodeValue;
			?>
			<td><?PHP echo "$publisher"; ?></td>
		</tr>
		<?PHP
		}
		?>
	</table>
	
<?PHP


?>
