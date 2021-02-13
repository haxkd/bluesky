
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Singup  Form</title>
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet" />
    <script type="text/javascript">
        $(document).ready(function () {
            M.updateTextFields();
        });
    </script>
</head>
<body style="background-color:#e0f7fa">
<div class="modal fade in"  id="modalRegisterForm"  tabindex="-1"    data-keyboard="false" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog"  role="document">
    <div class="modal-content " style="background-color:#faeda0">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">...Warning...</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
            <form id="form1" runat="server">
        <div class="row">
            <div class="col s12">
                <div class="col s4"></div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="first_name" type="text" class="validate" />
                    <label for="first_name">Enter Your Full Name  </label>
                </div>
                <div>
                </div>
            </div>
            <div class="col s12">
                <div class="col s4"></div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="text" class="validate" />
                    <label for="email">Enter  Email  Address  </label>
                </div>
                <div>
                </div>
            </div>

            <div class="col s12">
                <div class="col s4"></div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">phone</i>
                    <input id="mobile" type="text" class="validate" />
                    <label for="mobile">Enter  Mobile Number  </label>
                </div>
                <div>
                </div>
            </div>

            <div class="col s12">
                <div class="col s4"></div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">home</i>
                    <input id="city" type="text" class="validate" />
                    <label for="city">Enter Your City </label>
                </div>
                <div>
                </div>
            </div>
            <div class="col s12">
                <div class="col s4"></div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">navigation</i>
                    <input id="pin" type="text" class="validate" />
                    <label for="pin">Enter Your Pin </label>
                </div>
                <div>
                </div>
            </div>

            <div class="col s12">
                <div class="col s4"></div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">keyboard_arrow_right</i>
                    <input id="streat" type="text" class="validate" />
                    <label for="streat">Enter Your Streat </label>
                </div>
                <div>
                </div>
            </div>

            <div class="col s12">
                <div class="col s4"></div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">keyboard_arrow_right</i>
                    <input id="state" type="text" class="validate" />
                    <label for="state">Enter Your State </label>
                </div>
                <div>
                </div>
            </div>
            <div class="col s12">
                <div class="col s6"></div>
                <div class="input-field col s4">
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
               <i class="material-icons right">send</i>
                </button>
                </div>
                <div>
                </div>
            </div>
        </div>
    </form>
        </div>
        
      </div>
    </div>
  </div>
</div>
</body>
</html>
