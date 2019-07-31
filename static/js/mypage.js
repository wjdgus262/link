		$(document).ready(function(){
			$(".logo > a >img").attr("src",'./static/images/header_logo.png');
			var rgb = hexToRgb($(".get_color").text());
             var rgbarr = rgb.split(",");
              var o = Math.round(((parseInt(rgbarr[0]) * 299) +
                      (parseInt(rgbarr[1]) * 587) +
                      (parseInt(rgbarr[2]) * 114)) / 1000);
  var fore = (o > 125) ? 'black' : 'white';
  var back = 'rgb(' + rgbarr[0] + ',' + rgbarr[1] + ',' + rgbarr[2] + ')';
  $(".go_color_test").css("border-color",fore);
  // $('#bg').css('color', fore); 
  // alert(back);
  $(".user_wrap_left > h1").css("color",fore);
  $(".profile_table td").css("color",fore);
  $(".go_color_test").css("color",fore);
  $('.mypage_section_wrap').css('background-color', back);

    $(".basic").change(function(){
     // alert("aa");
     var color = $(".basic").val();
     var id = $(".get_id").text();
     // alert(color);
        $.sweetModal.confirm('마이페이지 색상을'+color+" 으로 변경하시겠습니까?", function() {
          $.ajax({
           type:"POST",
           data:{id:id,color:color},
           url:"mypage/color_change",
           success:function(response){
             var rgb = hexToRgb(response);
             var rgbarr = rgb.split(",");
              var o = Math.round(((parseInt(rgbarr[0]) * 299) +
                      (parseInt(rgbarr[1]) * 587) +
                      (parseInt(rgbarr[2]) * 114)) / 1000);
  var fore = (o > 125) ? 'black' : 'white';
  var back = 'rgb(' + rgbarr[0] + ',' + rgbarr[1] + ',' + rgbarr[2] + ')';
  // $('#bg').css('color', fore); 
  // alert(back);
  $(".user_wrap_left > h1").css("color",fore);
  $(".profile_table td").css("color",fore);
   $(".go_color_test").css("color",fore);
   $(".go_color_test").css("border-color",fore);
  $('.mypage_section_wrap').css('background-color', back);
             
           }
         });
        });
       // 
       // alert(id);
       
       // alert(color);
       // $.ajax({
       //   type:"POST",
       //   data:{id:id,color:color},
       //   url:"mypage/color_change",
       //   success:function(response){
       //     // alert(response);
       //    $(".mypage_section_wrap").css("background",response);
       //     // $(".wrap_right").css("background",response);
       //     // $(".wrap").css("background",response);
       //     // if(response == "#ffffff"){
       //     //  $(".profile_info *").css("color","black");
       //     // }else if(response == "#000000"){
       //     //  $(".profile_info *").css("color","white");
       //     // }
       //     // $(".basic").val(response);
       //   }
       // });
    });
//    $(".basic").spectrum({
//     color: "#f00"
// });
   			// alert($(".wrap_right").css("background"));
   			var background = $(".wrap_right").css("background");
   			if(background == "rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box"){
   				$(".profile_info *").css("color","black");
   			}else if(background == "rgb(0, 0, 0) none repeat scroll 0% 0% / auto padding-box border-box"){
   				$(".profile_info *").css("color","white");
   			}
   			// alert("a");


            $(document).on("click",".portfoilo_update",function(){
                var num = $(this).attr('data-num');
               location.href=$(".head_url").text()+"portfoilo/port_update_view?num="+num;
            });

   			$(".portfoilo_delete").mouseover(function(){
   				$(this).css("background","white");
   				$(this).css("color","black");
   			});
   			$(".portfoilo_delete").mouseleave(function(){
   				$(this).css("background","none");
   				$(this).css("color","white");
   			});
   			$(".more_port").mouseover(function(){
   				$(this).css("background","white");
   				$(this).css("color","black");
   			});
   			$(".more_port").mouseleave(function(){
   				$(this).css("background","none");
   				$(this).css("color","white");
   			});
   			$(".portfoilo_update").mouseover(function(){
   				$(this).css("background","white");
   				$(this).css("color","black");
   			});
   			$(".portfoilo_update").mouseleave(function(){
   				$(this).css("background","none");
   				$(this).css("color","white");
   			});
            $(document).on("mouseover",".work_port_item",function(){
               $(this).children("div").stop().fadeIn();
            });
             $(document).on("mouseleave",".work_port_item",function(){
               $(this).children("div").stop().fadeOut();
            });
            $(".my_prot").click(function(){
               // alert("a");
               $(".work_wrap_top > button").css({
                  "border":"1px solid #6a3bff",
                  "color":"#6a3bff",
                  "background":"white"
               });
               $(this).css({
                  "border":"none",
                  "color":"white",
                  "background":"#6a3bff"
               });
               $(".work_wrap_body > div").hide();
               $.ajax({
                  type:"POST",
                  url:$(".head_url").text()+"mypage/get_my_port",
                  dataType:"json",
                  data:{id:$(".get_id").text()},
                  success:function(response){
                     // alert(response);
                     var item_div = "";
                     $.each(response,function(key,value){
                        // alert(value.portfoilo_id);
                        var strArr = value.portfoilo_img.split(',');
                        item_div += `
                        <div class="work_port_item" >
                         <img src="${$(".head_url").text()+"static/userimages/portfoilo/"+strArr[0]}" alt="img">`

                         if($(".get_id").text() == value.portfoilo_id){
                           item_div += `<div class="portfoilo_infos" style="display: none;">
                               <button class="more_port" data-nick="${value.portfoilo_nickname}">자세히</button><br>
                               <button class="portfoilo_update" style="margin-top: 30px" data-num="${value.num}">수정하기</button><br>
                               <button class="portfoilo_delete" style="margin-top: 30px" data-num="${value.num}">삭제하기</button><br>
                            </div>`;
                         }else{
                           item_div += ` <div class="portfoilo_infos" style="padding-top: 120px;" style="display: none;">
                               <button class="more_port" data-nick="${value.portfoilo_nickname}">자세히</button>
                            </div>`;
                         }
                            
                           
                    item_div +=  `</div>`;
                     });
                     $(".work_port_wrap").html(item_div);
                     $(".work_port").show();
                  },beforeSend:function(){
            // console.log("loader");
                    $(".loading_modal_mypage").show();
                  },
                  complete:function(data){
            // console.log("complete");
            $(".loading_modal_mypage").hide();
          }
               });
            });
            $(".port_select").change(function(){
               var keyword = $(this).val();
               // alert(keyword);
               $.ajax({
                  type:"POST",
                  url:$(".head_url").text()+"mypage/get_my_port_filter",
                  dataType:"json",
                  data:{id:$(".get_id").text(),keyward:keyword},
                  success:function(response){
                     // alert(response);
                     var item_div = "";
                     $.each(response,function(key,value){
                        // alert(value.portfoilo_id);
                        var strArr = value.portfoilo_img.split(',');
                        item_div += `
                        <div class="work_port_item" >
                         <img src="${$(".head_url").text()+"static/userimages/portfoilo/"+strArr[0]}" alt="img">`

                         if($(".get_id").text() == value.portfoilo_id){
                           item_div += `<div class="portfoilo_infos" style="display: none;">
                               <button class="more_port" data-nick="${value.portfoilo_nickname}">자세히</button><br>
                               <button class="portfoilo_update" style="margin-top: 30px" data-num="${value.num}">수정하기</button><br>
                               <button class="portfoilo_delete" style="margin-top: 30px" data-num="${value.num}">삭제하기</button><br>
                            </div>`;
                         }else{
                           item_div += ` <div class="portfoilo_infos" style="padding-top: 120px;" style="display: none;">
                               <button class="more_port" data-nick="${value.portfoilo_nickname}">자세히</button>
                            </div>`;
                         }
                            
                           
                    item_div +=  `</div>`;
                     });
                     $(".work_port_wrap").html(item_div);
                     $(".work_port").show();
                  },beforeSend:function(){
            // console.log("loader");
                    $(".loading_modal_mypage").show();
                  },
                  complete:function(data){
            // console.log("complete");
            $(".loading_modal_mypage").hide();
          }
               });
            });

            $(".my_scrp").click(function(){
               $(".work_wrap_body > div").hide();
               $(".work_wrap_top > button").css({
                  "border":"1px solid #6a3bff",
                  "color":"#6a3bff",
                  "background":"white"
               });
               $(this).css({
                  "border":"none",
                  "color":"white",
                  "background":"#6a3bff"
               });
               var id = $(".get_id").text();
               $.ajax({
                  type:"POST",
                  data:{id:id},
                  dataType:"json",
                  url:$(".head_url").text()+"mypage/get_my_scarp",
                  success:function(response){
                     // alert(response.member.scrap);
                     // alert(response);
                     var scrap_arr;
                     $.each(response.member,function(key,value){
                         scrap_arr = value.scrap.split(',');      
                        // alert()
                     });
                     // alert(scrap_arr.length-1);
                     var scrp_item_div = "";
                     var j = 0;
                     $.each(response.company,function(key,value){
                           for(var i =0; i < scrap_arr.length-1; i++){
                              var imgarr = value.companyimg.split(",");
                              if(value.companynum == scrap_arr[i]){
                                 scrp_item_div += `<div class="list_item" >
                                     <div class="list_item_wrap" data-num="${value.companynum}">
                                        <div class="list_item_img">
                                           <div class="list_item_wrap_wrap" style="margin-top: 0px;">
                                           <img src="${$(".head_url").text()+imgarr[0]}" alt="img">
                                           </div>
                                       </div>
                                        <div class="item_info" style="opacity: 1;">
                                           <h1>${value.companyname}</h1><span>${value.companySectors}</span><p>${value.companystart} - ${value.companyend}</p>
                                        </div>
                                     </div>
                                  </div>`;
                              }
                           }
                     });
                     $(".work_scrap_wrap").html(scrp_item_div);
                     $(".work_scrap").show();
                  },beforeSend:function(){
            // console.log("loader");
                    $(".loading_modal_mypage").show();
                  },
                  complete:function(data){
            // console.log("complete");
            $(".loading_modal_mypage").hide();
          }
               });
            });


            $(".my_reply_pay").click(function(){
               $(".work_wrap_body > div").hide();
               $(".work_wrap_top > button").css({
                  "border":"1px solid #6a3bff",
                  "color":"#6a3bff",
                  "background":"white"
               });
               $(this).css({
                  "border":"none",
                  "color":"white",
                  "background":"#6a3bff"
               });
               var id = $(".get_id").text();
               $.ajax({
                  type:"POST",
                  data:{id:id},
                  dataType:"json",
                  url:$(".head_url").text()+"mypage/reply_send_get",
                  success:function(response){
                        var temp = `<thead>
                     <tr>
                        <th style="width: 50px" class="all_check_th">
                           <input type="checkbox" id="payer_all_check" >
                           <label for="payer_all_check" class="payer_all_check_label"></label>
                        </th>
                        <th style="width: 200px;">
                           <p>보낸사람</p>
                        </th>
                        <th style="width:650px;">
                           <p>내용</p>
                        </th>
                        <th>
                           <p>날짜</p>
                        </th>
                     </tr>
                  </thead>`;
                     var i =0;
                     $.each(response,function(key,value){
                        // alert(value.reply_payer);
                        // alert(value.reply_read);
                        temp += `  <tr>
                           <td class="payer_body_check">
                               <input type="checkbox" id="payer_check${i}" value="${value.num}" class="payer_check_class">
                               <label for="payer_check${i}"></label>
                            </td>
                            <td>
                               <p>${value.reply_sender}</p>
                            </td>
                            <td class="payer_bodytext" data-num="${value.num}">`
                               if(value.reply_read == 1){
                                 temp += `<p style='font-weight: normal;'>${value.reply_content}</p>`;
                               }else{
                                  temp += `<p style='font-weight: bold;'>${value.reply_content}</p>`;
                               }
                               temp += `
                            </td>
                            <td>
                               <p>2019-05-07</p>
                            </td>
                         </tr>`;
                         i++
                     });
                     $(".work_payer_table").html(temp);
                     page(".work_payer_table");
                     $(".work_payer").show();
                  },beforeSend:function(){
            // console.log("loader");
                    $(".loading_modal_mypage").show();
                  },
                  complete:function(data){
            // console.log("complete");
            $(".loading_modal_mypage").hide();
          }
               });
            });

            $(".my_reply_sender").click(function(){
               $(".work_wrap_body > div").hide();
               $(".work_wrap_top > button").css({
                  "border":"1px solid #6a3bff",
                  "color":"#6a3bff",
                  "background":"white"
               });
               $(this).css({
                  "border":"none",
                  "color":"white",
                  "background":"#6a3bff"
               });
               var id = $(".get_id").text();
               $.ajax({
                  type:"POST",
                  data:{id:id},
                  dataType:"json",
                  url:$(".head_url").text()+"mypage/reply_paye_get",
                  success:function(response){
                        var temp = `<thead>
                     <tr>
                        <th style="width: 50px" class="all_check_th_send">
                           <input type="checkbox" id="payer_all_check_send">
                           <label for="payer_all_check_send" class="payer_all_check_send_label"></label>
                        </th>
                        <th style="width: 200px;">
                           <p>받는사람</p>
                        </th>
                        <th style="width:750px;">
                           <p>내용</p>
                        </th>
                        <th>
                           <p>날짜</p>
                        </th>
                     </tr>
                  </thead>`;
                     var j = 0;
                     var i =0;
                     $.each(response,function(key,value){
                        // alert(value.reply_payer);
                        temp += ` <tr>
                           <td class="send_body_check">
                              <input type="checkbox" id="send_check${j}" class="send_check_class" value="${value.num}">
                              <label for="send_check${j}"></label>
                           </td>
                           <td>
                              <p>${value.reply_payer}</p>
                           </td>
                            <td class="send_bodytext" data-num="${value.num}">`
                               if(value.reply_read == 1){
                                 temp += `<p style='font-weight: normal;'>${value.reply_content}</p>`;
                               }else{
                                  temp += `<p style='font-weight: normal;'>${value.reply_content}</p>`;
                               }
                               temp += `
                            </td>
                           <td>
                              <p>2019-05-07</p>
                           </td>
                        </tr>`;
                         j++
                     });
                     $(".work_send_table").html(temp);
                     page(".work_send_table");
                     $(".work_send").show();
                  },beforeSend:function(){
            // console.log("loader");
                    $(".loading_modal_mypage").show();
                  },
                  complete:function(data){
            // console.log("complete");
            $(".loading_modal_mypage").hide();
          }
               });
            });

            $(document).on("click",".portfoilo_delete",function(){
               var num = $(this).attr('data-num');
               $.sweetModal.confirm('정말로 포트폴리오를 삭제하시겠습니까?<br>삭제된 포트폴리오는 복구가 불가능합니다', function() {
               // alert("a");
               $.ajax({
                  type:"POST",
                  data:{num:num},
                  url:"mypage/delete_portfoilo",
                  success:function(response){
                     // alert(response);
                     if(response == "1"){
                        location.reload();
                     }else{
                        $.sweetModal({
                     content:"포트폴리오 삭제 실패.",
                     icon: $.sweetModal.ICON_ERROR
                  });
                  return false
                     }
                     // location.reload();
                  }
               });
            });
            });

            $(document).on("click",".more_port",function(){
               var nick = $(this).attr("data-nick");
               // alert(nick);
               location.href=$(".head_url").text()+"portfoilo?kekword=작성자&div=search&bodytext="+nick;
            });

           $(document).on("click",".list_item_wrap",function(){
               var num = $(this).attr("data-num");
               location.href=$(".head_url").text()+"company/company_view?num="+num;
           });

           $(document).on("click",".payer_bodytext",function(){
               var num = $(this).attr("data-num");
               // alert(num);
               var content = $(this);
               $.ajax({
                  type:"POST",
                  data:{num:num},
                  dataType:"json",
                  url:"mypage/reply_view",
                  success:function(response){
                     // $(".reply_content_left > p").css("font-weight","normal");
                     // $(".reply_content_right > p").css("font-weight","normal");
                     content.children("p").css("font-weight","normal");
                     // alert(response.read_count);
                     $(".read_count_td").text(response.read_count);
                     $(".read_count").text("("+response.read_count+")");
                     $(".myreply_top > p").text(response.reply_sender+" 님이 나에게 보낸 쪽지");
                     $(".send_date").text(response.reply_date);
                     $(".myreply_body > p").text(response.reply_content);
                     $(".myreply_re").attr("data-sender",response.reply_sender);
                     $(".myreply_re").show();
                     $(".myreply_modal").show();

                  }
               });
           });

           $(document).on("click",".send_bodytext",function(){
                var num = $(this).attr("data-num");
               // alert(num);
               var content = $(this);
               $.ajax({
                  type:"POST",
                  data:{num:num},
                  dataType:"json",
                  url:"mypage/reply_view_payer",
                  success:function(response){
                     // $(".reply_content_left > p").css("font-weight","normal");
                     // $(".reply_content_right > p").css("font-weight","normal");
                     // alert(response.read_count);
                     $(".read_count").text("("+response.read_count+")");
                     $(".myreply_top > p").text(response.reply_sender+" 님이 나에게 보낸 쪽지");
                     $(".send_date").text(response.reply_date);
                     $(".myreply_re").attr("data-sender",response.reply_sender);
                      $(".myreply_re").hide();
                     $(".myreply_modal").show();

                  }
               });
           });

           $(document).on("click",".payer_all_check_label",function(){
               if($("#payer_all_check").prop("checked")){
                  $(".payer_check_class").each(function(){
                     if($(this).is(':visible') == true){
                        $(this).prop("checked",false);
                      }
                   });
               }else{
                  $(".payer_check_class").each(function(){
                     if($(this).is(':visible') == true){
                        $(this).prop("checked",true);
                      }
                   });
               }
           });
           $(document).on("click",".payer_all_check_send_label",function(){
               if($("#payer_all_check_send").prop("checked")){
                  $(".send_check_class").each(function(){
                      if($(this).is(':visible') == true){
                        $(this).prop("checked",false);
                      }
                  });
               }else{
                  $(".send_check_class").each(function(){
                      if($(this).is(':visible') == true){
                        $(this).prop("checked",true);
                      }
                  });
               }
           });
           $(document).on("click",".clickable",function(){
                   $(".payer_check_class").prop("checked",false);
                   $("#payer_all_check_send").prop("checked",false);
                   $(".payer_check_class").prop("checked",false);
                   $("#payer_all_check").prop("checked",false);
           });


           //받은 쪽지 삭제
           $(".reply_payer_delete").click(function(){
            // alert("a");
                  var count = 0;
                  var id = $(".get_id").text();
                  var re_delete_arr = new Array();
                  $(".payer_check_class").each(function(){
                     if($(this).prop("checked") == true){
                        // alert("a");
                        re_delete_arr.push($(this).val());
                        count++;
                     }
                  });
                  if(count == 0){
                      $.sweetModal({
                        content:"삭제할 쪽지를 선택해주세요.",
                        icon: $.sweetModal.ICON_ERROR
                     });
                     return false;
                  }else{
                     // alert(re_delete_arr[0]);
                     $.ajax({
                        type:"POST",
                        data:{delete_reply:re_delete_arr,div:"payer",id:id},
                        url:$(".head_url").text()+"mypage/delete_reply",
                        dataType:"json",
                        success:function(response){
                           var temp = `<thead>
                     <tr>
                        <th style="width: 50px" class="all_check_th">
                           <input type="checkbox" id="payer_all_check" >
                           <label for="payer_all_check" class="payer_all_check_label"></label>
                        </th>
                        <th style="width: 200px;">
                           <p>보낸사람</p>
                        </th>
                        <th style="width:650px;">
                           <p>내용</p>
                        </th>
                        <th>
                           <p>날짜</p>
                        </th>
                     </tr>
                  </thead>`;
                     var i =0;
                     $.each(response,function(key,value){
                        // alert(value.reply_payer);
                        // alert(value.reply_read);
                        temp += `  <tr>
                           <td class="payer_body_check">
                               <input type="checkbox" id="payer_check${i}" value="${value.num}" class="payer_check_class">
                               <label for="payer_check${i}"></label>
                            </td>
                            <td>
                               <p>${value.reply_sender}</p>
                            </td>
                            <td class="payer_bodytext" data-num="${value.num}">`
                               if(value.reply_read == 1){
                                 temp += `<p style='font-weight: normal;'>${value.reply_content}</p>`;
                               }else{
                                  temp += `<p style='font-weight: bold;'>${value.reply_content}</p>`;
                               }
                               temp += `
                            </td>
                            <td>
                               <p>2019-05-07</p>
                            </td>
                         </tr>`;
                         i++
                     });
                     $(".work_payer_table").html(temp);
                     page(".work_payer_table");
                     $(".work_payer").show();
                        }
                     });
                  }
                  
           });

           //보낸쪽지삭제
           $(".reply_send_delete").click(function(){
               var count = 0;
                  var id = $(".get_id").text();
                  var re_delete_arr = new Array();
                  $(".send_check_class").each(function(){
                     if($(this).prop("checked") == true){
                        // alert("a");
                        re_delete_arr.push($(this).val());
                        count++;
                     }
                  });
                  if(count == 0){
                      $.sweetModal({
                        content:"삭제할 쪽지를 선택해주세요.",
                        icon: $.sweetModal.ICON_ERROR
                     });
                     return false;
                  }else{
                     // alert(re_delete_arr[0]);
                     $.ajax({
                        type:"POST",
                        data:{delete_reply:re_delete_arr,div:"sender",id:id},
                        url:$(".head_url").text()+"mypage/delete_reply",
                        dataType:"json",
                        success:function(response){
                            var temp = `<thead>
                     <tr>
                        <th style="width: 50px" class="all_check_th_send">
                           <input type="checkbox" id="payer_all_check_send">
                           <label for="payer_all_check_send" class="payer_all_check_send_label"></label>
                        </th>
                        <th style="width: 200px;">
                           <p>받는사람</p>
                        </th>
                        <th style="width:750px;">
                           <p>내용</p>
                        </th>
                        <th>
                           <p>날짜</p>
                        </th>
                     </tr>
                  </thead>`;
                     var j = 0;
                     var i =0;
                     $.each(response,function(key,value){
                        // alert(value.reply_payer);
                        temp += ` <tr>
                           <td class="send_body_check">
                              <input type="checkbox" id="send_check${j}" class="send_check_class" value="${value.num}">
                              <label for="send_check${j}"></label>
                           </td>
                           <td>
                              <p>${value.reply_payer}</p>
                           </td>
                            <td class="send_bodytext" data-num="${value.num}">`
                               if(value.reply_read == 1){
                                 temp += `<p style='font-weight: normal;'>${value.reply_content}</p>`;
                               }else{
                                  temp += `<p style='font-weight: normal;'>${value.reply_content}</p>`;
                               }
                               temp += `
                            </td>
                           <td>
                              <p>2019-05-07</p>
                           </td>
                        </tr>`;
                         j++
                     });
                     $(".work_send_table").html(temp);
                     page(".work_send_table");
                     $(".work_send").show();
                        }
                     });
                  }
           });



            //검색시작--------------------------

            //포트폴리오 검색-------------------
            $(".port_search_btn").click(function(){
               var bodytext = $('.port_search_input').val();
               var id = $(".get_id").text();
               if(bodytext == ""){
                   $.sweetModal({
                        content:"검색어를 입력해주세요.",
                        icon: $.sweetModal.ICON_ERROR
                     });
                     return false;
               }else{
                  $.ajax({
                     type:"POST",
                     data:{id:id,bodytext:bodytext},
                     url:$(".head_url").text()+"mypage/port_search",
                     dataType:"json",
                     success:function(response){
                        var item_div = "";
                     $.each(response,function(key,value){
                        // alert(value.portfoilo_id);
                        var strArr = value.portfoilo_img.split(',');
                        item_div += `
                        <div class="work_port_item" >
                         <img src="${$(".head_url").text()+"static/userimages/portfoilo/"+strArr[0]}" alt="img">`

                         if($(".get_id").text() == value.portfoilo_id){
                           item_div += `<div class="portfoilo_infos" style="display: none;">
                               <button class="more_port" data-nick="${value.portfoilo_nickname}">자세히</button><br>
                               <button class="portfoilo_update" style="margin-top: 30px" data-num="${value.num}">수정하기</button><br>
                               <button class="portfoilo_delete" style="margin-top: 30px" data-num="${value.num}">삭제하기</button><br>
                            </div>`;
                         }else{
                           item_div += ` <div class="portfoilo_infos" style="padding-top: 100px;">
                               <button class="more_port" data-nick="${value.portfoilo_nickname}">자세히</button>
                            </div>`;
                         }
                            
                           
                    item_div +=  `</div>`;
                     });
                     $(".work_port_wrap").html(item_div);
                     $(".work_port").show();
                     }
                  });
               }
            });
            //포트폴리오 검색 엔터
            $(".port_search_input").keydown(function(key){
                if (key.keyCode == 13) {
                   var bodytext = $(this).val();
                  var id = $(".get_id").text();
                  if(bodytext == ""){
                   $.sweetModal({
                        content:"검색어를 입력해주세요.",
                        icon: $.sweetModal.ICON_ERROR
                     });
                     return false;
               }else{
                  $.ajax({
                     type:"POST",
                     data:{id:id,bodytext:bodytext},
                     url:$(".head_url").text()+"mypage/port_search",
                     dataType:"json",
                     success:function(response){
                        var item_div = "";
                     $.each(response,function(key,value){
                        // alert(value.portfoilo_id);
                        var strArr = value.portfoilo_img.split(',');
                        item_div += `
                        <div class="work_port_item" >
                         <img src="${$(".head_url").text()+"static/userimages/portfoilo/"+strArr[0]}" alt="img">`

                         if($(".get_id").text() == value.portfoilo_id){
                           item_div += `<div class="portfoilo_infos" style="display: none;">
                               <button class="more_port" data-nick="${value.portfoilo_nickname}">자세히</button><br>
                               <button class="portfoilo_update" style="margin-top: 30px" data-num="${value.num}">수정하기</button><br>
                               <button class="portfoilo_delete" style="margin-top: 30px" data-num="${value.num}">삭제하기</button><br>
                            </div>`;
                         }else{
                           item_div += ` <div class="portfoilo_infos" style="padding-top: 100px;">
                               <button class="more_port" data-nick="${value.portfoilo_nickname}">자세히</button>
                            </div>`;
                         }
                            
                           
                    item_div +=  `</div>`;
                     });
                     $(".work_port_wrap").html(item_div);
                     $(".work_port").show();
                     }
                  });
               }
                }
            });

            // 스크랩 공고 검색
            $('.scrap_search_btn').click(function(){
                 var bodytext = $(".scrap_search_input").val();
                  var id = $(".get_id").text();
                  if(bodytext == ""){
                     $.sweetModal({
                        content:"검색어를 입력해주세요.",
                        icon: $.sweetModal.ICON_ERROR
                     });
                     return false;
                  }else{
                     $.ajax({
                        type:"POST",
                        data:{id:id,bodytext:bodytext},
                        url:$(".head_url").text()+"mypage/get_my_scarp_search",
                        dataType:"json",
                        success:function(response){
                           var scrap_arr;
                     $.each(response.member,function(key,value){
                         scrap_arr = value.scrap.split(',');      
                        // alert()
                     });
                     // alert(scrap_arr.length-1);
                     var scrp_item_div = "";
                     var j = 0;
                     $.each(response.company,function(key,value){
                           for(var i =0; i < scrap_arr.length-1; i++){
                              var imgarr = value.companyimg.split(",");
                              if(value.companynum == scrap_arr[i]){
                                 scrp_item_div += `<div class="list_item" >
                                     <div class="list_item_wrap" data-num="${value.companynum}">
                                        <div class="list_item_img">
                                           <div class="list_item_wrap_wrap" style="margin-top: 0px;">
                                           <img src="${$(".head_url").text()+imgarr[0]}" alt="img">
                                           </div>
                                       </div>
                                        <div class="item_info" style="opacity: 1;">
                                           <h1>${value.companyname}</h1><span>${value.companySectors}</span><p>${value.companystart} - ${value.companyend}</p>
                                        </div>
                                     </div>
                                  </div>`;
                              }
                           }
                     });
                     $(".work_scrap_wrap").html(scrp_item_div);
                     $(".work_scrap").show();
                        }
                     }); 
                  }
            });
            $(".scrap_search_input").keydown(function(key){
                var bodytext = $(this).val();
                  var id = $(".get_id").text();
                if (key.keyCode == 13) {
                  if(bodytext == ""){
                     $.sweetModal({
                        content:"검색어를 입력해주세요.",
                        icon: $.sweetModal.ICON_ERROR
                     });
                     return false;
                  }else{
                     $.ajax({
                        type:"POST",
                        data:{id:id,bodytext:bodytext},
                        url:$(".head_url").text()+"mypage/get_my_scarp_search",
                        dataType:"json",
                        success:function(response){
                           var scrap_arr;
                     $.each(response.member,function(key,value){
                         scrap_arr = value.scrap.split(',');      
                        // alert()
                     });
                     // alert(scrap_arr.length-1);
                     var scrp_item_div = "";
                     var j = 0;
                     $.each(response.company,function(key,value){
                           for(var i =0; i < scrap_arr.length-1; i++){
                              var imgarr = value.companyimg.split(",");
                              if(value.companynum == scrap_arr[i]){
                                 scrp_item_div += `<div class="list_item" >
                                     <div class="list_item_wrap" data-num="${value.companynum}">
                                        <div class="list_item_img">
                                           <div class="list_item_wrap_wrap" style="margin-top: 0px;">
                                           <img src="${$(".head_url").text()+imgarr[0]}" alt="img">
                                           </div>
                                       </div>
                                        <div class="item_info" style="opacity: 1;">
                                           <h1>${value.companyname}</h1><span>${value.companySectors}</span><p>${value.companystart} - ${value.companyend}</p>
                                        </div>
                                     </div>
                                  </div>`;
                              }
                           }
                     });
                     $(".work_scrap_wrap").html(scrp_item_div);
                     $(".work_scrap").show();
                        }
                     }); 
                  }
                }
            });


            //받은쪽지 검색
            $(".reply_payer_search_btn").click(function(){
               var bodytext = $('.reply_payer_search_input').val();
                  var id = $(".get_id").text();
                  if(bodytext == ""){
                       $.sweetModal({
                        content:"검색어를 입력해주세요.",
                        icon: $.sweetModal.ICON_ERROR
                     });
                     return false;
                  }else{
                     $.ajax({
                        type:'POST',
                        data:{id:id,bodytext:bodytext},
                        url:$(".head_url").text()+"mypage/reply_payer_search",
                        dataType:"json",
                        success:function(response){
                           var temp = `<thead>
                     <tr>
                        <th style="width: 50px" class="all_check_th">
                           <input type="checkbox" id="payer_all_check" >
                           <label for="payer_all_check" class="payer_all_check_label"></label>
                        </th>
                        <th style="width: 200px;">
                           <p>보낸사람</p>
                        </th>
                        <th style="width:650px;">
                           <p>내용</p>
                        </th>
                        <th>
                           <p>날짜</p>
                        </th>
                     </tr>
                  </thead>`;
                     var i =0;
                     $.each(response,function(key,value){
                        // alert(value.reply_payer);
                        // alert(value.reply_read);
                        temp += `  <tr>
                           <td class="payer_body_check">
                               <input type="checkbox" id="payer_check${i}" value="${value.num}" class="payer_check_class">
                               <label for="payer_check${i}"></label>
                            </td>
                            <td>
                               <p>${value.reply_sender}</p>
                            </td>
                            <td class="payer_bodytext" data-num="${value.num}">`
                               if(value.reply_read == 1){
                                 temp += `<p style='font-weight: normal;'>${value.reply_content}</p>`;
                               }else{
                                  temp += `<p style='font-weight: bold;'>${value.reply_content}</p>`;
                               }
                               temp += `
                            </td>
                            <td>
                               <p>2019-05-07</p>
                            </td>
                         </tr>`;
                         i++
                     });
                     $(".work_payer_table").html(temp);
                     page(".work_payer_table");
                     $(".work_payer").show();
                        }
                     });
                  }
            });
            $('.reply_payer_search_input').keydown(function(key){
                  var bodytext = $(this).val();
                  var id = $(".get_id").text();
                  if (key.keyCode == 13) {
                     if(bodytext == ""){
                         $.sweetModal({
                           content:"검색어를 입력해주세요.",
                           icon: $.sweetModal.ICON_ERROR
                        });
                        return false;
                     }else{
                        $.ajax({
                        type:'POST',
                        data:{id:id,bodytext:bodytext},
                        url:$(".head_url").text()+"mypage/reply_payer_search",
                        dataType:"json",
                        success:function(response){
                           var temp = `<thead>
                     <tr>
                        <th style="width: 50px" class="all_check_th">
                           <input type="checkbox" id="payer_all_check" >
                           <label for="payer_all_check" class="payer_all_check_label"></label>
                        </th>
                        <th style="width: 200px;">
                           <p>보낸사람</p>
                        </th>
                        <th style="width:650px;">
                           <p>내용</p>
                        </th>
                        <th>
                           <p>날짜</p>
                        </th>
                     </tr>
                  </thead>`;
                     var i =0;
                     $.each(response,function(key,value){
                        // alert(value.reply_payer);
                        // alert(value.reply_read);
                        temp += `  <tr>
                           <td class="payer_body_check">
                               <input type="checkbox" id="payer_check${i}" value="${value.num}" class="payer_check_class">
                               <label for="payer_check${i}"></label>
                            </td>
                            <td>
                               <p>${value.reply_sender}</p>
                            </td>
                            <td class="payer_bodytext" data-num="${value.num}">`
                               if(value.reply_read == 1){
                                 temp += `<p style='font-weight: normal;'>${value.reply_content}</p>`;
                               }else{
                                  temp += `<p style='font-weight: bold;'>${value.reply_content}</p>`;
                               }
                               temp += `
                            </td>
                            <td>
                               <p>2019-05-07</p>
                            </td>
                         </tr>`;
                         i++
                     });
                     $(".work_payer_table").html(temp);
                     page(".work_payer_table");
                     $(".work_payer").show();
                        }
                     });
                     }
                  }
            });


            //보낸 쪽지 검색
            $(".reply_send_search_btn").click(function(){
                    var bodytext = $(".reply_send_search_input").val();
                  var id = $(".get_id").text();
                   if(bodytext == ""){
                         $.sweetModal({
                           content:"검색어를 입력해주세요.",
                           icon: $.sweetModal.ICON_ERROR
                        });
                        return false;
                  }else{
                     $.ajax({
                        type:"POST",
                        data:{id:id,bodytext:bodytext},
                        dataType:"json",
                        url:$(".head_url").text()+"mypage/reply_send_search",
                        success:function(response){
                           var temp = `<thead>
                     <tr>
                        <th style="width: 50px" class="all_check_th_send">
                           <input type="checkbox" id="payer_all_check_send">
                           <label for="payer_all_check_send" class="payer_all_check_send_label"></label>
                        </th>
                        <th style="width: 200px;">
                           <p>받는사람</p>
                        </th>
                        <th style="width:750px;">
                           <p>내용</p>
                        </th>
                        <th>
                           <p>날짜</p>
                        </th>
                     </tr>
                  </thead>`;
                     var j = 0;
                     var i =0;
                     $.each(response,function(key,value){
                        // alert(value.reply_payer);
                        temp += ` <tr>
                           <td class="send_body_check">
                              <input type="checkbox" id="send_check${j}" class="send_check_class" value="${value.num}">
                              <label for="send_check${j}"></label>
                           </td>
                           <td>
                              <p>${value.reply_payer}</p>
                           </td>
                            <td class="send_bodytext" data-num="${value.num}">`
                               if(value.reply_read == 1){
                                 temp += `<p style='font-weight: normal;'>${value.reply_content}</p>`;
                               }else{
                                  temp += `<p style='font-weight: normal;'>${value.reply_content}</p>`;
                               }
                               temp += `
                            </td>
                           <td>
                              <p>2019-05-07</p>
                           </td>
                        </tr>`;
                         j++
                     });
                     $(".work_send_table").html(temp);
                     page(".work_send_table");
                     $(".work_send").show();
                        }
                     });
                  }
            });

            $('.reply_send_search_input').keydown(function(key){
                  var bodytext = $(this).val();
                  var id = $(".get_id").text();
                  if (key.keyCode == 13) {
                      if(bodytext == ""){
                         $.sweetModal({
                           content:"검색어를 입력해주세요.",
                           icon: $.sweetModal.ICON_ERROR
                        });
                        return false;
                  }else{
                     $.ajax({
                        type:"POST",
                        data:{id:id,bodytext:bodytext},
                        dataType:"json",
                        url:$(".head_url").text()+"mypage/reply_send_search",
                        success:function(response){
                           var temp = `<thead>
                     <tr>
                        <th style="width: 50px" class="all_check_th_send">
                           <input type="checkbox" id="payer_all_check_send">
                           <label for="payer_all_check_send" class="payer_all_check_send_label"></label>
                        </th>
                        <th style="width: 200px;">
                           <p>받는사람</p>
                        </th>
                        <th style="width:750px;">
                           <p>내용</p>
                        </th>
                        <th>
                           <p>날짜</p>
                        </th>
                     </tr>
                  </thead>`;
                     var j = 0;
                     var i =0;
                     $.each(response,function(key,value){
                        // alert(value.reply_payer);
                        temp += ` <tr>
                           <td class="send_body_check">
                              <input type="checkbox" id="send_check${j}" class="send_check_class" value="${value.num}">
                              <label for="send_check${j}"></label>
                           </td>
                           <td>
                              <p>${value.reply_payer}</p>
                           </td>
                            <td class="send_bodytext" data-num="${value.num}">`
                               if(value.reply_read == 1){
                                 temp += `<p style='font-weight: normal;'>${value.reply_content}</p>`;
                               }else{
                                  temp += `<p style='font-weight: normal;'>${value.reply_content}</p>`;
                               }
                               temp += `
                            </td>
                           <td>
                              <p>2019-05-07</p>
                           </td>
                        </tr>`;
                         j++
                     });
                     $(".work_send_table").html(temp);
                     page(".work_send_table");
                     $(".work_send").show();
                        }
                     });
                  }
                  }
            });






            $(".myreply_success").click(function(){
                  $(".myreply_modal").hide();
            });


            var reply_flag = 0;
   $(".reply_input_body").keyup(function(e){
      var content = $(this).val();
      // alert(content.length);

      $(".replay_count").text(content.length);
      if(content.length > 1000){
         $.sweetModal({
                     content:"쪽지는 1000자 제한입니다..",
                     icon: $.sweetModal.ICON_ERROR
                  });
                  return false;
         reply_flag = 1;
      }
   });
   $(".reply_close").click(function(){
      $(".reply_modal").hide();
   });
   $(".reply_sender_btn").click(function(){
       $(".reply_modal").stop().fadeIn();
   });

            $(".myreply_re").click(function(){
               var sender = $(this).attr("data-sender");
               $(".reply_input_id").val(sender);
               $(".myreply_modal").hide();
               $(".reply_modal").show();      
            });
            $(".reply_success_btn").click(function(){
      var content = $(".reply_input_body").val();
      var payer = $(".reply_input_id").val();
      if(content == ""){
         $.sweetModal({
                     content:"빈칸없이 입력해주세요.",
                     icon: $.sweetModal.ICON_ERROR
                  });
                  return false;
      }else{
         if(reply_flag == 1){
            $.sweetModal({
                     content:"쪽지는 1000자 제한입니다..",
                     icon: $.sweetModal.ICON_ERROR
                  });
                  return false;
         }else{
            var url = $(".url").text();
            $.ajax({
               type:"POST",
               data:{content:content,payer:payer},
               url:url+"portfoilo/replay",
               success:function(response){
                  // alert(response);
                  if(response == 1){
                     $(".reply_modal").hide();
                     $.sweetModal({
                     content:"쪽지를 정상적으로 발송했습니다.",
                     icon: $.sweetModal.ICON_SUCCESS

                  });
                     setTimeout(function(){
                        location.reload();
                     },700);
                  }else{
                     alert("error");
                  }
               }
            });
            // alert("success");
         }
      }
   });


    // 이미지 동적 사이즈 변경
    var pro_img = $(".user_profile_circle > img");
    // alert(pro_img.width());
    // pro_img.load(img.width() > img.height()){
    //     pro_img.width('200px');
    // }else{
    //      pro_img.height('200px');
    // }
      if(pro_img.width() > pro_img.height()){
        $(".user_profile_circle > img").css("width","200px");
         $(".user_profile_circle > img").css("height","200px");
      }else{
        $(".user_profile_circle > img").css("width","200px");
        $(".user_profile_circle > img").css("height","200px");
      }

    var update_img = $(".update_img_circle > img");
    if(update_img.width() > update_img.height()){
        $(".update_img_circle > img").css("width","80px");
         $(".update_img_circle > img").css("height","80px");
      }else{
        $(".update_img_circle > img").css("width","80px");
        $(".update_img_circle > img").css("height","80px");
      }
});


