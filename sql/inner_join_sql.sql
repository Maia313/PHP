SELECT books.title, authors.authorName AS Author, authors.born  FROM books
JOIN authors
ON authors.id = books.authorID