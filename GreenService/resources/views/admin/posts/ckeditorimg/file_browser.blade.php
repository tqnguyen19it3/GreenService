<!DOCTYPE html>
<html>
<head>
	<title>Duyệt hình ảnh bài viết giới thiệu</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.15.1/ckeditor.js" integrity="sha512-aThGT4RJc95+zt2vrs8iMjrFpsJxcFclp7tweVls6/3cNo3GWvGvtLV576o8Kdvdf3fJhrrG3wkmoea/KJMLFQ==" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			var funcNum = <?php echo $_GET['CKEditorFuncNum'].';';?>
			$('#fileExplorer').on('click', 'img', function(){
				var fileUrl = $(this).attr('title');
				window.opener.CKEDITOR.tools.callFunction(funcNum, fileUrl);
				window.close();

			}).hover(function(){
				$(this).css('cursor','poiter');
			});
		});
	</script>

	<style type="text/css">

		ul.file-list{
			list-style: none;
			padding: 0;
			margin: 0;
		}
		ul.file-list li{
			float: left;
			margin: 5px;
			border: 1px solid #ddd;
			padding: 10px;
		}
		ul.file-list img{
			display: block;
			margin: 0 auto;
		}
		ul.file-list li:hover{
			background: cornsilk;
			cursor: pointer;
		}
	</style>
</head>
<body>

	<div id="fileExplorer">
		@foreach($fileNames as $file)
		<div class="thumbnail">
			<ul class="file-list">
				<li>
					<img src="{{asset('./public/uploads/PostsAboutUsImg/IMGckeditor/'.$file)}}" alt="img" title="{{asset('./public/uploads/PostsAboutUsImg/IMGckeditor/'.$file)}}" width="120" height="130">
					<br>
					<span style="color: darkblue;">{{$file}}</span>
				</li>
			</ul>
		</div>
		@endforeach
	</div>

</body>
</html>