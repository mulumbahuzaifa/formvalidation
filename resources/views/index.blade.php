<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head><meta charset="utf-8"><title>
	Home Page - Housing Waiting List
</title>
<link href="{{ URL::to('css/hwl.css') }}" rel="stylesheet"><link href="{{ URL::to('favicon.ico') }}" rel="shortcut icon" type="image/x-icon"><link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet"><meta name="viewport" content="width=device-width">
    <style type="text/css">
        .auto-style1 {
            height: 27px;
        }
    </style>
<link href="{{ URL::to('WebResource_1.axd') }}" type="text/css" rel="stylesheet"></head>
<body>
    <div class="aspNetHidden">
        <input type="hidden" name="_TSM_HiddenField_" id="_TSM_HiddenField_" value="2GFwlGU9ATlFIxrdsXRzcja58_1t5F8HSleaZM4ZQwk1">
        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
    </div>

{{-- <script type="text/javascript">
    var theForm = document.forms['myform'];
    if (!theForm) {
        theForm = document.myform;
    }
    function __doPostBack(eventTarget, eventArgument) {
        if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
            theForm.__EVENTTARGET.value = eventTarget;
            theForm.__EVENTARGUMENT.value = eventArgument;
            theForm.submit();
        }
    }
</script> --}}


{{-- <script src="WebResource.axd" type="text/javascript"></script>


<script src="ScriptResource.axd" type="text/javascript"></script>
<script src="ScriptResource_2.axd" type="text/javascript"></script>
<script src="ScriptResource_1.axd" type="text/javascript"></script>
<script src="default.aspx" type="text/javascript"></script>
<script src="ScriptResource_3.axd" type="text/javascript"></script>
<script src="ScriptResource_4.axd" type="text/javascript"></script> --}}
    {{-- <script type="text/javascript">
        function WebForm_OnSubmit() {
        if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
        return true;
        }
    </script> --}}

    <div class="aspNetHidden">

        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="F311ACEB">
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAcQpUpcZR0SS5Mi26vA3zkLgjp5ed5hhvRhmHdQewtGFPbIrwhPUbzh2YKGwFcqqwYp+jqbhRZb3cBL5L7qteWk1pEuTotwLI6MT0zCj3OnK1ud7Bo9ZkC4tAP5R02C3Zwo/3NFmwAx0rPnLlxMLKBkQAJMzYXAtPa110giOj9Cbfu39XRwIO+ORCn23ov/Cm4=">
    </div>
    {{-- <script type="text/javascript">
        Sys.WebForms.PageRequestManager._initialize('ctl00$tsm', 'myform', ['tctl00$pnlProcess','pnlProcess','fctl00$pnlContent','pnlContent','tctl00$pnlMain','pnlMain'], [], [], 90, 'ctl00');
    </script> --}}

    <center>
        <div class="container">
            <div class="col-md-12">
                <div id="masthead"></div>
                <div class="row">
                    <div id="top_nav">
                        <div class="col-lg-6 col-md-6 col-sm-7 col-xs-8">
                        <div id="left" class="small_text">
                            <a href="." class="small_text">|Home|</a>
                            <a target="_blank" href="#" class="small_text">|User Guide|</a>
                            <a target="_blank" href="#" class="small_text">|Important Information|</a>

                        </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-4" style="float:right">
                        <div id="divDate" class="small_text" style="border-style: none; border-color: #000000; text-align:right">
                            <input name="ctl00$txtDate" type="text" value="{{ $time }}" id="txtDate" style="color:Black;border-color:White;border-style:None;font-family:Verdana,Arial,Helvetica,sans-serif;font-size:9px;width:157px;">
                        </div>
                        </div>
                    </div>
                </div>
                <div id="top_of_menu" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:#b9cf00; color:white; height:30px; padding-top:0px; text-align:left; padding-left:20px">
                    <b>
                        <span>Welcome to the City’s Housing Needs Register Search </span></b>
                </div>

                <div id="body">
                    <div id="PageUpdateProgress" style="display:none;">
                        <div id="progress" class="updateProgress" style="height:30px">
                            <span>Please wait…</span>
                            <img id="Image1" src="images/progress.gif">
                        </div>
                    </div>

                    <div id="pnlProcess">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div id="pnlSubMenu" class="infoNav">
                                <div></div>
                            </div>
                        </div>
                    </div>
                <div class="row" style="margin:0px!important">


                <div id="pnlStepOne" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 stepperLeft33" style="margin-top:5px!important">
                    <div>
                        <table>
                            <tbody><tr>
                                <td>
                                    <span id="FeaturedContentStepOne_Label1" style="color:White;font-family:Verdana;font-size:0.9em;font-weight:bold;">STEP ONE</span>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
	            </div>

               <div id="pnlStepTwo" class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="background-color:gray;margin-top:5px!important;display:display;">
                    <div>
                        <table>
                            <tbody><tr>
                                <td>
                                    <span id="FeaturedContentStepTwo_Label2" style="color:White;font-family:Verdana;font-size:0.9em;font-weight:bold;">STEP TWO</span>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>

              <div id="pnlStepThree" class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="background-color:gray;margin-top:5px!important;display:display;">

                    <div>
                    <table>
                        <tbody><tr>
                            <td>
                                <span id="FeaturedContentStepThree_Label3" style="color:White;font-family:Verdana;font-size:0.9em;font-weight:bold;">STEP THREE</span>
                            </td>
                        </tr>
                    </tbody></table>
                    </div>
                </div>

            </div>
        </div>
        <div id="pnlContent">
    <p>
        <link href="{{ URL::to('Content/themes/base/jquery.ui.autocomplete.css') }}" rel="stylesheet">
        <link href="{{ URL::to('css/jquery-ui.css" rel="stylesheet') }}">
        <script src="{{ URL::to('js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ URL::to('js/jquery-ui-1.12.1.min.js') }}"></script>
        <script src="{{ URL::to('js/jquery.urldecoder.js') }}"></script>
        <script src="{{ URL::to('js/jquery.alerts.js') }}"></script>
        <script src="{{ URL::to('js/jquery.validate.min.js') }}"></script>
        <script src="{{ URL::to('js/additional-methods.min.js') }}"></script>




    </p>

