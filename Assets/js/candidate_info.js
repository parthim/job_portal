$(document).ready(function() {
 
    $("#submit").click(function() {
        // alert("Hello");
        var fname = $('#modalForm-fname').val();
        var lname = $('#modalForm-lname').val();
        var cDate = $('#modalForm-date').val();
        var phone = $('#modalForm-phoneNumber').val();
        var cEmail = $('#modalForm-email').val();
        var selectedGender= $('#modalForm-gender').val();
        var per_10th = $('#modalForm-10th').val();
        var per_12th = $('#modalForm-12th').val();
        var b_cgpa = $('#modalForm-cgpa').val();
        var resume =$('#modalForm-Resume').prop('files')[0];
        // alert(selectedGender);
        alert(fname);
        alert(lname);
        alert(cDate);
        alert(phone);
        alert(cEmail);
        alert(selectedGender);
        alert(per_10th);
        alert(per_12th);
        alert(b_cgpa);
        alert(resume);
        if(fname==''||lname==''||cDate==''||phone==''||cEmail==''||selectedGender==''||per_10th==''||per_12th==''||b_cgpa==''||resume=='') {
            return false;
        }
    });

});