$(document).ready( function() {
        $.post('../php/customerselect.php',
            function(data) 
            {

            //第一种：动态创建表格的方式，使用拼接html的方式 （推荐）
            var html = "";
            for( var i = 0; i < data.length; i++ ) {

                 html += "<tr>";
                 html +=     "<td>" + data[i].name + "</td>";
                 html +=     "<td>" + data[i].country + "</td>";
                 html +=     "<td>" + data[i].city + "</td>";
                 html +=     "<td>" + data[i].tel + "</td>";
                 html +=     "<td>" + data[i].id_type + "</td>";
                 html +=     "<td>" + data[i].id + "</td>";
                 html +=     "<td>";
                 html +=     "<button class='btn btn-info selectcustomer' id=" + data[i].id + ">选择</button>";
                 //html +=        "<a class='select' style='font-family:Microsoft YaHei' id=" + data[i].id + ">选择</a>";
                 html +=     "</td>";
                 html += "</tr>";

             }
             $("#J_TbData").html(html);

            $(".selectcustomer").on("click", function () 
            {
                var getId = $(this).attr("id"); 
                $.post('../php/test.php',
                    {
                        getId:getId
                    },
                    function()
                    {
                        window.location.href="reservation_step2.html";
                    }
                );
            });

          },'json'
        );

});
