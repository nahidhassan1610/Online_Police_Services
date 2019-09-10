                <label> Designation </label>
                <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->designation }}" type="text" name = "designation" placeholder="Mr./Mrs./Ms./MD.">
                <label> Enter your name: </label>
                <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->name }}" type="text" name = "name_of_applicant" >

                <label> Enter your fathers name: </label>
                <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->father_name }}" type="text" name = "father_name" >

                <label> Enter village: </label>
                <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->village }}" type="text" name = "village" >
                <label> Enter P.O: </label>
                <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->post_office }}" type="text" name = "post_office" >
                <label> Enter thana: </label>
                <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->thana }}" type="text" name = "thana" >
                <label> Enter district: </label>
                <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->district }}" type="text" name = "district" >
                <label> Enter email: </label>
                <input style= "margin-bottom:5px" class="form-control" value="{{ Auth::user()->email }}" type="email" name = "email_address" >
                <label> Enter cell number: </label>
               <input style= "margin-bottom:8px" class="form-control" value="{{ Auth::user()->phone_no }}" type="text" name = "phone_no" >