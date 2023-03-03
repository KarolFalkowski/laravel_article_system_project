<!DOCTYPE html>
<html>
@include('partials.head')
<body>
 @include('partials.navi')

 <div id="content">
    <h2>Add article</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>/article/save" method="post">
    @csrf
    <p>
        <label for="title"> Title: </label>
        <input id="title" name="title"  required>
    </p>
    <p>
        <label for="text"> Text: </label>
        <input id="text" name="text"  required>
    </p>
    <p>
        <label for="creation_date"> Creation date </label>
        <input type="date" id="creation_date" name="creation_date"  required>
    </p>
    <p>Author:
		<select id="author_id" name="author_id">
        @foreach($authors as $el)
				<option option value='{{$el->id}}'>
                {{$el->name}}
				</option>
        @endforeach
		</select>
    </p>
    <p><button type="submit" class="btn btn-primary mb-2">Save</button></p>
    </form>        
</div>
</body>
</html>