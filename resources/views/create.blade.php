<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><title>
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
                            <input name="ctl00$txtDate" type="text" value="Tuesday, 14 November 2023" id="txtDate" style="color:Black;border-color:White;border-style:None;font-family:Verdana,Arial,Helvetica,sans-serif;font-size:9px;width:157px;">
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
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="pnlMain">
                    <span class="failureNotification">
                    </span>
                    <div id="MainContent_NewCampaignValidationSummary" class="failureNotification" style="display:none;">
                    </div>
                    <div id="MainContent_divIdnumber">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_status" id="MainContent_status">Status:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="status" value="{{ old('status') }}" type="text"  id="MainContent_status" class="textEntry" style="height:26px;width:300px;">
                                                <option value="0">Approved</option>
                                                <option value="1">Waiting</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_surname" id="MainContent_surname">Surname:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="name" value="{{ old('name') }}" type="text"  id="MainContent_surname" class="textEntry" style="height:26px;width:300px;">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div style="margin-top:10px"></div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_fstname" id="MainContent_fstname">FirstName:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="first_name" value="{{ old('first_name') }}" type="text"  id="MainContent_fstname" class="textEntry" style="height:26px;width:300px;">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div style="margin-top:10px"></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_txtIDNumber" id="MainContent_txtIDNumber">ID Number:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="id_number" value="{{ old('id_number') }}" type="text"  id="MainContent_txtIDNumber" class="textEntry" style="height:26px;width:300px;">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_date_of_birth" id="MainContent_date_of_birth">Date of birth:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="date_of_birth" value="{{ old('date_of_birth') }}" type="text"  id="MainContent_date_of_birth" class="textEntry" style="height:26px;width:300px;">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_partner_name" id="MainContent_partner_name">Spouse/Partner Surname:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="partner_name" value="{{ old('partner_name') }}" type="text"  id="MainContent_partner_name" class="textEntry" style="height:26px;width:300px;">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_partner_first_name" id="MainContent_partner_first_name">Spouse/Partner FirstName:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="partner_first_name" value="{{ old('partner_first_name') }}" type="text"  id="MainContent_partner_first_name" class="textEntry" style="height:26px;width:300px;">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_partner_id" id="MainContent_partner_id">Spouse/Partner ID Number:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="partner_id" value="{{ old('partner_id') }}" type="text"  id="MainContent_partner_id" class="textEntry" style="height:26px;width:300px;">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_partner_dob" id="MainContent_partner_dob">Spouse/Partner Date of birth:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="partner_dob" value="{{ old('partner_dob') }}" type="text"  id="MainContent_partner_dob" class="textEntry" style="height:26px;width:300px;">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_po_box" id="MainContent_po_box">Hostel Name/Farm Name/PO Box:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="po_box" value="{{ old('po_box') }}" type="text"  id="MainContent_po_box" class="textEntry" style="height:26px;width:300px;">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_street" id="MainContent_street">Street Number and Street Name:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="street" value="{{ old('street') }}" type="text"  id="MainContent_street" class="textEntry" style="height:26px;width:300px;">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_area_name" id="MainContent_lblIDNumber">Suburb or Area name:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="area_name" value="{{ old('area_name') }}" type="text"  id="MainContent_area_name" class="textEntry" style="height:26px;width:300px;">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div style="margin-top:20px"></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_postal_code" id="MainContent_postal_code">Postal Code:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="postal_code" value="{{ old('postal_code') }}" type="text"  id="MainContent_postal_code" class="textEntry" style="height:26px;width:300px;">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div style="margin-top:10px"></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_phone" id="MainContent_phone">Cellphone no 1:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="phone" value="{{ old('phone') }}" type="text"  id="MainContent_phone" class="textEntry" style="height:26px;width:300px;">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <span id="MainContent_RegularExpressionValidator1" class="failureNotification" style="color:Red;visibility:hidden;">*</span>
                                            <span id="MainContent_valPassword" class="failureNotification" style="visibility:hidden;">*</span>
                                            <span id="MainContent_RequiredFieldValidator1" class="failureNotification" style="visibility:hidden;">* Required field</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 text_align_center">
                                        <label for="MainContent_phone2" id="MainContent_phone2">Cellphone no 2:</label>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input name="phone2" value="{{ old('phone2') }}" type="text"  id="MainContent_phone2" class="textEntry" style="height:26px;width:300px;">
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div style="padding-top: 30px; padding-bottom: 30px; padding-left: 20px">
                        <button type="submit"  style="background-color:#E8E8FF;width:150px;"> Submit</button>
                        {{-- <input  name="ctl00$MainContent$btnReturnHome" value="Reset Page" id="MainContent_btnReturnHome" > --}}
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







</body></html>
