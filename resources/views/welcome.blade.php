<h1>{{$user->name}}</h1>


<ul>
    <li>{{$user->articles_count}} {{\Illuminate\Support\Str::plural('article',$user->articles_count)}}</li>

    <li>{{$user->comments_count}} {{\Illuminate\Support\Str::plural('comment',$user->comments_count)}}</li>

    <li>{{$user->comments_deleted_count}} deleted {{\Illuminate\Support\Str::plural('comment',$user->comments_deleted_count)}}</li>

    <li>{{$user->articles_vote_count}} article {{\Illuminate\Support\Str::plural('vote',$user->articles_vote_count)}}</li>


</ul>
