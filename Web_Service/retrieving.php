<?php

/*class Book
{
	public $id;
	public $name;
	public $edition;

	public function __construct($id)
	{
		$this->id = $id;
	}
}

class Author
{
	public $id;
	public $name;
	public $books = array();

	public function __construct($id)
	{
		$this->id = $id;
	}
}*/

class Book implements JsonSerializable
{
	public $id;
	public $name;
	public $edition;

	public function __construct($id)
	{
		$this->id = $id;
	}

	public function jsonSerialize()
	{
		$data = array(
			'id'      => $this->id,
			'name'    => $this->name,
			'edition' => $this->edition
			);

		return $data;
	}
}

class Author implements JsonSerializable
{
	public $id;
	public $name;
	public $books = array();

	public function __construct($id)
	{
		$this->id = $id;
	}

	public function jsonSerialize()
	{
		$data = array(
			'id'      => $this->id,
			'name'    => $this->name,
			'books' => $this->books
			);

		return $data;
	}
}

class ResourceFactory
{
	static public function authorFromJson($jsonData)
	{
		$author = new Author($jsonData['id']);
		$author->name = $jsonData['name'];

		foreach ($jsonData['books'] as $bookIdentifier) {
			$this->books[] = new Book($bookIdentifier);
		}

		return $author;
	}

	static public function bookFromJson($jsonData)
	{
		$book = new Book($jsonData['id']);
		$book->name = $jsonData['name'];
		$book->edition = (int) $jsonData['edition'];

		return $book;
	}
} 

$authorId = 'ktatroe';
$url = "http://example.com/api/authors/{$authorId}";

$ch = curl_init(); //initializes curl session
//curl_setopt sets an option for curl transfer
curl_setopt($ch, CURLOPT_URL, $url); //provides the URL to use in the request

$response = curl_exec($ch); //performs the curl session
$resultInfo = curl_getinfo($ch); //get information regarding a specific transfer

curl_close($ch);

//decode the JSON and use a factory to instantiate an Author object
$authorJson = json_decode($response);
$author = ResourceFactory::authorFromJson($authorJson);


//creating an author

$newAuthor = new Author('pbmacintyre');
$newAuthor->name = "Peter Macintyre";

$url = "http://example.com/api/authors";

$data = array(
	'data' => json_encode($newAuthor)
	);

$requestData = http_build_query($data, '', '&');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_POSTFIELDS, $requestData); //specifies data to POST to server
curl_setopt($ch, CURLOPT_POST, true); //requests a HTTP POST

$response = curl_exec($ch);
$resultInfo = curl_getinfo($ch);

curl_close($ch); //closes a curl session
?>