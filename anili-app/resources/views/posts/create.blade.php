

    <style>
        form {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        div {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>

    <h1>Create Post</h1>

    <form action="/posts" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" >
        </div>
        <div>
            <label for="body">Body</label>
            <textarea id="body" name="body"></textarea>
        </div>
        <button type="submit">Create Post</button>
    </form>

