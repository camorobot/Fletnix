SELECT Movies.AuthorId, Authors.Firstname
FROM Movies
INNER JOIN Authors ON Movies.AuthorId = Authors.id;