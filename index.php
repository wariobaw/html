
<?php
// Array of books
$books = [
    [
        'title' => 'The Catcher in the Rye',
        'author' => 'J.D. Salinger',
        'description' => 'A novel about a young man named Holden Caulfield who is struggling with depression and alienation.'
    ],
    [
        'title' => '1984',
        'author' => 'George Orwell',
        'description' => 'A dystopian novel set in a totalitarian society controlled by Big Brother.'
    ],
    [
        'title' => 'To Kill a Mockingbird',
        'author' => 'Harper Lee',
        'description' => 'A novel about racial injustice in the Deep South, seen through the eyes of a young girl.'
    ]
];

// Display the list of books
echo "<h1>List of Books</h1>";
echo "<ul>";

foreach ($books as $book) {
    echo "<li>";
    echo "<strong>Title:</strong> " . $book['title'] . "<br>";
    echo "<strong>Author:</strong> " . $book['author'] . "<br>";
    echo "<strong>Description:</strong> " . $book['description'] . "<br>";
    echo "</li><hr>";
}

echo "</ul>";
?>
