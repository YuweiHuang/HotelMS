$(document).ready(function(){
    $("#submit_search").click(function(){

        var location = $("#location").val();
        var type = $("#type").val();
        var status = $("#status").val();
 
        $.post('../../php/roomlist.php',{
        	location:location,
        	type:type,
        	status:status
        },
        	function(data) {

            //第一种：动态创建表格的方式，使用拼接html的方式 （推荐）
            var html = "";
            for( var i = 0; i < data.length; i++ ) {

                var target="#"+data[i].roomid;
                var id=data[i].roomid+"";
                var href="'reservation.html'";
                 html += "<tr>";
                 html +=     "<td>" + data[i].roomid + "</td>";
                 html +=     "<td>" + data[i].roomtype + "</td>";
                 html +=     "<td>" + data[i].location + "</td>";
                 html +=     "<td>" + data[i].price + "</td>";
                 html +=     "<td>" + data[i].status + "</td>";
                 html +=     "<td>";
                 html +=     "<button class='btn btn-primary' data-toggle='modal' data-target='" +target+ "'>了解详情</button>";
                 html +=        "<div class='modal fade' id='" +id+ "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                 html +=            "<div class='modal-dialog'>";
                 html +=                "<div class='modal-content'>";
                 html +=                    "<div class='modal-body'>";
                 html +=                        "<p>床宽: " + data[i].bedwidth + "米</p>";
                 html +=                        "<p>面积: " + data[i].area + "平方米</p>";
                 html +=                        "<p>Wifi: " + data[i].wifi + "</p>";
                 html +=                        "<p>独立浴室: " + data[i].bathroom + "</p>";
                 html +=                        "<p>是否可加床: " + data[i].addbed + "</p>";
                 html +=                        "<p>可入住人数: " + data[i].occupant + "人</p>";
                 html +=                        "<p>押金金额: " + data[i].deposit + "元</p>";
                 html +=                    "</div>";
                 html +=                    "<div class='modal-footer'>";
                 html +=                        "<button type='button' class='btn btn-default' data-dismiss='modal'>关闭</button>";
                 html +=                        "      "
                 html +=                        "<a href='reservation.html' style='font-family:Microsoft YaHei'>预订</a>";
                 html +=                    "</div>";
                 html +=                "</div>";
                 html +=            "</div>"
                 html +=        "</div>";
                 html +=     "</td>";
                 html += "</tr>";
             }
             $("#J_TbData").html(html);
        },'json'
        );
    })
})
