
                $(document).ready(function()
                {
                        $("#from-date").datepicker({
                            dateFormat:'yy-mm-dd'
                        });
                        $("#to-date").datepicker(
                            {
                                dateFormat:'yy-mm-dd'
                            });
                        
                    $('#csv').click(function(e)
                    {
                        var from_date = $('#from-date').val();
                        var to_date = $('#to-date').val();
                            e.preventDefault();
                            var url = "export.php?from-date="+from_date+"&to-date="+to_date;
                            //alert(url);
                            window.location.href=url;
                       
                    });

                       $('#pdf_download').click(function(e)
                    {
                        var from_date = $('#from-date').val();
                        var to_date = $('#to-date').val();
                            e.preventDefault();
                            var url = "fpdfdemo.php?from-date="+from_date+"&to-date="+to_date;
                            //alert(url);
                            window.location.href=url;
                       
                    });


                })