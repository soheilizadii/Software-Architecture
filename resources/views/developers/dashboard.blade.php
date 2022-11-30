@extends('layouts.developer')

@section('content')
    <div class="topics container">
        <h3>select a Topic</h3>
        <table>
            <tr>
                <td><a href="{{ route('topic') }}"><i class="fab fa-python"></i>Python </a></td>
                <td><a href=""><i class="fab fa-vuejs"></i>Vue</a></td>
                <td><a href=""><i class="fab fa-angular"></i>Angular</a></td>
                <td><a href=""><i class="fab fa-php"></i>PHP</a></td>
            </tr>
            <tr>
                <td><a href="'"><i class="fab fa-java"></i>Java</a></td>
                <td><a href=""><i class="fab fa-js-square"></i>Javascript</a></td>
                <td><a href=""><i class="fab fa-react"></i>React</a></td>
                <td><a href=""><i class="fab fa-css3-alt"></i>CSS3</a></td>
            </tr>
        </table>
    </div>
@endsection