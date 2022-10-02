let inp_num = document.getElementById('num-code'),
    btn_sub = document.getElementById('btn-sub'),
    password = document.getElementById('pass-user'),
    code = document.getElementById('code-user'),
    show_pass = document.getElementById('show-pass'),
    show_code = document.getElementById('show-code')




$(document).ready(function(){

    $('#btn-sub').on('click', function(){


        $.ajax({

            type:"GET",
            url: 'get/get-user-code&password',
            data: {number: $('#num-code').val()},
            success: function(data) {

                show_pass.classList.remove('hide'),
                    show_code.classList.remove('hide'),
                    password.innerHTML = data.password,
                    code.innerHTML = data.code;
            }



        });


    });

});
// $(document).ready(function() {
//     $("#btn-sub").click(function() {
//         $.ajax({  //create an ajax request to display.php
//             type: "GET",
//             url: "get/get-user-code&password/",
//             success: function (data) {
// 					alert(data);
//             }
//         });
//     });
// });



// btn_sub.addEventListener('click', function(){
//     if (inp_num.value == null || inp_num.value == undefined || inp_num.value.trim() == "" || inp_num.value.length < 10) {
//         alert("Please Input A Right Number"),
//             show_pass.classList.add('hide'),
//             show_code.classList.add('hide')
//     }
//     else if (inp_num.value === "1090794607") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "VGobN9OF",
//             code.innerHTML = "AF002";
//     }
//     else if (inp_num.value === "1126558564") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "Jth4Rf3Q",
//             code.innerHTML = "AF003";
//     }
//     else if (inp_num.value === "1147637201") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "GgOwlZq5",
//             code.innerHTML = "AF004";
//     }
//     else if (inp_num.value === "1027954484") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "XF1c0lHr",
//             code.innerHTML = "AF005";
//     }
//     else if (inp_num.value === "1116725356") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "9hknEqOM",
//             code.innerHTML = "AF006";
//     }
//     else if (inp_num.value === "1127759696") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "XPL8hkNS",
//             code.innerHTML = "AF007";
//     }
//     else if (inp_num.value === "1149030437") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "YthAfCq5",
//             code.innerHTML = "AF008";
//     }
//     else if (inp_num.value === "1050347336") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "2xI9hxIu",
//             code.innerHTML = "AF009";
//     }
//     else if (inp_num.value === "1140144333") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "SMy9DBWR",
//             code.innerHTML = "AF010";
//     }
//     else if (inp_num.value === "1205116065") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "7mlJGru4",
//             code.innerHTML = "AF011";
//     }
//     else if (inp_num.value === "1210281378") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "wZ0b8MgH",
//             code.innerHTML = "AF012";
//     }
//     else if (inp_num.value === "1118287912") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "KuQnzjQ0",
//             code.innerHTML = "AF013";
//     }
//     else if (inp_num.value === "1094756231") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "r2CurM62",
//             code.innerHTML = "AF014";
//     }
//     else if (inp_num.value === "1016069581") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "EnMAlE2x",
//             code.innerHTML = "AF015";
//     }
//     else if (inp_num.value === "1270339113") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "J7jW0sJI",
//             code.innerHTML = "AF016";
//     }
//     else if (inp_num.value === "1501540505") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "5EKLgrXX",
//             code.innerHTML = "AF017";
//     }
//     else if (inp_num.value === "1154114416") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "z39UUsS7",
//             code.innerHTML = "AF018";
//     }
//     else if (inp_num.value === "1067200525") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "C5bnJa3Q",
//             code.innerHTML = "AF019";
//     }
//     else if (inp_num.value === "1090430502") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "Mc3nVoWN",
//             code.innerHTML = "AF020";
//     }
//     else if (inp_num.value === "1091480286") {
//         show_pass.classList.remove('hide'),
//             show_code.classList.remove('hide'),
//             password.innerHTML = "9QHw2455",
//             code.innerHTML = "AF021";
//     }
//
//     else {
//         alert("Your Number Isn't Found Please Contact Us"),
//             show_pass.classList.add('hide'),
//             show_code.classList.add('hide')
//     }
// });