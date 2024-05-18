<?php
class Book {

    // TODO: Add properties as Private
    private $title;

    private $availableCopies=0;

    public function __construct($title, $availableCopies) {

        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }


    // TODO: Add getTitle method
    function getTitle () {
        return $this->title;
    }

    // TODO: Add getAvailableCopies method
    function getAvailableCopies () {

        if($this->availableCopies < 0){
            return "No more books available";
        }else{
            return $this->availableCopies;
        }
    }

    // TODO: Add borrowBook method
    function borrowBook () {

        $this->availableCopies -=1;

        if($this->availableCopies < 0){
            echo "No more books available\n";
        }
        
    }
    
    // TODO: Add returnBook method
    function returnBook() {
        $this->availableCopies +=1;
    }
    
}





class Member {

    // TODO: Add properties as Private
    private $name;

    public function __construct($name) {
        // TODO: Initialize properties
        $this->name = $name;
    }

    // TODO: Add getName method
    function getName() {
        return $this->name;
    }

    
    // TODO: Add borrowBook method
    function borrowBook($book) {
        $book->borrowBook();
    }

    // TODO: Add returnBook method
    function returnBook($book) {
        $book->returnBook();
    }
    
}


// TODO: Create 2 books with the following properties
// Book 1 - Name: The Great Gatsby, Available Copies: 5.
// Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);



// TODO: Create 2 members with the following properties
// Member 1 - Name: John Doe
// Member 2 - Name: Jane Smith
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");


// TODO: Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);


// TODO: Print Available Copies with their names:
$book1Title = $book1->getTitle();
$book1GetAvailableCopies = $book1->getAvailableCopies();

$book2Title = $book2->getTitle();
$book2GetAvailableCopies = $book2->getAvailableCopies();

echo "Available Copies of '$book1Title': $book1GetAvailableCopies\n";

echo "Available Copies of '$book2Title': $book2GetAvailableCopies\n";


?>