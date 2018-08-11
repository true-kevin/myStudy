
@extends('/templates/tpl1')

@section('title')
	제목입니다.
@endsection

@section('content')
	<ul>
	@foreach($array as $k=>$v)
		<li>{{$k}}=>{{$v}}</li>
	@endforeach

	@for($i=0; $i < sizeof($array); $i++)
		<li>{{$array[$i]}}</li>
	@endfor
	</ul>
	{{--$array[0]--}}
@endsection