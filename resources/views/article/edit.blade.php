<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')
    <div id="content">
    <h1>Edit article</h1>
    <form class="form-inline" action="<?=config('app.url'); ?>/article/update/{{$article->id}}" method="post">
    @csrf
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="{{$article->id}}" readonly>
    </p>
    <p>
        <label for="title"> Title: </label>
        <input id="title" name="title" value="{{$article->title}}"  required>
    </p>
    <p>
        <label for="text"> Text: </label>
        <input id="text" name="text" value="{{$article->text}}"  required>
    </p>
    <p>
        <label for="creation_date"> Creation date </label>
        <input type="date" id="creation_date" name="creation_date" value="{{$article->creation_date}}" required>
    </p>
    <p>Authors:
		<select id="author_id" name="author_id">
            @foreach($authors as $el)
				<option option value='{{$el->id}}'>
                {{$el->name}}
				</option>
            @endforeach
            <option option value=''>
            </option>
		</select>
    </p>
    <p><button type="submit" class="btn btn-primary mb-2">Save</button></p>
    </form>       
    </div>
</body>

</html>