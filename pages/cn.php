<?php head(); ?>
<nav><div class="orange nav-wrapper"><a href="/" class="white-text brand-logo center">PUBG SERVERS PING <small class="hoverable version">v3</small></a><div style="background-color: rgba(0,0,0,0.2); color: #fff; margin-left: 15px" class="chip"><img src="/images/avatar.jpg" alt=":)">Disquse</div></div></nav>
<div class="container row">
	<br><div class="col s12 m10 l10 offset-m1 offset-l1">
        <div class="card-panel" style="padding: 18px;">
			<center><b>This site was created for <a href="http://twitch.tv/beastqt">BeastQT</a>. He is an awesome Russian streamer!</b></center><br><div style="margin-bottom: 10px" class="divider"></div>
			<center>
				<a style="background-color: rgba(0,0,0,0.05)" onclick="selectAll()" class="topbutton waves-effect waves-orange btn-flat">选择所有</a>
				<a style="background-color: rgba(0,0,0,0.05)" onclick="unselectAll()" class="topbutton waves-effect waves-orange btn-flat">取消选择</a>
				<a style="background-color: rgba(0,0,0,0.05)" onclick="clearAllLatency()" class="topbutton waves-effect waves-orange btn-flat">清除所有</a>
				<a style="background-color: rgba(0,0,0,0.05)" class="topbutton dropdown-button btn-flat" data-activates="dropdown">地区</a>
				<ul id="dropdown" class="dropdown-content">
					<li><a onclick="selectAmerica()">美国</a></li>
					<li><a onclick="selectEurope()">欧洲</a></li>
					<li><a onclick="selectAsia()">亚洲</a></li>
				</ul>
				<a style="background-color: rgba(0,0,0,0.05)" onclick="saveSettings()" class="topbutton waves-effect waves-orange btn-flat">保存</a>
			</center>
			<table id="grid" class="highlight striped">
				<thead>
					<tr>
						<th style="width:20px" data-type="string">检查?</th>
						<th style="width:250px" data-type="string">服务器:</th>
						<th style="width:300px" data-type="number">延迟:</th>
						<th data-type="number">平均:</th>
						<th style="width:20px" data-type="number"></th>
					</tr>
				</thead>
				<tbody>	
					<tr>
						<td><input type="checkbox" id="ch_us-east-1" checked /><label style="top: 4px; left: 16px" for="ch_us-east-1"></label></td>
						<td>美国东部(弗吉尼亚州)</td>
						<td class="latency" id="us-east-1" endpoint="http://dynamodb.us-east-1.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(0)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(0)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
					    <td><input type="checkbox" id="ch_us-east-2" checked /><label style="top: 4px; left: 16px" for="ch_us-east-2"></label></td>
						<td>美国东部(俄亥俄州)</td>
						<td class="latency" id="us-east-2" endpoint="http://dynamodb.us-east-2.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(1)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(1)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" id="ch_us-west-1" checked /><label style="top: 4px; left: 16px" for="ch_us-west-1"></label></td>
						<td>美国西部(加州)</td>
						<td class="latency" id="us-west-1" endpoint="http://dynamodb.us-west-1.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(2)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(2)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" id="ch_us-west-2" checked /><label style="top: 4px; left: 16px" for="ch_us-west-2"></label></td>
						<td>美国西部(俄勒冈州)</td>
						<td class="latency" id="us-west-2" endpoint="http://dynamodb.us-west-2.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(3)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(3)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" id="ch_ca-central-1" checked /><label style="top: 4px; left: 16px" for="ch_ca-central-1"></label></td>
						<td>加拿大(中部)</td>
						<td class="latency" id="ca-central-1" endpoint="http://dynamodb.ca-central-1.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(4)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(4)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" id="ch_eu-west-1" checked /><label style="top: 4px; left: 16px" for="ch_eu-west-1"></label></td>
						<td>欧洲(爱尔兰)</td>
						<td class="latency" id="eu-west-1" endpoint="http://dynamodb.eu-west-1.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(5)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(5)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" id="ch_eu-west-2" checked /><label style="top: 4px; left: 16px" for="ch_eu-west-2"></label></td>
						<td>欧洲(伦敦)</td>
						<td class="latency" id="eu-west-2" endpoint="http://dynamodb.eu-west-2.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(6)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(6)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" id="ch_eu-central-1" checked /><label style="top: 4px; left: 16px" for="ch_eu-central-1"></label></td>
						<td>欧洲(法兰克福)</td>
						<td class="latency" id="eu-central-1" endpoint="http://dynamodb.eu-central-1.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(7)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(7)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" id="ch_ap-south-1" checked /><label style="top: 4px; left: 16px" for="ch_ap-south-1"></label></td>
						<td>亚太地区(孟买)</td>
						<td class="latency" id="ap-south-1" endpoint="http://dynamodb.ap-south-1.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(8)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(8)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" id="ch_ap-northeast-2" checked /><label style="top: 4px; left: 16px" for="ch_ap-northeast-2"></label></td>
						<td>亚太地区(首尔)</td>
						<td class="latency" id="ap-northeast-2" endpoint="http://dynamodb.ap-northeast-2.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(9)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(9)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" id="ch_ap-southeast-1" checked /><label style="top: 4px; left: 16px" for="ch_ap-southeast-1"></label></td>
						<td>亚太地区(新加坡)</td>
						<td class="latency" id="ap-southeast-1" endpoint="http://dynamodb.ap-southeast-1.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(10)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(10)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" id="ch_ap-southeast-2" checked /><label style="top: 4px; left: 16px" for="ch_ap-southeast-2"></label></td>
						<td>亚太地区(悉尼)</td>
						<td class="latency" id="ap-southeast-2" endpoint="http://dynamodb.ap-southeast-2.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(11)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(11)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" id="ch_ap-northeast-1" checked /><label style="top: 4px; left: 16px" for="ch_ap-northeast-1"></label></td>
						<td>亚太地区(东京)</td>
						<td class="latency" id="ap-northeast-1" endpoint="http://dynamodb.ap-northeast-1.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(12)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(12)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" id="ch_sa-east-1" checked /><label style="top: 4px; left: 16px" for="ch_sa-east-1"></label></td>
						<td>南美洲(圣保罗)</td>
						<td class="latency" id="sa-east-1" endpoint="http://dynamodb.sa-east-1.amazonaws.com/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(13)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(13)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" id="ch_cn-north-1" checked /><label style="top: 4px; left: 16px" for="ch_cn-north-1"></label></td>
						<td>中国(北京)</td>
						<td class="latency" id="cn-north-1" endpoint="http://dynamodb.cn-north-1.amazonaws.com.cn/"></td>
						<td></td>
						<td><a onclick="checkButtonClicked(14)" class="waves-effect waves-orange btn-flat actionbutton">检查</a><a onclick="clearLatency(14)" class="waves-effect waves-orange btn-flat actionbutton">清除</a></td>
					</tr>
				</tbody>
			</table>
			<div class="divider"></div><div id="imageCell"></div><br>
			<center>
				<a class="orange waves-effect waves-light btn tooltipped pulse" data-position="top" data-delay="50" data-tooltip="Measure your ping" type="submit" id="pingbutton" onclick="Materialize.toast('Checking your ping!', 3500)">测试</a>
				<a class="orange waves-effect waves-light btn tooltipped" href="#modalinfo" data-position="top" data-delay="50" data-tooltip="Read F.A.Q.">帮助</a>
				<a class="orange waves-effect waves-light btn tooltipped" href="#modalservers" data-position="top" data-delay="50" data-tooltip="List of all AWS servers">列表</a>
				<a class='dropdown-button orange waves-effect waves-light btn tooltipped' data-position="top" data-delay="50" data-tooltip="Change language" href='#' data-activates='langdropdown'>语言</a>
			</center>
			
			<ul id='langdropdown' class='dropdown-content'>
				<li><a href="/en">English</a></li>
                <li class="divider"></li>
				<li><a href="/ru">Русский</a></li>
				<li class="divider"></li>
				<li><a href="/es">Español</a></li>
				<li class="divider"></li>
				<li><a href="/fr">Français</a></li>
                <li class="divider"></li>
                <li><a href="/vi">Vietnamese</a></li>
			</ul>
  
			<div id="modalinfo" class="modal modal-fixed-footer">
				<div class="modal-content">
					<h4>帮助</h4><div class="divider"></div>
					<br>
					<b>对不起我的英语不好!如果你有任何想法如何改善这个网站 - 使用下面的表格!只有俄语和英语!</b>
					<div class="row">
						<div id="feedbackdiv" class="input-field col s9">	
							<textarea id="feedbackarea" class="materialize-textarea" length="500"></textarea>
							<label style="top: 4px; left: 16px" for="feedbackarea">Text...</label>
						</div>
						<div class="col s3"><a onclick="sendfeedback();" style="height: 100px; padding-top: 23%;" class="waves-effect waves-orange btn-flat">发送</a></div>
					</div>
					<p><b>源码</b> - 你可以在 <a href="https://github.com/Disquse/PUBGServersPing">GitHub</a>查看网站代码. 在使用之前,阅读许可证!随意贡献,报告问题和其他!</p>
					<p><b>我延迟(Ping)很低,但是有延迟卡顿(lagging)</b> - PUBG服务器的主要问题不是延迟. 游戏服务器刚刚超载,这就是为什么你卡顿(lagging). 您可以尝试在其他服务器上游玩. Big ping is much smaller problem that overloaded servers. 我们无法检查服务器负载...</p>
					<p><b>为什么?</b> - 真的很难检查你的延迟到PUBG服务器.你不能直接从游戏中检查它.</p>
					<p><b>这是如何工作的?</b> - 该站点向PUBG使用的所有AWS服务器发送Http请求.这是客户端请求,因此延迟应该是正确的.</p>
					<p><b>排序?</b> - 点击列标题进行排序. Ping测试后再使用.</p>
					<p><b>这是谁的?</b> - 来自PUBG玩家, Banda 和 rabotyag <i><3</i></p>
					<p><b>如何与你联系?</b> - 您可以在我的主站点: <a href="http://disquse.ru">disquse.ru</a></p>
					<p><b>感谢:</b><br><a href="https://github.com/nino6454">nino6454</a> 翻译西班牙语</p>
					<p><a href="https://github.com/Cethiel">Cethiel</a> 翻译法语</p>
					<p><a href="https://github.com/ngocnh">NgocNH</a> 翻译越南语</p>
					<p><a href="https://github.com/FastChen">FastChen</a> 翻译简体中文</p>
				</div>
				<div class="modal-footer">
					<a class="modal-action modal-close waves-effect waves-orange btn-flat">关闭</a>
				</div>
			</div>
			<div id="modalservers" class="modal modal-fixed-footer">
				<div class="modal-content">
					<h4>所有AWS服务器列表</h4><div class="divider"></div>
					AWS(亚马逊网络服务) - 该公司提供PUBG服务器.并不是所有的游戏都使用它,但是有完整的服务器IP列表.也许这个信息可能对你有用:<br><br>
					
					<?php echo(file_get_contents("pages/servers.html")); ?>
				</div>
				<div class="modal-footer">
					<a class="modal-action modal-close waves-effect waves-orange btn-flat">关闭</a>
				</div>
			</div>
		</div>
	</div>
