$(function() {

    function getParents(grand_parents) {

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url:'api/sons/' + grand_parents,
            type: 'post',
            dataType: 'json',
            success: function (result) {

                $("#tab-parents tr").remove();
                
                if(result) {
                    
                    HTML = new Array();

                    $.each(result[0].sons, function(k,p) {
                        HTML.push('<tr>');
                        HTML.push('<td>'+ p.name + '</td>');
                        HTML.push('<td><input type="checkbox" name="parents[]" class="ck_parents" value=' + p.id + '></td>');
                        HTML.push('</tr>');
                    });

                    $("#tab-parents").append(HTML.join(''));
                    $("#table_parents").show();
                }
            }
        });
    }

    ck = [];
    n = 0;

    $(document).ready(function() {
        
        $("#grandParents").change(function(){
            
            var grand_parents = $(this).val();
            
            if(grand_parents != '') {
                
                getParents(grand_parents);
                
            } else {

                $("#table_parents").hide();
            }
            
        });

        $(".ck_parents").change(function(){
            console.log($(this).val());
            
        });

        $(document).on('click','.ck_parents', function(e) {
            
            ck[n++] = e.currentTarget.value;        
            
            if(ck.length == 2) {
                
                $.each($(".ck_parents"), function(k,v) {
                    
                    
                    if (v.checked != true) {
                        
                        console.log(k);

                        //$(".ck_parents").attr('disabled', 'true');

                        //console.log('checkado'); 
                        // CheckBox Marcado... Faça alguma coisa...
            
                    }
                    //console.log(k, v);
                    
                });

            }
        });
    })
})