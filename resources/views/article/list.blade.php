<!DOCTYPE html>
<html lang="pl">
@include('partials.head')

<body>
    @include('partials.navi')
    <div id="content">
        <h1>List of articles</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Creation date</th>
                    <th>Authors</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($article as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->title}}</td>
                    <td>{{$el->text}}</td>
                    <td>{{$el->creation_date}}</td>
                    @foreach($el->authors as $x)
                    <td>
                            {{$x->name}}
                    </td>
                    @endforeach
                    <td><a href = '<?=config('app.url'); ?>/article/edit/{{$el->id}}'>Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
        
    </div>
</body>

</html>