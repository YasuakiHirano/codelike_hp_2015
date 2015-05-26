var angleVal = 0;
var invalId = 0;
var switchTurn = false;
var hideCount = 0;

$(function(){
    // 左メニュー ツールチップ
    $('#btn_about').tooltipster({position:'right', offsetX:25, offsetY: -20}); 
    $('#btn_service').tooltipster({position:'right', offsetX:25, offsetY: -20}); 
    $('#btn_profile').tooltipster({position:'right', offsetX:25, offsetY: -20}); 
    $('#btn_contact').tooltipster({position:'right', offsetX:25, offsetY: -20}); 
    $('#btn_create').tooltipster({position:'right', offsetX:25, offsetY: -20}); 
    $('#btn_other').tooltipster({position:'right', offsetX:25, offsetY: -20}); 
    $('#btn_calender').tooltipster({position:'right', offsetX:25, offsetY: -20}); 
	

    // ロゴの周りのオブジェクト制御
    $('#topobj1, #topobj2, #topobj3, #topobj4, #topobj5, #topobj6, #topobj7, #topobj8, #topobj9').click(function(){
       $(this).hide('slow'); 
        hideCount += 1;

       if(hideCount == 9){
           $('#topobj1, #topobj2, #topobj3, #topobj4, #topobj5, #topobj6, #topobj7, #topobj8, #topobj9').show('slow'); 
           hideCount = 0;
        }
    });

    // ロゴ回転
    rotateLogo();

    $('#codelike_logo').mouseover(function(){
        if(switchTurn == false){
            switchTurn = true;
        } else {
            switchTurn = false;
        }
        clearInterval(invalId);
    }).mouseout(function(){
        rotateLogo();
    });

    // メニュータイトルを回す設定
    $("#btn_about, #btn_service, #btn_profile, #btn_contact, #btn_create, #btn_other, #btn_calender").rotate({ 
        bind: { 
            mouseover : function() { 
                $(this).rotate({
                    animateTo: 360
                })
            },
            mouseout : function() { 
                $(this).rotate({
                    animateTo: 0
                })
            }
        }    
    });

    $("#btn_about").click(function(){
        location.href="./about.php"; 
    });
    $("#btn_service").click(function(){
        location.href="./service.php"; 
    });
    $("#btn_profile").click(function(){
        location.href="./profile.php"; 
    });
    $("#btn_contact").click(function(){
        location.href="./contact.php"; 
    });
    $("#btn_create").click(function(){
        location.href="./create.php"; 
    });
    $("#btn_other").click(function(){
        location.href="./other.php"; 
    });
    $("#btn_calender").click(function(){
        location.href="./calender.php"; 
    });
	$("#codelike_other_area").click(function(){
        location.href="./index.php"; 
	});
});

function rotateLogo(){
    invalId = setInterval(function(){
        if(switchTurn == false){
            angleVal += 1;
        } else {
            angleVal -= 1;
        }
        $('#codelike_logo').rotate({angle:angleVal}); 
    }, 50);
}
var timer = false;
var menu_hide_flg = false;
$(window).resize(function() {
	if (timer !== false) {
		clearTimeout(timer);
	}
	timer = setTimeout(function() {
		// リサイズした後の処理
		var w = $(window).width();
		if(w < 855){
			// メニューを消す	
			$("#menu_area").hide();
			menu_hide_flg = true;
		} else if(menu_hide_flg == true){
			// メニュー表示	
			$("#menu_area").show();
			menu_hide_flg = false;
		}
		console.log(w);
	}, 200);
});
