@include('vendorPartials._header')
@include('flash-message')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">

        <div class="col-md-4">
            <form action="{{route('savePicture')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div id="contact-form" class="form-container" data-form-container>
                    <div class="row">
                        <div class="form-title">
                            <span>UPLOAD PRODUCT</span>
                        </div>
                    </div>
                    <div class="input-container">
                        <div class="row">
                            <select class="mdb-select md form" name="product_type">
                                @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                            </select>

                        </div>

                        <div class="row">
					<span class="req-input" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Input Your First and Last Name."> </span>
						<input type="text" name="desc" placeholder="Product Name" required>
					</span>
                        </div>
                        <div class="row">
					<span class="req-input">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Your Email."> </span>
						<input type="text"  name="size" placeholder="Product Size" required>
					</span>
                        </div>
                        <div class="row">
					<span class="req-input">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Your Phone Number."> </span>
						<input type="text" name="price" placeholder="Product Price" required>
					</span>
                        </div>
                        <div class="row">
					<span class="req-input">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Your Phone Number."> </span>
						<input type="text" name="quantity" placeholder="Quantity" required>
					</span>
                        </div>

                        <input type="hidden" name="vendor" value="n/a">

                        <div class="row">
                            <div class="yes">
                            <span class="btn_upload">
                              <input type="file" id="imag" name="image" title="" class="input-img" required/>
                              Choose Image
                              </span>
                                <img id="ImgPreview" src="" class="preview1" />
                                <input type="button" id="removeImage1" value="x" class="btn-rmv1"/>
                            </div>

                            <div class="yes">
                            <span class="btn_upload">
                              <input type="file" id="imag2" name="image1" title="" required/>
                              Choose Image
                              </span>
                                <img id="ImgPreview2" src="" class="preview2" />
                                <input type="button" id="removeImage2" value="x" class="btn-rmv2" />
                            </div>

                            <div class="yes">
                            <span class="btn_upload">
                              <input type="file" id="imag3" name="image2" title="" required/>
                              Choose Image
                              </span>
                                <img id="ImgPreview3" src="" class="preview3" />
                                <input type="button" id="removeImage3" value="x" class="btn-rmv3" />
                            </div>

                            <div class="yes">
                            <span class="btn_upload">
                              <input type="file" id="imag4" name="image3" title="" required/>
                              Choose Image
                              </span>
                                <img id="ImgPreview4" src="" class="preview4" />
                                <input type="button" id="removeImage4" value="x" class="btn-rmv4" />
                            </div>

                        </div>
                        <div class="row submit-row">
                            <button type="submit" class="btn btn-block submit-form">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <style>
            .btn_upload {
                cursor: pointer;
                display: inline-block;
                overflow: hidden;
                position: relative;
                color: #fff;
                background-color: #2a72d4;
                border: 1px solid #166b8a;
                padding: 5px 10px;
            }

            .btn_upload:hover,
            .btn_upload:focus {
                background-color: #7ca9e6;
            }

            .yes {
                display: flex;
                align-items: flex-start;
                margin-top: 10px !important;
            }

            .btn_upload input {
                cursor: pointer;
                height: 100%;
                position: absolute;
                filter: alpha(opacity=1);
                -moz-opacity: 0;
                opacity: 0;
            }

            .it {
                height: 100px;
                margin-left: 10px;
            }

            .btn-rmv1,
            .btn-rmv2,
            .btn-rmv3,
            .btn-rmv4,
            .btn-rmv5 {
                display: none;
            }

            .rmv {
                cursor: pointer;
                color: #fff;
                border-radius: 30px;
                border: 1px solid #fff;
                display: inline-block;
                background: rgba(255, 0, 0, 1);
                margin: -5px -10px;
            }

            .rmv:hover {
                background: rgba(255, 0, 0, 0.5);
            }


            .form-container div, .form-container  span{
                font-family: Calibri, Candara, Segoe, 'Segoe UI', Optima, Arial, sans-serif;
            }

            .form-container ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
                color:    #999;
            }

            .form-container :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
                color:    #999;
                opacity:  1;
            }

            .form-container ::-moz-placeholder { /* Mozilla Firefox 19+ */
                color:    #999;
                opacity:  1;
            }

            .form-container :-ms-input-placeholder { /* Internet Explorer 10-11 */
                color:    #999;
            }

            .form-container :placeholder-shown { /* Standard (https://drafts.csswg.org/selectors-4/#placeholder) */
                color:  #999;
            }

            .oauth-buttons {
                text-align:center;
            }
            .row {
                text-align:center;
            }
            #login-form{
                min-width:375px;
            }
            .login-container{
                width:400px;
                height:330px;
                display:inline-block;
                margin-top: -165px;
                top: 50%;
                left: 50%;
                position: absolute;
                margin-left: -200px;
            }
            .form-container .create-account:hover{
                opacity:.7;
            }
            .form-container .create-account{
                color:inherit;
                margin-top: 15px;
                display: inline-block;
                cursor:pointer;
                text-decoration:none;
            }

            .oauth-buttons .fa{
                cursor:pointer;
                margin-top:10px;
                color:inherit;
                width:30px;
                height:30px;
                text-align:center;
                line-height:30px;
                margin:5px;
                margin-top:15px;
            }
            .oauth-buttons .fa:hover{
                color:white;
            }
            .oauth-buttons .fa-google-plus:hover{
                background: #dd4b39;
            }
            .oauth-buttons .fa-facebook:hover{
                background:	#8b9dc3;
            }

            .oauth-buttons .fa-linkedin:hover{
                background:	#0077b5;
            }

            .oauth-buttons .fa-twitter:hover{
                background:	#55acee;
            }

            .form-container .req-input .input-status {
                display: inline-block;
                height: 40px;
                width: 40px;
                float: left;
            }
            .form-container .input-status::before{
                content: " ";
                height:20px;
                width:20px;
                position:absolute;
                top:10px;
                left:10px;
                color:white;
                border-radius:50%;
                background:white;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;

            }

            .form-container .input-status::after{
                content: " ";
                height:10px;
                width:10px;
                position:absolute;
                top:15px;
                left:15px;
                color:white;
                border-radius:50%;
                background:#00BCD4;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }

            .form-container .req-input{
                width:100%;
                float:left;
                position:relative;
                background:#00BCD4;
                height:40px;
                display:inline-block;
                border-radius:0px;
                margin:5px 0px;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }

            .form-container div .row .invalid:hover{
                background:#EF9A9A;
            }

            .form-container div .row .invalid{
                background:#E57373;
            }

            .form-container .invalid .input-status:before {
                width:20px;
                height:4px;
                top:19px;
                left:10px;
                background:white;/*#F44336;*/
                border-radius:0px;
                -ms-transform: rotate(45deg); /* IE 9 */
                -webkit-transform: rotate(45deg); /* Chrome, Safari, Opera */
                transform: rotate(45deg);
            }

            .form-container .invalid .input-status:after {
                width:20px;
                height:4px;
                background:white;
                border-radius:0px;
                top:19px;
                left:10px;
                -ms-transform: rotate(-45deg); /* IE 9 */
                -webkit-transform: rotate(-45deg); /* Chrome, Safari, Opera */
                transform: rotate(-45deg);
            }

            .form-container div .row  .valid:hover{
                background:#A5D6A7;
            }

            .form-container div .row .valid {
                background:#81C784;

            }

            .form-container .valid .input-status:after {
                border-radius:0px;
                width: 17px;
                height: 4px;
                background: white;
                top: 16px;
                left: 15px;
                -ms-transform: rotate(-45deg);
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg);
            }

            .form-container .valid .input-status:before {
                border-radius:0px;
                width: 11px;
                height: 4px;
                background:white;
                top: 19px;
                left: 10px;
                -ms-transform: rotate(45deg);
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
            }

            .form-container .input-container{
                padding:0px 20px;
            }

            .form-container .row-input{
                padding:0px 5px;
            }

            .form-container .req-input.input-password{
                margin-bottom:0px;
            }
            .form-container .req-input.confirm-password{
                margin-top:0px;
            }

            .form-container {
                margin:20px;
                padding:20px;
                border-radius:0px;
                background:#B3E5FC;
                color:#00838F;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }

            .form-container .form-title{
                font-size:25px;
                color:inherit;
                text-align:center;
                margin-bottom:10px;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }

            .form-container .submit-row{
                padding:0px 0px;
            }

            .form-container .btn.submit-form{
                margin-top:15px;
                padding:12px;
                background:#00BCD4;
                color:white;
                border-radius:0px;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }

            .form-container .btn.submit-form:focus{
                outline:0px;
                color:white;
            }

            .form-container .btn.submit-form:hover{
                background:#00cde5;
                color:white;
            }

            .form-container .tooltip.top .tooltip-arrow {
                border-top-color:#00BCD4 !important;
            }

            .form-container .tooltip.top.tooltip-invalid .tooltip-arrow {
                border-top-color:#E57373 !important;
            }

            .form-container .tooltip.top.tooltip-invalid .tooltip-inner::before{
                background:#E57373;
            }
            .form-container .tooltip.top.tooltip-invalid .tooltip-inner{
                background:#FFEBEE !important;
                color:#E57373;
            }

            .form-container .tooltip.top.tooltip-valid .tooltip-arrow {
                border-top-color:#81C784 !important;
            }

            .form-container .tooltip.top.tooltip-valid .tooltip-inner::before{
                background:#81C784;
            }
            .form-container .tooltip.top.tooltip-valid .tooltip-inner{
                background:#E8F5E9 !important;
                color:#81C784;
            }

            .form-container .tooltip.top .tooltip-inner::before{
                content:" ";
                width:100%;
                height:6px;
                background:#00BCD4;
                position:absolute;
                bottom:5px;
                right:0px;
            }
            .form-container .tooltip.top .tooltip-inner{
                border:0px solid #00BCD4;
                background:#E0F7FA !important;
                color:#00ACC1;
                font-weight:bold;
                font-size:13px;
                border-radius:0px;
                padding:10px 15px;
            }
            .form-container .tooltip {
                max-width:150px;
                opacity:1 !important;
            }

            .form-container .message-box{
                width:100%;
                height:auto;
            }

            .form-container textarea:focus,.form-container textarea:hover{
                background:#fff;
                outline:none;
                border:0px;
            }

            .form-container .req-input textarea {
                max-width:calc(100% - 50px);
                width: 100%;
                height: 80px;
                border: 0px;
                color: #777;
                padding: 10px 9px 0px 9px;
                float:left;

            }
            .form-container input[type=text]:focus, .form-container input[type=password]:focus, .form-container input[type=email]:focus, .form-container input[type=tel]:focus, .form-container select{
                background:#fff;
                color:#777;
                border-left:0px;
                outline:none;
            }

            .form-container input[type=text]:hover,.form-container input[type=password]:hover,.form-container input[type=email]:hover,.form-container input[type=tel]:hover, . form-container select{
                background:#fff;
            }

            .form-container input[type=text], .form-container input[type=password], .form-container input[type=email],input[type=tel], form-container select{
                width:calc(100% - 50px);
                float:left;
                border-radius:0px;
                border:0px solid #ddd;
                padding:0px 9px;
                height:40px;
                line-height:40px;
                color:#777;
                background:#fff;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }
            .btn_upload {
                cursor: pointer;
                display: inline-block;
                overflow: hidden;
                position: relative;
                color: #fff;
                background-color: #2a72d4;
                border: 1px solid #166b8a;
                padding: 5px 10px;
            }

            .btn_upload:hover,
            .btn_upload:focus {
                background-color: #7ca9e6;
            }

            .yes {
                display: flex;
                align-items: flex-start;
                margin-top: 10px !important;
            }

            .btn_upload input {
                cursor: pointer;
                height: 100%;
                position: absolute;
                filter: alpha(opacity=1);
                -moz-opacity: 0;
                opacity: 0;
            }

            .it {
                height: 100px;
                margin-left: 10px;
            }

            .btn-rmv1,
            .btn-rmv2,
            .btn-rmv3,
            .btn-rmv4,
            .btn-rmv5 {
                display: none;
            }

            .rmv {
                cursor: pointer;
                color: #fff;
                border-radius: 30px;
                border: 1px solid #fff;
                display: inline-block;
                background: rgba(255, 0, 0, 1);
                margin: -5px -10px;
            }

            .rmv:hover {
                background: rgba(255, 0, 0, 0.5);
            }

        </style>
        <script>


            function readURL(input, imgControlName) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $(imgControlName).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imag").change(function() {
                // add your logic to decide which image control you'll use
                var imgControlName = "#ImgPreview";
                readURL(this, imgControlName);
                $('.preview1').addClass('it');
                $('.btn-rmv1').addClass('rmv');
            });
            $("#imag2").change(function() {
                // add your logic to decide which image control you'll use
                var imgControlName = "#ImgPreview2";
                readURL(this, imgControlName);
                $('.preview2').addClass('it');
                $('.btn-rmv2').addClass('rmv');
            });
            $("#imag3").change(function() {
                // add your logic to decide which image control you'll use
                var imgControlName = "#ImgPreview3";
                readURL(this, imgControlName);
                $('.preview3').addClass('it');
                $('.btn-rmv3').addClass('rmv');
            });
            $("#imag4").change(function() {
                // add your logic to decide which image control you'll use
                var imgControlName = "#ImgPreview4";
                readURL(this, imgControlName);
                $('.preview4').addClass('it');
                $('.btn-rmv4').addClass('rmv');
            });
            $("#imag5").change(function() {
                // add your logic to decide which image control you'll use
                var imgControlName = "#ImgPreview5";
                readURL(this, imgControlName);
                $('.preview5').addClass('it');
                $('.btn-rmv5').addClass('rmv');
            });

            $("#removeImage1").click(function(e) {
                e.preventDefault();
                $("#imag").val("");
                $("#ImgPreview").attr("src", "");
                $('.preview1').removeClass('it');
                $('.btn-rmv1').removeClass('rmv');
            });
            $("#removeImage2").click(function(e) {
                e.preventDefault();
                $("#imag2").val("");
                $("#ImgPreview2").attr("src", "");
                $('.preview2').removeClass('it');
                $('.btn-rmv2').removeClass('rmv');
            });
            $("#removeImage3").click(function(e) {
                e.preventDefault();
                $("#imag3").val("");
                $("#ImgPreview3").attr("src", "");
                $('.preview3').removeClass('it');
                $('.btn-rmv3').removeClass('rmv');
            });
            $("#removeImage4").click(function(e) {
                e.preventDefault();
                $("#imag4").val("");
                $("#ImgPreview4").attr("src", "");
                $('.preview4').removeClass('it');
                $('.btn-rmv4').removeClass('rmv');
            });
            $("#removeImage5").click(function(e) {
                e.preventDefault();
                $("#imag5").val("");
                $("#ImgPreview5").attr("src", "");
                $('.preview5').removeClass('it');
                $('.btn-rmv5').removeClass('rmv');
            });

            function readURL(input, imgControlName) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $(imgControlName).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imag").change(function() {
                // add your logic to decide which image control you'll use
                var imgControlName = "#ImgPreview";
                readURL(this, imgControlName);
                $('.preview1').addClass('it');
                $('.btn-rmv1').addClass('rmv');
            });
            $("#imag2").change(function() {
                // add your logic to decide which image control you'll use
                var imgControlName = "#ImgPreview2";
                readURL(this, imgControlName);
                $('.preview2').addClass('it');
                $('.btn-rmv2').addClass('rmv');
            });
            $("#imag3").change(function() {
                // add your logic to decide which image control you'll use
                var imgControlName = "#ImgPreview3";
                readURL(this, imgControlName);
                $('.preview3').addClass('it');
                $('.btn-rmv3').addClass('rmv');
            });
            $("#imag4").change(function() {
                // add your logic to decide which image control you'll use
                var imgControlName = "#ImgPreview4";
                readURL(this, imgControlName);
                $('.preview4').addClass('it');
                $('.btn-rmv4').addClass('rmv');
            });
            $("#imag5").change(function() {
                // add your logic to decide which image control you'll use
                var imgControlName = "#ImgPreview5";
                readURL(this, imgControlName);
                $('.preview5').addClass('it');
                $('.btn-rmv5').addClass('rmv');
            });

            $("#removeImage1").click(function(e) {
                e.preventDefault();
                $("#imag").val("");
                $("#ImgPreview").attr("src", "");
                $('.preview1').removeClass('it');
                $('.btn-rmv1').removeClass('rmv');
            });
            $("#removeImage2").click(function(e) {
                e.preventDefault();
                $("#imag2").val("");
                $("#ImgPreview2").attr("src", "");
                $('.preview2').removeClass('it');
                $('.btn-rmv2').removeClass('rmv');
            });
            $("#removeImage3").click(function(e) {
                e.preventDefault();
                $("#imag3").val("");
                $("#ImgPreview3").attr("src", "");
                $('.preview3').removeClass('it');
                $('.btn-rmv3').removeClass('rmv');
            });
            $("#removeImage4").click(function(e) {
                e.preventDefault();
                $("#imag4").val("");
                $("#ImgPreview4").attr("src", "");
                $('.preview4').removeClass('it');
                $('.btn-rmv4').removeClass('rmv');
            });
            $("#removeImage5").click(function(e) {
                e.preventDefault();
                $("#imag5").val("");
                $("#ImgPreview5").attr("src", "");
                $('.preview5').removeClass('it');
                $('.btn-rmv5').removeClass('rmv');
            });
        </script>

@include('vendorPartials._footer')

