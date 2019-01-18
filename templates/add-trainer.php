<html>
<head>
<title> Add Trainer </title>
<script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            tname: {
              identifier  : 'tname',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter the trainer name'
                },
              ]
            },
            tphoneno: {
              identifier  : 'tphoneno',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your contact no'
                },
                {
                  type   : 'length[10]',
                  prompt : 'Your contact no should be exactly 10 numbers'
                }
              ]
            },
            tmailid: {
              identifier  : 'tmailid',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your mail id'
                },
                {
                  type   : 'email',
                  prompt : 'Enter valid mail'
                }
              ]
            },
            tspec: {
              identifier  : 'tspec',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your specialization'
                }
              ]
            },
            schoolname: {
              identifier  : 'schoolname',
              rules: [
                {
                  type    : 'empty',
                  prompt  : 'Please select school name'
                }
              ]
            },
           
            taddress: {
              identifier  : 'taddress',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your address'
                }
              ]
            },
            
          }
        })
      ;
    });
  </script>

</head>

<body>

<form class="ui form" action="trainer" method="post" >
<br />
<h3 class="ui dividing header" style="text-align: left;">Add Trainer</h3>
<br />
<div class="ui error message"></div>
<div style="align:center">
<div>
  <div class="field">
     <div class="two fields">
      <div class="three wide field">
      <label>Trainer Name</label>
      </div>
      <div class="four wide field">
        <input type="text" name="tname" placeholder="Name of Trainer">
      </div>
    </div>
  </div>
  <div class="field">
    <div class="two fields">
      <div class="three wide field">
      <label>Contact No</label>
      </div>
      <div class="four wide field">
        <input type="text" name="tphoneno" placeholder="Contact Number">
      </div>
    </div>
  </div>
  <div class="field">
    <div class="two fields">
      <div class="three wide field">
      <label>Mail Id</label>
      </div>
      <div class="four wide field">
        <input type="text" name="tmailid" placeholder="abc@gmail.com">
      </div>
    </div>
  </div>
  <div class="field">
    <div class="two fields">
      <div class="three wide field">
      <label>Specialization</label>
      </div>
      <div class="four wide field">
        <input type="text" name="tspec" placeholder="Enter the specialization">
      </div>
    </div>
  </div>
 
  <div class="field">
    <div class="two fields">
      <div class="three wide field">
      <label>School</label>
      </div>
      <div class="four wide field">
      <select id="schoolname" name="schoolname[]" class="ui fluid search dropdown" multiple="">
      <option value="">Select school </option> 
      </select>
      </div>
    </div>
  </div>

  <div class="field">
    <div class="two fields">
      <div class="three wide field">
      <label>Address</label>
      </div>
      <div class="four wide field">
        <input type="text" name="taddress" placeholder="Name of Address">
      </div>
    </div>
  </div>
  </div>
<form class="ui form" action="trainer" method="post" >
<div class="seven wide field">
<input id="submitBtn" type="submit" class="ui primary button" name="Add a new trainer" value="Add this trainer record" ></input>
</div>
</div>
</div>

</form>
</body>
<script>

    $('.ui.dropdown')
        .dropdown()
    ;
  $(document).ready(function(){
  $.ajax({ 
    type: 'GET',
    url: "school",
    success: function(data){
      var schools = JSON.parse(data);
      
      for (var i =0; i< schools.length; i++){
        var obj = schools[i];
        var element = document.getElementById("schoolname");
        var option = document.createElement("option");
        option.value = obj.sno;
        option.id = obj.sno;
        option.text = obj.school_name;
        element.add(option);
     }
    },
    error:function(error){
      console.log(error);
    }});
  }); 
</script>
</html>