</div>

        <section class="content-wrapper main-content clear-fix">
            @if (session('message'))
            <div class="col-md-6 col-sm-6 col-xs-12 alert">
                <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="">{{ session('message') }}</span>
            </div>
                {{-- <div class="alert">{{ session('message') }}</div> --}}
            @endif
            <form method="post" action="" id="myform">
                @csrf
                <div id="pnlMain">
                    <span class="failureNotification">
                    </span>
                    <div id="MainContent_NewCampaignValidationSummary" class="failureNotification" style="display:none;">
                    </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-2"></div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                                <span id="MainContent_lblMessage" style="color:DarkBlue;">Please enter your Identity Number below in order to find your status on the Housing Database. You must also type the special characters before clicking 'Next'</span>

                        </div>
                            <div class="col-md-2 col-sm-2 col-xs-2"></div>
                    </div>
                    <div style="margin-top:30px"></div>
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-2"></div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <p style="Color:DarkBlue" ;="">
                                Note: If your cellphone number has changed, you need to update your information at <br> the nearest City-run <a target="_blank" href="">housing office</a> or you may phone our call centre  at 0214440333 before you continue.
                                </p>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2"></div>
                    </div>
                </div>


                <div id="MainContent_divIdnumber">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 text_align_right">
                                    <label for="MainContent_txtIDNumber" id="MainContent_lblIDNumber">ID Number:</label>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input name="id_number" value="{{ Request::get('id_number') }}" type="text" maxlength="13" id="MainContent_txtIDNumber" class="textEntry" style="height:26px;width:140px;"></div>
                                    @error('id_number')
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="">* Required field</span>
                                        </div>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div style="margin-top:20px"></div>
                        <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 text_align_right">
                                    <label for="MainContent_imgCaptcha" id="MainContent_Label16">Captcha Code</label>

                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12 captcha">
                                            <span>{!! captcha_img() !!}</span>
                                        </div>  <div class="col-md-6 col-sm-6 col-xs-12">  </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top:30px"></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 text_align_right"> <span>Enter code without spaces:</span>

                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="captcha" type="text" id="MainContent_txtCaptcha" title="Case Sensitive Security Code" class="textEntry" style="height:26px;width:140px;">
                                        </div>
                                        @error('captcha')
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_CaptchaRequiredfieldvalidator" title="Verification is required." class="failureNotification" style="color:Red;">* Require a Valid Captcha</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top:20px"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                            <span class="infoMessage">If you can't see the characters in the coloured box clearly,<br>press the "Refresh Capture Code" button below to obtain a new set of characters.</span>

                                    </div>
                                </div>    <div style="margin-top:20px"></div>
                        <div class="row">
                            <div class="col-md-7 col-sm-7 col-xs-12" style="margin-bottom:5px;" >
                                <button type="button" id="reload" style="height:26px;width:180px;">Refresh Captcha Code</button>
                                        {{-- <input type="submit" name="ctl00$MainContent$btnRefreshCaptcha" value="Refresh Captcha Code" id="reload" title="Refresh the Captcha image." style="height:26px;width:180px;"> --}}

                            </div>

                        <div class="col-md-5 col-sm-5 col-xs-12" style="margin-bottom:5px;">
                                <input type="submit" name="ctl00$MainContent$btnValidateIDNumber" value="Next" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(" ctl00$maincontent$btnvalidateidnumber",="" "",="" true,="" false,="" false))"="" id="MainContent_btnValidateIDNumber" style="height:26px;width:140px;">
                        </div>
                        </div>
                    </div>
                    </div>

                    <div id="MainContent_divReturnHome" style="padding-top: 30px; padding-bottom: 30px; padding-left: 20px">
                        <a href="{{ url('/') }}" class="Adm_Button btn" style="background-color:#E8E8FF;width:150px;">Reset Page</a>
                        {{-- <input type="submit" name="ctl00$MainContent$btnReturnHome" value="Reset Page" id="MainContent_btnReturnHome" > --}}
                    </div>

                </div>
            </form>

        </section>
    </div>

   </div>


    </div>

               <div class="container" style="margin:0px!important">


                <div class="col-md-12" style="margin:0px!important">

                   <div id="footer">

                <a class="small_text">© 2023 - Housing Waiting List</a> 			               	 |
				<a target="_blank" href="#" class="small_text">Copyright</a> |
				<a target="_blank" href="#" class="small_text">Privacy</a> |
				<a target="_blank" href="#" class="small_text">Disclaimer</a> |

				�&nbsp;
                �&nbsp;

                </div>
         </div></div>

         </center>

<script type="text/javascript">
    $('#reload').click(function(){
        $.ajax({
            type:'GET',
            url:'reload-captcha',
            success:function(data){
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>


</body></html>
