@include('main.layout.header' , ['PageTitle' => 'Error 404'])
<body>
    @include('main.layout.navbar')
    <!-- navi wrapper End -->
	 <div class="error_wrapper jb_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
					<div class="error_top_wrapper jb_cover">
						<img src="{{url('public/main/images')}}/error.png" alt="404 Error Page" class="img-reponsive">
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- footer Wrapper Start -->
    @include('main.layout.footer')
    <!-- footer Wrapper End -->
    @include('main.layout.scripts')
    <!-- custom js-->
</body>

</html>