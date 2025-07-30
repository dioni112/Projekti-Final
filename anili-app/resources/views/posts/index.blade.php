<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Te gjitha Postimet</title>
</head>
<body>

 

  <h1 style="text-align: center; margin-bottom: 30px;">Te gjitha postimet</h1>

  <div style="display: flex; flex-direction: column; align-items: center;">
    @foreach($posts as $post)
    <div style="width: 80%; margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; box-shadow: 2px 2px 6px rgba(0,0,0,0.1);">
      <h2 style="color: #333;">{{$post->title}}</h2>
      <p style="color: #666;">{{$post->body}}</p>
      <form action="{{ route('posts.destroy', $post->id) }}" 

      onsubmit="return confirm('Are you sure you want to delete this post?');"
 

      method="POST" style="margin-top: 10px;">
        @csrf
        @method('DELETE')
        <button type="submit" style="background-color: #f44336; color: white; padding: 8px 12px; border: none; border-radius: 4px; cursor: pointer;">Delete</button>
      </form>
      <a href="{{ route('posts.edit', $post->id) }}" style="text-decoration: none; color: #2196F3; margin-top: 10px; display: inline-block;">Edit</a>
      
    </div>
    @endforeach
  </div>

    
</body>
</html>