@extends('layouts.app')

@section('content')

    <h1>About Us</h1>
   
    <div class="block background-green-light fullwidth">
            <div class="row">
                <div class="page-header">
                    <div class="col-md-4 col-md-offset-1">
                        <div class="background-white p20">
<form method="post" action="https://www.speedypaperhelper.com/order">
<h2 style="color: #F7931E;">Get a Quote</h2>

<div class="form-group">
<select id="writing-type" name="writing_type" onchange="calculatePrice();" class="form-control">
                <option value="Writing from Scratch">
        Writing from Scratch            </option>
                <option value="Editing or Proofreading">
        Editing or Proofreading            </option>
                <option value="Rewriting">
        Rewriting            </option>
            </select>
</div><!-- /.form-group -->

<div class="form-group">
<select id="service-type" name="service_type" class="form-control" title="Type of Paper" onchange="toggleOther($(this)); calculatePrice();">
    <option value="">Select Type of Paper</option>
                <option value="Admission Essay">Admission Essay</option>
                <option value="Annotated Bibliography">Annotated Bibliography</option>
                <option value="Application Letter">Application Letter</option>
                <option value="Argumentative Essay">Argumentative Essay</option>
                <option value="Article Review">Article Review</option>
                <option value="Biography">Biography</option>
                <option value="Book Review">Book Review</option>
                <option value="Business Plan">Business Plan</option>
                <option value="Case Study">Case Study</option>
                <option value="Course Work">Course Work</option>
                <option value="Cover Letter">Cover Letter</option>
                <option value="Creative Writing">Creative Writing</option>
                <option value="Critical Thinking">Critical Thinking</option>
                <option value="Dissertation">Dissertation</option>
                <option value="Dissertation Abstract">Dissertation Abstract</option>
                <option value="Dissertation Chapter">Dissertation Chapter</option>
                <option value="Dissertation Conclusion">Dissertation Conclusion</option>
                <option value="Dissertation Hypothesis">Dissertation Hypothesis</option>
                <option value="Dissertation Introduction">Dissertation Introduction</option>
                <option value="Dissertation Methodology">Dissertation Methodology</option>
                <option value="Dissertation Results">Dissertation Results</option>
                <option value="Essay">Essay</option>
                <option value="Literature Review">Literature Review</option>
                <option value="Movie Review">Movie Review</option>
                <option value="Personal Statement">Personal Statement</option>
                <option value="Presentation">Presentation</option>
                <option value="Report">Report</option>
                <option value="Research Paper">Research Paper</option>
                <option value="Research Proposal">Research Proposal</option>
                <option value="Term Paper">Term Paper</option>
                <option value="Thesis">Thesis</option>
                <option value="Thesis Proposal">Thesis Proposal</option>
                <option value="Other (Enter Below)">Other (Enter Below)</option>
            </select>
<input type="text" id="other-service-type" name="other_service_type" class="form-control" placeholder="Type Other Service" value="" style="display:none;">
</div><!-- /.form-group -->

<div class="form-group">
<select id="academic-level" name="academic_level" onchange="calculatePrice();" class="form-control" title="Academic Level">
    <option value="">Select Academic Level</option>
                <option value="High School">
        High School            </option>
                <option value="College">
        College            </option>
                <option value="Bachelor">
        Bachelor            </option>
                <option value="Masters">
        Masters            </option>
                <option value="PhD">
        PhD            </option>
            </select>
</div><!-- /.form-group -->

<div class="form-group">
<select id="deadline" name="deadline" onchange="calculatePrice();" class="form-control" title="Deadline">
    <option value="">Select Deadline</option>
    <option value="eight_hrs">8 Hours</option>
    <option value="one_day">24 Hours</option>
    <option value="two_days">2 Days</option>
    <option value="three_days">3 Days</option>
    <option value="four_days">4 Days</option>
    <option value="five_days">5 Days</option>
    <option value="six_days">6 Days</option>
    <option value="seven_days">7 Days</option>
    <option value="eight_days">8 Days</option>
    <option value="nine_days">9 Days</option>
    <option value="ten_days">10 Days</option>
    <option value="eleven_days">11 Days</option>
    <option value="twelve_days">12 Days</option>
    <option value="thirteen_days">13 Days</option>
    <option value="fourteen_days">14 Days</option>
</select>
</div><!-- /.form-group -->

<div class="form-group">
<input type="number" id="pages" name="pages" min="0" size="5" onkeydown="return digitsOnly($(this), event, 3);" onkeyup="calculateWordCount(275); calculatePrice();" oninput="calculateWordCount(275); calculatePrice();" class="form-control" placeholder="Number of Pages">
</div><!-- /.form-group -->
<div class="form-group" style="color: #F7931E;">
Total Words: <div id="word-count">0</div>
</div><!-- /.form-group -->
<div class="form-group">
<label style="color: #F7931E;">Price</label><br>
<div id="price" style="color: #F7931E;" class="established-price"></div>
<div class="established-price">&nbsp;</div>
<div id="discounted-price" class="established-price" style="color: #F7931E;"></div>
</div>
<div class="form-group">
<input type="text" id="discount-code" name="discount_code" maxlength="8" size="8" onchange="calculatePrice();" class="form-control" placeholder="Discount code"><br>
<input type="hidden" id="validation_url" name="validation_url" value="https://www.speedypaperhelper.com/discount_codes/check">
<span id="discount-error"></span>
</div>

<button type="submit" class="btn btn-primary btn-block">Continue</button>
</form>
                        </div>

                    </div>
                     <div class="col-md-6 col-md-offset-1">
                        
                        <p style="color: white; text-align: justify;">We are a company known for providing exceptional writing, as well as proofreading, editing and rewriting services. We have been at it for years, through which we have established a reputation as a company that you can rely on to provide top-quality academic and professional writing services.  
                        <br><br></p>
                        <h2 style="color: white;">Our Services Include</h2>
                        <p style="text-align: justify; color: white;">We provide writing services of exceptional quality. Our services include but are not limited to:</p>
                        <ul style="text-align: justify;">
                            <li>All types of essays</li>
                            <li>Personal statements</li>
                            <li>Dissertations</li>
                            <li>Thesis </li>
                            <li>Speeches</li>
                            <li>Book reviews</li>
                            <li>Movie reviews</li>
                            <li>Book reports</li>
                            <li>Presentations</li>
                        </ul>
                        <p style="color: white; text-align: justify;">We also provide proofreading, editing and rewriting services to help you detect errors and writing issues in all/any of the writing tasks listed above. These services will enable you to correct any errors in your work, including the ones that automated proofreading tools won’t be able to detect.</p>
                        <p style="text-align: center;">

                            <a class="btn btn-secondary btn-lg pull-center" href="https://www.speedypaperhelper.com/order" role="button">Place an Order</a>
                        </p>
                        
                        
                        
                        

                    </div>
                </div>
            </div>
        </div>


<div class = "page-header" style="background-color: gray; color: white">
    <h1 style="text-align: center">Our Team</h1><hr>
<p style="text-align: justify; color: white">
"These services are provided by professional writers and editors who are well trained. Their education backgrounds are diverse, and thus the
team has writers in almost every discipline. They possess either bachelor's degrees or PhDs, and are passionate about
providing the highest of quality service"
</p>
    </div>

@endsection