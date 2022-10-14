<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Casting Form </title>

    <link rel="shortcut icon" href="{{asset('logotitle1.png')}}" />


    <!-- Icons font CSS-->
    <link href="{{asset('vendor2/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor2/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="{{asset('vendor2/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor2/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" media="all">


	<style>

        @font-face {
          font-family: myFirstFont;
          src: url(Tajawal-Regular.ttf);
       }

       div , p , h1 , h2 , h3 , h4 , h5 , h6 , b ,a {
          font-family: myFirstFont;
       }
       </style>
       <style>
.alert {
  padding: 20px;
  margin-bottom: 20px;
  background-color: #32a852;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    @if (count($errors) > 0)
                    <div class = "alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif
                    @if(session()->has('success'))
                    <div class="alert">
                      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                      <strong>شكرا لك</strong> {{ session()->get('success') }}
                    </div>
                    @endif


                    <form action="{{route('apply')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"> <b> Name - الإسم *</b></label>
                                    <input class="input--style-4" type="text" name="name" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"> <b> Phone Number - رقم الهاتف *</b></label>
                                    <input class="input--style-4" type="text" name="phoneNumber" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><b>Birthday - تاريخ الميلاد *</b></label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="dob" required>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                            <div class="input-group">
                                <label class="label"><b> Gender - الجنس* </b></label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="gender">
                                        <option disabled="disabled" selected="selected">Answer - الاجابة</option>
                                        <option>Male - ذكر</option>
                                        <option>Female - أنثى</option>
                                     </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                            <!-- <div class="col-2">
                                <div class="input-group">
                                    <label class="label"> <b> Gender - الجنس *</b></label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male - ذكر
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female - أنثى
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><b> City - المدينة * </b></label>
                                    <input class="input--style-4" type="text" name="city" required>
                                </div>
                            </div>
                            <!-- <div class="col-2">
                                <div class="input-group">
                                    <label class="label"> <b> هل سبق و أن قمت بدور تمثيلي ؟ *</b></label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Yes - نعم
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No - لا
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div> -->

                        <div class="col-2">
                            <div class="input-group">
                                <label class="label"><b> هل سبق و أن قمت بدور تمثيلي ؟ * </b></label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="act">
                                        <option disabled="disabled" selected="selected">Answer - الاجابة</option>
                                        <option>Yes - نعم</option>
                                        <option>No - لا</option>
                                     </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>

                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><b> Picture - صورة شخصية * </b></label>
                                    <input class="input--style-4" type="file" name="file" required>
                                </div>
                            </div>
                            <!-- <div class="col-2">
                                <div class="input-group">
                                    <label class="label"> <b> هل سبق و أن قمت بدور تمثيلي ؟ *</b></label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Yes - نعم
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No - لا
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div> -->

                        <div class="col-2">
                            <div class="input-group">
                                <label class="label"><b> Acting Category -  رغبتك في التمثيل * </b></label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="desire">
                                        <option disabled="disabled" selected="selected">Answer - الاجابة</option>
                                        <option>Drama - دراما</option>
                                        <option>Action - أكشن</option>
                                        <option>Adventure - مغامرة</option>
                                        <option> Comedy - كوميدي </option>
                                        <option> Mystery - غموض </option>

                                      </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>

                        </div>

<!--
                              <div class="input-group">
                                <label class="label"><b> Scenery -  مشهد تمثيلي   </b></label>
                                <input class="input--style-4" type="file" name="photo">
                            </div> -->

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit"><b> Send - إرسال </b></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('vendor2/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('vendor2/select2/select2.min.js')}}"></script>
    <script src="{{asset('vendor2/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor2/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
