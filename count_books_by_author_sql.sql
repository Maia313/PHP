SELECT COUNT(title) as numberOfBooks, authors.authorName FROM books
JOIN authors
ON authors.id = books.authorID
GROUP BY authors.authorName