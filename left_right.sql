-- Hämta alla böcker oavsett om de har en författare eller inte
SELECT books.title, authors.authorName AS Author, authors.born  FROM books
LEFT JOIN authors
ON authors.id = books.authorID

-- Hämta alla författare oavsett om de har böcker eller inte
SELECT books.title, authors.authorName AS Author, authors.born  FROM books
RIGHT JOIN authors
ON authors.id = books.authorID