function page($target){ 
var reSortColors = function($table) {
  $('tbody tr:odd td', $table).removeClass('even').removeClass('listtd').addClass('odd');
  $('tbody tr:even td', $table).removeClass('odd').removeClass('listtd').addClass('even');
 };
 $($target).each(function() {
  var pagesu = 10;  //페이지 번호 갯수
  var currentPage = 0;
  var numPerPage = 10;  //목록의 수
  var $table = $(this);    
  
  //length로 원래 리스트의 전체길이구함
  var numRows = $table.find('tbody tr').length;
  //Math.ceil를 이용하여 반올림
  var numPages = Math.ceil(numRows / numPerPage);
  //리스트가 없으면 종료
  if (numPages==0) return;
  //pager라는 클래스의 div엘리먼트 작성
  var $pager = $('<td align="center" id="remo" colspan="10"><div class="pager"></div></td>');
  
  var nowp = currentPage;
  var endp = nowp+10;
  
  //페이지를 클릭하면 다시 셋팅
  $table.bind('repaginate', function() {
  //기본적으로 모두 감춘다, 현재페이지+1 곱하기 현재페이지까지 보여준다
  
   $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
   $("#remo").html("");
   
   if (numPages > 1) {     // 한페이지 이상이면
    if (currentPage < 5 && numPages-currentPage >= 5) {   // 현재 5p 이하이면
     nowp = 0;     // 1부터 
     endp = pagesu;    // 10까지
    }else{
     nowp = currentPage -5;  // 6넘어가면 2부터 찍고
     endp = nowp+pagesu;   // 10까지
     pi = 1;
    }
    
    if (numPages < endp) {   // 10페이지가 안되면
     endp = numPages;   // 마지막페이지를 갯수 만큼
     nowp = numPages-pagesu;  // 시작페이지를   갯수 -10
    }
    if (nowp < 1) {     // 시작이 음수 or 0 이면
     nowp = 0;     // 1페이지부터 시작
    }
   }else{       // 한페이지 이하이면
    nowp = 0;      // 한번만 페이징 생성
    endp = numPages;
   }
   // [처음]
   $('<br /><span class="page-number page_icon" cursor: "pointer"><i class="fas fa-angle-double-left"></i></span>').bind('click', {newPage: page},function(event) {
          currentPage = 0;   
          $table.trigger('repaginate');  
          $($(".page-number")[2]).addClass('active').siblings().removeClass('active');
      }).appendTo($pager).addClass('clickable');
    // [이전]
      $('<span class="page-number page_icon" cursor: "pointer">&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-left"></i>&nbsp;</span>').bind('click', {newPage: page},function(event) {
          if(currentPage == 0) return; 
          currentPage = currentPage-1;
    $table.trigger('repaginate'); 
    $($(".page-number")[(currentPage-nowp)+2]).addClass('active').siblings().removeClass('active');
   }).appendTo($pager).addClass('clickable');
    // [1,2,3,4,5,6,7,8]
   for (var page = nowp ; page < endp; page++) {
    $('<span class="page-number" cursor: "pointer" style="margin-left: 8px;"></span>').text(page + 1).bind('click', {newPage: page}, function(event) {
     currentPage = event.data['newPage'];
     $table.trigger('repaginate');
     $($(".page-number")[(currentPage-nowp)+2]).addClass('active').siblings().removeClass('active');
     }).appendTo($pager).addClass('clickable');
   } 
    // [다음]
      $('<span class="page-number page_icon" cursor: "pointer">&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-right"></i>&nbsp;</span>').bind('click', {newPage: page},function(event) {
    if(currentPage == numPages-1) return;
        currentPage = currentPage+1;
    $table.trigger('repaginate'); 
     $($(".page-number")[(currentPage-nowp)+2]).addClass('active').siblings().removeClass('active');
   }).appendTo($pager).addClass('clickable');
    // [끝]
   $('<span class="page-number page_icon" cursor: "pointer">&nbsp;<i class="fas fa-angle-double-right"></i></span>').bind('click', {newPage: page},function(event) {
           currentPage = numPages-1;
           $table.trigger('repaginate');
           $($(".page-number")[endp-nowp+1]).addClass('active').siblings().removeClass('active');
   }).appendTo($pager).addClass('clickable');
     
     $($(".page-number")[2]).addClass('active');
reSortColors($table);
  });
   $pager.insertAfter($table).find('span.page-number:first').next().next().addClass('active');   
   $pager.appendTo($table);
   $table.trigger('repaginate');
 });
}
function hexToRgb( hexType ){ 

        var hex = hexType.replace( "#", "" ); 
        var value = hex.match( /[a-f\d]/gi ); 


        // 헥사값이 세자리일 경우, 여섯자리로. 
        if ( value.length == 3 ) hex = value[0] + value[0] + value[1] + value[1] + value[2] + value[2]; 


        value = hex.match( /[a-f\d]{2}/gi ); 

        var r = parseInt( value[0], 16 ); 
        var g = parseInt( value[1], 16 ); 
        var b = parseInt( value[2], 16 ); 

        var rgbType = r + ", " + g + ", " + b; 

        return rgbType; 
} 