

$(document).ready(function () {
    $('.area').click(function () {

        $.ajax({
            method: "POST",
            url: "adds.php",
            data: { area: this.value}
        })
            .done(function( msg ) {


                for (var i = 0; i < msg.length; i++){
                    $("#settlement").append("<option class='settlement' value='"+msg[i]['Ref']+"'>" + msg[i]['Description'] + "</option>")
                }

                $('#city').attr('hidden', false)
                $('.settlement').click(function () {
                    alert(this.value)
                    $.ajax({
                        method: "POST",
                        url: "warehouse.php",
                        data: { settlement: this.value}
                    })
                        .done(function( msg ) {

                            console.log(msg)
                            for (var i = 0; i < msg.length; i++){
                                $("#s_warehouse").append("<option value='"+msg[i]['Ref']+"'>" + msg[i]['Description'] + "</option>")
                            }

                            $('#warehouse').attr('hidden', false)
                        });




                })

            });




    })


})

