<!DOCTYPE html>
<html lang="en">

<head>
    <title>Demo</title>
</head>

<body>
    <h1>Recommended Books</h1>
    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseURL' => 'http://example.com'
        ],
        [
            'name' => 'The Langoliers',
            'author' => 'Stephen King',
            'releaseYear' => 1990,
            'purchaseURL' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseURL' => 'http://example.com'
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseURL' => 'http://example.com'
        ]
    ];

    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }
    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) : ?>
            <li>
                <a href="<?= $book['purchaseURL'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>