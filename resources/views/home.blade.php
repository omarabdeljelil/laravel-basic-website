@extends('layouts.main')
@section('title')
    Home
@endsection
@section('content')
    <h1 class="text-info">Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt dolores fugiat harum ipsum sint
        vitae. Ad autem eos magnam soluta veniam voluptate! Accusamus animi aspernatur blanditiis deserunt dignissimos
        dolor dolores dolorum earum enim illum in iste modi molestiae nesciunt nisi nulla, odio officiis porro quaerat
        quia quis ratione soluta sunt unde, ut. Ad corporis, deserunt dolore ducimus error est, ex explicabo harum ipsa
        molestias officia optio quisquam rem rerum sapiente sint soluta tempore. Consequatur dolores est, excepturi
        libero molestias porro quas quia suscipit! Ad aliquam autem dolor facere placeat quam quasi. Aliquam, harum
        impedit laboriosam pariatur quaerat totam vero!</p>
@endsection

@section('sidebar')
    @parent
    <p>Text appended to the sidebar from the home page</p>
@endsection