</div>			
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script type="text/javascript">
	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}
	
	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}  
	$(document).ready(function() {
		$("#pingbutton").click(pingButtonClicked);
		if (getURLParameter("run")) {
			$("#pingbutton").click();
		}
		
		$('.modal').modal();
		$("body").css("display", "none");
		$("body").fadeIn(500);
		$("a.transition").click(function(event){
			event.preventDefault();
			linkLocation = this.href;
			$("body").fadeOut(500, redirectPage);
		});
		function redirectPage() {
			window.location = linkLocation;
		}
		
		loadSettings();		
	});	
	
	$(window).on('load', function () {
		var $preloader = $('#preloader'),
		$spinner = $preloader.find('.spinner');
		$spinner.delay(700).fadeOut('slow');
		$preloader.delay(1000).fadeOut('slow');
	});	
	
	function disablePingButton() {
		$(".topbutton").attr("disabled", "disabled");
		$(".actionbutton").attr("disabled", "disabled");
		$("#pingbutton").attr("disabled", "disabled");
	};
	function enablePingButton() {
		$("#pingbutton").removeAttr("disabled");
		$(".topbutton").removeAttr("disabled");
		$(".actionbutton").removeAttr("disabled");
		Materialize.toast('Completed!', 2000);
	};
	
	$('th').click(function(){
		var table = $(this).parents('table').eq(0)
		var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
		this.asc = !this.asc
		if (!this.asc){rows = rows.reverse()}
		for (var i = 0; i < rows.length; i++){table.append(rows[i])}
	})
	function comparer(index) {
		return function(a, b) {
			var valA = getCellValue(a, index), valB = getCellValue(b, index)
			if ( valA == "" ) { valA = 9999 }
			if ( valB == "" ) { valB = 9999 }
			return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB)
		}
	}
	function getCellValue(row, index){ return $(row).children('td').eq(index).text() }	
	function getURLParameter(name) {
		let regex = new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)');
		let matches = regex.exec(location.search);
		if (matches == null) {
			return null;
		}
		let val = matches[1];
		let value = val.replace(/\+/g, '%20');
		return decodeURIComponent(value);
	}
	function pingButtonClicked() {
		disablePingButton();
		let latencyBoxes = $(".latency").toArray();
		latencyBoxes.reverse();
		doNextBox(latencyBoxes);
	}
	function checkButtonClicked(index) {
		disablePingButton();
		let latencyBoxes = $(".latency").toArray();
		let latencyBox = [latencyBoxes[index]];
		let region = latencyBoxes[index].id;
		document.getElementById('ch_'+region).checked = true;
		doNextBox(latencyBox);
	}	
	
	function clearLatency(index) {
		let latencyBoxes = $(".latency").toArray();
		let box = latencyBoxes[index];
		$(box).closest("td").next().html('');
		$(box).html('');
	}	
	
	function clearAllLatency() {
		let boxes = $(".latency").toArray();
		boxes.forEach(function(box, index, array) {
			$(box).closest("td").next().html('');
			$(box).html('');
		});
	}		
	
	function selectAll() {
		let boxes = $(".latency").toArray();
		boxes.forEach(function(box, index, array) {
			let boxid = box.id;
			document.getElementById('ch_'+boxid).checked = true;
		});
	}
	
	function unselectAll() {
		let boxes = $(".latency").toArray();
		boxes.forEach(function(box, index, array) {
			let boxid = box.id;
			document.getElementById('ch_'+boxid).checked = false;
		});
	}
	
	function selectAmerica() {
		unselectAll();
		let boxes = $(".latency").toArray();
		document.getElementById('ch_us-east-1').checked = true;
		document.getElementById('ch_us-east-2').checked = true;
		document.getElementById('ch_us-west-1').checked = true;
		document.getElementById('ch_us-west-2').checked = true;
		document.getElementById('ch_ca-central-1').checked = true;
		document.getElementById('ch_sa-east-1').checked = true;
	}
	
	function selectEurope() {
		unselectAll();
		let boxes = $(".latency").toArray();
		document.getElementById('ch_eu-west-1').checked = true;
		document.getElementById('ch_eu-west-2').checked = true;
		document.getElementById('ch_eu-central-1').checked = true;
	}
	
	function selectAsia() {
		unselectAll();
		let boxes = $(".latency").toArray();
		document.getElementById('ch_ap-south-1').checked = true;
		document.getElementById('ch_ap-northeast-2').checked = true;
		document.getElementById('ch_ap-southeast-1').checked = true;
		document.getElementById('ch_ap-southeast-2').checked = true;
		document.getElementById('ch_ap-northeast-1').checked = true;
		document.getElementById('ch_cn-north-1').checked = true;
	}	
	
	function doNextBox(latencyBoxes) {
		var box = latencyBoxes.pop();
		if (box) {
			var region = box.id;
			if ( document.getElementById('ch_'+region).checked ) {
				let endpoint = box.getAttribute("endpoint");
				ping_connect(box, region, endpoint, latencyBoxes);
			} else {
				doNextBox(latencyBoxes);
			}
		} else {
			enablePingButton();
		}
	}
	function pingQuality(ping) {
		let quality = ping/300;
		if ( quality > 1 ) {
			quality = 1;
		} else if ( quality < 0 ) {
			quality = 0;
		}
		return quality;
	}
	
	var imageCell = $("#imageCell")
	function ping_endpoint(endpoint, onComplete) {
		let randomString = Math.floor(Math.random()*0xFFFFFFFFFFFFFFFF).toString(36);
		let targetUrl = endpoint + "ping?x=" + randomString;
		imageCell.empty();
		imageCell.html("<img id='pingImage' style='display: none'>");
		let pingImage = $("#pingImage");
		pingImage.error(onComplete);
		pingImage.attr("src", targetUrl);
	}
	
	function currentTimeMillis() {
		return Date.now();
	}
	
	var results = [];
    function ping_connect(box, region, endpoint, latencyBoxes) {
		ping_endpoint(endpoint, function() {     
            var startTime = currentTimeMillis();
            ping_endpoint(endpoint, function() { 
                let endTime = currentTimeMillis();
                let elapsed = endTime - startTime;
                let resultText = elapsed.toString();
				let quality = pingQuality(elapsed);
				let red = parseInt(255*quality);
				let green = parseInt(255-red);
                $(box).append('<span style="color:rgba('+red+', '+green+', 0, 1.0); font-weight:900;">'+resultText+'</span> ');
				results.push(resultText)
				
				let numbers = $(box).text().split(' ').filter(parseFloat)
				let summary = numbers.reduce(function add(a, b) { return parseFloat(a) + parseFloat(b);},0)
				let avg = Math.round(summary/numbers.length)
				let avgquality = pingQuality(avg);
				let avgred = parseInt(255*avgquality);
				let avggreen = parseInt(255-avgred);
				$(box).closest("td").next().html('<span style="color:rgba('+avgred+', '+avggreen+', 0, 1.0); font-weight:900;">'+avg+'</span>')
                doNextBox(latencyBoxes);      
            });
        });
    }
	function sendfeedback() {
		let feedbacktext = document.getElementById('feedbackarea').value;
		if ( feedbacktext.trim() == "" ) {
			$( "#feedbackdiv" ).fadeOut( "slow", function() {
				document.getElementById('feedbackdiv').innerHTML = "<center><h5>Empty message? :(</center><br><br>";
				$( "#feedbackdiv" ).fadeIn("slow", function() {
					setTimeout(function() {
						$( "#feedbackdiv" ).fadeOut("slow", function() {
							document.getElementById('feedbackdiv').innerHTML = '<textarea id="feedbackarea" class="materialize-textarea" length="500"></textarea><label style="top: 4px; left: 16px" for="feedbackarea">Text...</label>';
							$( "#feedbackdiv" ).fadeIn("slow");
						});
					}, 1000);
				});
			});	
		} else {
			savefeedback(feedbacktext);
			$( "#feedbackdiv" ).fadeOut("slow", function() {
				document.getElementById('feedbackdiv').innerHTML = "<center><h5>Thanks!</h5>We're saved your feedback!</center><br>";
				$( "#feedbackdiv" ).fadeIn("slow", function() {
					setTimeout(function() {
						$( "#feedbackdiv" ).fadeOut( "slow", function() {
							document.getElementById('feedbackdiv').innerHTML = '<textarea id="feedbackarea" class="materialize-textarea" length="500"></textarea><label style="top: 4px; left: 16px" for="feedbackarea">Text...</label>';
							$( "#feedbackdiv" ).fadeIn("slow");
						});
					}, 1000);
				});
			});
		}
	}
	function savefeedback(feedback) {
		var data = new FormData();
		data.append("data" , feedback);
		var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
		xhr.open( 'post', 'sendfeedback', true );
		xhr.send(data);	
	}
	
	function saveSettings() {
		let boxes = $(".latency").toArray();
		boxes.forEach(function(box, index, array) {
			let boxid = box.id;
			setCookie('region'+index, document.getElementById('ch_'+boxid).checked, 30);
		});
		Materialize.toast('你的设置已保存', 2000);
	}
	
	function loadSettings() {
		let boxes = $(".latency").toArray();
		boxes.forEach(function(box, index, array) {
			let boxid = box.id;
			if ( getCookie('region'+index) == 'false' ) {
				document.getElementById('ch_'+boxid).checked = false;
			} else {
				document.getElementById('ch_'+boxid).checked = true;
			}
		});		 
	}
</script>
<?php foot(); ?>
