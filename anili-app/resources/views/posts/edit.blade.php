<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .edit-container {
            background: #fff;
            max-width: 500px;
            margin: 40px auto;
            padding: 32px 28px 24px 28px;
            border-radius: 8px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.08);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 28px;
        }
        form div {
            margin-bottom: 18px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            color: #444;
            font-weight: 500;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            background: #fafafa;
            transition: border 0.2s;
        }
        input[type="text"]:focus, textarea:focus {
            border-color: #007bff;
            outline: none;
        }
        textarea {
            min-height: 120px;
            resize: vertical;
        }
        button[type="submit"] {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            transition: background 0.2s;
        }
        button[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
    <div class="edit-container">
        <h1>Edit Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title:</label>
                <input type="text" name="title" value="{{ old('title', $post->title) }}" required>
            </div>
            <div>
                <label for="content">Content:</label>
                <textarea name="body" required>{{ old('body', $post->body) }}</textarea>
            </div>
            <button type="submit">Update Post</button>
        </form>
    </div>

    
</body>
</html>