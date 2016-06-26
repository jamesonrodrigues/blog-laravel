@extends('template_eblog')

@section('title')
    Blog
@stop
@section('content')
    <h1>Exercicio Blog</h1>


        <div class="row">

            <div class="col s10">
                @foreach($posts as $post)
                    <blockquote>
                        <h4><i class="material-icons left medium">today</i> 12 Novembro</h4>
                                {{$post}}

                        </br><a class="waves-effect waves-light btn right">Ler</a></br></br>
                    </blockquote>
                @endforeach

            </div>

            <div class="col s2">
                <h3>Menu</h3>
                <ul>
                    <li>Link</li>
                    <li>Link</li>
                    <li>Link</li>
                    <li>Link</li>
                </ul>
            </div>

        </div>


<div CLASS="col sm12 text-center">


    <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>
</div>
@stop