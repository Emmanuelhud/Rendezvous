function showDiv() {
    document.getElementById('step2').style.display = "block";
 }

 $(function() {
    $('#datepicker').datepicker({
        startDate: '+0d',
        endDate: '+3d',
    });
});

function availability() {
    document.getElementById('progress').style.width = "40%";
    document.getElementById('progressnum').innerHTML = "Progress - 2/5";
    document.getElementById('step3').style.display = "block";
 }

 function message() {
    document.getElementById('progress').style.width = "60%";
    document.getElementById('progressnum').innerHTML = "Progress - 3/5";
    document.getElementById('step4').style.display = "block";
    document.getElementById('step5').style.display = "block";
    document.getElementById('step6').style.display = "block";
 }

 function last() {
    document.getElementById('progress').style.width = "80%";
    document.getElementById('progressnum').innerHTML = "Progress - 4/5";
    document.getElementById('step5').style.display = "block";
 }

 function complete() {
    document.getElementById('progress').style.width = "100%";
    document.getElementById('progressnum').innerHTML = "Progress - 5/5";
    document.getElementById('step5').style.display = "block";
 }