var jqxhr = $.ajax( "http://www.pickrr.com/api/tracking-json/?tracking_id=59612656246" )
            .done(function(data) {
                alert( "success" );
                $('p').text(JSON.stringify(data));
            })
            .fail(function(error) {
                alert( "error" );
                $('p').text(JSON.stringify(error));
            })
            .always(function() {
                alert( "complete" );
            });
