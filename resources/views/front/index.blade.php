@extends('front.template')

@section('main')
    <style type="text/css">
     	.box p{line-height: 35px;}
    </style>
	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				<hr>
				<h2 class="intro-text text-center"><strong>网站简介</strong></h2>
				<hr>
				<img class="img-responsive img-left" src="img/laravel-l-slant.png" alt="">
				<p>从事IT行业3年多了，一直在摸爬滚打中前行着，在学习过程中我也总结了一些经验，但一直都没有整理出来，最近学习laravel,于是就有了搭建一个博客的想法，所以没想太多，就搭建了一个个人博客，在以后的自学过程中我会发布一些自学心得和技术文章，希望对有兴趣的朋友有所帮助。</p>
				<p>我会主要发布一些关于yii,laravel,以及服务器搭建,linux简单操作相关文章，您可以在搜索中通过关键字查询到相关文章。</p>
				<p>对于自学的朋友，强烈推荐你多上www.github.com上去泡泡，那里有很多牛人代码。多看，多借鉴。
				额，实在没有内容可写了，为了撑篇幅，下面推荐给自学者一些链接：</p>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4"><a class="btn btn-lg btn-success btn-block" href="http://www.yiiframework.com/" target="_blank">Yii</a></div>
			<div class="col-md-4 col-sm-4 col-xs-4"><a class="btn btn-lg btn-danger btn-block" href="http://laravel.com/" target="_blank">Laravel</a></div>
			<div class="col-md-4 col-sm-4 col-xs-4"><a class="btn btn-lg btn-primary btn-block" href="https://github.com/" target="_blank">Github</a></div>
			<br/><br/>
		</div>
	</div>

@stop


