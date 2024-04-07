<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Random Quote</h1>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Author</th>
                    <th>Content</th>
                    <th>Tags</th>
                    <th>Date Added</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $author }}</td>
                    <td>{{ $content }}</td>
                    <td>{{ implode(',', $tags) }}</td>
                    <td>{{ $dateAdded }}</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS and other scripts if necessary -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
